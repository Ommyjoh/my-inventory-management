<!-- table card-1 start -->
<div class="col-md-12 col-xl-4">
    <div class="card flat-card">
     <div class="row-table">
         <div class="small-box bg-success text-white">
             <div class="inner p-4">
                 <div class="d-flex justify-center justify-content-between">
                     <h2 class="text-white">{{ $mostStocks }}</h2>
                     <i class="feather icon-layers"></i>
                 </div>
                 <p class="fs-6">Most Stock Products</p>
             </div>
             <div class="bg-dark p-2">
                 <a href="{{ route('admin.listStocks') }}" class="small-box-footer text-white d-flex justify-center justify-content-between">
                     <div>
                         View all stock products 
                     </div>
                     <div>
                         <i class="fs-5 fas fa-arrow-circle-right"></i>
                     </div>
                 </a>
             </div>
         </div>
     </div>
    </div>
 </div>
 <!-- table card-1 end -->

    <!-- table card-2 start -->
    <div class="col-md-12 col-xl-4">
        <div class="card flat-card">
         <div class="row-table">
             <div class="small-box bg-warning text-white">
                 <div class="inner p-4">
                     <div class="d-flex justify-center justify-content-between">
                         <h2 class="text-white">{{ $lowStocks }}</h2>
                         <i class="feather icon-box"></i>
                     </div>
                     <p class="fs-6">Low Stock Products</p>
                 </div>
                 <div class="bg-dark p-2">
                     <a href="{{ route('admin.listStocks') }}" class="small-box-footer text-white d-flex justify-center justify-content-between">
                         <div>
                             View all stock products 
                         </div>
                         <div>
                             <i class="fs-5 fas fa-arrow-circle-right"></i>
                         </div>
                     </a>
                 </div>
             </div>
         </div>
        </div>
    </div>
     <!-- table card-2 end -->

     <!-- table card-3 start -->
    <div class="col-md-12 col-xl-4">
        <div class="card flat-card">
         <div class="row-table">
             <div class="small-box bg-danger text-white">
                 <div class="inner p-4">
                     <div class="d-flex justify-center justify-content-between">
                         <h2 class="text-white">{{ $outOfStock }}</h2>
                         <i class="feather icon-codepen"></i>
                     </div>
                     <p class="fs-6">Out of Stock Products</p>
                 </div>
                 <div class="bg-dark p-2">
                     <a href="{{ route('admin.listStocks') }}" class="small-box-footer text-white d-flex justify-center justify-content-between">
                         <div>
                             View all stock products 
                         </div>
                         <div>
                             <i class="fs-5 fas fa-arrow-circle-right"></i>
                         </div>
                     </a>
                 </div>
             </div>
         </div>
        </div>
    </div>
    <!-- table card-3 end -->

    <!-- table card-4 start -->
    <div class="col-md-12 col-xl-4">
        <div class="card flat-card">
            <div class="row-table">
                <div class="small-box bg-secondary text-white">
                    <div class="inner p-4">
                        <div class="d-flex justify-center justify-content-between">
                            <h2 class="text-white">{{ $sumSales }}/=</h2>
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <p class="fs-6">Total Sales</p>
                    </div>
                    <div class="bg-dark p-2">
                        <a href="{{ route('admin.listInvoices')}}" class="small-box-footer text-white d-flex justify-center justify-content-between">
                            <div>
                                View all sales 
                            </div>
                            <div>
                                <i class="fs-5 fas fa-arrow-circle-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
           </div>
    </div>
     <!-- table card-4 end -->

      <!-- table card-5 start -->
    <div class="col-md-12 col-xl-4">
        <div class="card flat-card">
            <div class="row-table">
                <div class="small-box bg-secondary text-white">
                    <div class="inner p-4">
                        <div class="d-flex justify-center justify-content-between">
                            <h2 class="text-white">{{ $sumPurchases }}/=</h2>
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <p class="fs-6">Total Purchases</p>
                    </div>
                    <div class="bg-dark p-2">
                        <a href="{{ route('admin.listPurchases')}}" class="small-box-footer text-white d-flex justify-center justify-content-between">
                            <div>
                                View all purchases 
                            </div>
                            <div>
                                <i class="fs-5 fas fa-arrow-circle-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
           </div>
    </div>
     <!-- table card-5 end -->

     <!-- table card-6 start -->
    @if ($sumSales >= $sumPurchases)
        <div class="col-md-12 col-xl-4">
            <div class="card flat-card">
            <div class="row-table">
                <div class="small-box bg-success text-white">
                    <div class="inner p-4">
                        <div class="d-flex justify-center justify-content-between">
                            <h2 class="text-white">{{ $sumSales - $sumPurchases }}/=</h2>
                            <i class="fas fa fa-arrow-up"></i>
                        </div>
                        <p class="fs-6">Total Profit</p>
                    </div>
                    <div class="bg-dark p-2">
                        <a href="{{ route('admin.listInvoices') }}" class="small-box-footer text-white d-flex justify-center justify-content-between">
                            <div>
                                View all invoices 
                            </div>
                            <div>
                                <i class="fs-5 fas fa-arrow-circle-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    @else
        <div class="col-md-12 col-xl-4">
            <div class="card flat-card">
            <div class="row-table">
                <div class="small-box bg-danger text-white">
                    <div class="inner p-4">
                        <div class="d-flex justify-center justify-content-between">
                            <h2 class="text-white">{{ $sumPurchases - $sumSales }}/=</h2>
                            <i class="fas fa-arrow-down"></i>
                        </div>
                        <p class="fs-6">Total Loss</p>
                    </div>
                    <div class="bg-dark p-2">
                        <a href="{{ route('admin.listInvoices') }}" class="small-box-footer text-white d-flex justify-center justify-content-between">
                            <div>
                                View all invoices 
                            </div>
                            <div>
                                <i class="fs-5 fas fa-arrow-circle-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    @endif
    <!-- table card-6 end -->