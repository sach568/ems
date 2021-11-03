<html lang="" theme="light" sidebar="normal" class="js-focus-visible" data-js-focus-visible="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://payday.gainhq.com/images/icon.png">
    <link rel="apple-touch-icon" href="https://payday.gainhq.com/images/icon.png">
    <link rel="apple-touch-icon-precomposed" href="https://payday.gainhq.com/images/icon.png">
    <title>Dashboard - PayDay</title>
    <link media="all" type="text/css" rel="stylesheet" href="https://payday.gainhq.com/css/core.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://payday.gainhq.com/css/fontawesome.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://payday.gainhq.com/css/dropzone.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://payday.gainhq.com/vendor/summernote/summernote-bs4.css"> </head>

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
                                                <a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=325&amp;id=325" class="dropdown-item">
                                                    <div class="media align-items-center">
                                                        <div class="avatars-w-50 mr-3">
                                                            <div>
                                                                <div class="no-img rounded-circle"> AV </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="my-0 media-heading">An employee named <b>Miracle Fritsch</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=324&amp;id=324" class="dropdown-item">
                                                    <div class="media align-items-center">
                                                        <div class="avatars-w-50 mr-3">
                                                            <div>
                                                                <div class="no-img rounded-circle"> AV </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="my-0 media-heading">An employee named <b>Miracle Fritsch</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=322&amp;id=322" class="dropdown-item">
                                                    <div class="media align-items-center">
                                                        <div class="avatars-w-50 mr-3">
                                                            <div>
                                                                <div class="no-img rounded-circle"> AV </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="my-0 media-heading">An employee named <b>Miracle Fritsch</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=326&amp;id=326" class="dropdown-item">
                                                    <div class="media align-items-center">
                                                        <div class="avatars-w-50 mr-3">
                                                            <div>
                                                                <div class="no-img rounded-circle"> AV </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="my-0 media-heading">An employee named <b>Miracle Fritsch</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=323&amp;id=323" class="dropdown-item">
                                                    <div class="media align-items-center">
                                                        <div class="avatars-w-50 mr-3">
                                                            <div>
                                                                <div class="no-img rounded-circle"> AV </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="my-0 media-heading">An employee named <b>Miracle Fritsch</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=327&amp;id=327" class="dropdown-item">
                                                    <div class="media align-items-center">
                                                        <div class="avatars-w-50 mr-3">
                                                            <div>
                                                                <div class="no-img rounded-circle"> AV </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="my-0 media-heading">An employee named <b>Miracle Fritsch</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=289&amp;id=289" class="dropdown-item">
                                                    <div class="media align-items-center">
                                                        <div class="avatars-w-50 mr-3">
                                                            <div>
                                                                <div class="no-img rounded-circle"> AV </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="my-0 media-heading">An employee named <b>Tony Stark</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=290&amp;id=290" class="dropdown-item">
                                                    <div class="media align-items-center">
                                                        <div class="avatars-w-50 mr-3">
                                                            <div>
                                                                <div class="no-img rounded-circle"> AV </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="my-0 media-heading">An employee named <b>Tony Stark</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=287&amp;id=287" class="dropdown-item">
                                                    <div class="media align-items-center">
                                                        <div class="avatars-w-50 mr-3">
                                                            <div>
                                                                <div class="no-img rounded-circle"> AV </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="my-0 media-heading">An employee named <b>Tony Stark</b> has been requested for Attendance</p> <span class="text-muted">
                            
                        </span> <span class="primary-text-color link"><span class="mr-3">Today</span> <span>5:38 AM</span></span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="https://payday.gainhq.com/attendances/requests?from=email&amp;details_id=291&amp;id=291" class="dropdown-item">
                                                    <div class="media align-items-center">
                                                        <div class="avatars-w-50 mr-3">
                                                            <div>
                                                                <div class="no-img rounded-circle"> AV </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="my-0 media-heading">An employee named <b>Tony Stark</b> has been requested for Attendance</p> <span class="text-muted">
                            
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
                    
                    <a href="https://payday.gainhq.com" class="navbar-brand brand-logo-mini"><img src="https://payday.gainhq.com/images/icon.png" alt="logo"></a>
                </div>
                <ul class="nav nav-scrolling">
                    <li class="nav-item active"><a href="http://localhost/dairy/dfsms/dashboard.php" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart menu-icon"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg></span> <span class="menu-title">Dashboard</span> <!----></a>
                        <!---->
                    </li>
                    <li class="nav-item"><a href="http://localhost/dairy/dfsms/jobdesk.php" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user menu-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span> <span class="menu-title">Job Desk</span> <!----></a>
                        <!---->
                    </li>
                    <li class="nav-item"><a href="#employee" data-toggle="collapse" aria-expanded="false" aria-controls="employee" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users menu-icon"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span> <span class="menu-title">Employee</span> <i class="menu-arrow"></i></a>
                        <div id="employee" class="collapse">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a href="http://localhost/dairy/dfsms/employee/list.php" class="nav-link">
              All Employees
            </a></li>
                                <li class="nav-item"><a href="http://localhost/dairy/dfsms/employee/designations.php" class="nav-link">
              Designation
            </a></li>
                                <li class="nav-item"><a href=http://localhost/dairy/dfsms/employee/employment-statuses.php" class="nav-link">
              Employment Status
            </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#leave" data-toggle="collapse" aria-expanded="false" aria-controls="leave" class="nav-link"><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock menu-icon"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span> <span class="menu-title">Leave</span> <i class="menu-arrow"></i></a>
                        <div id="leave" class="collapse">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a href="http://localhost/dairy/dfsms/leave/status.php" class="nav-link">
              Leave Status
            </a></li>
                                <li class="nav-item"><a href="https://payday.gainhq.com/leave/requests" class="nav-link">
              Leave Request
            </a></li>
                                <li class="nav-item"><a href="http://localhost/dairy/dfsms/leave/calendar.php" class="nav-link">
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
                                <li class="nav-item"><a href="http://localhost/dairy/dfsms/attendances/lists.php" class="nav-link">
              Daily Log
            </a></li>
                                <li class="nav-item"><a href="http://localhost/dairy/dfsms/attendances/requests.php" class="nav-link">
              Attendance Request
            </a></li>
                                <li class="nav-item"><a href="http://localhost/dairy/dfsms/attendances/details.php" class="nav-link">
              Attendance Details
            </a></li>
                                <li class="nav-item"><a href="http://localhost/dairy/dfsms/attendances/summaries.php" class="nav-link">
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
                                <li class="nav-item"><a href="http://localhost/dairy/dfsms/settings/appsettings.php" class="nav-link">
              App Settings
            </a></li>
                                <li class="nav-item"><a href="http://localhost/dairy/dfsms/settings/leave-settings.php" class="nav-link">
              Leave Settings
            </a></li>
                                <li class="nav-item"><a href="http://localhost/dairy/dfsms/settings/attendance.php" class="nav-link">
              Attendance Settings
            </a></li>
                                <li class="nav-item"><a href="http://localhost/dairy/dfsms/settings/payroll-settings.php" class="nav-link">
              Payroll Settings
            </a></li>
                                <li class="nav-item"><a href="http://localhost/dairy/dfsms/settings/import.php" class="nav-link">
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
                                            <h4 class="mb-0">Dashboard</h4></li>
                                        <!---->
                                        <!---->
                                    </ol>
                                </nav>
                            </div>
                            <!---->
                            <div data-v-b39aab2a="">
                                <div data-v-b39aab2a="" class="position-relative">
                                    <!---->
                                    <div data-v-b39aab2a="" class="row mb-primary">
                                        <div data-v-b39aab2a="" class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                                            <div data-v-b39aab2a="">
                                                <div class="card card-with-shadow dashboard-widgets dashboard-icon-widget p-primary border-0">
                                                    <div class="icon-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="12" cy="7" r="4"></circle>
                                                        </svg>
                                                    </div>
                                                    <div class="widget-data">
                                                        <h6>14</h6>
                                                        <p>Total employee</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-b39aab2a="" class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                                            <div data-v-b39aab2a="">
                                                <div class="card card-with-shadow dashboard-widgets dashboard-icon-widget p-primary border-0">
                                                    <div class="icon-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                        </svg>
                                                    </div>
                                                    <div class="widget-data">
                                                        <h6>6</h6>
                                                        <p>Total department</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-b39aab2a="" class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                                            <div data-v-b39aab2a="">
                                                <div class="card card-with-shadow dashboard-widgets dashboard-icon-widget p-primary border-0">
                                                    <div class="icon-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="widget-data">
                                                        <h6>3</h6>
                                                        <p>Total leave request</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-b39aab2a="" class="col-sm-6 col-lg-3">
                                            <div data-v-b39aab2a="">
                                                <div class="card card-with-shadow dashboard-widgets dashboard-icon-widget p-primary border-0">
                                                    <div class="icon-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-x">
                                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="8.5" cy="7" r="4"></circle>
                                                            <line x1="18" y1="8" x2="23" y2="13"></line>
                                                            <line x1="23" y1="8" x2="18" y2="13"></line>
                                                        </svg>
                                                    </div>
                                                    <div class="widget-data">
                                                        <h6>0</h6>
                                                        <p>On leave today</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-b39aab2a="" class="row">
                                    <div data-v-b39aab2a="" class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-9 mb-4 mb-md-0">
                                        <div data-v-b39aab2a="" class="card card-with-shadow border-0 h-100 min-height-350">
                                            <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                                                <h5 class="card-title text-capitalize mb-0">Employee statistics</h5>
                                                <ul class="nav tab-filter-menu justify-content-flex-end">
                                                    <li class="nav-item"><a href="#" class="nav-link py-0 active">
                    By employment status
                </a></li>
                                                    <li class="nav-item"><a href="#" class="nav-link py-0">
                    By Designation
                </a></li>
                                                    <li class="nav-item"><a href="#" class="nav-link py-0">
                    By Department
                </a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body position-relative">
                                                <div>
                                                    <div class="Chart">
                                                        <div class="">
                                                            <div class="chartjs-size-monitor">
                                                                <div class="chartjs-size-monitor-expand">
                                                                    <div class=""></div>
                                                                </div>
                                                                <div class="chartjs-size-monitor-shrink">
                                                                    <div class=""></div>
                                                                </div>
                                                            </div>
                                                            <canvas id="horizontal-line-chart" width="1077" height="475" style="display: block; height: 380px; width: 862px;" class="chartjs-render-monitor"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-b39aab2a="" class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3">
                                        <div data-v-b39aab2a="" class="card card-with-shadow border-0 h-100 min-height-350">
                                            <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                                                <h5 class="card-title text-capitalize mb-0">On working today - 9</h5></div>
                                            <div class="card-body d-flex flex-column justify-content-center align-items-center position-relative p-primary">
                                                <div class="mb-primary">
                                                    <div class="Chart">
                                                        <div class="">
                                                            <div class="chartjs-size-monitor">
                                                                <div class="chartjs-size-monitor-expand">
                                                                    <div class=""></div>
                                                                </div>
                                                                <div class="chartjs-size-monitor-shrink">
                                                                    <div class=""></div>
                                                                </div>
                                                            </div>
                                                            <canvas id="dough-chart" width="750" height="287" style="display: block; height: 230px; width: 600px;" class="chartjs-render-monitor"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chart-data-list">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="data-group-item px-0"><span class="square" style="background-color: rgb(234, 131, 58);"></span> <span class="value">Early - 9</span></div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="data-group-item px-0"><span class="square" style="background-color: rgb(223, 71, 54);"></span> <span class="value">Late - 0</span></div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="data-group-item px-0"><span class="square" style="background-color: rgb(92, 222, 100);"></span> <span class="value">Regular - 0</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
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