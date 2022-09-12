<?php

namespace App\Http\Livewire\Admin\Invoice;

use App\Models\Invoice;
use Livewire\Component;

class PrintInvoice extends Component
{
    public $invoice, $customer_id, $invoice_id;

    public function mount(Invoice $invoice){
        $this->invoice = $invoice;
    }
    public function render()
    {
        // dd($this->invoice->id);
        return view('livewire.admin.invoice.print-invoice');
    }
}
