<html lang="" theme="light" sidebar="normal" class="js-focus-visible" data-js-focus-visible="">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="https://payday.gainhq.com/images/icon.png">
	<link rel="apple-touch-icon" href="https://payday.gainhq.com/images/icon.png">
	<link rel="apple-touch-icon-precomposed" href="https://payday.gainhq.com/images/icon.png">
	<title>Users &amp; Roles - PayDay</title>
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
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=318&amp;id=318" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Sharon Herzog</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=312&amp;id=312" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Marianna Zboncak</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=315&amp;id=315" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Sharon Herzog</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=317&amp;id=317" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Sharon Herzog</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=311&amp;id=311" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Marianna Zboncak</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=313&amp;id=313" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Sharon Herzog</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=316&amp;id=316" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Sharon Herzog</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=314&amp;id=314" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Sharon Herzog</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=310&amp;id=310" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Marianna Zboncak</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
														</div>
													</div>
												</a>
												<a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=308&amp;id=308" class="dropdown-item">
													<div class="media align-items-center">
														<div class="avatars-w-50 mr-3">
															<div>
																<div class="no-img rounded-circle"> AV </div>
																<!---->
															</div>
														</div>
														<div class="media-body">
															<p class="my-0 media-heading">An employee named <b>Marianna Zboncak</b> has been requested for Attendance</p> <span class="text-muted">
                            
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
					<li class="nav-item active"><a href="#administration" data-toggle="collapse" aria-expanded="false" aria-controls="administration" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase menu-icon"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg></span> <span class="menu-title">Administration</span> <i class="menu-arrow"></i></a>
						<div id="administration" class="collapse show">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/administration/users" class="nav-link active">
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
											<h4 class="mb-0">Users &amp; Roles</h4></li>
										<!---->
										<!---->
									</ol>
								</nav>
							</div>
							<div data-v-76b88b86="" class="col-sm-12 col-md-6">
								<div data-v-76b88b86="" class="float-md-right mb-3 mb-sm-3 mb-md-0">
									<button data-v-6f2921d8="" class="btn btn-success mr-2" data-v-76b88b86=""> Invite User </button>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
								<div class="card card-with-shadow border-0 pb-primary">
									<div class="card-header d-flex align-items-center p-primary primary-card-color">
										<h5 class="card-title d-inline-block mb-0">Users</h5>
										<div class="form-group form-group-with-search d-flex align-items-center"><span class="form-control-feedback"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
											<input type="text" placeholder="Search" class="form-control">
										</div>
									</div>
									<div class="p-primary d-flex align-items-center primary-card-color">
										<ul class="nav tab-filter-menu justify-content-flex-end">
											<li class="nav-item"><a href="#" class="nav-link py-0 font-size-default active">
                    All User
                </a></li>
											<li class="nav-item"><a href="#" class="nav-link py-0 font-size-default">
                    Active
                </a></li>
											<li class="nav-item"><a href="#" class="nav-link py-0 font-size-default">
                    Inactive
                </a></li>
											<li class="nav-item"><a href="#" class="nav-link py-0 font-size-default">
                    Invited
                </a></li>
										</ul>
									</div>
									<hr class="my-0">
									<div class="card-body p-0">
										<div>
											<!---->
											<div class="datatable">
												<!---->
												<!---->
												<!---->
												<div class="table-responsive custom-scrollbar table-view-responsive py-primary">
													<table class="table mb-0">
														<thead>
															<!---->
														</thead>
														<tbody>
															<tr>
																<!---->
																<td data-title="User" class="datatable-td pt-0 border-top-0"><span class=""><div data-v-f87dcd6e="" class="media align-items-center" table-id="user-table"><div data-v-f87dcd6e="" class="avatars-w-50"><div data-v-f87dcd6e=""><div class="no-img rounded-circle avatar-shadow">
        AK
    </div> <span class="status bg-danger"></span></div>
											</div>
											<div data-v-f87dcd6e="" class="media-body ml-3"><a data-v-f87dcd6e="" href="https://payday.gainhq.com/employees/5/profile">Anne Kessler</a>
												<p data-v-f87dcd6e="" class="text-muted font-size-90 mb-0"> keara36@example.com </p>
											</div>
										</div>
										</span>
										</td>
										<td data-title="Status" class="datatable-td pt-0 border-top-0"><span><span class="badge badge-pill badge-danger">Inactive</span></span>
										</td>
										<td data-title="Actions" class="datatable-td text-md-right pt-0 border-top-0"><span><div class="dropdown options-dropdown d-inline-block"><button type="button" data-toggle="dropdown" title="Actions" class="btn-option btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button> <div class="dropdown-menu dropdown-menu-right py-2 mt-1"><a href="#" class="dropdown-item px-4 py-2">
            Edit
        </a><a href="#" class="dropdown-item px-4 py-2">
            Activate
        </a><a href="#" class="dropdown-item px-4 py-2">
            Manage Role
        </a><a href="#" class="dropdown-item px-4 py-2">
            Remove from employee list
        </a></div></div></span></td>
										</tr>
										<!---->
										<tr>
											<!---->
											<td data-title="User" class="datatable-td"><span class=""><div data-v-f87dcd6e="" class="media align-items-center" table-id="user-table"><div data-v-f87dcd6e="" class="avatars-w-50"><div data-v-f87dcd6e=""><div class="no-img rounded-circle avatar-shadow">
        KK
    </div> <span class="status bg-danger"></span></div>
								</div>
								<div data-v-f87dcd6e="" class="media-body ml-3"><a data-v-f87dcd6e="" href="https://payday.gainhq.com/employees/6/profile">Katelynn Konopelski</a>
									<p data-v-f87dcd6e="" class="text-muted font-size-90 mb-0"> pweimann@example.com </p>
								</div>
							</div>
							</span>
							</td>
							<td data-title="Status" class="datatable-td"><span><span class="badge badge-pill badge-danger">Inactive</span></span>
							</td>
							<td data-title="Actions" class="datatable-td text-md-right"><span><div class="dropdown options-dropdown d-inline-block"><button type="button" data-toggle="dropdown" title="Actions" class="btn-option btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button> <div class="dropdown-menu dropdown-menu-right py-2 mt-1"><a href="#" class="dropdown-item px-4 py-2">
            Edit
        </a><a href="#" class="dropdown-item px-4 py-2">
            Activate
        </a><a href="#" class="dropdown-item px-4 py-2">
            Manage Role
        </a><a href="#" class="dropdown-item px-4 py-2">
            Remove from employee list
        </a></div></div></span></td>
							</tr>
							<!---->
							<tr>
								<!---->
								<td data-title="User" class="datatable-td"><span class=""><div data-v-f87dcd6e="" class="media align-items-center" table-id="user-table"><div data-v-f87dcd6e="" class="avatars-w-50"><div data-v-f87dcd6e=""><div class="no-img rounded-circle avatar-shadow">
        MZ
    </div> <span class="status bg-success"></span></div>
					</div>
					<div data-v-f87dcd6e="" class="media-body ml-3"><a data-v-f87dcd6e="" href="https://payday.gainhq.com/employees/7/profile">Marianna Zboncak</a>
						<p data-v-f87dcd6e="" class="text-muted font-size-90 mb-0"> ngulgowski@example.com </p>
					</div>
				</div>
				</span>
				</td>
				<td data-title="Status" class="datatable-td"><span><span class="badge badge-pill badge-success">Active</span></span>
				</td>
				<td data-title="Actions" class="datatable-td text-md-right"><span><div class="dropdown options-dropdown d-inline-block"><button type="button" data-toggle="dropdown" title="Actions" class="btn-option btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button> <div class="dropdown-menu dropdown-menu-right py-2 mt-1"><a href="#" class="dropdown-item px-4 py-2">
            Edit
        </a><a href="#" class="dropdown-item px-4 py-2">
            De-activate
        </a><a href="#" class="dropdown-item px-4 py-2">
            Manage Role
        </a><a href="#" class="dropdown-item px-4 py-2">
            Remove from employee list
        </a></div></div></span></td>
				</tr>
				<!---->
				<tr>
					<!---->
					<td data-title="User" class="datatable-td"><span class=""><div data-v-f87dcd6e="" class="media align-items-center" table-id="user-table"><div data-v-f87dcd6e="" class="avatars-w-50"><div data-v-f87dcd6e=""><div class="no-img rounded-circle avatar-shadow">
        SH
    </div> <span class="status bg-success"></span></div>
		</div>
		<div data-v-f87dcd6e="" class="media-body ml-3"><a data-v-f87dcd6e="" href="https://payday.gainhq.com/employees/8/profile">Sharon Herzog</a>
			<p data-v-f87dcd6e="" class="text-muted font-size-90 mb-0"> vesta74@example.net </p>
		</div>
	</div>
	</span>
	</td>
	<td data-title="Status" class="datatable-td"><span><span class="badge badge-pill badge-success">Active</span></span>
	</td>
	<td data-title="Actions" class="datatable-td text-md-right"><span><div class="dropdown options-dropdown d-inline-block"><button type="button" data-toggle="dropdown" title="Actions" class="btn-option btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button> <div class="dropdown-menu dropdown-menu-right py-2 mt-1"><a href="#" class="dropdown-item px-4 py-2">
            Edit
        </a><a href="#" class="dropdown-item px-4 py-2">
            De-activate
        </a><a href="#" class="dropdown-item px-4 py-2">
            Manage Role
        </a><a href="#" class="dropdown-item px-4 py-2">
            Remove from employee list
        </a></div></div></span></td>
	</tr>
	<!---->
	<tr>
		<!---->
		<td data-title="User" class="datatable-td"><span class=""><div data-v-f87dcd6e="" class="media align-items-center" table-id="user-table"><div data-v-f87dcd6e="" class="avatars-w-50"><div data-v-f87dcd6e=""><div class="no-img rounded-circle avatar-shadow">
        AS
    </div> <span class="status bg-success"></span></div>
			</div>
			<div data-v-f87dcd6e="" class="media-body ml-3"><a data-v-f87dcd6e="" href="https://payday.gainhq.com/employees/9/profile">Arnold Schultz</a>
				<p data-v-f87dcd6e="" class="text-muted font-size-90 mb-0"> kemmer.ruthie@example.org </p>
			</div>
			</div>
			</span>
		</td>
		<td data-title="Status" class="datatable-td"><span><span class="badge badge-pill badge-success">Active</span></span>
		</td>
		<td data-title="Actions" class="datatable-td text-md-right"><span><div class="dropdown options-dropdown d-inline-block"><button type="button" data-toggle="dropdown" title="Actions" class="btn-option btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button> <div class="dropdown-menu dropdown-menu-right py-2 mt-1"><a href="#" class="dropdown-item px-4 py-2">
            Edit
        </a><a href="#" class="dropdown-item px-4 py-2">
            De-activate
        </a><a href="#" class="dropdown-item px-4 py-2">
            Manage Role
        </a><a href="#" class="dropdown-item px-4 py-2">
            Remove from employee list
        </a></div></div></span></td>
	</tr>
	<!---->
	<tr>
		<!---->
		<td data-title="User" class="datatable-td"><span class=""><div data-v-f87dcd6e="" class="media align-items-center" table-id="user-table"><div data-v-f87dcd6e="" class="avatars-w-50"><div data-v-f87dcd6e=""><div class="no-img rounded-circle avatar-shadow">
        IG
    </div> <span class="status bg-success"></span></div>
			</div>
			<div data-v-f87dcd6e="" class="media-body ml-3"><a data-v-f87dcd6e="" href="https://payday.gainhq.com/employees/10/profile">Ida Gutmann</a>
				<p data-v-f87dcd6e="" class="text-muted font-size-90 mb-0"> esteban38@example.com </p>
			</div>
			</div>
			</span>
		</td>
		<td data-title="Status" class="datatable-td"><span><span class="badge badge-pill badge-success">Active</span></span>
		</td>
		<td data-title="Actions" class="datatable-td text-md-right"><span><div class="dropdown options-dropdown d-inline-block"><button type="button" data-toggle="dropdown" title="Actions" class="btn-option btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button> <div class="dropdown-menu dropdown-menu-right py-2 mt-1"><a href="#" class="dropdown-item px-4 py-2">
            Edit
        </a><a href="#" class="dropdown-item px-4 py-2">
            De-activate
        </a><a href="#" class="dropdown-item px-4 py-2">
            Manage Role
        </a><a href="#" class="dropdown-item px-4 py-2">
            Remove from employee list
        </a></div></div></span></td>
	</tr>
	<!---->
	<tr>
		<!---->
		<td data-title="User" class="datatable-td"><span class=""><div data-v-f87dcd6e="" class="media align-items-center" table-id="user-table"><div data-v-f87dcd6e="" class="avatars-w-50"><div data-v-f87dcd6e=""><div class="no-img rounded-circle avatar-shadow">
        MH
    </div> <span class="status bg-danger"></span></div>
			</div>
			<div data-v-f87dcd6e="" class="media-body ml-3"><a data-v-f87dcd6e="" href="https://payday.gainhq.com/employees/11/profile">Misty Harris</a>
				<p data-v-f87dcd6e="" class="text-muted font-size-90 mb-0"> mayert.shirley@example.com </p>
			</div>
			</div>
			</span>
		</td>
		<td data-title="Status" class="datatable-td"><span><span class="badge badge-pill badge-danger">Inactive</span></span>
		</td>
		<td data-title="Actions" class="datatable-td text-md-right"><span><div class="dropdown options-dropdown d-inline-block"><button type="button" data-toggle="dropdown" title="Actions" class="btn-option btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button> <div class="dropdown-menu dropdown-menu-right py-2 mt-1"><a href="#" class="dropdown-item px-4 py-2">
            Edit
        </a><a href="#" class="dropdown-item px-4 py-2">
            Activate
        </a><a href="#" class="dropdown-item px-4 py-2">
            Manage Role
        </a><a href="#" class="dropdown-item px-4 py-2">
            Remove from employee list
        </a></div></div></span></td>
	</tr>
	<!---->
	<tr>
		<!---->
		<td data-title="User" class="datatable-td"><span class=""><div data-v-f87dcd6e="" class="media align-items-center" table-id="user-table"><div data-v-f87dcd6e="" class="avatars-w-50"><div data-v-f87dcd6e=""><div class="no-img rounded-circle avatar-shadow">
        BH
    </div> <span class="status bg-success"></span></div>
			</div>
			<div data-v-f87dcd6e="" class="media-body ml-3"><a data-v-f87dcd6e="" href="https://payday.gainhq.com/employees/12/profile">Buddy Hoppe</a>
				<p data-v-f87dcd6e="" class="text-muted font-size-90 mb-0"> mikayla73@example.net </p>
			</div>
			</div>
			</span>
		</td>
		<td data-title="Status" class="datatable-td"><span><span class="badge badge-pill badge-success">Active</span></span>
		</td>
		<td data-title="Actions" class="datatable-td text-md-right"><span><div class="dropdown options-dropdown d-inline-block"><button type="button" data-toggle="dropdown" title="Actions" class="btn-option btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button> <div class="dropdown-menu dropdown-menu-right py-2 mt-1"><a href="#" class="dropdown-item px-4 py-2">
            Edit
        </a><a href="#" class="dropdown-item px-4 py-2">
            De-activate
        </a><a href="#" class="dropdown-item px-4 py-2">
            Manage Role
        </a><a href="#" class="dropdown-item px-4 py-2">
            Remove from employee list
        </a></div></div></span></td>
	</tr>
	<!---->
	<tr>
		<!---->
		<td data-title="User" class="datatable-td"><span class=""><div data-v-f87dcd6e="" class="media align-items-center" table-id="user-table"><div data-v-f87dcd6e="" class="avatars-w-50"><div data-v-f87dcd6e=""><div class="no-img rounded-circle avatar-shadow">
        AO
    </div> <span class="status bg-danger"></span></div>
			</div>
			<div data-v-f87dcd6e="" class="media-body ml-3"><a data-v-f87dcd6e="" href="https://payday.gainhq.com/employees/13/profile">Alysha Okuneva</a>
				<p data-v-f87dcd6e="" class="text-muted font-size-90 mb-0"> elsie.brown@example.org </p>
			</div>
			</div>
			</span>
		</td>
		<td data-title="Status" class="datatable-td"><span><span class="badge badge-pill badge-danger">Inactive</span></span>
		</td>
		<td data-title="Actions" class="datatable-td text-md-right"><span><div class="dropdown options-dropdown d-inline-block"><button type="button" data-toggle="dropdown" title="Actions" class="btn-option btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button> <div class="dropdown-menu dropdown-menu-right py-2 mt-1"><a href="#" class="dropdown-item px-4 py-2">
            Edit
        </a><a href="#" class="dropdown-item px-4 py-2">
            Activate
        </a><a href="#" class="dropdown-item px-4 py-2">
            Manage Role
        </a><a href="#" class="dropdown-item px-4 py-2">
            Remove from employee list
        </a></div></div></span></td>
	</tr>
	<!---->
	<tr>
		<!---->
		<td data-title="User" class="datatable-td"><span class=""><div data-v-f87dcd6e="" class="media align-items-center" table-id="user-table"><div data-v-f87dcd6e="" class="avatars-w-50"><div data-v-f87dcd6e=""><div class="no-img rounded-circle avatar-shadow">
        CH
    </div> <span class="status bg-danger"></span></div>
			</div>
			<div data-v-f87dcd6e="" class="media-body ml-3"><a data-v-f87dcd6e="" href="https://payday.gainhq.com/employees/14/profile">Candido Hodkiewicz</a>
				<p data-v-f87dcd6e="" class="text-muted font-size-90 mb-0"> jorge01@example.org </p>
			</div>
			</div>
			</span>
		</td>
		<td data-title="Status" class="datatable-td"><span><span class="badge badge-pill badge-danger">Inactive</span></span>
		</td>
		<td data-title="Actions" class="datatable-td text-md-right"><span><div class="dropdown options-dropdown d-inline-block"><button type="button" data-toggle="dropdown" title="Actions" class="btn-option btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button> <div class="dropdown-menu dropdown-menu-right py-2 mt-1"><a href="#" class="dropdown-item px-4 py-2">
            Edit
        </a><a href="#" class="dropdown-item px-4 py-2">
            Activate
        </a><a href="#" class="dropdown-item px-4 py-2">
            Manage Role
        </a><a href="#" class="dropdown-item px-4 py-2">
            Remove from employee list
        </a></div></div></span></td>
	</tr>
	<!---->
	</tbody>
	</table>
	<!---->
	</div>
	<div class="p-primary">
		<div>
			<div class="d-flex flex-column flex-md-row justify-content-between">
				<div class="dropdown-menu-filter d-flex align-items-center justify-content-center justify-content-md-start">
					<div class="dropdown keep-inside-clicks-open">
						<button type="button" id="show-pagination-user-table" data-toggle="dropdown" class="btn btn-filter"> 10 <img src="https://payday.gainhq.com/images/chevron-down.svg" alt="" style="height: 16px; width: 16px;"></button>
						<div aria-labelledby="show-pagination-user-table" class="my-2 dropdown-menu dropdown-menu-user-table"><a href="#" class="dropdown-item active disabled">
                                10
                            </a><a href="#" class="dropdown-item">
                                20
                            </a><a href="#" class="dropdown-item">
                                30
                            </a></div>
					</div>
					<label class="text-muted ml-2 mb-0">Items showing per page</label>
				</div>
				<nav style="">
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
						<li class="page-item"><a href="#" class="page-link border-0">2</a></li>
						<li class="page-item">
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
	</div>
	</div>
	<!---->
	<!---->
	<!---->
	<!---->
	</div>
	</div>
	</div>
	<div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
		<div class="card card-with-shadow border-0 h-100">
			<div class="card-header d-flex align-items-center p-primary bg-transparent">
				<h5 class="card-title d-inline-block mb-0">Roles</h5>
				<div class="form-group form-group-with-search d-flex align-items-center"><span class="form-control-feedback"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
					<input type="text" placeholder="Search" class="form-control">
				</div>
			</div>
			<div class="card-body p-0">
				<div>
					<!---->
					<div class="datatable">
						<!---->
						<!---->
						<!---->
						<div class="table-responsive custom-scrollbar table-view-responsive py-primary">
							<table class="table mb-0">
								<thead>
									<tr>
										<!---->
										<th track-by="0" class="datatable-th pt-0"><span class="font-size-default"><span>
                            Role name
                        </span></span>
										</th>
										<th track-by="1" class="datatable-th pt-0"><span class="font-size-default"><span>
                            Permission
                        </span></span>
										</th>
										<th track-by="2" class="datatable-th pt-0"><span class="font-size-default"><span>
                            Users
                        </span></span>
										</th>
										<th track-by="3" class="datatable-th pt-0 text-right"><span class="font-size-default">
                        Manage Users
                    </span></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<!---->
										<td data-title="Role name" class="datatable-td"><span class="">
                            App Admin
                        </span></td>
										<td data-title="Permission" class="datatable-td"><span><!----></span></td>
										<td data-title="Users" class="datatable-td"><span class=""><div avatars-group-class="avatars-group-w-50" name="exampleAvatarsGroup2" table-id="role-table"><div class="avatar-group avatars-group-w-50"><div class="no-img rounded-circle avatar-bordered avatar-shadow">
                JD
            </div> <!----></div></div></span></td>
										<td data-title="Manage Users" class="datatable-td text-md-right"><span><div role="group" aria-label="Default action" class="btn-group btn-group-action"><button type="button" data-toggle="tooltip" data-placement="top" title="" class="btn" data-original-title="Manage Users"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg></button></div></span></td>
									</tr>
									<!---->
									<tr>
										<!---->
										<td data-title="Role name" class="datatable-td"><span class="">
                            Manager
                        </span></td>
										<td data-title="Permission" class="datatable-td"><span><button class="btn btn-sm btn-primary rounded-pill px-3 py-1"><!---->
                                Manage
                            </button></span></td>
										<td data-title="Users" class="datatable-td"><span class=""><div avatars-group-class="avatars-group-w-50" name="exampleAvatarsGroup2" table-id="role-table"><div class="avatar-group avatars-group-w-50"><div class="no-img rounded-circle avatar-bordered avatar-shadow">
                SR
            </div> <!----></div></div></span></td>
										<td data-title="Manage Users" class="datatable-td text-md-right"><span><div role="group" aria-label="Default action" class="btn-group btn-group-action"><button type="button" data-toggle="tooltip" data-placement="top" title="" class="btn" data-original-title="Manage Users"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg></button></div></span></td>
									</tr>
									<!---->
									<tr>
										<!---->
										<td data-title="Role name" class="datatable-td"><span class="">
                            Department Manager
                        </span></td>
										<td data-title="Permission" class="datatable-td"><span><button class="btn btn-sm btn-primary rounded-pill px-3 py-1"><!---->
                                View
                            </button></span></td>
										<td data-title="Users" class="datatable-td"><span class=""><div avatars-group-class="avatars-group-w-50" name="exampleAvatarsGroup2" table-id="role-table"><div class="avatar-group avatars-group-w-50"><div class="no-img rounded-circle avatar-bordered avatar-shadow">
                TS
            </div><div class="no-img rounded-circle avatar-bordered avatar-shadow">
                MZ
            </div><div class="no-img rounded-circle avatar-bordered avatar-shadow">
                SH
            </div><div class="no-img rounded-circle avatar-bordered avatar-shadow">
                AS
            </div><div class="no-img rounded-circle avatar-bordered avatar-shadow">
                BH
            </div> <!----></div></div></span></td>
										<td data-title="Manage Users" class="datatable-td text-md-right"><span><div role="group" aria-label="Default action" class="btn-group btn-group-action"><button type="button" data-toggle="tooltip" data-placement="top" title="" class="btn" data-original-title="Manage Users"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg></button></div></span></td>
									</tr>
									<!---->
									<tr>
										<!---->
										<td data-title="Role name" class="datatable-td"><span class="">
                            Employee
                        </span></td>
										<td data-title="Permission" class="datatable-td"><span><button class="btn btn-sm btn-primary rounded-pill px-3 py-1"><!---->
                                View
                            </button></span></td>
										<td data-title="Users" class="datatable-td"><span class=""><div avatars-group-class="avatars-group-w-50" name="exampleAvatarsGroup2" table-id="role-table"><div class="avatar-group avatars-group-w-50"><div class="no-img rounded-circle avatar-bordered avatar-shadow">
                DB
            </div><div class="no-img rounded-circle avatar-bordered avatar-shadow">
                AK
            </div><div class="no-img rounded-circle avatar-bordered avatar-shadow">
                KK
            </div><div class="no-img rounded-circle avatar-bordered avatar-shadow">
                MZ
            </div><div class="no-img rounded-circle avatar-bordered avatar-shadow">
                SH
            </div><!----><!----><!----><!----><!----><!----> <a class="pl-3 text-muted">
            +6 more
        </a></div></div></span></td>
										<td data-title="Manage Users" class="datatable-td text-md-right"><span><div role="group" aria-label="Default action" class="btn-group btn-group-action"><button type="button" data-toggle="tooltip" data-placement="top" title="" class="btn" data-original-title="Manage Users"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg></button></div></span></td>
									</tr>
									<!---->
								</tbody>
							</table>
							<!---->
						</div>
						<div class="p-primary">
							<div class="text-center">
								<button type="button" class="btn  btn-load-more-data" style="display: none;"><span>
        Load more
    </span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!---->
			<!---->
			<!---->
		</div>
	</div>
	</div>
	<div>
		<!---->
	</div>
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
		"created_at": "2021-11-02T00:06:49.000000Z",
		"updated_at": "2021-11-02T00:06:49.000000Z",
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