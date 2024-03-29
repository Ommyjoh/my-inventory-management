<div>

     <!-- [ breadcrumb ] start -->
     <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Manage Invoices</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.listInvoices') }}">Manage Invoice / All Invoices</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <div class="card flat-card">
        <div class="d-flex justify-content-end m-2">
                <a href="{{ route('admin.createInvoice') }}"><button style="border-radius: 20px" class="btn btn-primary"> <i class="nav-icon fa fa-plus-circle"></i> Add Invoice</button></a>
        </div>
    
        <div class="d-flex justify-content-between m-2 align-items-center">
            <div class="px-2">
                <h5>Invoice All Data</h5>
            </div>

            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <h5 class="pr-4">Total of {{ $invoiceCount }} Invoices</h5>
            </div>
        </div>

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Invoice No</th>
                    <th>Customer Name</th>
                    <th>Total Discount</th>
                    <th>Total Amount</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                    @forelse ($invoices as $invoice)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $invoice->iNo }}</td>
                            <td>{{ $invoice->customer->name }}</td>
                            @if ($invoice->discount > 0)
                                <td>{{ $invoice->discount }}</td>
                            @else
                                <td>-</td>
                            @endif
                            <td>{{ $invoice->totalPrice }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.printInvoice', $invoice) }}"> <i class="fa fa-print fs-6 text-primary pr-2" title="print"></i> </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img style="width: 200px" src="{{ asset('backend/dist/assets/images/notfound.png') }}" alt="">
                                    <span class="mt-2">No invoice at a time!</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
            </tbody>

        </table>
    </div>

</div>
