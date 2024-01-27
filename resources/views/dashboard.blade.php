@extends('master')
@section('title','Dashboard')
@section('content')

<div class="container-fluid">
				<div class="row">
					<div class="col-xl-6">
						<div id="user-activity" class="card">
							<div class="card-header border-0 pb-0 d-sm-flex d-block">
								<div>
									<h2 class="main-title mb-1">Earnings</h2>
								</div>
								<div class="card-action card-tabs mt-3 mt-sm-0">
									
									 <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#user" role="tab">
                                                Monthly
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#user" role="tab">
                                               Weekly
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#user" role="tab">
                                               Today
                                            </a>
                                        </li>
                                    </ul>
								</div>
							</div>
							<div class="card-body">
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="user" role="tabpanel">
										<canvas id="activity" class="chartjs"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">
							<div class="col-sm-6">
								<div class="widget-card-1 card">
									<div class="card-body">
										<div class="media">
											<img src="/assets/images/food-icon/1.png" alt="" class="me-4" width="80">
											<div class="media-body">
												<h3 class="mb-sm-3 mb-2 text-black"><span class="counter ms-0">128</span></h3>
												<p class="mb-0">Total Menus</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="widget-card-1 card">
									<div class="card-body">
										<div class="media">
											<img src="/assets/images/food-icon/2.png" alt="" class="me-4" width="80">
											<div class="media-body">
												<h3 class="mb-sm-3 mb-2 text-black"><span class="counter ms-0">400</span></h3>
												<p class="mb-0">Revenue</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="widget-card-1 card">
									<div class="card-body">
										<div class="media">
											<img src="/assets/images/food-icon/3.png" alt="" class="me-4" width="80">
											<div class="media-body">
												<h3 class="mb-sm-3 mb-2 text-black"><span class="counter ms-0">678</span></h3>
												<p class="mb-0">Items Sold</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="widget-card-1 card">
									<div class="card-body">
										<div class="media">
											<img src="/assets/images/food-icon/4.png" alt="" class="me-4" width="80">
											<div class="media-body">
												<h3 class="mb-sm-3 mb-2 text-black"><span class="counter ms-0">128</span></h3>
												<p class="mb-0">Total Orders</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div id="chart" class="d-inline-block donut-chart-d"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 d-sm-flex d-block">
										<div>
											<h2 class="main-title text-black mb-1">Orders from</h2>
										</div>
									</div>
									<div class="card-body">
										<div class="progress-bar-box">
											<div class="img-bx me-3">
												<img src="/assets/images/food-icon/8.png" alt="" class="img-fluid">
											</div>
											<div class="bar-box d-flex w-100 align-items-center">
												<h3 class="text-nowrap name mb-0">Dine-in</h3>
												<div class="progress" style="width: 100%">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 92%;"></div>
												</div>
												<span class="text-end percentage">602 <span>(92%)</span></span>
											</div>
										</div>
										<div class="progress-bar-box">
											<div class="img-bx me-3">
												<img src="/assets/images/food-icon/9.png" alt="" class="img-fluid">
											</div>
											<div class="bar-box d-flex w-100 align-items-center">
												<h3 class="text-nowrap name mb-0">Takeaway</h3>
												<div class="progress" style="width: 100%">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 8%;"></div>
												</div>
												<span class="text-end percentage">52 <span>(8%)</span></span>
											</div>
										</div>
										<div class="progress-bar-box">
											<div class="img-bx me-3">
												<img src="/assets/images/food-icon/10.png" alt="" class="img-fluid">
											</div>
											<div class="bar-box d-flex w-100 align-items-center">
												<h3 class="text-nowrap name mb-0">Online</h3>
												<div class="progress" style="width: 100%">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 5%;"></div>
												</div>
												<span class="text-end percentage">3.1k <span>(5%)</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 d-sm-flex d-block">
										<div>
											<h2 class="main-title text-black mb-1">Top Selling items</h2>
										</div>
									</div>
									<div class="card-body pt-3">
										<div class="media mb-3 pb-3 items-list-2 align-items-center">
											<a href="javascript:void(0);"><img class="img-fluid rounded me-3" width="85" src="/assets/images/dish/pic5.jpg" alt="DexignZone"></a>
											<div class="media-body col-6 px-0">
												<h3 class="mt-0 mb-sm-3 mb-2 sub-title">Italiano pizza</h3>
												<span class="font-w500 mb-3">124 times</span>
											</div>
											<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
												<h3	class="mb-0 font-w600 text-secondary">$12.56</h3>
												<div class="dropdown ms-3 ">
													<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
														<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
										</div>
										<div class="media  mb-3 pb-3 items-list-2 align-items-center">
											<a href="javascript:void(0);"><img class="img-fluid rounded me-3" width="85" src="/assets/images/dish/pic4.jpg" alt="DexignZone"></a>
											<div class="media-body col-6 px-0">
												<h3 class="mt-0 mb-sm-3 mb-2 sub-title">Cheese Momos</h3>
												<span class="font-w500 mb-3">116 times</span>
											</div>
											<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
												<h3	class="mb-0 font-w600 text-secondary">$12.56</h3>
												<div class="dropdown ms-3 ">
													<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
														<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
										</div>
										<div class="media mb-3 pb-3 items-list-2 align-items-center">
											<a href="javascript:void(0);"><img class="img-fluid rounded me-3" width="85" src="/assets/images/dish/pic3.jpg" alt="DexignZone"></a>
											<div class="media-body col-6 px-0">
												<h3 class="mt-0 mb-sm-3 mb-2 sub-title">French fries</h3>
												<span class="font-w500 mb-3">200 times</span>
											</div>
											<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
												<h3	class="mb-0 font-w600 text-secondary">$12.56</h3>
												<div class="dropdown ms-3 ">
													<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
														<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
										</div>
										<div class="media mb-3 pb-3 items-list-2 align-items-center">
											<a href="javascript:void(0);"><img class="img-fluid rounded me-3" width="85" src="/assets/images/dish/pic2.jpg" alt="DexignZone"></a>
											<div class="media-body col-6 px-0">
												<h3 class="mt-0 mb-3 sub-title">Cheese Sandwich</h3>
												<span class="font-w500 mb-3">50 times</span>
											</div>
											<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
												<h3	class="mb-0 font-w600 text-secondary">$12.56</h3>
												<div class="dropdown ms-3 ">
													<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
														<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>





@endsection