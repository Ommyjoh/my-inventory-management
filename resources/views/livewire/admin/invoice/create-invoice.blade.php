<div>
       
    <div class="card flat-card">
        <h4 class="text-center bg-primary text-white p-2">Fill Invoice</h4>
        <div class="col-lg-12">
            <form wire:submit.prevent = "storeInvoice" autocomplete="off">
                @csrf
                <div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="row col-lg-4">
                                <label for="Name" class="fw-bold">Invoice No</label>
                                <input value="{{ $invNumber }}" type="text" class="bg-dark text-white fw-bold form-control" readonly>
                            </div>

                            <div class="row col-lg-4">
                                <label for="Name" class="fw-bold">Customer Name</label>
                                <select wire:model='state.custNo' wire:change='getCustomerId($event.target.value)' class="form-select" aria-label="Default select example">
                                    <option value = "" selected>Choose customer..</option>
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="row col-lg-4">
                                <label for="Name" class="fw-bold">Supplier Name</label>
                                <select wire:model='state.supNo' wire:change='getSupplierId($event.target.value)' class="form-select" aria-label="Default select example">
                                    <option selected>Choose supplier..</option>
                                    @foreach ($suppliers as $supplier)
                                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">

                            <div class="row col-lg-4">
                                <label for="Name" class="fw-bold">Currently Stock</label>
                                @if ($stock == 0)
                                    <input value="{{ $stock }}" type="text" class="bg-danger text-white fw-bold form-control" readonly>
                                @else
                                    <input value="{{ $stock }}" type="text" class="bg-success text-white fw-bold form-control" readonly>
                                @endif
                            </div>

                            <div class="row col-lg-4">
                                <label for="Name" class="fw-bold">Category Name</label>
                                <select wire:model='state.catNo' wire:change='getCategoryId($event.target.value)' class="form-select" aria-label="Default select example">
                                    <option selected>Choose category..</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="row col-lg-4">
                                <label for="Name" class="fw-bold">Product Name</label>
                                <select wire:model='state.prodNo' wire:change='getProductId($event.target.value)' class="form-select" aria-label="Default select example">
                                    <option selected>Choose product..</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>



                        @if ($stock == 0 || $customerId == "")
                            <div class="mt-4">
                                <button disabled wire:click='approveInvoice' type="button" class="btn btn-info mr-2" data-bs-dismiss="modal"><i class="fa fa-plus mr-1"></i><a href="#" class="text-white">Prove invoice</a></button>
                            </div>
                        @else
                            <div class="mt-4">
                                <button wire:click='approveInvoice' type="button" class="btn btn-info mr-2" data-bs-dismiss="modal"><i class="fa fa-plus mr-1"></i><a href="#" class="text-white">Prove invoice</a></button>
                            </div>
                        @endif

                        <table class="table table-bordered mt-2">

                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Supplier</th>
                                    <th>Category</th>
                                    <th>Product</th>
                                    <th>Qty</th>
                                    <th>Unit Price</th>
                                    <th>Initial price</th>
                                </tr>
                            </thead>
                
                            <tbody>
                               <tr>
                                    <td>{{ $custName }}</td>
                                    <td>{{ $supName }}</td>
                                    <td>{{ $catName }}</td>
                                    <td>{{ $prodName }}</td>
                                    @if ($qty>$stock)
                                        <td>
                                            <input wire:model="qty" class="form-control is-invalid" type="number">
                                            <span class="text-center text-danger">Out of Stock!</span>
                                        </td>
                                    @else
                                        <td><input wire:model="qty" class="form-control" type="number"></td>
                                    @endif
                                    <td><input wire:model="unitPrice" class="form-control" type="number"></td>
                                    <td><input value="{{ $initialPrice }}" class="bg-dark text-white fw-bold form-control" type="number" readonly></td>
                                </tr>

                                <tr>
                                    <td colspan="6" class="text-end fw-bold fs-5">Discount</td>
                                    <td><input wire:model="discPrice" class="form-control" type="number"></td>
                                </tr>

                                <tr>
                                    <td colspan="6" class="text-end fw-bold fs-5">Total Price</td>
                                    <td><input value="{{ $totalPrice }}" class="bg-dark text-white fw-bold form-control" type="number" readonly></td>
                                </tr>
                
                            </tbody>
                
                        </table>

                        @if ($stock == 0 || $customerId == "" || $qty == "" || $unitPrice == "" || $qty > $stock)
                            <div class="mt-2">
                                <button disabled id="submit" type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart  mr-1"></i>Store Invoice</button>
                            </div>
                        @else
                            <div class="mt-2">
                                <button id="submit" type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart  mr-1"></i>Store Invoice</button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    
                </div>

            </form>
        </div>
    </div>

</div>


@push('js')

    <script>
        $(document).ready(function(){
            toastr.options = {
            "positionClass": "toast-bottom-right",
            "closeButton": true,
            "showDuration": "800",
            "timeOut": "10000",
            "progressBar": true,
            }
        });

        window.addEventListener('success', event =>{
            toastr.success(event.detail.message, 'Success')
        })
    </script>

@endpush