@extends('master')
@section('title','Dashboard')
@section('content')

<div class="listcontent-area">
	<aside class="cart-area  dz-scroll" id="cart_area">
		<div class="">
			<div class="h-50" id="home-counter">
				<div class="card">
					<div class="card-body">
						<img src="/assets/images/counter.jpg" class="img-fluid mb-5" alt="">
						<h3 class="title mb-4">Your Order in Progress Check Order</h3>
						<p class="mb-sm-5 mb-3">Click on any item or Add Order Button to create order</p>
						<a href="javascript:void(0);" id="add-order" class="btn btn-warning btn-rounded me-3">Add Order</a>
						<a href="/order-status" class="btn btn-warning light btn-rounded">Order Status</a>
					</div>
				</div>
			</div>
			<div class="h-100" id="add-order-content">
				<div class="card rounded-0">
					<div class="card-body p-0">
						<div class="table-responsive">
							<table class="table text-black">
								<thead>
									<tr>
										<th>ITEM</th>
										<th>PRICE</th>
										<th>QNT.</th>
										<th>TOTAL($)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><span class="font-w500">Farm Ville Pizza</span></td>
										<td>12.00</td>
										<td>
											<div class="quantity btn-quantity style-1">
												<input id="demo_vertical2" type="text" value="1" name="demo_vertical2">
											</div>
										</td>
										<td>12.00</td>
									</tr>
									<tr>
										<td><span class="font-w500">Cheese Burst Sandwich</span></td>
										<td>8.00</td>
										<td>
											<div class="quantity btn-quantity style-1">
												<input id="demo_vertical21" type="text" value="3" name="demo_vertical21">
											</div>
										</td>
										<td>8.00</td>
									</tr>
									<tr>
										<td><span class="font-w500">White Source Pasta</span></td>
										<td>10.00</td>
										<td>
											<div class="quantity btn-quantity style-1">
												<input id="demo_vertical22" type="text" value="2" name="demo_vertical22">
											</div>
										</td>
										<td>10.00</td>
									</tr>
									<tr>
										<td><span class="font-w500">Veg Cheese Burger</span></td>
										<td>6.50</td>
										<td>
											<div class="quantity btn-quantity style-1">
												<input id="demo_vertical23" type="text" value="1" name="demo_vertical23">
											</div>
										</td>
										<td>6.50</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="card-order-footer">
					<div class="amount-details">
						<h5 class="d-flex text-right mb-3">
							<span class="text">Sub total </span>
							<span class="me-0 ms-auto">43.00</span>
						</h5>
						<h5 class="d-flex text-right mb-3">
							<span class="text">Tax</span>
							<span class="me-0 ms-auto"> 3.00</span>
						</h5>
						<h5 class="d-flex text-right mb-3">
							<span class="text">Other Charge</span>
							<span class="me-0 ms-auto">0.00</span>
						</h5>
					</div>
					<div class="amount-payble">
						<h5 class="d-flex text-right mb-0">
							<span class="text">Amount to Pay</span>
							<span class="me-0 ms-auto">46.00</span>
						</h5>
					</div>

					<div class="btn_box">
						<div class="row no-gutter mx-0">
							<a href="javascript:void(0);" id="home-counter-tab" class="btn btn-danger btn-block col-6 m-0 rounded-0">Cancel</a>
							<a href="javascript:void(0);" id="place-order-tab" class="btn btn-primary btn-block col-6 m-0 rounded-0">Place Order</a>
						</div>
					</div>
				</div>
			</div>
			<div class="h-100" id="place-order">
				<div class="card rounded-0">
					<div class="card-body">
						<form>
							<h4 class="mb-4">Amount to Pay <strong> $46.00 </strong></h4>
							<div class="form-group mb-4 pb-2">
								<label class="font-w600">Select Payment Method</label>
								<div class="row no-gutters align-items-center">
									<div class="col-6 col-sm-6 col-md-6 col-lg-4">
										<div class="custom-control custom-radio">
											<input checked="" type="radio" id="cash" name="PaymentMethod" class="custom-control-input">
											<label class="custom-control-label" for="cash"><span class="ms-2">Cash</span></label>
										</div>
									</div>
									<div class="col-6 col-sm-6 col-md-6 col-lg-4">
										<div class="custom-control custom-radio">
											<input type="radio" id="card" name="PaymentMethod" class="custom-control-input">
											<label class="custom-control-label" for="card"><span class="ms-2">Card</span></label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group mb-4 pb-2">
								<label class="font-w600">Order type</label>
								<div class="row no-gutters align-items-center">
									<div class="col-6 col-sm-6 col-md-6 col-lg-4">
										<div class="custom-control custom-radio">
											<input checked="" type="radio" id="takeaway" name="OrderType" class="custom-control-input">
											<label class="custom-control-label" for="takeaway"><span class="ms-2">Takeaway</span></label>
										</div>
									</div>
									<div class="col-6 col-sm-6 col-md-6 col-lg-4">
										<div class="custom-control custom-radio">
											<input type="radio" id="dine-in" name="OrderType" class="custom-control-input">
											<label class="custom-control-label" for="dine-in"><span class="ms-2">Dine-in</span></label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="font-w600">Customer Info (Optional)</label>
								<input type="text" class="form-control solid" placeholder="Enter Full Name">
							</div>
							<div class="form-group">
								<input type="text" class="form-control solid" placeholder="Enter Phone Number">
							</div>
						</form>
					</div>
				</div>
				<div class="card-order-footer">
					<div class="btn_box">
						<div class="row no-gutter mx-0">
							<a href="javascript:void(0);" id="place-order-cancel" class="btn btn-danger btn-block col-6 m-0 rounded-0">Cancel</a>
							<a href="/" class="btn btn-primary btn-block col-6 m-0 rounded-0">Submit</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</aside>
	<div class="row">
		
		<div class="col-xl-12">
			
			<div class="owl-carousel item-carousel">
			@foreach($tables as $table)
				<div class="items">
					<div class="item-box">
						<img src="/assets/images/table.webp" alt="">
						<h5 class="title mb-0">{{$table['table_no']}}</h5>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		
	</div>
	<div class="col-xl-12">
		<div class="input-group search-area style-1 mb-4">
			<input type="text" class="form-control" placeholder="Search here...">
			<div class="input-group-append">
				<button class=" btn btn-primary btn-rounded">Search<i class="flaticon-381-search-2 scale3 ms-3"></i></button>
			</div>
		</div>
		<div class="row">
			@foreach($foodItems as $foodItem)
			<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">
				<div class="card item-card">
					<div class="card-body p-0">
						@if($foodItem['image'])
						<img src="{{asset($foodItem['image'])}}" class="img-fluid" alt="product">
						@endif
						<div class="info">
							<h5 class="name">{{$foodItem['food_name']}}</h5>
							<h6 class="mb-0 price"><i class="fas fa-rupee-sign"></i> {{$foodItem['price']}}</h6>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>

	</div>
</div>
</div>


@endsection