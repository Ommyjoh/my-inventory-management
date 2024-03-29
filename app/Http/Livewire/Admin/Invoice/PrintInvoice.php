<?php

namespace App\Http\Livewire\Admin\Invoice;

use App\Http\Controllers\MailController;
use Carbon\Carbon;
use App\Models\Invoice;
use Livewire\Component;
use App\Models\Customer;

class PrintInvoice extends Component
{
    public $invoice;

    public function mount(Invoice $invoice){
        $this->invoice = $invoice;
    }

    public function mailInvoice(){
        $todayDate = Carbon::now();
        $customer = Customer::find($this->invoice->customer_id);
        $invoices = Invoice::where('iNo', $this->invoice->iNo)
                    ->where('status', 'APPROVED')
                    ->get();

        $totalAmount = Invoice::where('iNo', $this->invoice->iNo)
                    ->where('status', 'APPROVED')
                    ->sum('totalPrice');

        $totalDisc = Invoice::where('iNo', $this->invoice->iNo)
                    ->where('status', 'APPROVED')
                    ->sum('discount');
        $invoice = $this->invoice;

        MailController::mailInvoice($invoice,$todayDate, $customer, $invoices, $totalAmount, $totalDisc);
        return redirect()->to('emails.mail-invoice');
    }
    public function render()
    {
        $todayDate = Carbon::now();
        $customer = Customer::find($this->invoice->customer_id);
        $invoices = Invoice::where('iNo', $this->invoice->iNo)
                    ->where('status', 'APPROVED')
                    ->get();

        $totalAmount = Invoice::where('iNo', $this->invoice->iNo)
                    ->where('status', 'APPROVED')
                    ->sum('totalPrice');

        $totalDisc = Invoice::where('iNo', $this->invoice->iNo)
                    ->where('status', 'APPROVED')
                    ->sum('discount');

        return view('livewire.admin.invoice.print-invoice',
        [
            'customer' => $customer,
            'todayDate' => $todayDate,
            'invoices' => $invoices,
            'totalAmount' => $totalAmount,
            'totalDisc' => $totalDisc
        ]);
    }
}
