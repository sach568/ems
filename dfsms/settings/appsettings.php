<html lang="" theme="light" sidebar="normal" class="js-focus-visible" data-js-focus-visible="">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="https://payday.gainhq.com/images/icon.png">
	<link rel="apple-touch-icon" href="https://payday.gainhq.com/images/icon.png">
	<link rel="apple-touch-icon-precomposed" href="https://payday.gainhq.com/images/icon.png">
	<title>App Settings - PayDay</title>
	<link media="all" type="text/css" rel="stylesheet" href="https://payday.gainhq.com/vendor/summernote/summernote-lite.css">
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
											</svg>
											<!---->
										</a>
										<div aria-labelledby="notificationDropdown" class="dropdown-menu dropdown-menu-right navbar-dropdown notification-dropdown no-notification-dropdown p-primary">
											<div class="d-flex justify-content-center"><img src="" alt="" class="no-notification-img"></div>
											<p class="text-center font-size-80 m-0 pt-2 pb-0"> </p>
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
													<p class="my-0 text-black">John Doe</p> <span class="text-secondary font-size-90">App Admin</span></div>
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
					<li class="nav-item active"><a href="#tenant-settings" data-toggle="collapse" aria-expanded="false" aria-controls="tenant-settings" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings menu-icon"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></span> <span class="menu-title">Settings</span> <i class="menu-arrow"></i></a>
						<div id="tenant-settings" class="collapse show">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a href="https://payday.gainhq.com/app/settings" class="nav-link active">
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
					<div data-v-06b29999="" class="content-wrapper">
						<div data-v-76b88b86="" data-v-06b29999="" class="row">
							<div data-v-76b88b86="" class="col-sm-12 col-md-6">
								<nav data-v-76b88b86="" aria-label="breadcrumb">
									<ol class="breadcrumb p-0 d-flex align-items-center mb-primary">
										<li class="breadcrumb-item page-header d-flex align-items-center">
											<h4 class="mb-0">App Settings</h4></li>
										<!---->
										<!---->
									</ol>
								</nav>
							</div>
							<div data-v-76b88b86="" class="col-sm-12 col-md-6">
								<div data-v-76b88b86="" class="float-md-right mb-3 mb-sm-3 mb-md-0"></div>
							</div>
						</div>
						<div data-v-06b29999="" class="vertical-tab">
							<div class="row no-gutters">
								<div class="col-md-3 pr-md-3 tab-menu">
									<div class="card card-with-shadow border-0">
										<div class="header-icon">
											<div class="icon-position d-flex justify-content-center">
												<div class="tab-icon d-flex justify-content-center align-items-center">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
														<circle cx="12" cy="12" r="3"></circle>
														<path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
													</svg>
												</div>
											</div>
										</div>
										<div class="px-primary py-primary">
											<div role="tablist" aria-orientation="vertical" class="nav flex-column nav-pills"><a id="v-pills-general-tab" data-toggle="pill" href="#general-0" class="text-capitalize tab-item-link d-flex justify-content-between my-2 my-sm-3 active"><span>general</span> <span class="active-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></span></a><a id="v-pills-Email setup-tab" data-toggle="pill" href="#Email setup-1" class="text-capitalize tab-item-link d-flex justify-content-between my-2 my-sm-3"><span>Email setup</span> <span class="active-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></span></a><a id="v-pills-Notification-tab" data-toggle="pill" href="#Notification-2" class="text-capitalize tab-item-link d-flex justify-content-between my-2 my-sm-3"><span>Notification</span> <span class="active-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></span></a><a id="v-pills-Update-tab" data-toggle="pill" href="#Update-3" class="text-capitalize tab-item-link d-flex justify-content-between my-2 my-sm-3"><span>Update</span> <span class="active-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></span></a></div>
										</div>
									</div>
								</div>
								<div class="col-md-9 pl-md-3 pt-md-0 pt-sm-4 pt-4">
									<div class="card card-with-shadow border-0">
										<div class="tab-content px-primary">
											<div id="general-0" class="tab-pane fade active show">
												<div class="d-flex justify-content-between">
													<h5 class="d-flex align-items-center text-capitalize mb-0 title tab-content-header">
                                general</h5>
													<div class="d-flex align-items-center mb-0">
														<!---->
													</div>
												</div>
												<hr>
												<div class="content py-primary">
													<div id="general-0">
														<form method="post" data-url="general/settings" enctype="multipart/form-data" class="mb-0">
															<fieldset class="form-group mb-5">
																<div class="row">
																	<legend class="col-12 col-form-label text-primary pt-0 mb-3"> Company info </legend>
																	<div class="col-md-12">
																		<div class="form-group row align-items-center">
																			<label for="appSettingsCompanyName" class="col-lg-3 col-xl-3 mb-lg-0"> Company name </label>
																			<div class="col-lg-8 col-xl-8">
																				<div>
																					<input type="text" name="settings_tenant_name" id="appSettingsCompanyName" required="required" placeholder="Enter company name" autocomplete="off" class="form-control ">
																					<!---->
																				</div>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label for="appSettingsCompanyLogo" class="col-lg-3 col-xl-3 mb-lg-0"> Company logo
																				<br> <small class="text-muted font-italic">
                                (Recommended size: 210 x 50 px)
                            </small></label>
																			<div class="col-lg-8 col-xl-8">
																				<div>
																					<div class="custom-image-upload-wrapper">
																						<div class="image-area d-flex"><img src="https://payday.gainhq.com/images/logo.png" alt="" class="img-fluid mx-auto my-auto"></div>
																						<div class="input-area">
																							<label id="upload-label" for="appSettingsCompanyLogo"> Change logo </label>
																							<input id="appSettingsCompanyLogo" type="file" class="form-control d-none">
																						</div>
																					</div>
																					<!---->
																				</div>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label for="appSettingsCompanyIcon" class="col-lg-3 col-xl-3 mb-lg-0"> Company icon
																				<br> <small class="text-muted font-italic">
                                (Recommended size: 50 x 50 px)
                            </small></label>
																			<div class="col-lg-8 col-xl-8">
																				<div>
																					<div class="custom-image-upload-wrapper">
																						<div class="image-area d-flex"><img src="https://payday.gainhq.com/images/icon.png" alt="" class="img-fluid mx-auto my-auto"></div>
																						<div class="input-area">
																							<label id="upload-label" for="appSettingsCompanyIcon"> Change icon </label>
																							<input id="appSettingsCompanyIcon" type="file" class="form-control d-none">
																						</div>
																					</div>
																					<!---->
																				</div>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label for="appSettingsCompanyBanner" class="col-lg-3 col-xl-3 mb-lg-0"> Company banner
																				<br> <small class="text-muted font-italic">
                                (Recommended size: 1920 x 1080 px)
                            </small></label>
																			<div class="col-lg-8 col-xl-8">
																				<div>
																					<div class="custom-image-upload-wrapper">
																						<div class="image-area d-flex"><img src="https://payday.gainhq.com/images/default_banner.jpg" alt="" class="img-fluid mx-auto my-auto"></div>
																						<div class="input-area">
																							<label id="upload-label" for="appSettingsCompanyBanner"> Change banner </label>
																							<input id="appSettingsCompanyBanner" type="file" class="form-control d-none">
																						</div>
																					</div>
																					<!---->
																				</div>
																			</div>
																		</div>
																		<div class="form-group row align-items-center">
																			<label for="appSettingsLanguage" class="col-lg-3 col-xl-3 mb-lg-0"> Language </label>
																			<div class="col-lg-8 col-xl-8">
																				<div>
																					<select id="appSettingsLanguage" class="custom-select" style="background-image: url(&quot;https://payday.gainhq.com/images/chevron-down.svg&quot;);">
																						<option value="en"> English </option>
																					</select>
																					<!---->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</fieldset>
															<fieldset class="form-group mb-5">
																<div class="row">
																	<legend class="col-12 col-form-label text-primary pt-0 mb-3"> Address Details </legend>
																	<div class="col-md-12">
																		<div class="form-group" chooselabel="Country" list="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]">
																			<div class="row align-items-center">
																				<div class="col-lg-3 col-xl-3 col-md-3 col-sm-12 col-xs-12">
																					<label class="text-left d-block mb-lg-0"> Country
																						<!---->
																						<!---->
																					</label>
																				</div>
																				<div class="col-lg-8 col-xl-8 col-md-8 col-sm-12 col-xs-12">
																					<div>
																						<select id="settings.country" class="custom-select" style="background-image: url(&quot;https://payday.gainhq.com/images/chevron-down.svg&quot;);">
																							<option disabled="disabled" value=""> Choose a country </option>
																							<option value="Afghanistan"> Afghanistan </option>
																							<option value="Albania"> Albania </option>
																							<option value="Algeria"> Algeria </option>
																							<option value="American Samoa"> American Samoa </option>
																							<option value="Andorra"> Andorra </option>
																							<option value="Angola"> Angola </option>
																							<option value="Anguilla"> Anguilla </option>
																							<option value="Antarctica"> Antarctica </option>
																							<option value="Antigua and Barbuda"> Antigua and Barbuda </option>
																							<option value="Argentina"> Argentina </option>
																							<option value="Armenia"> Armenia </option>
																							<option value="Aruba"> Aruba </option>
																							<option value="Australia"> Australia </option>
																							<option value="Austria"> Austria </option>
																							<option value="Azerbaijan"> Azerbaijan </option>
																							<option value="Bahamas"> Bahamas </option>
																							<option value="Bahrain"> Bahrain </option>
																							<option value="Bangladesh"> Bangladesh </option>
																							<option value="Barbados"> Barbados </option>
																							<option value="Belarus"> Belarus </option>
																							<option value="Belgium"> Belgium </option>
																							<option value="Belize"> Belize </option>
																							<option value="Benin"> Benin </option>
																							<option value="Bermuda"> Bermuda </option>
																							<option value="Bhutan"> Bhutan </option>
																							<option value="Bolivia"> Bolivia </option>
																							<option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
																							<option value="Botswana"> Botswana </option>
																							<option value="Bouvet Island"> Bouvet Island </option>
																							<option value="Brazil"> Brazil </option>
																							<option value="British Indian Ocean Territory"> British Indian Ocean Territory </option>
																							<option value="Brunei Darussalam"> Brunei Darussalam </option>
																							<option value="Bulgaria"> Bulgaria </option>
																							<option value="Burkina Faso"> Burkina Faso </option>
																							<option value="Burundi"> Burundi </option>
																							<option value="Cambodia"> Cambodia </option>
																							<option value="Cameroon"> Cameroon </option>
																							<option value="Canada"> Canada </option>
																							<option value="Cape Verde"> Cape Verde </option>
																							<option value="Cayman Islands"> Cayman Islands </option>
																							<option value="Central African Republic"> Central African Republic </option>
																							<option value="Chad"> Chad </option>
																							<option value="Chile"> Chile </option>
																							<option value="China"> China </option>
																							<option value="Christmas Island"> Christmas Island </option>
																							<option value="Cocos (Keeling Islands)"> Cocos (Keeling Islands) </option>
																							<option value="Colombia"> Colombia </option>
																							<option value="Comoros"> Comoros </option>
																							<option value="Congo"> Congo </option>
																							<option value="Cook Islands"> Cook Islands </option>
																							<option value="Costa Rica"> Costa Rica </option>
																							<option value="Cote D'Ivoire (Ivory Coast)"> Cote D'Ivoire (Ivory Coast) </option>
																							<option value="Croatia (Hrvatska"> Croatia (Hrvatska </option>
																							<option value="Cuba"> Cuba </option>
																							<option value="Cyprus"> Cyprus </option>
																							<option value="Czech Republic"> Czech Republic </option>
																							<option value="Denmark"> Denmark </option>
																							<option value="Djibouti"> Djibouti </option>
																							<option value="Dominica"> Dominica </option>
																							<option value="Dominican Republic"> Dominican Republic </option>
																							<option value="East Timor"> East Timor </option>
																							<option value="Ecuador"> Ecuador </option>
																							<option value="Egypt"> Egypt </option>
																							<option value="El Salvador"> El Salvador </option>
																							<option value="Equatorial Guinea"> Equatorial Guinea </option>
																							<option value="Eritrea"> Eritrea </option>
																							<option value="Estonia"> Estonia </option>
																							<option value="Ethiopia"> Ethiopia </option>
																							<option value="Falkland Islands (Malvinas)"> Falkland Islands (Malvinas) </option>
																							<option value="Faroe Islands"> Faroe Islands </option>
																							<option value="Fiji"> Fiji </option>
																							<option value="Finland"> Finland </option>
																							<option value="France"> France </option>
																							<option value="Metropolitan"> Metropolitan </option>
																							<option value="French Guiana"> French Guiana </option>
																							<option value="French Polynesia"> French Polynesia </option>
																							<option value="French Southern Territories"> French Southern Territories </option>
																							<option value="Gabon"> Gabon </option>
																							<option value="Gambia"> Gambia </option>
																							<option value="Georgia"> Georgia </option>
																							<option value="Germany"> Germany </option>
																							<option value="Ghana"> Ghana </option>
																							<option value="Gibraltar"> Gibraltar </option>
																							<option value="Greece"> Greece </option>
																							<option value="Greenland"> Greenland </option>
																							<option value="Grenada"> Grenada </option>
																							<option value="Guadeloupe"> Guadeloupe </option>
																							<option value="Guam"> Guam </option>
																							<option value="Guatemala"> Guatemala </option>
																							<option value="Guinea"> Guinea </option>
																							<option value="Guinea-Bissau"> Guinea-Bissau </option>
																							<option value="Guyana"> Guyana </option>
																							<option value="Haiti"> Haiti </option>
																							<option value="Heard and McDonald Islands"> Heard and McDonald Islands </option>
																							<option value="Honduras"> Honduras </option>
																							<option value="Hong Kong"> Hong Kong </option>
																							<option value="Hungary"> Hungary </option>
																							<option value="Iceland"> Iceland </option>
																							<option value="India"> India </option>
																							<option value="Indonesia"> Indonesia </option>
																							<option value="Iran"> Iran </option>
																							<option value="Iraq"> Iraq </option>
																							<option value="Ireland"> Ireland </option>
																							<option value="Israel"> Israel </option>
																							<option value="Italy"> Italy </option>
																							<option value="Jamaica"> Jamaica </option>
																							<option value="Japan"> Japan </option>
																							<option value="Jordan"> Jordan </option>
																							<option value="Kazakhstan"> Kazakhstan </option>
																							<option value="Kenya"> Kenya </option>
																							<option value="Kiribati"> Kiribati </option>
																							<option value="Korea (North)"> Korea (North) </option>
																							<option value="Korea (South)"> Korea (South) </option>
																							<option value="Kuwait"> Kuwait </option>
																							<option value="Kyrgyzstan"> Kyrgyzstan </option>
																							<option value="Laos"> Laos </option>
																							<option value="Latvia"> Latvia </option>
																							<option value="Lebanon"> Lebanon </option>
																							<option value="Lesotho"> Lesotho </option>
																							<option value="Liberia"> Liberia </option>
																							<option value="Libya"> Libya </option>
																							<option value="Liechtenstein"> Liechtenstein </option>
																							<option value="Lithuania"> Lithuania </option>
																							<option value="Luxembourg"> Luxembourg </option>
																							<option value="Macau"> Macau </option>
																							<option value="Macedonia"> Macedonia </option>
																							<option value="Madagascar"> Madagascar </option>
																							<option value="Malawi"> Malawi </option>
																							<option value="Malaysia"> Malaysia </option>
																							<option value="Maldives"> Maldives </option>
																							<option value="Mali"> Mali </option>
																							<option value="Malta"> Malta </option>
																							<option value="Marshall Islands"> Marshall Islands </option>
																							<option value="Martinique"> Martinique </option>
																							<option value="Mauritania"> Mauritania </option>
																							<option value="Mauritius"> Mauritius </option>
																							<option value="Mayotte"> Mayotte </option>
																							<option value="Mexico"> Mexico </option>
																							<option value="Micronesia"> Micronesia </option>
																							<option value="Moldova"> Moldova </option>
																							<option value="Monaco"> Monaco </option>
																							<option value="Mongolia"> Mongolia </option>
																							<option value="Montserrat"> Montserrat </option>
																							<option value="Morocco"> Morocco </option>
																							<option value="Mozambique"> Mozambique </option>
																							<option value="Myanmar"> Myanmar </option>
																							<option value="Namibia"> Namibia </option>
																							<option value="Nauru"> Nauru </option>
																							<option value="Nepal"> Nepal </option>
																							<option value="Netherlands"> Netherlands </option>
																							<option value="Netherlands Antilles"> Netherlands Antilles </option>
																							<option value="New Caledonia"> New Caledonia </option>
																							<option value="New Zealand"> New Zealand </option>
																							<option value="Nicaragua"> Nicaragua </option>
																							<option value="Niger"> Niger </option>
																							<option value="Nigeria"> Nigeria </option>
																							<option value="Niue"> Niue </option>
																							<option value="Norfolk Island"> Norfolk Island </option>
																							<option value="Northern Mariana Islands"> Northern Mariana Islands </option>
																							<option value="Norway"> Norway </option>
																							<option value="Oman"> Oman </option>
																							<option value="Pakistan"> Pakistan </option>
																							<option value="Palau"> Palau </option>
																							<option value="Panama"> Panama </option>
																							<option value="Papua New Guinea"> Papua New Guinea </option>
																							<option value="Paraguay"> Paraguay </option>
																							<option value="Peru"> Peru </option>
																							<option value="Philippines"> Philippines </option>
																							<option value="Pitcairn"> Pitcairn </option>
																							<option value="Poland"> Poland </option>
																							<option value="Portugal"> Portugal </option>
																							<option value="Puerto Rico"> Puerto Rico </option>
																							<option value="Qatar"> Qatar </option>
																							<option value="Reunion"> Reunion </option>
																							<option value="Romania"> Romania </option>
																							<option value="Russian Federation"> Russian Federation </option>
																							<option value="Rwanda"> Rwanda </option>
																							<option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
																							<option value="Saint Lucia"> Saint Lucia </option>
																							<option value="Saint Vincent and The Grenadines"> Saint Vincent and The Grenadines </option>
																							<option value="Samoa"> Samoa </option>
																							<option value="San Marino"> San Marino </option>
																							<option value="Sao Tome and Principe"> Sao Tome and Principe </option>
																							<option value="Saudi Arabia"> Saudi Arabia </option>
																							<option value="Senegal"> Senegal </option>
																							<option value="Seychelles"> Seychelles </option>
																							<option value="Sierra Leone"> Sierra Leone </option>
																							<option value="Singapore"> Singapore </option>
																							<option value="Slovak Republic"> Slovak Republic </option>
																							<option value="Slovenia"> Slovenia </option>
																							<option value="Solomon Islands"> Solomon Islands </option>
																							<option value="Somalia"> Somalia </option>
																							<option value="South Africa"> South Africa </option>
																							<option value="S. Georgia and S. Sandwich Isls."> S. Georgia and S. Sandwich Isls. </option>
																							<option value="Spain"> Spain </option>
																							<option value="Sri Lanka"> Sri Lanka </option>
																							<option value="St. Helena"> St. Helena </option>
																							<option value="St. Pierre and Miquelon"> St. Pierre and Miquelon </option>
																							<option value="Sudan"> Sudan </option>
																							<option value="Suriname"> Suriname </option>
																							<option value="Svalbard and Jan Mayen Islands"> Svalbard and Jan Mayen Islands </option>
																							<option value="Swaziland"> Swaziland </option>
																							<option value="Sweden"> Sweden </option>
																							<option value="Switzerland"> Switzerland </option>
																							<option value="Syria"> Syria </option>
																							<option value="Taiwan"> Taiwan </option>
																							<option value="Tajikistan"> Tajikistan </option>
																							<option value="Tanzania"> Tanzania </option>
																							<option value="Thailand"> Thailand </option>
																							<option value="Togo"> Togo </option>
																							<option value="Tokelau"> Tokelau </option>
																							<option value="Tonga"> Tonga </option>
																							<option value="Trinidad and Tobago"> Trinidad and Tobago </option>
																							<option value="Tunisia"> Tunisia </option>
																							<option value="Turkey"> Turkey </option>
																							<option value="Turkmenistan"> Turkmenistan </option>
																							<option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
																							<option value="Tuvalu"> Tuvalu </option>
																							<option value="Uganda"> Uganda </option>
																							<option value="Ukraine"> Ukraine </option>
																							<option value="United Arab Emirates"> United Arab Emirates </option>
																							<option value="United Kingdom (Britain / UK)"> United Kingdom (Britain / UK) </option>
																							<option value="United States of America (USA)"> United States of America (USA) </option>
																							<option value="US Minor Outlying Islands"> US Minor Outlying Islands </option>
																							<option value="Uruguay"> Uruguay </option>
																							<option value="Uzbekistan"> Uzbekistan </option>
																							<option value="Vanuatu"> Vanuatu </option>
																							<option value="Vatican City State (Holy See)"> Vatican City State (Holy See) </option>
																							<option value="Venezuela"> Venezuela </option>
																							<option value="Viet Nam"> Viet Nam </option>
																							<option value="Virgin Islands (British)"> Virgin Islands (British) </option>
																							<option value="Virgin Islands (US)"> Virgin Islands (US) </option>
																							<option value="Wallis and Futuna Islands"> Wallis and Futuna Islands </option>
																							<option value="Western Sahara"> Western Sahara </option>
																							<option value="Yemen"> Yemen </option>
																							<option value="Yugoslavia"> Yugoslavia </option>
																							<option value="Zaire"> Zaire </option>
																							<option value="Zambia"> Zambia </option>
																							<option value="Zimbabwe"> Zimbabwe </option>
																						</select>
																						<!---->
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="form-group" placeholder="Enter area ">
																			<div class="row align-items-center">
																				<div class="col-lg-3 col-xl-3 col-md-3 col-sm-12 col-xs-12">
																					<label class="text-left d-block mb-lg-0"> Area
																						<!---->
																						<!---->
																					</label>
																				</div>
																				<div class="col-lg-8 col-xl-8 col-md-8 col-sm-12 col-xs-12">
																					<div>
																						<input type="text" name="model" id="settings.area" placeholder="Enter area " autocomplete="false" class="form-control ">
																						<!---->
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="form-group" placeholder="Enter city ">
																			<div class="row align-items-center">
																				<div class="col-lg-3 col-xl-3 col-md-3 col-sm-12 col-xs-12">
																					<label class="text-left d-block mb-lg-0"> City
																						<!---->
																						<!---->
																					</label>
																				</div>
																				<div class="col-lg-8 col-xl-8 col-md-8 col-sm-12 col-xs-12">
																					<div>
																						<input type="text" name="model" id="settings.city" placeholder="Enter city " autocomplete="false" class="form-control ">
																						<!---->
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="form-group" placeholder="Enter state ">
																			<div class="row align-items-center">
																				<div class="col-lg-3 col-xl-3 col-md-3 col-sm-12 col-xs-12">
																					<label class="text-left d-block mb-lg-0"> State
																						<!---->
																						<!---->
																					</label>
																				</div>
																				<div class="col-lg-8 col-xl-8 col-md-8 col-sm-12 col-xs-12">
																					<div>
																						<input type="text" name="model" id="settings.state" placeholder="Enter state " autocomplete="false" class="form-control ">
																						<!---->
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="form-group" placeholder="Enter zip code ">
																			<div class="row align-items-center">
																				<div class="col-lg-3 col-xl-3 col-md-3 col-sm-12 col-xs-12">
																					<label class="text-left d-block mb-lg-0"> Zip code
																						<!---->
																						<!---->
																					</label>
																				</div>
																				<div class="col-lg-8 col-xl-8 col-md-8 col-sm-12 col-xs-12">
																					<div>
																						<input type="text" name="model" id="settings.zip_code" placeholder="Enter zip code " autocomplete="false" class="form-control ">
																						<!---->
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="form-group" placeholder="Enter address ">
																			<div class="row align-items-center">
																				<div class="col-lg-3 col-xl-3 col-md-3 col-sm-12 col-xs-12">
																					<label class="text-left d-block mb-lg-0"> Address
																						<!---->
																						<!---->
																					</label>
																				</div>
																				<div class="col-lg-8 col-xl-8 col-md-8 col-sm-12 col-xs-12">
																					<div>
																						<textarea type="textarea" id="settings.address" name="model" placeholder="Enter address " spellcheck="false" class="custom-scrollbar "></textarea>
																						<!---->
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</fieldset>
															<fieldset class="form-group mb-5">
																<div class="row">
																	<legend class="col-12 col-form-label text-primary pt-0 mb-3"> Date and time setting </legend>
																	<div class="col-md-12">
																		<div class="form-group row align-items-center">
																			<label for="appSettingsDateFormat" class="col-lg-3 col-xl-3 mb-lg-0"> date format </label>
																			<div class="col-lg-8 col-xl-8">
																				<div>
																					<select id="appSettingsDateFormat" class="custom-select" style="background-image: url(&quot;https://payday.gainhq.com/images/chevron-down.svg&quot;);">
																						<option value="d-m-Y"> DD-MM-YYYY </option>
																						<option value="m-d-Y"> MM-DD-YYYY </option>
																						<option value="Y-m-d"> YYYY-MM-DD </option>
																						<option value="m/d/Y"> MM/DD/YYYY </option>
																						<option value="d/m/Y"> DD/MM/YYYY </option>
																						<option value="Y/m/d"> YYYY/MM/DD </option>
																						<option value="m.d.Y"> MM.DD.YYYY </option>
																						<option value="d.m.Y"> DD.MM.YYYY </option>
																						<option value="Y.m.d"> YYYY.MM.DD </option>
																					</select>
																					<!---->
																				</div>
																			</div>
																		</div>
																		<div class="form-group row align-items-center">
																			<label class="col-lg-3 col-xl-3 mb-lg-0"> time format </label>
																			<div class="col-lg-8 col-xl-8">
																				<div>
																					<div class="radio-button-group">
																						<div data-toggle="buttons" class="btn-group btn-group-toggle">
																							<label class="btn border focus active">
																								<input type="radio" name="settings_time_format" id="settings_time_format-0" value="h"> <span>12 HOURS</span></label>
																							<label class="btn border">
																								<input type="radio" name="settings_time_format" id="settings_time_format-1" value="H"> <span>24 HOURS</span></label>
																						</div>
																					</div>
																					<!---->
																				</div>
																			</div>
																		</div>
																		<!---->
																	</div>
																</div>
															</fieldset>
															<fieldset class="form-group mb-5">
																<div class="row">
																	<legend class="col-12 col-form-label text-primary pt-0 mb-3"> Currency setting </legend>
																	<div class="col-md-12">
																		<div class="form-group row align-items-center">
																			<label for="appSettingsCurrencySymbol" class="col-lg-3 col-xl-3 mb-lg-0"> Currency symbol </label>
																			<div class="col-lg-8 col-xl-8">
																				<div>
																					<input type="text" name="settings_currency_symbol" id="appSettingsCurrencySymbol" required="required" placeholder="Enter currency symbol" autocomplete="off" class="form-control ">
																					<!---->
																				</div>
																			</div>
																		</div>
																		<div class="form-group row align-items-center">
																			<label class="col-lg-3 col-xl-3 mb-lg-0"> decimal separator </label>
																			<div class="col-lg-8 col-xl-8">
																				<div>
																					<div class="radio-button-group">
																						<div data-toggle="buttons" class="btn-group btn-group-toggle">
																							<label class="btn border focus active">
																								<input type="radio" name="settings_decimal_separator" id="settings_decimal_separator-0" required="required" value="."> <span>DOT(.)</span></label>
																							<label class="btn border">
																								<input type="radio" name="settings_decimal_separator" id="settings_decimal_separator-1" required="required" value=","> <span>COMMA(,)</span></label>
																						</div>
																					</div>
																					<!---->
																				</div>
																			</div>
																		</div>
																		<div class="form-group row align-items-center">
																			<label class="col-lg-3 col-xl-3 mb-lg-0"> thousand separator </label>
																			<div class="col-lg-8 col-xl-8">
																				<div>
																					<div class="radio-button-group">
																						<div data-toggle="buttons" class="btn-group btn-group-toggle">
																							<label class="btn border">
																								<input type="radio" name="settings_thousand_separator" id="settings_thousand_separator-0" required="required" value="."> <span>DOT(.)</span></label>
																							<label class="btn border focus active">
																								<input type="radio" name="settings_thousand_separator" id="settings_thousand_separator-1" required="required" value=","> <span>COMMA(,)</span></label>
																							<label class="btn border">
																								<input type="radio" name="settings_thousand_separator" id="settings_thousand_separator-2" required="required" value=" "> <span>Space</span></label>
																						</div>
																					</div>
																					<!---->
																				</div>
																			</div>
																		</div>
																		<div class="form-group row align-items-center">
																			<label class="col-lg-3 col-xl-3 mb-lg-0"> number of decimal </label>
																			<div class="col-lg-8 col-xl-8">
																				<div>
																					<div class="radio-button-group">
																						<div data-toggle="buttons" class="btn-group btn-group-toggle">
																							<label class="btn border">
																								<input type="radio" name="settings_number_of_decimal" id="settings_number_of_decimal-0" required="required" value="0"> <span>ZERO (0)</span></label>
																							<label class="btn border focus active">
																								<input type="radio" name="settings_number_of_decimal" id="settings_number_of_decimal-1" required="required" value="2"> <span>TWO (2)</span></label>
																						</div>
																					</div>
																					<!---->
																				</div>
																			</div>
																		</div>
																		<div class="form-group row align-items-center">
																			<label class="col-lg-3 col-xl-3 mb-lg-0"> currency position </label>
																			<div class="col-lg-8 col-xl-8">
																				<div>
																					<div class="radio-button-group">
																						<div data-toggle="buttons" class="btn-group btn-group-toggle">
																							<label class="btn border">
																								<input type="radio" name="settings_currency_position" id="settings_currency_position-0" required="required" value="prefix_only"> <span>$1,100.00</span></label>
																							<label class="btn border focus active">
																								<input type="radio" name="settings_currency_position" id="settings_currency_position-1" required="required" value="prefix_with_space"> <span>$ 1,100.00</span></label>
																							<label class="btn border">
																								<input type="radio" name="settings_currency_position" id="settings_currency_position-2" required="required" value="suffix_only"> <span>1,100.00$</span></label>
																							<label class="btn border">
																								<input type="radio" name="settings_currency_position" id="settings_currency_position-3" required="required" value="suffix_with_space"> <span>1,100.00 $</span></label>
																						</div>
																					</div>
																					<!---->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</fieldset>
															<div class="mt-5">
																<button data-v-34c6c68e="" type="submit" class="btn text-center btn-primary"><span data-v-34c6c68e="" class="w-100"><!----> 
            Save
        </span></button>
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
		"created_at": "2021-11-02T06:04:25.000000Z",
		"updated_at": "2021-11-02T06:04:25.000000Z",
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