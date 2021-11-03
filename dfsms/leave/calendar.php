<html lang="" theme="light" sidebar="normal" class="js-focus-visible" data-js-focus-visible="">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="https://payday.gainhq.com/images/icon.png">
	<link rel="apple-touch-icon" href="https://payday.gainhq.com/images/icon.png">
	<link rel="apple-touch-icon-precomposed" href="https://payday.gainhq.com/images/icon.png">
	<title>Calendar - PayDay</title>
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
											<div class="px-primary pb-2 primary-text-color d-flex justify-content-between"><a href="https://payday.gainhq.com/user/notifications?unread=1">19 New</a> <a href="#">Mark all as read</a> <a href="https://payday.gainhq.com/user/notifications">See all</a></div>
											<div class="dropdown-divider"></div>
											<div class="dropdown-items-wrapper custom-scrollbar max-height-300" id="infinite-list">
												<a href="https://payday.gainhq.com/employees/10/profile" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> SR </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Francis Rogahn</b> has been terminated by <b>Steve Rogers</b></p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>7:20 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=518&amp;id=518" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Kaci Gerlach</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=510&amp;id=510" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Kiara Bernier</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=514&amp;id=514" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Kiara Bernier</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=513&amp;id=513" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Kiara Bernier</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=509&amp;id=509" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Kiara Bernier</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=511&amp;id=511" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Kiara Bernier</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=512&amp;id=512" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Kiara Bernier</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=520&amp;id=520" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Kaci Gerlach</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=515&amp;id=515" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Kaci Gerlach</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
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
												<p class="mb-0 text-black text-right"> sachin kumar
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
													<p class="my-0 text-black">sachin kumar</p> <span class="text-secondary font-size-90"> Admin</span></div>
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
					<a href="https://payday.gainhq.com" class="navbar-brand brand-logo"><img src="https://payday.gainhq.com/images/logo.png" alt="logo"></a>
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
					<li class="nav-item active"><a href="#leave" data-toggle="collapse" aria-expanded="false" aria-controls="leave" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock menu-icon"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span> <span class="menu-title">Leave</span> <i class="menu-arrow"></i></a>
						<div id="leave" class="collapse show">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/leave/status" class="nav-link">
              Leave Status
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/leave/requests" class="nav-link">
              Leave Request
            </a></li>
								<li class="nav-item"><a href="https://payday.gainhq.com/leave/calendar" class="nav-link active">
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
					<li class="nav-item"><a href="#payroll_menu" data-toggle="collapse" aria-expanded="false" aria-controls="payroll_menu" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card menu-icon"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></span> <span class="menu-title">Payroll</span> <i class="menu-arrow"></i></a>
						<div id="payroll_menu" class="collapse">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/payroll/payrun" class="nav-link">
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
						<div data-v-76b88b86="" class="row">
							<div data-v-76b88b86="" class="col-sm-12 col-md-6">
								<nav data-v-76b88b86="" aria-label="breadcrumb">
									<ol class="breadcrumb p-0 d-flex align-items-center mb-primary">
										<li class="breadcrumb-item page-header d-flex align-items-center">
											<h4 class="mb-0">Calendar</h4></li>
										<!---->
										<!---->
									</ol>
								</nav>
							</div>
							<div data-v-76b88b86="" class="col-sm-12 col-md-6">
								<div data-v-76b88b86="" class="float-md-right mb-3 mb-sm-3 mb-md-0">
									<div data-v-76b88b86=""><a data-v-6f2921d8="" href="https://payday.gainhq.com/settings/leave-settings" class="btn btn-success mr-2">Settings</a>
										<div class="btn-group dropdown">
											<button data-v-6f2921d8="" class="btn btn-primary"> Assign leave </button>
											<!---->
											<!---->
										</div>
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
										</svg> Filters </button> <span class="mobile-filters-wrapper"><div class="filters-loop-wrapper"><!----> <!----> <!----> <!----> <!----> <!----> <div class="single-filter multi-select-filter search-filter-dropdown"><div class="dropdown dropdown-with-animation chips-dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-filter px-3">
            Department
            <!----></a> <div aria-labelledby="dropdownMenuLink" class="dropdown-menu py-0" style=""><div class="btn-dropdown-close d-sm-none"><span class="title">
                        Department
                    </span> <span class="back float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></div>
								<div class="form-group form-group-with-search"><span class="form-control-feedback"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
									<input type="text" placeholder="Search" autofocus="autofocus" class="form-control">
								</div>
								<div class="dropdown-divider my-0"></div>
								<div class="dropdown-search-result-wrapper custom-scrollbar"><a href="#" class="dropdown-item">
                    Main Department
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Admin &amp; HRM
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Accounts
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Development
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Software
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    UI &amp; UX
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
						<div class="dropdown"><a href="#" id="working_shifts-undefined" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-filter px-3">
            Work Shift
            <!----> <!----></a>
							<div aria-labelledby="working_shifts-undefined" class="dropdown-menu py-0" style="">
								<div class="btn-dropdown-close d-sm-none"><span class="title">
                    Work Shift
                </span> <span class="back float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></div>
								<div class="form-group form-group-with-search"><span class="form-control-feedback"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
									<input type="text" placeholder="Search" autofocus="autofocus" class="form-control undefined">
								</div>
								<div class="dropdown-divider my-0"></div>
								<div class="dropdown-search-result-wrapper custom-scrollbar"><a href="#" class="dropdown-item">
                    Regular work shift
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    demo working shift regular
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    demo working shift scheduled
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
						<div class="dropdown"><a href="#" id="leave_duration-undefined" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-filter px-3">
            Leave duration
            <!----> <!----></a>
							<div aria-labelledby="leave_duration-undefined" class="dropdown-menu py-0">
								<div class="btn-dropdown-close d-sm-none"><span class="title">
                    Leave duration
                </span> <span class="back float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></div>
								<div class="form-group form-group-with-search"><span class="form-control-feedback"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
									<input type="text" placeholder="Search" autofocus="autofocus" class="form-control undefined">
								</div>
								<div class="dropdown-divider my-0"></div>
								<div class="dropdown-search-result-wrapper custom-scrollbar"><a href="#" class="dropdown-item">
                    Hours
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Single day
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Multi day
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    First half
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Last half
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
					<div class="single-filter multi-select-filter search-filter-dropdown">
						<div class="dropdown dropdown-with-animation chips-dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-filter px-3">
            Users
            <!----></a>
							<div aria-labelledby="dropdownMenuLink" class="dropdown-menu py-0">
								<div class="btn-dropdown-close d-sm-none"><span class="title">
                        Users
                    </span> <span class="back float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></div>
								<div class="form-group form-group-with-search"><span class="form-control-feedback"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
									<input type="text" placeholder="Search" autofocus="autofocus" class="form-control">
								</div>
								<div class="dropdown-divider my-0"></div>
								<div class="dropdown-search-result-wrapper custom-scrollbar"><a href="#" class="dropdown-item">
                    sachin kumar
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Steve Rogers
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Tony Stark
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Dr. Banner
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Annetta Reynolds
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Lisandro Muller
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Nickolas White
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Keon Dietrich
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Tia Gibson
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Stephania Sporer
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Kiara Bernier
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    Kaci Gerlach
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a><a href="#" class="dropdown-item">
                    London Hammes
                    <span class="check-sign float-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check menu-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></span></a></div>
							</div>
						</div>
					</div>
					<!---->
					<!---->
					<!---->
					<!---->
				</div>
				<button type="button" class="btn btn-primary btn-with-shadow d-sm-none btn-close-filter-wrapper d-flex justify-content-center align-items-center"> Close </button>
				</span>
			</div>
		</div>
		<div>
			<div class="mr-0 single-filter single-search-wrapper">
				<div class="form-group form-group-with-search d-flex align-items-center">
					<div class="form-group form-group-with-search d-flex align-items-center"><span class="form-control-feedback"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
						<input type="text" placeholder="Search" class="form-control">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card card-with-shadow border-0">
		<div class="card-header p-primary primary-card-color">
			<div class="row align-items-center">
				<div class="col-md-10">
					<div class="d-flex align-items-center justify-content-between">
						<div class="d-flex justify-content-between mb-3 mb-lg-0">
							<div class="d-flex align-items-center month-year-picker mr-2">
								<!---->
								<div class="dropdown keep-inside-clicks-open calender-dropdown">
									<a href="#" class="text-muted ">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
											<polyline points="15 18 9 12 15 6"></polyline>
										</svg>
									</a>
									<div data-toggle="dropdown" class="d-inline-flex align-items-center justify-content-center btn p-0"><a href="#" class="mx-2 ">November, 2021</a></div>
									<a href="#" class="text-muted disabled d-none">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
											<polyline points="9 18 15 12 9 6"></polyline>
										</svg>
									</a>
									<div class="dropdown-menu p-3 mt-1">
										<div class="d-flex align-items-center justify-content-center mb-3">
											<a href="#" class="text-muted ">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
													<polyline points="15 18 9 12 15 6"></polyline>
												</svg>
											</a>
											<div class="dropdown years-dropdown"><a class="cursor-default mx-2 cursor-pointer">
                            2021
                        </a>
												<div id="month-years" class="dropdown-menu dropdown-menu-center dropdown-menu-years"><span class="caret"></span>
													<div class="custom-scrollbar years-wrapper"><a class="dropdown-item cursor-pointer">
                                    2021
                                </a><a class="dropdown-item cursor-pointer">
                                    2020
                                </a><a class="dropdown-item cursor-pointer">
                                    2019
                                </a><a class="dropdown-item cursor-pointer">
                                    2018
                                </a></div>
												</div>
											</div>
											<a href="#" class="text-muted text-muted disabled d-none">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
													<polyline points="9 18 15 12 9 6"></polyline>
												</svg>
											</a>
										</div>
										<div class="row">
											<div class="col-4"><a class="single-month ">
                            Jan
                        </a></div>
											<div class="col-4"><a class="single-month ">
                            Feb
                        </a></div>
											<div class="col-4"><a class="single-month ">
                            Mar
                        </a></div>
											<div class="col-4"><a class="single-month ">
                            Apr
                        </a></div>
											<div class="col-4"><a class="single-month ">
                            May
                        </a></div>
											<div class="col-4"><a class="single-month ">
                            Jun
                        </a></div>
											<div class="col-4"><a class="single-month ">
                            Jul
                        </a></div>
											<div class="col-4"><a class="single-month ">
                            Aug
                        </a></div>
											<div class="col-4"><a class="single-month ">
                            Sep
                        </a></div>
											<div class="col-4"><a class="single-month ">
                            Oct
                        </a></div>
											<div class="col-4"><a class="single-month bg-brand-color">
                            Nov
                        </a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<ul data-v-aca59184="" class="nav tab-filter-menu d-flex align-items-center">
							<li data-v-aca59184="" class="nav-item"><a data-v-aca59184="" href="#" class="nav-link py-0 ">
            Today
        </a></li>
							<li data-v-aca59184="" class="nav-item"><a data-v-aca59184="" href="#" class="nav-link py-0 ">
            This week
        </a></li>
							<li data-v-aca59184="" class="nav-item"><a data-v-aca59184="" href="#" class="nav-link py-0 ">
            Last week
        </a></li>
							<li data-v-aca59184="" class="nav-item"><a data-v-aca59184="" href="#" class="nav-link py-0 active">
            This month
        </a></li>
							<li data-v-aca59184="" class="nav-item"><a data-v-aca59184="" href="#" class="nav-link py-0 ">
            Last month
        </a></li>
							<li data-v-aca59184="" class="nav-item"><a data-v-aca59184="" href="#" class="nav-link py-0 ">
            This year
        </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div data-toggle="collapse" data-target="#requestedLeaves">
						<div class="customized-checkbox checkbox-default">
							<input type="checkbox" name="isLeaveRequest" id="isLeaveRequest" value="">
							<label for="isLeaveRequest" class="mb-0"> See leave requests </label>
						</div>
						<!---->
					</div>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div>
				<div class="row mb-primary">
					<div class="col-md-6 col-lg-3">
						<div class="default-base-color text-center rounded p-3">
							<h5>1</h5>
							<p class="text-muted mb-0">Employees on leave</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="default-base-color text-center rounded p-3">
							<h5>4:00:00</h5>
							<p class="text-muted mb-0">Total leave hours</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="default-base-color text-center rounded p-3">
							<h5>0</h5>
							<p class="text-muted mb-0"> On leave <span class="default-font-color">(Single day)</span></p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="default-base-color text-center rounded p-3">
							<h5>0</h5>
							<p class="text-muted mb-0"> On leave <span class="default-font-color">(Multi day)</span></p>
						</div>
					</div>
				</div>
				<div id="requestedLeaves" class="collapse">
					<div class="row mb-primary">
						<div class="col-md-6 col-lg-3">
							<div class="default-base-color text-center rounded p-3">
								<h5>1</h5>
								<p class="text-muted mb-0">Leave Request</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="default-base-color text-center rounded p-3">
								<h5>0:00:00</h5>
								<p class="text-muted mb-0">Total request hours</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="default-base-color text-center rounded p-3">
								<h5>0</h5>
								<p class="text-muted mb-0">Single day request</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="default-base-color text-center rounded p-3">
								<h5>1</h5>
								<p class="text-muted mb-0">Multi day request</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="summery-calendar leave-calendar mb-5 position-relative" style="min-height: 200px;">
				<div class="d-flex">
					<div class="profile-column">
						<div class="column-header">Profile</div>
						<div class="justify-content-start px-primary profile-box">
							<div class="mr-2">
								<div class="avatars-w-50 d-inline-block">
									<div class="no-img rounded-circle"> DB </div>
									<!---->
								</div>
							</div>
							<div>
								<h6 class="primary-text-color">Dr. Banner</h6>
								<p class="text-muted mb-0 font-size-90">Development</p>
							</div>
						</div>
					</div>
					<div class="age-column">
						<div class="column-header">Leave duration</div>
						<div class="column-content text-muted px-primary d-flex justify-content-center flex-column">
							<!---->
							<p class="mb-0">1 Half day</p>
							<!---->
						</div>
					</div>
					<div class="date-column custom-scrollbar custom-scrollbar-with-mouse-move">
						<div class="d-flex">
							<div class="date-value-wrapper">
								<div class="date"> Nov 1 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        First half
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Today</div></div></p> <hr class="my-2"> <p class="text-muted">
                        jkj
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age age-length-half "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 2 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 3 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 4 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 5 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 6 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 7 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 8 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 9 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 10 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 11 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 12 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 13 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 14 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 15 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 16 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 17 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 18 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 19 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 20 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 21 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 22 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 23 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 24 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 25 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 26 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 27 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 28 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 29 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
							<div class="date-value-wrapper">
								<div class="date"> Nov 30 </div>
								<div class="date-hour-wrapper">
									<div class="popover-leave-age"><span><span class="" style="display: none;"><div class="popper"><div class="popover-body"><div class="rounded p-primary"><p class="default-font-color mb-0">
                        
                    </p> <p class="text-muted mb-0"><div data-v-05b4c068="" class="width-150"><div data-v-05b4c068="">Invalid date</div></div></p> <hr class="my-2"> <p class="text-muted">
                        
                    </p> <div class="d-flex align-items-center justify-content-between"> <div><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></a></div></div></div></div></div> </span>
										<button class="leave-age  "></button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<nav style="display: none;">
					<ul class="pagination justify-content-center justify-content-md-end mb-0">
						<li class="page-item disabled">
							<a href="#" aria-label="Previous" class="page-link border-0">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
									<line x1="19" y1="12" x2="5" y2="12"></line>
									<polyline points="12 19 5 12 12 5"></polyline>
								</svg>
							</a>
						</li>
						<li class="page-item"><a href="#" class="page-link border-0 active disabled">1</a></li>
						<li class="page-item disabled">
							<a href="#" aria-label="Next" class="page-link border-0 align-content-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right menu-arrow">
									<line x1="5" y1="12" x2="19" y2="12"></line>
									<polyline points="12 5 19 12 12 19"></polyline>
								</svg>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<!---->
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
		"created_at": "2021-11-01T00:07:31.000000Z",
		"updated_at": "2021-11-01T00:07:31.000000Z",
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