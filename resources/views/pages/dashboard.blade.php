@extends('master')
@section('content')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="hk-settings-panel">
	<div class="nicescroll-bar position-relative">
		<div class="settings-panel-wrap">
			<div class="settings-panel-head">
				<img class="brand-img d-inline-block align-top" src="{{asset('admin_assets/dist/img/volgo.png')}}" alt="brand" />
				<a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
			</div>
			<hr>
			<h6 class="mb-5">Layout</h6>
			<p class="font-14">Choose your preferred layout</p>
			<div class="layout-img-wrap">
				<div class="row">
					<a href="javascript:void(0);" class="col-6 mb-30 active">
						<img class="rounded opacity-70" src="{{asset('admin_assets/dist/img/layout1.png')}}" alt="layout">
						<i class="zmdi zmdi-check"></i>
					</a>
					<!-- <a href="dashboard2.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="{{asset('admin_assets/dist/img/layout2.png')}}" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="dashboard3.html" class="col-6">
                                <img class="rounded opacity-70" src="{{asset('admin_assets/dist/img/layout3.png')}}" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a> -->
				</div>
			</div>
			<hr>
			<h6 class="mb-5">Side Nav</h6>
			<p class="font-14">Choose your liked color mode</p>
			<div class="button-list hk-nav-select mb-10">
				<button type="button" id="nav_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text tst6">Light Mode</span></button>
				<button type="button" id="nav_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
			</div>
			<hr>
			<h6 class="mb-5">Top Nav</h6>
			<p class="font-14">Choose your liked color mode</p>
			<div class="button-list hk-navbar-select mb-10">
				<button type="button" id="navtop_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
				<button type="button" id="navtop_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
			</div>
			<hr>
			<!-- <div class="d-flex justify-content-between align-items-center">
                        <h6>Scrollable Header</h6>
                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                    </div>
                    <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button> -->
		</div>
	</div>
	<img class="d-none" src="{{asset('admin_assets/dist/img/volgo.png')}}" alt="brand" />
	<img class="d-none" src="{{asset('admin_assets/dist/img/volgo.png')}}" alt="brand" />
</div>
<!-- /Setting Panel -->

<!-- Main Content -->
<div class="hk-pg-wrapper">
	<!-- Container -->
	<div class="container mt-xl-50 mt-sm-30 mt-15">
		<!-- Title -->
		<div class="hk-pg-header align-items-top">
			<div>
				<h2 class="hk-pg-title font-weight-600 mb-10">Customer Management</h2>
				<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
				<p>Welcome to the  VolgoPoint</p>
			</div>
			<div class="d-flex w-500p">
				<select class="form-control custom-select custom-select-sm mr-15">
					<option selected="">Latest Products</option>
					<option value="1">Product 1</option>
					<option value="2">Product 2</option>
					<option value="3">Product 3</option>
				</select>
				<select class="form-control custom-select custom-select-sm mr-15">
					<option selected="">UAE</option>
					<option value="1">UAE</option>
					<option value="2">Europe</option>
					<option value="3">Australia</option>
				</select>
				<select class="form-control custom-select custom-select-sm">
					<option selected="">January</option>
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="1">April</option>
					<option value="2">May</option>
					<option value="3">June</option>
					<option value="1">July</option>
					<option value="2">August</option>
					<option value="3">September</option>
					<option value="1">October</option>
					<option value="2">November</option>
					<option value="3">December</option>
				</select>
			</div>
		</div>
<div class="row">
<div class="col-xl-3 col-md-6 mb-4">
	<div class="card border-left-primary shadow h-100 py-2">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
					<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
					Users</div>
					<div  id="target_users" class="h5 mb-0 font-weight-bold text-gray-800">15</div>
				</div>
				<!-- <div class="col-auto">
					<i class="fas fa-calendar fa-2x text-gray-300"></i>
				</div> -->
			</div>
		</div>
	</div>
</div>


<div class="col-xl-3 col-md-6 mb-4">
	<div class="card border-left-success shadow h-100 py-2">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
					<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
					Products</div>
					<div  id="products" class="h5 mb-0 font-weight-bold text-gray-800">15</div>
				</div>
				<div class="col-auto">
				
				</div>
			</div>
		</div>
	</div>
</div>


<div class="col-xl-3 col-md-6 mb-4">
	<div class="card border-left-info shadow h-100 py-2">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
					<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Categories
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col-auto">
							<div  id="categories" class="h5 mb-0 mr-3 font-weight-bold text-gray-800">15</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-auto">
					<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
				</div> -->
			</div>
		</div>
	</div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
	<div class="card border-left-dark shadow h-100 py-2">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
					<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
					Brands</div>
					<div id="brandId" class="h5 mb-0 font-weight-bold text-gray-800">15</div>
				</div>
				<!-- <div class="col-auto">
					<i class="fas fa-comments fa-2x text-gray-300"></i>
				</div> -->
			</div>
		</div>
	</div>
</div>
</div>
		<!-- Row -->
		<!-- <div class="row">
			<div class="col-xl-12">
				<div class="hk-row">
					<div class="col-sm-12">
						<div class="card-group hk-dash-type-2">
							<div class="card card-sm">
								<div class="card-body">
									<div class="d-flex justify-content-between mb-5">
										<div>
											<span class="d-block font-15 text-dark font-weight-500">Users</span>
										</div> -->
										<!-- <div>
													<span class="text-success font-14 font-weight-500">+10%</span>
												</div> -->
									<!-- </div>
									<div>
										<span class="d-block display-4 text-dark mb-5">15</span> -->
										<!-- <small class="d-block">172,458 Target Users</small> -->
									<!-- </div>
								</div>
							</div>

							<div class="card card-sm">
								<div class="card-body">
									<div class="d-flex justify-content-between mb-5">
										<div>
											<span class="d-block font-15 text-dark font-weight-500">Products</span>
										</div> -->
										<!-- <div>
													<span class="text-success font-14 font-weight-500">+12.5%</span>
												</div> -->
									<!-- </div>
									<div>
										<span class="d-block display-4 text-dark mb-5" id="products"><span class="counter-anim">15</span></span>
										<small class="d-block"></small>
									</div>
								</div>
							</div>

							<div class="card card-sm">
								<div class="card-body">
									<div class="d-flex justify-content-between mb-5">
										<div>
											<span class="d-block font-15 text-dark font-weight-500">Categories</span>
										</div> -->
										<!-- <div>
													<span class="text-warning font-14 font-weight-500">-2.8%</span>
												</div> -->
									<!-- </div>
									<div>
										<span class="d-block display-4 text-dark mb-5" id="categories">15</span>
										<small class="d-block"></small>
									</div>
								</div>
							</div>

							<div class="card card-sm">
								<div class="card-body">
									<div class="d-flex justify-content-between mb-5">
										<div>
											<span class="d-block font-15 text-dark font-weight-500">Brands</span>
										</div> -->
										<!-- <div>
													<span class="text-danger font-14 font-weight-500">-75%</span>
												</div> -->
									<!-- </div>
									<div id="brand-dev">
										<span class="d-block display-4 text-dark mb-5" id="brandId"></span>
										<small class="d-block"></small>
									</div>
								</div>
							</div>
						</div>
					</div>

				-->
			
				<script>
					$(document).ready(function() {

						$.ajax({
							type: 'GET',
							url: "{{ url('api/dashboard') }}",
							dataType: 'JSON',
							headers: {
								"Authorization": 'Bearer ' + localStorage.getItem('token')
							},
							dataSrc: function(json) {
								return json.data;
							},
							success: function(response) {
								console.log(response.data.total_users);
								document.getElementById("categories").innerHTML = response.data.total_categories;
								document.getElementById("products").innerHTML = response.data.total_products;
								document.getElementById("target_users").innerHTML = response.data.total_users;
								document.getElementById("brandId").innerHTML = response.data.total_brand;
							},
							error: function(response) {

								console.log("error", response);
							}

						});

					});
				</script>


				<!-- <div class="hk-row">
		<div class="col-lg-6">
			<div class="card card-refresh">
				<div class="refresh-container">
					<div class="loader-pendulums"></div>
				</div>
				<div class="card-header card-header-action">
					<h6>Youtube Subscribers</h6>
					<div class="d-flex align-items-center card-action-wrap">
						<a href="#" class="inline-block refresh mr-15">
												<i class="ion ion-md-radio-button-off"></i>
											</a>
											<div class="inline-block dropdown">
												<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-md-more"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="hk-legend-wrap mb-20">
											<div class="hk-legend">
												<span class="d-10 bg-success rounded-circle d-inline-block"></span><span>Desktop</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-light-10 rounded-circle d-inline-block"></span><span>Mobile</span>
											</div>
										</div>
										<div id="e_chart_9" class="echart" style="height: 240px;"></div>
									</div>
								</div>
								<div class="card">
									<div class="card-header card-header-action">
										<h6>Country Stats</h6>
										<div class="d-flex align-items-center card-action-wrap">
											<a href="#" class="inline-block refresh mr-15">
												<i class="ion ion-md-arrow-down"></i>
											</a>
											<a href="#" class="inline-block full-screen">
												<i class="ion ion-md-expand"></i>
											</a>
										</div>
									</div>
									<div class="card-body pa-0">
										<div class="pa-20">
											<div id="world_map_marker_1" style="height: 300px"></div>
										</div>
										<div class="table-wrap">
											<div class="table-responsive">
												<table class="table table-sm table-hover mb-0">
													<thead>
														<tr>
															<th class="w-25">Country</th>
															<th>Sessions</th>
															<th>Goals</th>
															<th>Goals Rate</th>
															<th>Bounce Rate</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Canada</td>
															<td>55,555</td>
															<td>210</td>
															<td>2.46%</td>
															<td>0.26%</td>
														</tr>
														<tr>
															<td>India</td>
															<td>24,152</td>
															<td>135</td>
															<td>0.58%</td>
															<td>0.43%</td>
														</tr>
														<tr>
															<td>UK</td>
															<td>15,640</td>
															<td>324</td>
															<td>5.15%</td>
															<td>2.47%</td>
														</tr>
														<tr>
															<td>Botswana</td>
															<td>12,148</td>
															<td>854</td>
															<td>4.19%</td>
															<td>0.1%</td>
														</tr>
														<tr>
															<td>UAE</td>
															<td>11,258</td>
															<td>453</td>
															<td>8.15%</td>
															<td>0.14%</td>
														</tr>
														<tr>
															<td>Australia</td>
															<td>10,786</td>
															<td>376</td>
															<td>5.48%</td>
															<td>0.45%</td>
														</tr>
														<tr>
															<td>Phillipines</td>
															<td>9,485</td>
															<td>63</td>
															<td>3.51%</td>
															<td>0.9%</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header card-header-action">
										<h6>Linkedin Key Metrics</h6>
										<div class="d-flex align-items-center card-action-wrap">
											<a href="#" class="inline-block refresh mr-15">
												<i class="ion ion-md-arrow-down"></i>
											</a>
											<a href="#" class="inline-block full-screen mr-15">
												<i class="ion ion-md-expand"></i>
											</a>
											<a class="inline-block card-close" href="#" data-effect="fadeOut">
												<i class="ion ion-md-close"></i>
											</a>
										</div>
									</div>
									<div class="card-body pa-0">
										<div class="table-wrap">
											<div class="table-responsive">
												<table class="table table-sm table-hover mb-0">
													<thead>
														<tr>
															<th>Metrics</th>
															<th class="w-40">Period</th>
															<th class="w-25">Past</th>
															<th>Trend</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Clicks</td>
															<td>
																<div class="progress-wrap lb-side-left mnw-125p">
																	<div class="progress-lb-wrap">
																		<label class="progress-label mnw-50p">1,184</label>
																		<div class="progress progress-bar-rounded progress-bar-xs">
																			<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</div>
																</div>
															</td>
															<td>1,234</td>
															<td><div id="sparkline_1"></div></td>
														</tr>
														<tr>
															<td>Visits</td>
															<td>
																<div class="progress-wrap lb-side-left mnw-125p">
																	<div class="progress-lb-wrap">
																		<label class="progress-label mnw-50p">1,425</label>
																		<div class="progress progress-bar-rounded progress-bar-xs">
																			<div class="progress-bar bg-success w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</div>
																</div>
															</td>
															<td>3,458</td>
															<td><div id="sparkline_2"></div></td>
														</tr>
														<tr>
															<td>Views</td>
															<td>
																<div class="progress-wrap lb-side-left mnw-125p">
																	<div class="progress-lb-wrap">
																		<label class="progress-label mnw-50p">5,623</label>
																		<div class="progress progress-bar-rounded progress-bar-xs">
																			<div class="progress-bar bg-warning w-60" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</div>
																</div>
															</td>
															<td>53,637</td>
															<td><div id="sparkline_3"></div></td>
														</tr>
														<tr>
															<td>Returns</td>
															<td>
																<div class="progress-wrap lb-side-left mnw-125p">
																	<div class="progress-lb-wrap">
																		<label class="progress-label mnw-50p">4,851</label>
																		<div class="progress progress-bar-rounded progress-bar-xs">
																			<div class="progress-bar bg-danger w-55" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</div>
																</div>
															</td>
															<td>20,596</td>
															<td><div id="sparkline_4"></div></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header card-header-action">
										<h6>Users by Gendar & Age</h6>
										<div class="d-flex align-items-center card-action-wrap">
											<div class="inline-block dropdown">
												<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div id="e_chart_5" class="echart" style="height:250px;"></div>
										<div class="hk-legend-wrap mt-20">
											<div class="hk-legend">
												<span class="d-10 bg-primary rounded-circle d-inline-block"></span><span>18-24</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-teal rounded-circle d-inline-block"></span><span>25-34</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-success rounded-circle d-inline-block"></span><span>35-44</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-warning rounded-circle d-inline-block"></span><span>45-54</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-light-20 rounded-circle d-inline-block"></span><span>55-64</span>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header card-header-action">
										<h6>Analytics Audience Matrics</h6>
										<div class="d-flex align-items-center card-action-wrap">
											<div class="inline-block dropdown">
												<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="hk-legend-wrap mb-20">
											<div class="hk-legend">
												<span class="d-10 bg-light-20 rounded-circle d-inline-block"></span><span>Users</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-success rounded-circle d-inline-block"></span><span>Sessions</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-primary rounded-circle d-inline-block"></span><span>Pageviews</span>
											</div>
										</div>
										<div id="e_chart_6" class="echart" style="height:250px;"></div>
									</div>
								</div>
							</div>
						</div> -->
				<!-- <div class="mt-40 mb-30">
							<h5 class="d-flex align-items-end">User Activities <i class="ion ion-md-help-circle-outline text-light font-21 ml-10" data-toggle="tooltip" data-placement="top" title="User input data and activities"></i></h5>
						</div>	 -->
				<!-- <div class="hk-row">
							<div class="col-lg-8">
								<div class="card">
									<div class="card-header card-header-action">
										<h6>Ratings & Reviews</h6>
										<div class="d-flex align-items-center card-action-wrap">
											<button class="btn btn-secondary btn-sm">Rate the template</button>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-5">
												<div class="d-flex align-items-center h-100 justify-content-center text-center">
													<div>
														<div class="d-flex align-items-center  justify-content-center text-dark">
															<span class="counter-anim display-2">4.4</span>
															<span class="review-star starred ml-10">
																<span class="feather-icon"><i data-feather="star"></i></span>
															</span>
														</div>
														<span class="font-18">949 ratings & 18 reviews</span>
													</div>
												</div>
											</div>
											<div class="col-sm-7">
												<div class="progress-wrap lb-side-left mt-5">
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">5.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">4.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-primary w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">3.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-warning w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">2.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-warning w-55" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">1.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body pa-0">
										<div class="table-wrap">
											<div class="table-responsive">
												<table class="table table-hover mb-0">
													<thead>
														<tr>
															<th>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck4">
																	<label class="custom-control-label" for="customCheck4">Lead Title</label>
																</div>
															</th>
															<th>Sales</th>
															<th>Company</th>
															<th>Date Created</th>
															<th>Lead Status</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck41" checked="">
																	<label class="custom-control-label" for="customCheck41"><span class="w-130p d-block text-truncate">connar_weiked@ae.com</span></label>
																</div>
															</td>
															<td>$2000</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-primary rounded-circle"><span class="initial-wrap"><span>A</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">American Express</span>
																	</div>
																</div>
															</td>
															<td>
																22/10/2018
															</td>
															<td><span class="badge badge-primary">On track</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck42">
																	<label class="custom-control-label" for="customCheck42"><span class="w-130p d-block text-truncate">express_notingham@em.au</span></label>
																</div>
															</td>
															<td>$1600</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-danger rounded-circle"><span class="initial-wrap"><span>M</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Exxon Mobil</span>
																	</div>
																</div>
															</td>
															<td>
																15/09/2018
															</td>
															<td><span class="badge badge-primary">On track</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck43">
																	<label class="custom-control-label" for="customCheck43"><span class="w-130p d-block text-truncate">locast12_host@nova.com</span></label>
																</div>
															</td>
															<td>$1265</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-teal rounded-circle"><span class="initial-wrap"><span>B</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Big Blackship</span>
																	</div>
																</div>
															</td>
															<td>
																30/08/2018
															</td>
															<td><span class="badge badge-danger">Behind</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck44">
																	<label class="custom-control-label" for="customCheck44"><span class="w-130p d-block text-truncate">grillmac@sundance.co.in</span></label>
																</div>
															</td>
															<td>$4562</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-indigo rounded-circle"><span class="initial-wrap"><span>F</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Folkswagan</span>
																	</div>
																</div>
															</td>
															<td>
																14/03/2018
															</td>
															<td><span class="badge badge-purple">Negotiation</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck45">
																	<label class="custom-control-label" for="customCheck45"><span class="w-130p d-block text-truncate">admin@novotel.inc</span></label>
																</div>
															</td>
															<td>$5012</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-purple rounded-circle"><span class="initial-wrap"><span>N</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Novotel</span>
																	</div>
																</div>
															</td>
															<td>
																21/02/2018
															</td>
															<td><span class="badge badge-orange">Offer Made</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck46">
																	<label class="custom-control-label" for="customCheck46"><span class="w-130p d-block text-truncate">displaypic@ho.au</span></label>
																</div>
															</td>
															<td>$1245</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-pink rounded-circle"><span class="initial-wrap"><span>D</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Displaypic</span>
																	</div>
																</div>
															</td>
															<td>
																3/02/2018
															</td>
															<td><span class="badge badge-orange">Offer Made</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck47">
																	<label class="custom-control-label" for="customCheck47"><span class="w-130p d-block text-truncate">manager@cobito.com</span></label>
																</div>
															</td>
															<td>$1245</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-yellow rounded-circle"><span class="initial-wrap"><span>C</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Cobito co.</span>
																	</div>
																</div>
															</td>
															<td>
																18/01/2018
															</td>
															<td><span class="badge badge-danger">Behind</span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card overflow-hide border-0">
									<div class="card-body pa-0">
										<div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
											<div class="fadeOut item img-background overlay-wrap" style="background-image:url(dist/img/slide1.jpg);">
												<div class="position-relative z-index-2 pa-20">
													<div class="position-relative text-white mnh-225p">
														<p>Very easy to use. Thanks to design, we've just launched our 5th website! Thank you for making it painless, pleasant and most of all hassle free! Just what I was looking for.</p>
														<div class="media position-absolute b-0 l-0 align-items-center">
															<div class="media-img-wrap d-flex mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-pink rounded-circle"><span class="initial-wrap"><span>ZC</span></span></span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block font-14 font-weight-500">Zuck Chan</span>
																<span class="d-block font-12">Design Lead, Hencework</span>
															</div>
														</div>
													</div>
												</div>
												<div class="bg-overlay bg-trans-dark-50"></div>
											</div>
											<div class="fadeOut item img-background overlay-wrap" style="background-image:url(dist/img/slide2.jpg);">
												<div class="position-relative z-index-2 pa-20">
													<div class="position-relative text-white mnh-225p">
														<p>Nice work on your design. Design is worth much more than I paid. We've used design for the last five years. I just can't get enough of design.</p>
														<div class="media position-absolute b-0 l-0 align-items-center">
															<div class="media-img-wrap d-flex mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-primary rounded-circle"><span class="initial-wrap"><span>NT</span></span></span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block font-14 font-weight-500">Normand T.</span>
																<span class="d-block font-12">Sales Executive, Media</span>
															</div>
														</div>
													</div>
												</div>
												<div class="bg-overlay bg-trans-dark-50"></div>
											</div>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header card-header-action">
										<h6>Recent Activity</h6>
										<div class="d-flex align-items-center card-action-wrap">
											<div class="inline-block dropdown">
												<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
									</div>


									<div class="card-body">
										<div class="user-activity user-activity-sm">
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Laura Thompson</span><span class="pl-5">joined josh groben team.</span></span>
														<span class="d-block font-13">3 hours ago</span>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<img src="dist/img/avatar3.jpg" alt="user" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Meayme Fletcher</span><span class="pl-5">liked photos</span></span>
														<span class="d-block font-13 mb-10">6 hours ago</span>
													</div>
													<div class="d-flex">
														<a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="dist/img/slide1.jpg" alt="Card image cap"></a>
														<a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="dist/img/slide2.jpg" alt="Card image cap"></a>
														<a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="dist/img/slide3.jpg" alt="Card image cap"></a>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<img src="dist/img/avatar4.jpg" alt="user" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Billy Flowers</span><span class="pl-5">Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text.</span></span>
														<span class="d-block font-13">32 days ago</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
				<div class="row">
					
					<div class="col-sm-6">

						<div class="card shadow mb-4">
						<canvas id="myAreaChart" width="500" height="400"></canvas>
						<script>
							// Area Chart Example
							var ctl = document.getElementById("myAreaChart");
							var myLineChart = new Chart(ctl, {
								type: 'line',
								data: {
									labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
									datasets: [{
										label: "Inhouse Orders",
										lineTension: 0.3,
										backgroundColor: "rgba(78, 115, 223, 0.05)",
										borderColor: "rgba(78, 115, 223, 1)",
										pointRadius: 3,
										pointBackgroundColor: "rgba(78, 115, 223, 1)",
										pointBorderColor: "rgba(78, 115, 223, 1)",
										pointHoverRadius: 3,
										pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
										pointHoverBorderColor: "rgba(78, 115, 223, 1)",
										pointHitRadius: 10,
										pointBorderWidth: 2,
										data: [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000],
									}],
								},
								options: {
									maintainAspectRatio: false,
									layout: {
										padding: {
											left: 10,
											right: 25,
											top: 25,
											bottom: 0
										}
									},
									scales: {
										xAxes: [{
											time: {
												unit: 'date'
											},
											gridLines: {
												display: false,
												drawBorder: false
											},
											ticks: {
												maxTicksLimit: 7
											}
										}],
										yAxes: [{
											ticks: {
												maxTicksLimit: 5,
												padding: 10,
												// Include a dollar sign in the ticks
												callback: function(value, index, values) {
													return '$' + number_format(value);
												}
											},
											gridLines: {
												color: "rgb(234, 236, 244)",
												zeroLineColor: "rgb(234, 236, 244)",
												drawBorder: false,
												borderDash: [2],
												zeroLineBorderDash: [2]
											}
										}],
									},
									legend: {
										display: false
									},
									tooltips: {
										backgroundColor: "rgb(255,255,255)",
										bodyFontColor: "#858796",
										titleMarginBottom: 10,
										titleFontColor: '#6e707e',
										titleFontSize: 14,
										borderColor: '#dddfeb',
										borderWidth: 1,
										xPadding: 15,
										yPadding: 15,
										displayColors: false,
										intersect: false,
										mode: 'index',
										caretPadding: 10,
										callbacks: {
											label: function(tooltipItem, chart) {
												var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
												return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
											}
										}
									}
								}
							});
						</script>
						</div>
					</div>


          <div class="col-sm-6">
			<div class="card shadow mb-4">
						<canvas id="myBarChart" width="500" height="400"></canvas>
						<script>
							var ctx = document.getElementById("myBarChart");
							var myBarChart = new Chart(ctx, {
								type: 'bar',
								data: {
									labels: ["January", "February", "March", "April", "May", "June"],
									datasets: [{
										label: "Products",
										backgroundColor: "#4e73df",
										hoverBackgroundColor: "#2e59d9",
										borderColor: "#4e73df",
										data: [4215, 5312, 6251, 7841, 9821, 14984],
									}],
								},
								options: {
									maintainAspectRatio: false,
									layout: {
										padding: {
											left: 10,
											right: 25,
											top: 25,
											bottom: 0
										}
									},
									scales: {
										xAxes: [{
											time: {
												unit: 'month'
											},
											gridLines: {
												display: false,
												drawBorder: false
											},
											ticks: {
												maxTicksLimit: 6
											},
											maxBarThickness: 25,
										}],
										yAxes: [{
											ticks: {
												min: 0,
												max: 15000,
												maxTicksLimit: 5,
												padding: 10,
												// Include a dollar sign in the ticks
												callback: function(value, index, values) {
													return '$' + number_format(value);
												}
											},
											gridLines: {
												color: "rgb(234, 236, 244)",
												zeroLineColor: "rgb(234, 236, 244)",
												drawBorder: false,
												borderDash: [2],
												zeroLineBorderDash: [2]
											}
										}],
									},
									legend: {
										display: false
									},
									tooltips: {
										titleMarginBottom: 10,
										titleFontColor: '#6e707e',
										titleFontSize: 14,
										backgroundColor: "rgb(255,255,255)",
										bodyFontColor: "#858796",
										borderColor: '#dddfeb',
										borderWidth: 1,
										xPadding: 15,
										yPadding: 15,
										displayColors: false,
										caretPadding: 10,
										callbacks: {
											label: function(tooltipItem, chart) {
												var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
												return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
											}
										}
									},
								}
							});
						</script>
					</div>
		  </div>
          
					<br>
					<!-- <div class="col-sm-6">
						<canvas id="myPie"></canvas>
						<script>
							// Pie Chart Example
							var cty = document.getElementById("myPie");
							var myPieChart = new Chart(cty, {
								type: 'doughnut',
								data: {
									datasets: [{
										data: [55, 30, 15],
										backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
										hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
										hoverBorderColor: "rgba(234, 236, 244, 1)",
									}],
								},
								options: {
									maintainAspectRatio: false,
									tooltips: {
										backgroundColor: "rgb(255,255,255)",
										bodyFontColor: "#858796",
										borderColor: '#dddfeb',
										borderWidth: 1,
										xPadding: 15,
										yPadding: 15,
										displayColors: false,
										caretPadding: 10,
									},
									legend: {
										display: false
									},
									cutoutPercentage: 80,
								},
							});
						</script>
					</div> -->
					<br>



				</div>
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->


		@endsection
