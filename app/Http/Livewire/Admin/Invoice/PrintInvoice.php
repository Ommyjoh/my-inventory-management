<?php

namespace App\Http\Livewire\Admin\Invoice;

use App\Models\Invoice;
use Livewire\Component;

class PrintInvoice extends Component
{
    public $invoice;

    public function mount(Invoice $invoice){
        $this->invoice = $invoice->toArray();
    }
    public function render()
    {
        dd($this->invoice);
        return view('livewire.admin.invoice.print-invoice');
    }
}
