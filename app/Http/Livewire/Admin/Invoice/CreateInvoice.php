<?php

namespace App\Http\Livewire\Admin\Invoice;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Supplier;
use Livewire\Component;

class CreateInvoice extends Component
{
    public $invNumber, $supplierId, $categoryId, $productId, $customerId, $stock;
    public $state = [];
    public $custName, $supName, $catName, $prodName;
    public $qty, $unitPrice, $discPrice;

    public function approveInvoice(){

        $customer = Customer::find($this->state['custNo']);
        $supplier= Supplier::find($this->state['supNo']);
        $category= Category::find($this->state['catNo']);
        $product= Product::find($this->state['prodNo']);

        $this->custName = $customer->name;
        $this->supName = $supplier->name;
        $this->catName = $category->name;
        $this->prodName = $product->name;

    }

    public function getSupplierId($id){
        $this->supplierId = $id;
    }

    public function getCategoryId($id){
        $this->categoryId = $id;
    }

    public function getProductId($id){
        $this->productId = $id;
    }

    public function getCustomerId($id){
        $this->invNumber = "T-".rand(1000, 9999)."-".rand(10, 99)."-". rand(100, 999);
        $this->customerId = $id;
    }

    public function storeInvoice(){

        $initialPrice = intval($this->qty) * intval($this->unitPrice);
        $totalPrice = $initialPrice - intval($this->discPrice);
        $status = "PENDING";

        Invoice::create([
            'customer_id' => $this->state['custNo'],
            'supplier_id' => $this->state['supNo'],
            'category_id' => $this->state['catNo'],
            'product_id' => $this->state['prodNo'],
            'iNo' => $this->invNumber,
            'qty' => $this->qty,
            'discount' => $this->discPrice,
            'totalPrice' => $totalPrice,
            'status' => $status
        ]);

        $this->dispatchBrowserEvent('success', ['message'=>'Invoice Added Successfully!']);
        $this->qty = "";
        $this->discPrice = 0;
        $this->unitPrice = "";
        $this->state['supNo']= "";
        $this->state['catNo'] = "";
        $this->state['prodNo'] = "";
        $this->stock = 0;

    }

    public function render()
    {

        $stockNo = Stock::where('supplier_id', $this->supplierId)
                ->where('category_id', $this->categoryId)
                ->where('product_id', $this->productId)
                ->get()->toArray();

        if(empty($stockNo)){
            $this->stock = 0;
        } else {
            $this->stock = $stockNo[0]['stock'];
        }

        $initialPrice = intval($this->qty) * intval($this->unitPrice);
        $totalPrice = $initialPrice - intval($this->discPrice);

        return view('livewire.admin.invoice.create-invoice',
        [
            'customers' => Customer::latest()->get(),
            'suppliers' => Supplier::latest()->get(),
            'products' => Product::where('supplier_id', $this->supplierId)->latest()->get(),
            'categories' => Category::latest()->get(),
            'initialPrice' => $initialPrice,
            'totalPrice' => $totalPrice
        ]);
    }
}
