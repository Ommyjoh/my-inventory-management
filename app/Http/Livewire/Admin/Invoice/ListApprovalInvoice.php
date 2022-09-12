<?php

namespace App\Http\Livewire\Admin\Invoice;

use App\Models\Stock;
use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;

class ListApprovalInvoice extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $listeners = ['approve' => 'approveInvoice', 'deleted' => 'deleteInvoice'];
    public $approveInvoice;
    public $deleteId;
    public $status;

    public function approveInvoiceAlert(Invoice $invoice){

        $this->approveInvoice = $invoice;
        $this->dispatchBrowserEvent('approvalConfirmation');
    }

    public function approveInvoice(){

        $stock = Stock::
                whereSupplierId($this->approveInvoice->supplier_id)
                ->whereCategoryId($this->approveInvoice->category_id)
                ->whereProductId($this->approveInvoice->product_id)
                ->get()->toArray();

            if ($this->approveInvoice->qty > $stock[0]['stock']) {

                $this->dispatchBrowserEvent('failed', ['message'=>'Insufficient stock available!']);

            } else {

                $this->approveInvoice->status = "APPROVED";
                $this->approveInvoice->save();

                $qty = $this->approveInvoice->qty + $stock[0]['out_qty'];
                $stockQty = $stock[0]['stock'] - $this->approveInvoice->qty ;

                $updateStock = Stock::find($stock[0]['id']);

                $updateStock->update([
                    'out_qty' => $qty,
                    'stock' => $stockQty,
                ]);

                $this->dispatchBrowserEvent('approvalSuccessModal', ['message'=>'Invoice Approved Successful!']);
            }
    }

    public function deleteAlert($id){

        $this->deleteId = $id;
        $this->dispatchBrowserEvent('deleteConfirmation');
    }

    public function deleteInvoice(){

        $invoice  = Invoice::findOrFail($this->deleteId);
        
        $invoice->delete();
        $this->dispatchBrowserEvent('deletedSuccessModal', ['message' => 'Invoice Deleted Successfully!']);
    }

    
    public function render()
    {
        $invoices = Invoice::where('status','PENDING')
                    ->latest()
                    ->paginate(20);

        $invoicesCount = Invoice::where('status','PENDING')
                        ->count();

        return view('livewire.admin.invoice.list-approval-invoice', 
        [
            'invoices' => $invoices,
            'invoicesCount' => $invoicesCount 
        ]);
    }
}
