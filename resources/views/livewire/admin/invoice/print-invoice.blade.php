<div>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdeys">
<div class="row bg-light">
  <div class="col-sm-12">
	  	<div class="panel panel-default invoice" id="invoice">
		  <div class="panel-body">
			<div class="invoice-ribbon"><div class="ribbon-inner">PAID</div></div>
		    <div class="row">

				<div class="col-sm-6 top-left">
					<img src="{{asset('backend/dist/assets/images/logo.png')}}" alt="" class="logo">
				</div>

				<div class="col-sm-6 top-right">
						<h3 class="marginright">INVOICE: {{ $invoice->iNo }}</h3>
						<span class="marginright">{{ $todayDate }}</span>
			    </div>

			</div>

			<hr>
			<div class="d-flex justify-content-between">

				<div class="col-xs-4 from">
					<p class="lead marginbottom">From : OMMYJOH & CO. LTD</p>
					<p>Street 23, Zakiwa</p>
					<p>Kinondoni, Dar es Salaam</p>
					<p>Phone: +255 717 810 599</p>
					<p>Email: emmanuel@ommyjoh.com</p>
				</div>

				<div class="col-xs-4 to">
					<p class="lead marginbottom">To: {{ $customer->name }}</p>
					<p>{{ $customer->address }}</p>
					<p>{{ '+255 '.substr($customer->telephone, 1,3). " " . substr($customer->telephone, 3,3). " " . substr($customer->telephone, 6) }}</p>
					<p>{{ $customer->email }}</p>
                    <p>{{ $todayDate }}</p>

			    </div>

			    <div class="col-xs-4 text-right payment-details">
					<p class="lead marginbottom payment-info">Payment details</p>
					<p>{{ $invoice->updated_at }}</p>
					<p>VAT: TZ 18% Total </p>
					<p>Total Amount: TZS {{ $totalAmount}}</p>
					<p>Account Name: {{ $customer->name }}</p>
			    </div>

			</div>

			<div class="row table-row">
				<table class="table table-striped">
			      <thead>
			        <tr>
			          <th class="text-center" style="width:5%">#</th>
			          <th style="width:50%">Product Name</th>
			          <th class="text-right" style="width:15%">Quantity</th>
			          <th class="text-right" style="width:15%">Discount</th>
			          <th class="text-right" style="width:15%">Total Price</th>
			        </tr>
			      </thead>
			      <tbody>
			        @foreach ($invoices as $invoice)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $invoice->product->name }}</td>
                        <td class="text-right">{{ $invoice->qty }}</td>
                        @if ( $invoice->discount )
                            <td class="text-right">TZS {{ $invoice->discount }}</td>
                        @else
                            <td class="text-right">0</td>
                        @endif
                        <td class="text-right">TZS {{ $invoice->totalPrice }}</td>
                      </tr>
                    @endforeach
			       </tbody>
			    </table>

			</div>

			<div class="m-2 mb-4 d-flex justify-content-between align-items-center">

				<div>
					<p></p>
				</div>
				<div class="col-xs-6 margintop">
					<div>{!! DNS2D::getBarcodeHTML('http://console.globalapp.co.tz/home', 'QRCODE',5,5) !!}</div><br />
				</div>
				<div class="col-xs-6 text-right pull-right invoice-total">
						<p>Subtotal :TZS {{ $totalAmount - ($totalAmount * 0.18) }}</p>
						<p>Discount :TZS {{ $totalDisc }} </p>
						<p>VAT (18%) :TZS {{ $totalAmount * 0.18 }} </p>
						<p>Total :TZS {{ $totalAmount}} </p>
				</div>
			</div>

		  </div>
		</div>
	</div>
</div>
</div>

<div class="d-flex justify-content-center mt-3">
    <button class="btn btn-success mr-1" id="invoice-print"><i class="fa fa-print"></i> Print Invoice</button>
    <button wire:click = "downloadInvoice" class="btn btn-danger ml-1"><i class="fa fa-envelope"></i> Mail Invoice</button>
</div>
</div>


@push('css')
    <style>
        body{margin-top:20px;
background:#eee;
}

/*Invoice*/
.invoice .top-left {
    font-size:65px;
	color:#3ba0ff;
}

.invoice .top-right {
	text-align:right;
	padding-right:20px;
}

.invoice .table-row {
	margin-left:-15px;
	margin-right:-15px;
	margin-top:25px;
}

.invoice .payment-info {
	font-weight:500;
}

.invoice .table-row .table>thead {
	border-top:1px solid #ddd;
}

.invoice .table-row .table>thead>tr>th {
	border-bottom:none;
}

.invoice .table>tbody>tr>td {
	padding:8px 20px;
}

.invoice .invoice-total {
	margin-right:-10px;
	font-size:16px;
}

.invoice .last-row {
	border-bottom:1px solid #ddd;
}

.invoice-ribbon {
	width:85px;
	height:88px;
	overflow:hidden;
	position:absolute;
	top:-1px;
	right:14px;
}

.ribbon-inner {
	text-align:center;
	-webkit-transform:rotate(45deg);
	-moz-transform:rotate(45deg);
	-ms-transform:rotate(45deg);
	-o-transform:rotate(45deg);
	position:relative;
	padding:7px 0;
	left:-5px;
	top:11px;
	width:120px;
	background-color:#66c591;
	font-size:15px;
	color:#fff;
}

.ribbon-inner:before,.ribbon-inner:after {
	content:"";
	position:absolute;
}

.ribbon-inner:before {
	left:0;
}

.ribbon-inner:after {
	right:0;
}

@media(max-width:575px) {
	.invoice .top-left,.invoice .top-right,.invoice .payment-details {
		text-align:center;
	}

	.invoice .from,.invoice .to,.invoice .payment-details {
		float:none;
		width:100%;
		text-align:center;
		margin-bottom:25px;
	}

	.invoice p.lead,.invoice .from p.lead,.invoice .to p.lead,.invoice .payment-details p.lead {
		font-size:22px;
	}

	.invoice .btn {
		margin-top:10px;
	}
}

@media print {
	.invoice {
		width:900px;
		height:800px;
	}
}
    </style>
@endpush