{{-- @php
	dd(cartTotal());
@endphp --}}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Site Title -->
	<title>Invoice</title>
	<!-- All CSS Style -->
	<style>
		/* Reset CSS */
		* {
		-webkit-print-color-adjust: exact !important;
		color-adjust: exact !important;
		margin: 0;
		padding: 0;
		-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
				box-sizing: border-box;
		}

		html {
		font-size: 10px;
		}

		@media print {
		html {
			font-size: 8px;
		}
		}

		body {
		font-size: 1.6rem;
		font-family: sans-serif;
		font-weight: 400;
		}

		@page {
		margin-left: 0px;
		margin-right: 0px;
		margin-top: 0px;
		margin-bottom: 0px;
		margin: 0;
		-webkit-print-color-adjust: exact !important;
		color-adjust: exact !important;
		}

		img {
		max-width: 100%;
		-o-object-fit: cover;
			object-fit: cover;
		}

		a {
		display: inline-block;
		text-decoration: none;
		}

		ul {
		list-style-type: none;
		}

		address {
		font-style: normal;
		}

		.col-6 {
		width: 50%;
		}

		.text-left {
		text-align: left;
		}

		.text-center {
		text-align: center;
		}

		.text-right {
		text-align: right;
		}

		.pl-3 {
		padding-left: 3rem;
		}

		/* Common Style */
		.d-flex, .invoice__header, .invoice__header__logo {
		display: -webkit-box;
		display: -webkit-flex;
		display: -moz-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-flex-wrap: wrap;
			-ms-flex-wrap: wrap;
				flex-wrap: wrap;
		}

		body, .invoice__header__title, .invoice__table--destination td, .invoice__table--details td, .invoice__table--main td {
		color: #3a3a3a;
		}

		.invoice__header__id, .invoice__table, .invoice__table--destination th, .invoice__table--details th, .invoice__sub-title {
		color: #808080;
		}

		.invoice {
		padding: 1rem 3rem;
		max-width: 100rem;
		margin: 0 auto;
		}

		.invoice__header {
		-webkit-box-align: start;
		-webkit-align-items: flex-start;
			-moz-box-align: start;
			-ms-flex-align: start;
				align-items: flex-start;
		}

		.invoice__header__logo {
		-webkit-box-align: center;
		-webkit-align-items: center;
			-moz-box-align: center;
			-ms-flex-align: center;
				align-items: center;
		max-width: 15rem;
		}

		.invoice__header__logo__image {
		width: 100%;
		height: 100%;
		}

		.invoice__header__title {
		font-size: 5rem;
		font-weight: 500;
		}

		.invoice__header__id {
		font-size: 2.5rem;
		text-align: right;
		}

		.invoice__receiver {
		font-size: 2rem;
		font-weight: 600;
		margin: 2.5rem 0;
		}

		.invoice__table {
		width: 100%;
		border-collapse: collapse;
		}

		.invoice__table.col-6 {
		width: 50%;
		}

		.invoice__table--destination th {
		font-size: 1.8rem;
		font-weight: 500;
		}

		.invoice__table--destination td {
		padding: 12px 0 0;
		font-weight: 700;
		}

		.invoice__table--details {
		margin-top: 8rem;
		}

		.invoice__table--details td, .invoice__table--details th {
		padding: 1rem 1.5rem;
		}

		.invoice__table--details th {
		font-size: 1.8rem;
		font-weight: 500;
		}

		.invoice__table--details td {
		font-weight: 600;
		}

		.invoice__table--details tfoot {
		border-radius: 1rem;
		}

		.invoice__table--details tfoot td {
		font-size: 2rem;
		background-color: #f5f5f5;
		}

		.invoice__table--details tfoot td:first-child {
		border-radius: 8px 0 0 8px;
		}

		.invoice__table--details tfoot td:last-child {
		border-radius: 0 8px 8px 0;
		}

		.invoice__table--main {
		margin-top: 7rem;
		}

		.invoice__table--main thead th {
		color: #ffffff;
		background-color: #3a3a3a;
		}

		.invoice__table--main thead th:first-child {
		border-radius: 8px 0 0 8px;
		}

		.invoice__table--main thead th:last-child {
		border-radius: 0 8px 8px 0;
		}

		.invoice__table--main thead th:not(:first-child) {
		border-left: 1px solid #8f8f8f;
		}

		.invoice__table--main th {
		padding: 1.5rem;
		}

		.invoice__table--main td {
		padding: 1rem 1.5rem;
		}

		.invoice__table--main .description {
		font-weight: 600;
		}

		.invoice__sub-title {
		font-size: 1.8rem;
		font-weight: 500;
		}

		.invoice__text {
		margin-bottom: 2rem;
		font-weight: 500;
		}

		.btn{
			color: #fff;
			background-color: #3a3a3a;
			padding: 1.5rem 2rem;
			text-decoration: none;
		}
	</style>
</head>

<body>
	<div class="invoice">
		<header class="invoice__header">
			<div class="col-6">
				<a href="#!" class="invoice__header__logo">
					{{-- @if (generalsettings()->logo)
					<img src="{{ asset('uploads/generalSettings/'.generalsettings()->logo) }}" alt="logo" class="invoice__header__logo__image">
					@else
					<img src="{{ asset('uploads/logo/pdflogo.png') }}" alt="logo" class="invoice__header__logo__image">
					@endif --}}
					
				</a>
				<div class="pl-3">
					
					<h1 class="invoice__receiver">Bill From: {{ config('app.name') }} </h1>
					<table class="invoice__table invoice__table--destination">
						<thead class="text-left">
							<tr>
								<th>Bill To:</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<span>{{ ucfirst($sell_service->name) }} </span> 
								</td>
							</tr>	
							<tr>	
								<td>
									<span>{{ $sell_service->email }} </span> 
								</td>
							</tr>	
							@if ($sell_service->phone)
								<tr>	
									<td>
										<span>{{ $sell_service->phone }} </span> 
									</td>
								</tr>
							@endif	
							<tr>	
								{{-- <td>
									@if($sell_service->address==null || $sell_service->address_two ==null)
									{{ \App\Models\Shipping::find($sell_service->saddress)->address ?? null }} 
									@else
									<span>{{ $sell_service->address }} {{ $sell_service->address_two }}  </span>
									@endif
								</td> --}}
							</tr>	
							@if ($sell_service->city)
								<tr>	
									<td>
										<span>{{ ucfirst($sell_service->city) }} </span> 
									</td>
								</tr>
							@endif	
							<tr>	
								<td>
									<span>{{ ucfirst($sell_service->state) }} </span> 
								</td>
							</tr>	
							<tr>	
								<td>
									<span>{{ $sell_service->zip }} </span> 
									<span>{{ $sell_service->country }} </span> 
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-6">
				@isset($download)
				<div class="text-right">
					<a href="{{ url('generate-pdf') }}/{{ $sell_service->id }}" target="_blank" class="btn">Download</a>
				</div>
					
				@endisset
				<h1 class="invoice__header__title text-right">INVOICE</h1>
				<p class="invoice__header__id text-right"># {{ $sell_service->id }}</p>
				<table class="invoice__table invoice__table--details text-right">
					<tbody>
						<tr>
							<th>Date:</th>
							<td>{{ $sell_service->created_at->format('d/m/y') }}</td>
						</tr>
						<tr>
							<th>Payment Type:</th>
							<td>{{ $sell_service->payment_method }}</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							@if($sell_service->status=="delivered")
									<td class="btn btn-success">Paid</td>
								@else
									<td>Balance Due</td>
									{{-- <td>{{ ($sell_service->status == 'pending' || $sell_service->status == 'processing') }}৳</td> --}}
							<td>{{  $sell_service->total_amount }}৳</td>
							@endif
						</tr>
					</tfoot>
				</table>
			</div>
		</header>
		<table class="invoice__table invoice__table--main">
			<thead>
				<tr>
					<th class="text-left">Item</th>
					<th class="text-right">Rate</th>
					<th class="text-right">Amount</th>
				</tr>
			</thead>
			<tbody> 
			    <tr>
                    <td>
                        @foreach ($sell_service->service_name as $key=>$item)
                            {{ App\Models\Service::where('id',$item)->value('name') }} ,
                        @endforeach 
                    </td>
                    <td>
                        @foreach ($sell_service->service_name as $key=>$item)
                            {{ App\Models\Service::where('id',$item)->value('price') }} ,
                        @endforeach 
                    </td>
				</tr>
                
			</tbody>
		</table>
	</div>

	{{-- <script type="text/javascript"> 
		window.onload=function(){self.print();} 
	</script> --}}
</body>
</html>