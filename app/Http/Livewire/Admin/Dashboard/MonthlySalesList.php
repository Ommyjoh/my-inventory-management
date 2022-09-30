<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\Invoice;
use Livewire\Component;

class MonthlySalesList extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.monthly-sales-list', 
        [
            'sales' => Invoice::whereBetween('updated_at', [now()->firstOfMonth(), now()])
                        ->where('status', 'APPROVED')
                        ->orderBy('totalPrice', 'DESC')
                        ->limit(5)
                        ->get()
        ]);
    }
}
