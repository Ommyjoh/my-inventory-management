<?php

namespace App\Http\Livewire\Admin\Invoice;

use App\Models\Invoice;
use Livewire\Component;

class ListInvoice extends Component
{
    public function render()
    {
        $invoices = Invoice::groupBy('iNo')
                    ->where('status', 'APPROVED')
                    ->selectRaw('*, sum(totalPrice) as totalPrice')
                    ->selectRaw('sum(discount) as discount')
                    ->latest()
                    ->get();

        $invoiceCount = Invoice::all()
                        ->where('status', 'APPROVED')
                        ->groupBy('iNo')
                        ->count();
                    

        return view('livewire.admin.invoice.list-invoice', 
        [
            'invoices' => $invoices,
            'invoiceCount' => $invoiceCount
        ]);
    }
}
