
@extends('master')
@section('title','Dashboard')
@section('content')
<div class="content-wrapper">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head dashboard-head d-md-flex d-block mb-5 align-items-start">
					<h2 class="dashboard-title me-auto">Transaction</h2>
					<div class="input-group search-area">
						<input type="text" class="form-control" placeholder="Search here..." >
						<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
					</div>
				</div>
				
				
				 <!-- Modal -->
				<div class="modal order-info-box" id="OrderInfoBox" style="min-width: 845px;width: -webkit-fill-available;">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<div>
									<h5 class="user-name">John Doe</h5>
									<span class="date">B00123 | 15 Jun, 11:35 am</span>
								</div>
							</div>
							<div class="modal-body">
								<ul class="order-list-wrapper">
									<li class="list-header"><span class="sn">Q.</span>ITEMS<span>PRICE</span></li>
									<li><span class="sn">1.</span>Onion Sandwich<span>$12.00</span></li>
									<li><span class="sn">1.</span>Onion Sandwich<span>$12.00</span></li>
									<li><span class="sn">1.</span>Onion Sandwich<span>$12.00</span></li>
								</ul>
							</div>
							<div class="modal-footer">
								<div class="w-100">
									<ul class="order-list-wrapper w-100">
										<li>Sub Total<span>$51.00</span></li>
										<li>Service fee<span>$3.00</span></li>
										<li class="list-footer">Total Paid in <strong>CASH</strong><span>$54.00</span></li>
									</ul>
									<div class="list-profie mt-3">
										<img src="/assets/images/avatar/1.jpg" class="me-3" alt="">
										<div>
											<h4 class="name">John Anderson</h4>
											<span class="sub-info">Delivery partner assigned</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table id="example5" class="display mb-4 defaultTable dataTablesCard" style="min-width: 845px;width: -webkit-fill-available;">
								<thead>
									<tr>
										<th>ORDER NUM</th>
										<th>NAME</th>
										<th>AMOUNT</th>
										<th>ITEMS</th>
										<th>TYPE</th>
										<th>PAYMENT</th>
										<th>UPDATED ON</th>
										<th class="text-end">ACTION</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>BA85454</td>
										<td><strong>Wiliam Franchi</strong></td>
										<td>$120.00</td>
										<td><span class="text-primary">2</span></td>
										<td>Dine-in</td>
										<td>Cash</td>
										<td>12 June 2020 12:30 pm</td>
										<td>
											<div class="action-buttons d-flex justify-content-end">
												<a href="javascript:void(0);" class="btn btn-success light me-2" data-bs-toggle="modal" data-bs-target="#OrderInfoBox">
													<svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px"   viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"/><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"/></g></svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-primary light me-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
															<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
														</g>
													</svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger light">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
															<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
														</g>
													</svg>
												</a>
											</div>
										</td>												
									</tr>
									<tr>
										<td>BA85454</td>
										<td><strong>Wiliam John</strong></td>
										<td>$120.00</td>
										<td><span class="text-primary">2</span></td>
										<td>Dine-in</td>
										<td>Cash</td>
										<td>12 June 2020 12:30 pm</td>
										<td>
											<div class="action-buttons d-flex justify-content-end">
												<a href="javascript:void(0);" class="btn btn-success light me-2"  data-bs-toggle="modal" data-bs-target="#OrderInfoBox">
													<svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px"   viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"/><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"/></g></svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-primary light me-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
															<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
														</g>
													</svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger light">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
															<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
														</g>
													</svg>
												</a>
											</div>
										</td>												
									</tr>
									<tr>
										<td>BA85454</td>
										<td><strong>Samoch raw</strong></td>
										<td>$120.00</td>
										<td><span class="text-primary">2</span></td>
										<td>Dine-in</td>
										<td>Cash</td>
										<td>12 June 2020 12:30 pm</td>
										<td>
											<div class="action-buttons d-flex justify-content-end">
												<a href="javascript:void(0);" class="btn btn-success light me-2"  data-bs-toggle="modal" data-bs-target="#OrderInfoBox">
													<svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px"   viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"/><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"/></g></svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-primary light me-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
															<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
														</g>
													</svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger light">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
															<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
														</g>
													</svg>
												</a>
											</div>
										</td>												
									</tr>
									<tr>
										<td>BA85454</td>
										<td><strong>Wiliam Franchi</strong></td>
										<td>$120.00</td>
										<td><span class="text-primary">2</span></td>
										<td>Dine-in</td>
										<td>Cash</td>
										<td>12 June 2020 12:30 pm</td>
										<td>
											<div class="action-buttons d-flex justify-content-end">
												<a href="javascript:void(0);" class="btn btn-success light me-2"  data-bs-toggle="modal" data-bs-target="#OrderInfoBox">
													<svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px"   viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"/><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"/></g></svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-primary light me-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
															<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
														</g>
													</svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger light">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
															<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
														</g>
													</svg>
												</a>
											</div>
										</td>												
									</tr>
									<tr>
										<td>BA85454</td>
										<td><strong>Wiliam Franchi</strong></td>
										<td>$120.00</td>
										<td><span class="text-primary">2</span></td>
										<td>Dine-in</td>
										<td>Cash</td>
										<td>12 June 2020 12:30 pm</td>
										<td>
											<div class="action-buttons d-flex justify-content-end">
												<a href="javascript:void(0);" class="btn btn-success light me-2"  data-bs-toggle="modal" data-bs-target="#OrderInfoBox">
													<svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px"   viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"/><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"/></g></svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-primary light me-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
															<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
														</g>
													</svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger light">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
															<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
														</g>
													</svg>
												</a>
											</div>
										</td>												
									</tr>
									<tr>
										<td>BA85454</td>
										<td><strong>Wiliam Franchi</strong></td>
										<td>$120.00</td>
										<td><span class="text-primary">2</span></td>
										<td>Dine-in</td>
										<td>Cash</td>
										<td>12 June 2020 12:30 pm</td>
										<td>
											<div class="action-buttons d-flex justify-content-end">
												<a href="javascript:void(0);" class="btn btn-success light me-2"  data-bs-toggle="modal" data-bs-target="#OrderInfoBox">
													<svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px"   viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"/><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"/></g></svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-primary light me-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
															<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
														</g>
													</svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger light">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
															<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
														</g>
													</svg>
												</a>
											</div>
										</td>												
									</tr>
									<tr>
										<td>BA85454</td>
										<td><strong>Wiliam Franchi</strong></td>
										<td>$120.00</td>
										<td><span class="text-primary">2</span></td>
										<td>Dine-in</td>
										<td>Cash</td>
										<td>12 June 2020 12:30 pm</td>
										<td>
											<div class="action-buttons d-flex justify-content-end">
												<a href="javascript:void(0);" class="btn btn-success light me-2"  data-bs-toggle="modal" data-bs-target="#OrderInfoBox">
													<svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px"   viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"/><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"/></g></svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-primary light me-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
															<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
														</g>
													</svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger light">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
															<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
														</g>
													</svg>
												</a>
											</div>
										</td>												
									</tr>
									<tr>
										<td>BA85454</td>
										<td><strong>Wiliam Franchi</strong></td>
										<td>$120.00</td>
										<td><span class="text-primary">2</span></td>
										<td>Dine-in</td>
										<td>Cash</td>
										<td>12 June 2020 12:30 pm</td>
										<td>
											<div class="action-buttons d-flex justify-content-end">
												<a href="javascript:void(0);" class="btn btn-success light me-2"  data-bs-toggle="modal" data-bs-target="#OrderInfoBox">
													<svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px"   viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"/><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"/></g></svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-primary light me-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
															<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
														</g>
													</svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger light">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
															<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
														</g>
													</svg>
												</a>
											</div>
										</td>												
									</tr>
									<tr>
										<td>BA85454</td>
										<td><strong>Wiliam Franchi</strong></td>
										<td>$120.00</td>
										<td><span class="text-primary">2</span></td>
										<td>Dine-in</td>
										<td>Cash</td>
										<td>12 June 2020 12:30 pm</td>
										<td>
											<div class="action-buttons d-flex justify-content-end">
												<a href="javascript:void(0);" class="btn btn-success light me-2"  data-bs-toggle="modal" data-bs-target="#OrderInfoBox">
													<svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px"   viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"/><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"/></g></svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-primary light me-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
															<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
														</g>
													</svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger light">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
															<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
														</g>
													</svg>
												</a>
											</div>
										</td>												
									</tr>
									<tr>
										<td>BA85454</td>
										<td><strong>Wiliam Franchi</strong></td>
										<td>$120.00</td>
										<td><span class="text-primary">2</span></td>
										<td>Dine-in</td>
										<td>Cash</td>
										<td>12 June 2020 12:30 pm</td>
										<td>
											<div class="action-buttons d-flex justify-content-end">
												<a href="javascript:void(0);" class="btn btn-success light me-2"  data-bs-toggle="modal" data-bs-target="#OrderInfoBox">
													<svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px"   viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"/><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"/></g></svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-primary light me-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
															<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
														</g>
													</svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger light">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
															<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
														</g>
													</svg>
												</a>
											</div>
										</td>												
									</tr>
									<tr>
										<td>BA85454</td>
										<td><strong>Wiliam Franchi</strong></td>
										<td>$120.00</td>
										<td><span class="text-primary">2</span></td>
										<td>Dine-in</td>
										<td>Cash</td>
										<td>12 June 2020 12:30 pm</td>
										<td>
											<div class="action-buttons d-flex justify-content-end">
												<a href="javascript:void(0);" class="btn btn-success light me-2"  data-bs-toggle="modal" data-bs-target="#OrderInfoBox">
													<svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px"   viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"/><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"/></g></svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-primary light me-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
															<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
														</g>
													</svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger light">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
															<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
														</g>
													</svg>
												</a>
											</div>
										</td>												
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
            </div>
        </div>
        @endsection