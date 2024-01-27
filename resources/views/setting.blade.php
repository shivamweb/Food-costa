@extends('master')
@section('title','Dashboard')
@section('content')

			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-6">
						<div class="card">
							<div class="card-body">
								<h2 class="text-black main-title mb-sm-4 mb-0 pb-2">Settings</h2>
								<form class="mb-5">
									<div class="d-flex align-items-center">
										<div class="avatar-upload">
											<div class="avatar-edit">
												<input type='file' id="imageUpload" accept=".png, .jpg, .jpeg">
												<label for="imageUpload"></label>
											</div>
											<div class="avatar-preview">
												<div id="imagePreview" style="background-image: url('/assets/images/avatar/1.jpg');">
												</div>
											</div>
										</div>
										<span class="fs-13 ms-sm-5 ms-3">Logo Should have in <br>1:1 ratio for better viewing<br> experience.</span>
									</div>
									
									<div class="form-group mb-3 pb-3">
										<label class="font-w600">Restaurant Name</label>
										<input type="text" class="form-control solid" value="John doe">
									</div>
									<div class="form-group mb-3 pb-3">
										<label class="font-w600">Restaurant Phone Number</label>
										<input type="text" class="form-control solid" value="+1 133 458 2578">
									</div>
									<div class="form-group">
										<label class="font-w600">Restaurant Email Address</label>
										<input type="text" class="form-control solid" value="example@gmail.com">
									</div>
								</form>
								<hr>
								<h2 class="text-black main-title mb-4 pb-2 mt-4">Bank Details</h2>
								<form class="mb-5">
									<div class="form-group mb-3 pb-3">
										<label class="font-w600">Account Number</label>
										<input type="text" class="form-control solid" value="1234 5678 9120 1234">
									</div>
									<div class="form-group mb-3 pb-3">
										<label class="font-w600">Account Name</label>
										<input type="text" class="form-control solid" value="Bank of Usa">
									</div>
									<div class="form-group">
										<label class="font-w600">Bank Code</label>
										<input type="text" class="form-control solid" value="685959">
									</div>
								</form>
							</div>
						</div>
					</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<h2 class="text-black main-title mb-4 pb-2">Restaurant Location</h2>
										<div class="map-box">
											<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14448.885880295826!2d75.81852004999999!3d25.128202299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1626342496073!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<h2 class="text-black main-title mb-4 pb-2">Order Color Setting</h2>
										<form>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<input type="text" class="as_colorpicker form-control" value="#2f4cdd">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<input class="form-control solid" type="time" value="10:56">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<input type="text" class="as_colorpicker form-control" value="#ff6d4d">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<input class="form-control solid" type="time" value="10:56">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<input type="text" class="as_colorpicker form-control" value="#f72b50">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<input class="form-control solid" type="time" value="10:56">
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>

@endsection