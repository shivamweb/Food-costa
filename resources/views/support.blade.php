@extends('master')
@section('title','Dashboard')
@section('content')
<div class="row align-items-center">
					<div class="col-lg-5">
						<img src="images/24x7.png" alt="" class="img-fluid">
					</div>
					<div class="col-lg-7">
						<div class="card">
							<div class="card-body">
								<h2 class="text-black main-title">Write us your query</h2>
								<p>We'l get back to you soon</p>
								<form class="mt-5">
									<div class="form-group mb-3 pb-3">
										<label class="font-w600">Phone Number</label>
										<input type="text" class="form-control solid" placeholder="" required="" value="+1 123 456 7891">
									</div>
									<div class="form-group mb-3 pb-3">
										<label class="font-w600">Your Message</label>
										<textarea rows="5" class="form-control solid py-3" placeholder="Write your message"></textarea>
									</div>
									<a href="javascript:void(0);" class="btn btn-primary btn-rounded">submit</a>
								</form>
							</div>
						</div>
					</div>
				</div>




@endsection