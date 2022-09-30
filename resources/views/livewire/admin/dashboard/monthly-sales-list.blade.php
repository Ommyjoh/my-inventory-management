<div class="card flat-card">
    <div class="py-2 px-4">
        <h5><i style="color: gray" class="nav-icon fa fa-history "></i> Top Monthly Sales List</h5>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Date</th>
                <th>Product Name</th>
                <th>Supplier</th>
                <th>Category</th>
                <th>Qty</th>
                <th>Total Price</th>
            </tr>
        </thead>

        <tbody>
        </tbody>
            @forelse ($sales as $sale)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $sale->updated_at }}</td>
                    <td>{{ $sale->product->name }}</td>
                    <td>{{ $sale->supplier->name }}</td>
                    <td>{{ $sale->category->name }}</td>
                    <td>{{ $sale->qty }}</td>
                    <td>{{ $sale->totalPrice }}</td>
                </tr>
            @empty
                
                <tr>
                    <td colspan="7" class="text-center">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <img style="width: 200px" src="{{ asset('backend/dist/assets/images/notfound.png') }}" alt="">
                            <span class="mt-2">No Purchase This Month!</span>
                        </div>
                    </td>
                </tr>

            @endforelse
    </table>
</div>