<html lang="" theme="light" sidebar="normal" class="js-focus-visible" data-js-focus-visible="">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="https://payday.gainhq.com/images/icon.png">
	<link rel="apple-touch-icon" href="https://payday.gainhq.com/images/icon.png">
	<link rel="apple-touch-icon-precomposed" href="https://payday.gainhq.com/images/icon.png">
	<title>Payrun - PayDay</title>
	<link media="all" type="text/css" rel="stylesheet" href="https://payday.gainhq.com/css/core.css">
	<link media="all" type="text/css" rel="stylesheet" href="https://payday.gainhq.com/css/fontawesome.css">
	<link media="all" type="text/css" rel="stylesheet" href="https://payday.gainhq.com/css/dropzone.css">
	<link media="all" type="text/css" rel="stylesheet" href="https://payday.gainhq.com/vendor/summernote/summernote-bs4.css">
	
</head>

<body>
	<div id="app">
		<div class="container-scroller">
			<div>
				<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
					<div class="navbar-menu-wrapper d-flex align-items-stretch">
						<a href="" class="align-self-center d-lg-none pl-0 navbar-brand"><img src="https://payday.gainhq.com/images/icon.png" alt="logo"></a>
						<div class="d-flex justify-content-between w-100">
							<div class="d-flex justify-content-start">
								<button type="button" class="navbar-toggler align-self-center d-none d-lg-block pl-0"><span title="Collapse sidebar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left"><line x1="17" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="17" y1="18" x2="3" y2="18"></line></svg></span></button>
								<button type="button" data-toggle="offcanvas" class="navbar-toggler align-self-center d-lg-none pl-0">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left">
										<line x1="17" y1="10" x2="3" y2="10"></line>
										<line x1="21" y1="6" x2="3" y2="6"></line>
										<line x1="21" y1="14" x2="3" y2="14"></line>
										<line x1="17" y1="18" x2="3" y2="18"></line>
									</svg>
								</button>
							</div>
							<div class="d-flex justify-content-center"></div>
							<div>
								<ul class="navbar-nav navbar-nav-right ml-auto">
									<li class="nav-item">
										<button type="button" class="navbar-toggler align-self-center"><span title="Dark mood"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></span></button>
									</li>
									<li class="nav-item d-none d-lg-block">
										<a href="#" title="Fullscreen" class="d-flex align-items-center nav-link">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize">
												<path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>
											</svg>
										</a>
									</li>
									<li class="nav-item dropdown"><a href="#" id="languageDropdown" data-toggle="dropdown" aria-expanded="false" class="d-flex align-items-center nav-link dropdown-toggle">
        EN
    </a>
										<div aria-labelledby="languageDropdown" class="dropdown-menu dropdown-menu-right navbar-dropdown language-dropdown">
											<a href="https://payday.gainhq.com/lang/en" class="dropdown-item">
												<div class="d-flex align-items-center justify-content-center">
													<h6 class="mb-0 font-weight-normal">English</h6></div>
											</a>
										</div>
									</li>
									<li class="nav-item dropdown keep-inside-clicks-open">
										<a href="#" id="notificationDropdown" data-toggle="dropdown" class="d-flex align-items-center nav-link count-indicator dropdown-toggle">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
												<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
												<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
											</svg> <span class="count-symbol bg-primary spinner-grow"></span></a>
										<div aria-labelledby="notificationDropdown" class="dropdown-menu dropdown-menu-right navbar-dropdown notification-dropdown">
											<h6 class="p-primary">Notifications</h6>
											<div class="px-primary pb-2 primary-text-color d-flex justify-content-between"><a href="https://payday.gainhq.com/user/notifications?unread=1">12 New</a> <a href="#">Mark all as read</a> <a href="https://payday.gainhq.com/user/notifications">See all</a></div>
											<div class="dropdown-divider"></div>
											<div class="dropdown-items-wrapper custom-scrollbar max-height-300" id="infinite-list">
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=336&amp;id=336" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Dr. Banner</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>11:35 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=337&amp;id=337" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Dr. Banner</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>11:35 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=338&amp;id=338" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Dr. Banner</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>11:35 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=330&amp;id=330" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Tony Stark</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>11:35 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=331&amp;id=331" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Tony Stark</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>11:35 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=335&amp;id=335" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Dr. Banner</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>11:35 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=332&amp;id=332" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Tony Stark</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>11:35 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=333&amp;id=333" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Dr. Banner</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>11:35 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=334&amp;id=334" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Dr. Banner</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>11:35 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=328&amp;id=328" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Tony Stark</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>11:35 AM</span></span>
														</div>
													</div>
												</a>
												<!---->
											</div>
										</div>
									</li> <span class="topbar-divider d-none d-sm-block"></span>
									<li class="nav-item nav-profile dropdown">
										<a id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false" class="d-flex align-items-center nav-link dropdown-toggle mr-0">
											<div class="nav-profile-text">
												<p class="mb-0 text-black text-right">sachin kumar
													<br> <span class="text-secondary font-size-90 d-block mt-1">
                     Admin
                </span></p>
											</div>
											<div class="avatars-w-40"><img src="https://payday.gainhq.com/images/avatar.png" alt="image" class="rounded-circle">
												<!---->
											</div>
										</a>
										<div aria-labelledby="profileDropdown" class="dropdown-menu dropdown-menu-right navbar-dropdown">
											<div class="dropdown-item profile">
												<div class="avatars-w-50"><img src="https://payday.gainhq.com/images/avatar.png" alt="image" class="rounded-circle">
													<!---->
												</div>
												<div class="nav-profile-text font-size-default ml-2">
													<p class="my-0 text-black">sachin kumar</p> <span class="text-secondary font-size-90">App Admin</span></div>
											</div>
											<div class="dropdown-divider"></div>
											<a href="https://payday.gainhq.com/user/my-profile" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-3">
													<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
													<circle cx="12" cy="7" r="4"></circle>
												</svg> My profile </a>
											<a href="https://payday.gainhq.com/user/notifications" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-3">
													<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
													<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
												</svg> Notifications </a>
											<a href="https://payday.gainhq.com/app/settings" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-3">
													<circle cx="12" cy="12" r="3"></circle>
													<path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
												</svg> Settings </a>
											<a href="https://payday.gainhq.com/admin/log-out" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out mr-3">
													<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
													<polyline points="16 17 21 12 16 7"></polyline>
													<line x1="21" y1="12" x2="9" y2="12"></line>
												</svg> Log out </a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
				<!---->
			</div>
			<nav id="sidebar" class="sidebar sidebar-offcanvas">
				<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
					<a href="https://payday.gainhq.com" class="navbar-brand brand-logo"></a>
					<a href="https://payday.gainhq.com" class="navbar-brand brand-logo-mini"><img src="https://payday.gainhq.com/images/icon.png" alt="logo"></a>
				</div>
				<ul class="nav nav-scrolling">
					<li class="nav-item"><a href="https://payday.gainhq.com/dashboard" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart menu-icon"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg></span> <span class="menu-title">Dashboard</span> <!----></a>
						<!---->
					</li>
					<li class="nav-item"><a href="https://payday.gainhq.com/employees/1/profile" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user menu-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span> <span class="menu-title">Job Desk</span> <!----></a>
						<!---->
					</li>
					<li class="nav-item"><a href="#employee" data-toggle="collapse" aria-expanded="false" aria-controls="employee" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users menu-icon"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span> <span class="menu-title">Employee</span> <i class="menu-arrow"></i></a>
						<div id="employee" class="collapse">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/employee/lists" class="nav-link">
              All Employees
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/employee/designations" class="nav-link">
              Designation
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/employee/employment-statuses" class="nav-link">
              Employment Status
            </a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item"><a href="#leave" data-toggle="collapse" aria-expanded="false" aria-controls="leave" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock menu-icon"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span> <span class="menu-title">Leave</span> <i class="menu-arrow"></i></a>
						<div id="leave" class="collapse">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/leave/status" class="nav-link">
              Leave Status
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/leave/requests" class="nav-link">
              Leave Request
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/leave/calendar" class="nav-link">
              Calendar
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/leave/summaries" class="nav-link">
              Summary
            </a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item"><a href="#attendance_menu" data-toggle="collapse" aria-expanded="false" aria-controls="attendance_menu" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar menu-icon"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></span> <span class="menu-title">Attendance</span> <i class="menu-arrow"></i></a>
						<div id="attendance_menu" class="collapse">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/attendances/lists" class="nav-link">
              Daily Log
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/attendances/requests" class="nav-link">
              Attendance Request
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/attendances/details" class="nav-link">
              Attendance Details
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/attendances/summaries" class="nav-link">
              Summary
            </a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item active"><a href="#payroll_menu" data-toggle="collapse" aria-expanded="false" aria-controls="payroll_menu" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card menu-icon"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></span> <span class="menu-title">Payroll</span> <i class="menu-arrow"></i></a>
						<div id="payroll_menu" class="collapse show">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/payroll/payrun" class="nav-link active">
              Payrun
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/payroll/payslip" class="nav-link">
              Payslip
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/payroll/summery" class="nav-link">
              Summary
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/payroll/beneficiary-badges" class="nav-link">
              Beneficiary badge
            </a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item"><a href="#administration" data-toggle="collapse" aria-expanded="false" aria-controls="administration" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase menu-icon"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg></span> <span class="menu-title">Administration</span> <i class="menu-arrow"></i></a>
						<div id="administration" class="collapse">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/administration/users" class="nav-link">
              Users &amp; Roles
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/administration/work-shifts" class="nav-link">
              Work Shifts
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/administration/departments" class="nav-link">
              Departments
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/administration/holidays" class="nav-link">
              Holiday
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/administration/org-structure" class="nav-link">
              Org. Structure
            </a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item"><a href="#tenant-settings" data-toggle="collapse" aria-expanded="false" aria-controls="tenant-settings" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings menu-icon"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></span> <span class="menu-title">Settings</span> <i class="menu-arrow"></i></a>
						<div id="tenant-settings" class="collapse">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/app/settings" class="nav-link">
              App Settings
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/settings/leave-settings" class="nav-link">
              Leave Settings
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/settings/attendance" class="nav-link">
              Attendance Settings
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/settings/payroll-settings" class="nav-link">
              Payroll Settings
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/settings/import" class="nav-link">
              Import
            </a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
			<div class="container-fluid page-body-wrapper">
				<div class="main-panel">
					<div class="content-wrapper">
						<div class="row align-items-center">
							<div class="col-md-12 col-lg-6">
								<div class="d-flex align-items-center">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb p-0 d-flex align-items-center mb-primary">
											<li class="breadcrumb-item page-header d-flex align-items-center">
												<h4 class="mb-0">Payrun</h4></li>
											<!---->
										</ol>
									</nav>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="d-flex justify-content-lg-end mb-primary"><a data-v-6f2921d8="" href="https://payday.gainhq.com/settings/payroll-settings" class="btn btn-success mr-2">Settings</a>
									<div class="btn-group dropdown">
										<button data-v-6f2921d8="" class="btn btn-primary"> Default Payrun </button>
										<button data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary rounded-right px-3"><i class="fas fa-chevron-down fa-sm"></i></button>
										<div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">
                            Manual payrun
                        </a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between">
							<div>
								<div class="filters-wrapper d-flex justify-content-start flex-wrap">
									<button type="button" class="btn d-block d-sm-none btn-toggle-filters">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter">
											<polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
										</svg> Filters </button> <span class="mobile-filters-wrapper"><div class="filters-loop-wrapper"><div class="single-filter calendar-root"><div class="input-date"><span class="mr-2">
            Payrun date
        </span>
									<!---->
									<!---->
								</div>
								<!---->
							</div>
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<div class="single-filter calendar-root">
								<div class="input-date"><span class="mr-2">
            Created
        </span>
									<!---->
									<!---->
								</div>
								<!---->
							</div>
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<div class="single-filter multi-select-filter search-filter-dropdown">
								<div class="dropdown dropdown-with-animation chips-dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-filter px-3">
            Type
            <!----></a>
									<div aria-labelledby="dropdownMenuLink" class="dropdown-menu py-0">
										<div class="btn-dropdown-close d-sm-none"><span class="title">
                        Type
                    </span> <span class="back float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></div>
										<div class="form-group form-group-with-search"><span class="form-control-feedback"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
											<input type="text" placeholder="Search" autofocus="autofocus" class="form-control">
										</div>
										<div class="dropdown-divider my-0"></div>
										<div class="dropdown-search-result-wrapper custom-scrollbar"><a href="#" class="dropdown-item">
                    Manual
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Default
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Employee
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a></div>
									</div>
								</div>
							</div>
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<div class="single-filter search-filter-dropdown">
								<div class="dropdown"><a href="#" id="payrun_period-undefined" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-filter px-3">
            Payrun period
            <!----> <!----></a>
									<div aria-labelledby="payrun_period-undefined" class="dropdown-menu py-0">
										<div class="btn-dropdown-close d-sm-none"><span class="title">
                    Payrun period
                </span> <span class="back float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></div>
										<div class="form-group form-group-with-search"><span class="form-control-feedback"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
											<input type="text" placeholder="Search" autofocus="autofocus" class="form-control undefined">
										</div>
										<div class="dropdown-divider my-0"></div>
										<div class="dropdown-search-result-wrapper custom-scrollbar"><a href="#" class="dropdown-item">
                    Monthly
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Weekly
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Customized
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a></div>
									</div>
								</div>
							</div>
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<div class="single-filter search-filter-dropdown">
								<div class="dropdown"><a href="#" id="status-undefined" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-filter px-3">
            Status
            <!----> <!----></a>
									<div aria-labelledby="status-undefined" class="dropdown-menu py-0">
										<div class="btn-dropdown-close d-sm-none"><span class="title">
                    Status
                </span> <span class="back float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></div>
										<div class="form-group form-group-with-search"><span class="form-control-feedback"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
											<input type="text" placeholder="Search" autofocus="autofocus" class="form-control undefined">
										</div>
										<div class="dropdown-divider my-0"></div>
										<div class="dropdown-search-result-wrapper custom-scrollbar"><a href="#" class="dropdown-item">
                    generated
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Partially sent
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Sent
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a></div>
									</div>
								</div>
							</div>
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<div class="single-filter radio-filter">
								<div class="dropdown keep-inside-clicks-open">
									<button type="button" id="conflicted-undefined" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-filter"> Show conflicted
										<!---->
									</button>
									<div aria-labelledby="conflicted-undefined" class="dropdown-menu">
										<div class="btn-dropdown-close d-sm-none"><span class="title">
                    Show conflicted
                </span> <span class="back float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></div>
										<div class="dropdown-item pb-0">
											<h6>Show conflicted payrun</h6>
											<p class="text-justify mb-0 filter-subtitle-text"> Filter data which are conflicted. </p>
										</div>
										<div class="dropdown-item">
											<div class="d-flex justify-content-start">
												<label class="custom-control border-switch mb-0 mr-3">
													<input type="checkbox" class="border-switch-control-input"> <span class="border-switch-control-indicator"></span></label>
												<div class="pt-1"> No </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<button type="button" class="btn btn-primary btn-with-shadow d-sm-none btn-close-filter-wrapper d-flex justify-content-center align-items-center"> Close </button>
						</span>
					</div>
				</div>
				<div>
					<!---->
				</div>
			</div>
			<!---->
			<div>
				<div>
					<div data-v-f1e5c5d8="" class="mb-4">
						<div data-v-f1e5c5d8="" class="card card-with-shadow p-5 border-0">
							<div data-v-f1e5c5d8="" class="row">
								<div data-v-f1e5c5d8="" class="col-md-6">
									<div data-v-f1e5c5d8="">
										<h6 data-v-f1e5c5d8="" class="text-primary d-inline"><a data-v-f1e5c5d8="" href="https://payday.gainhq.com/payroll/payslip?payrun=XGAYEKFI">
                                01 - 31 Oct, 21
                            </a></h6> <span data-v-f1e5c5d8="" class="text-muted font-size-80 ml-2">
                            Includes 10 employees
                        </span></div>
									<div data-v-f1e5c5d8=""><span data-v-f1e5c5d8="" class="font-size-90">
                            Monthly -
                            None based

                            
                        </span> <span data-v-f1e5c5d8="" class="text-muted">|</span> <span data-v-f1e5c5d8="" class="font-size-90"><span data-v-f1e5c5d8="" class="text-info">
                                Default
                            </span> - Followed by Settings </span>
									</div>
									<div data-v-f1e5c5d8=""><span data-v-f1e5c5d8="" class="text-muted font-size-90">
                            ID
                        </span> <span data-v-f1e5c5d8="" class="font-size-90">XGAYEKFI</span></div>
									<div data-v-f1e5c5d8="" class="mt-1"><a data-v-f1e5c5d8="" href="https://payday.gainhq.com/payroll/payslip?payrun=XGAYEKFI" class="btn btn-outline-primary btn-sm  padding-y-2">
                            View payslips
                        </a></div>
								</div>
								<div data-v-f1e5c5d8="" class="col-md-3">
									<div data-v-f1e5c5d8="" class="mb-1"><span data-v-f1e5c5d8="" class="badge badge-sm badge-pill badge-success text-capitalize">
                            Sent
                        </span>
										<!---->
									</div>
									<!---->
									<div data-v-f1e5c5d8=""><span data-v-f1e5c5d8="" class="text-muted font-size-90"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar mr-1" data-v-f1e5c5d8=""><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            Created at
                        </span> <span data-v-f1e5c5d8="" class="font-size-90">Today</span></div>
									<div data-v-f1e5c5d8=""><span data-v-f1e5c5d8="" class="text-muted font-size-90"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check mr-1" data-v-f1e5c5d8=""><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                            Sent to 10 employee
                        </span></div>
									<!---->
								</div>
								<div data-v-f1e5c5d8="" class="col-md-3 text-right">
									<!---->
									<!---->
									<button data-v-f1e5c5d8="" class="btn btn-primary btn-sm"> Resend payslip </button>
								</div>
							</div>
						</div>
						<!---->
					</div>
					<div data-v-f1e5c5d8="" class="mb-4">
						<div data-v-f1e5c5d8="" class="card card-with-shadow p-5 border-0">
							<div data-v-f1e5c5d8="" class="row">
								<div data-v-f1e5c5d8="" class="col-md-6">
									<div data-v-f1e5c5d8="">
										<h6 data-v-f1e5c5d8="" class="text-primary d-inline"><a data-v-f1e5c5d8="" href="https://payday.gainhq.com/payroll/payslip?payrun=KMPMDVM7">
                                01 - 30 Sep, 21
                            </a></h6> <span data-v-f1e5c5d8="" class="text-muted font-size-80 ml-2">
                            Includes 3 employees
                        </span></div>
									<div data-v-f1e5c5d8=""><span data-v-f1e5c5d8="" class="font-size-90">
                            Monthly -
                            None based

                            
                        </span> <span data-v-f1e5c5d8="" class="text-muted">|</span> <span data-v-f1e5c5d8="" class="font-size-90"><span data-v-f1e5c5d8="" class="text-info">
                                Manual
                            </span> - Followed by Customized </span>
									</div>
									<div data-v-f1e5c5d8=""><span data-v-f1e5c5d8="" class="text-muted font-size-90">
                            ID
                        </span> <span data-v-f1e5c5d8="" class="font-size-90">KMPMDVM7</span></div>
									<div data-v-f1e5c5d8="" class="mt-1"><a data-v-f1e5c5d8="" href="https://payday.gainhq.com/payroll/payslip?payrun=KMPMDVM7" class="btn btn-outline-primary btn-sm  padding-y-2">
                            View payslips
                        </a></div>
								</div>
								<div data-v-f1e5c5d8="" class="col-md-3">
									<div data-v-f1e5c5d8="" class="mb-1"><span data-v-f1e5c5d8="" class="badge badge-sm badge-pill badge-secondary text-capitalize">
                            Generated
                        </span>
										<!---->
									</div>
									<!---->
									<div data-v-f1e5c5d8=""><span data-v-f1e5c5d8="" class="text-muted font-size-90"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar mr-1" data-v-f1e5c5d8=""><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            Created at
                        </span> <span data-v-f1e5c5d8="" class="font-size-90">Today</span></div>
									<div data-v-f1e5c5d8=""><span data-v-f1e5c5d8="" class="text-muted font-size-90"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check mr-1" data-v-f1e5c5d8=""><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                            Not yet sent
                        </span></div>
									<div data-v-f1e5c5d8="" class="text-warning"><span data-v-f1e5c5d8="" class="font-size-90"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag mr-1" data-v-f1e5c5d8=""><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                            Payslip of 1 employees are conflicted
                        </span> <span data-v-f1e5c5d8="" class="cursor-pointer text-primary font-size-90">Manage</span></div>
								</div>
								<div data-v-f1e5c5d8="" class="col-md-3 text-right">
									<div data-v-f1e5c5d8="" role="group" aria-label="Default action" class="btn-group btn-group-action">
										<button data-v-f1e5c5d8="" type="button" class="btn btn-link">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit" data-v-f1e5c5d8="">
												<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
												<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
											</svg>
										</button>
									</div>
									<div data-v-f1e5c5d8="" role="group" aria-label="Default action" class="btn-group btn-group-action">
										<button data-v-f1e5c5d8="" type="button" class="btn btn-link">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2" data-v-f1e5c5d8="">
												<polyline points="3 6 5 6 21 6"></polyline>
												<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
												<line x1="10" y1="11" x2="10" y2="17"></line>
												<line x1="14" y1="11" x2="14" y2="17"></line>
											</svg>
										</button>
									</div>
									<button data-v-f1e5c5d8="" class="btn btn-primary btn-sm"> Send payslip </button>
								</div>
							</div>
						</div>
						<!---->
					</div>
					<div data-v-f1e5c5d8="" class="mb-4">
						<div data-v-f1e5c5d8="" class="card card-with-shadow p-5 border-0">
							<div data-v-f1e5c5d8="" class="row">
								<div data-v-f1e5c5d8="" class="col-md-6">
									<div data-v-f1e5c5d8="">
										<h6 data-v-f1e5c5d8="" class="text-primary d-inline"><a data-v-f1e5c5d8="" href="https://payday.gainhq.com/payroll/payslip?payrun=EV2SOX6H">
                                01 - 11 Sep, 21
                            </a></h6> <span data-v-f1e5c5d8="" class="text-muted font-size-80 ml-2">
                            Includes 2 employees
                        </span></div>
									<div data-v-f1e5c5d8=""><span data-v-f1e5c5d8="" class="font-size-90">
                            Customized -
                            None based

                            
                        </span> <span data-v-f1e5c5d8="" class="text-muted">|</span> <span data-v-f1e5c5d8="" class="font-size-90"><span data-v-f1e5c5d8="" class="text-info">
                                Manual
                            </span> - Followed by Customized </span>
									</div>
									<div data-v-f1e5c5d8=""><span data-v-f1e5c5d8="" class="text-muted font-size-90">
                            ID
                        </span> <span data-v-f1e5c5d8="" class="font-size-90">EV2SOX6H</span></div>
									<div data-v-f1e5c5d8="" class="mt-1"><a data-v-f1e5c5d8="" href="https://payday.gainhq.com/payroll/payslip?payrun=EV2SOX6H" class="btn btn-outline-primary btn-sm  padding-y-2">
                            View payslips
                        </a></div>
								</div>
								<div data-v-f1e5c5d8="" class="col-md-3">
									<div data-v-f1e5c5d8="" class="mb-1"><span data-v-f1e5c5d8="" class="badge badge-sm badge-pill badge-secondary text-capitalize">
                            Generated
                        </span>
										<!---->
									</div>
									<!---->
									<div data-v-f1e5c5d8=""><span data-v-f1e5c5d8="" class="text-muted font-size-90"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar mr-1" data-v-f1e5c5d8=""><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            Created at
                        </span> <span data-v-f1e5c5d8="" class="font-size-90">Today</span></div>
									<div data-v-f1e5c5d8=""><span data-v-f1e5c5d8="" class="text-muted font-size-90"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check mr-1" data-v-f1e5c5d8=""><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                            Not yet sent
                        </span></div>
									<div data-v-f1e5c5d8="" class="text-warning"><span data-v-f1e5c5d8="" class="font-size-90"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag mr-1" data-v-f1e5c5d8=""><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                            Payslip of 1 employees are conflicted
                        </span> <span data-v-f1e5c5d8="" class="cursor-pointer text-primary font-size-90">Manage</span></div>
								</div>
								<div data-v-f1e5c5d8="" class="col-md-3 text-right">
									<div data-v-f1e5c5d8="" role="group" aria-label="Default action" class="btn-group btn-group-action">
										<button data-v-f1e5c5d8="" type="button" class="btn btn-link">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit" data-v-f1e5c5d8="">
												<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
												<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
											</svg>
										</button>
									</div>
									<div data-v-f1e5c5d8="" role="group" aria-label="Default action" class="btn-group btn-group-action">
										<button data-v-f1e5c5d8="" type="button" class="btn btn-link">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2" data-v-f1e5c5d8="">
												<polyline points="3 6 5 6 21 6"></polyline>
												<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
												<line x1="10" y1="11" x2="10" y2="17"></line>
												<line x1="14" y1="11" x2="14" y2="17"></line>
											</svg>
										</button>
									</div>
									<button data-v-f1e5c5d8="" class="btn btn-primary btn-sm"> Send payslip </button>
								</div>
							</div>
						</div>
						<!---->
					</div>
				</div>
				<!---->
				<!---->
			</div>
			<!---->
		</div>
	</div>
	</div>
	
	</div>
	</div>
	<script>
	window.localStorage.setItem('permissions', JSON.stringify({
		"is_app_admin": true
	}))
	window.onload = function() {
		window.scroll({
			top: 0,
			left: 0,
			behavior: 'smooth'
		})
	}
	</script>
	<script>
	window.tenant = {
		"id": 1,
		"name": "Default tenant",
		"short_name": "default-tenant",
		"is_single": true
	}
	</script>
	<script>
	window.settings = {
		"tenant_name": "PayDay",
		"tenant_icon": "\/images\/icon.png",
		"language": "en",
		"date_format": "d-m-Y",
		"time_format": "h",
		"time_zone": "UTC",
		"currency_symbol": "$",
		"decimal_separator": ".",
		"thousand_separator": ",",
		"number_of_decimal": "2",
		"currency_position": "prefix_with_space"
	}
	</script>
	<script>
	window.user = {
		"id": 1,
		"first_name": "sachin",
		"last_name": "kumar",
		"email": "sachin@demo.com",
		"last_login_at": null,
		"created_by": null,
		"status_id": "1",
		"invitation_token": null,
		"created_at": "2021-11-01T06:04:01.000000Z",
		"updated_at": "2021-11-01T06:04:01.000000Z",
		"deleted_at": null,
		"is_in_employee": "1",
		"full_name": "sachin kumar",
		"profile_picture": null,
		"roles": [{
			"id": 1,
			"name": "App Admin",
			"pivot": {
				"user_id": "1",
				"role_id": "1"
			}
		}]
	}
	</script>
	<script src="https://payday.gainhq.com/js/manifest.js"></script>
	<script src="https://payday.gainhq.com/js/vendor.js"></script>
	<script src="https://payday.gainhq.com/js/core.js"></script>
	<div>
		<div class="toast-container toast-top-right"></div>
		<div class="toast-container toast-bottom-right"></div>
		<div class="toast-container toast-bottom-left"></div>
		<div class="toast-container toast-top-left"></div>
		<div class="toast-container toast-top-full-width"></div>
		<div class="toast-container toast-bottom-full-width"></div>
		<div class="toast-container toast-top-center"></div>
		<div class="toast-container toast-bottom-center"></div>
	</div>
	<script src="https://payday.gainhq.com/vendor/summernote/summernote-bs4.js"></script>
</body>
<loom-container id="lo-engage-ext-container">
	<loom-shadow classname="resolved"></loom-shadow>
</loom-container>

</html>