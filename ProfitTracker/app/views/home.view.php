<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
    <!-- PAGE TITLE HERE -->
    <title>Admin</title>

    <link href="<?=ROOT?>/assets/Dashboard/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=ROOT?>/assets/Dashboard/vendor/nouislider/nouislider.min.css">
    <!-- Style css -->
    <link href="<?=ROOT?>/assets/Dashboard/css/stylee1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Nice Select CSS -->
    <link href="<?= ROOT ?>/assets/Dashboard/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">

    <!-- NoUI Slider CSS -->
    <link rel="stylesheet" href="<?= ROOT ?>/assets/Dashboard/vendor/nouislider/nouislider.min.css">

    <!-- Custom Style CSS -->
    <link href="<?= ROOT ?>/assets/Dashboard/css/stylee1.css" rel="stylesheet">


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="waviy">
            <span style="--i:1">L</span>
            <span style="--i:2">o</span>
            <span style="--i:3">a</span>
            <span style="--i:4">d</span>
            <span style="--i:5">i</span>
            <span style="--i:6">n</span>
            <span style="--i:7">g</span>
            <span style="--i:8">.</span>
            <span style="--i:9">.</span>
            <span style="--i:10">.</span>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" width="53" height="53" viewBox="0 0 53 53">
                    <!-- <style>
        .svg-logo-primary-path {
            fill: #920808 !important;
        }
    </style> -->
                    <path class="svg-logo-primary-path"
                        d="M48.3418 41.8457H41.0957C36.8148 41.8457 33.332 38.3629 33.332 34.082C33.332 29.8011 36.8148 26.3184 41.0957 26.3184H48.3418V19.2275C48.3418 16.9408 46.4879 15.0869 44.2012 15.0869H4.14062C1.85386 15.0869 0 16.9408 0 19.2275V48.8594C0 51.1462 1.85386 53 4.14062 53H44.2012C46.4879 53 48.3418 51.1462 48.3418 48.8594V41.8457Z"
                        fill="#FF0000" />
                    <path class="svg-logo-primary-path"
                        d="M51.4473 29.4238H41.0957C38.5272 29.4238 36.4375 31.5135 36.4375 34.082C36.4375 36.6506 38.5272 38.7402 41.0957 38.7402H51.4473C52.3034 38.7402 53 38.0437 53 37.1875V30.9766C53 30.1204 52.3034 29.4238 51.4473 29.4238ZM41.0957 35.6348C40.2382 35.6348 39.543 34.9396 39.543 34.082C39.543 33.2245 40.2382 32.5293 41.0957 32.5293C41.9532 32.5293 42.6484 33.2245 42.6484 34.082C42.6484 34.9396 41.9532 35.6348 41.0957 35.6348Z"
                        fill="#FF0000" />
                </svg>

                <p class="brand-title" width="124px" height="33px" style="font-size: 25px;">ProfitPro</p>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->



        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                
                                <a class="nav-link ai-icon" href="javascript:void(0);" role="button" data-toggle="dropdown">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.638 4.9936V2.3C12.638 1.5824 13.2484 1 14.0006 1C14.7513 1 15.3631 1.5824 15.3631 2.3V4.9936C17.3879 5.2718 19.2805 6.1688 20.7438 7.565C22.5329 9.2719 23.5384 11.5872 23.5384 14V18.8932L24.6408 20.9966C25.1681 22.0041 25.1122 23.2001 24.4909 24.1582C23.8709 25.1163 22.774 25.7 21.5941 25.7H15.3631C15.3631 26.4176 14.7513 27 14.0006 27C13.2484 27 12.638 26.4176 12.638 25.7H6.40705C5.22571 25.7 4.12888 25.1163 3.50892 24.1582C2.88759 23.2001 2.83172 22.0041 3.36039 20.9966L4.46268 18.8932V14C4.46268 11.5872 5.46691 9.2719 7.25594 7.565C8.72068 6.1688 10.6119 5.2718 12.638 4.9936ZM14.0006 7.5C12.1924 7.5 10.4607 8.1851 9.18259 9.4045C7.90452 10.6226 7.18779 12.2762 7.18779 14V19.2C7.18779 19.4015 7.13739 19.6004 7.04337 19.7811C7.04337 19.7811 6.43703 20.9381 5.79662 22.1588C5.69171 22.3603 5.70261 22.6008 5.82661 22.7919C5.9506 22.983 6.16996 23.1 6.40705 23.1H21.5941C21.8298 23.1 22.0492 22.983 22.1732 22.7919C22.2972 22.6008 22.3081 22.3603 22.2031 22.1588C21.5627 20.9381 20.9564 19.7811 20.9564 19.7811C20.8624 19.6004 20.8133 19.4015 20.8133 19.2V14C20.8133 12.2762 20.0953 10.6226 18.8172 9.4045C17.5391 8.1851 15.8073 7.5 14.0006 7.5Z" fill="#4f7086" />
                                    </svg>                                    <?php 
                                        $user = new UserModel();
                                        $notifCount = $user->getUnreadCount();
                                    ?>
                                    <span class="badge light text-white bg-primary rounded-circle">
                                        <?= $notifCount > 0 ? $notifCount : 0 ?>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in-up max-height-dropdown">
                                    <h6 class="dropdown-header">
                                        Alerts Center
                                    </h6>
                                    <?php if ($notifCount > 0): ?>
                                        <?php $count = $notifCount; ?>
                                        <?php foreach ($notifUnread as $notification): ?>
                                            <?php if ($count >= 5) break; ?>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="mr-3">
                                                    <div class="icon-circle bg-primary">
                                                        <i class="fas fa-file-alt text-white"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="small text-gray-500"><?= date('F j, Y', strtotime($notification->notificationtime)) ?></div>
                                                    <span class="font-weight-bold"><?= $notification->action ?> <?= $notification->tablename ?></span>
                                                    <div class="small text-gray-500"><?= $notification->message ?></div>
                                                </div>
                                            </a>
                                            <?php $count++; ?>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <a class="dropdown-item text-center small text-gray-500" href="#">No new notifications</a>
                                    <?php endif; ?>
                                    <a class="dropdown-item text-center small text-gray-500 show-all-alerts-btn" href="#">Show All Alerts</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="btn btn-primary d-sm-inline-block d-none"
                                    id="generateReportBtn">Generate Report<i class="las la-signal ms-3 scale5"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <img src="<?=ROOT?>/assets/Dashboard/images/ion/man (1).png" width="20" alt="" />
                            <div class="header-info ms-3">
                                <span class="font-w600 ">Hi,<b>AC</b></span>
                                <small class="text-end font-w400">xyz@gmail.com</small>
                            </div>
                        </a>
                    </li>
                    <li><a href="Home" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a href="Expenses" aria-expanded="false">
                            <i class="fas fa-money-bill-wave"></i> <!-- Updated icon for Expenses -->
                            <span class="nav-text">Expenses</span>
                        </a>
                    </li>
                    <li><a href="Sales" aria-expanded="false">
                            <i class="fas fa-chart-line"></i> <!-- Updated icon for Sales -->
                            <span class="nav-text">Sales</span>
                        </a>
                    </li>
                    <li><a href="Records" aria-expanded="false">
                            <i class="fa fa-book"></i> <!-- Updated icon for Records -->
                            <span class="nav-text">Records</span>
                        </a>
                    </li>
                    <li><a href="Inventory" aria-expanded="false">
                            <i class="fas fa-boxes"></i> <!-- Updated icon for Inventory -->
                            <span class="nav-text">Inventory</span>
                        </a>
                    </li>
                    <li><a href="Signout" class="ai-icon" aria-expanded="false">
                            <i class="fas fa-sign-out-alt"></i> <!-- Updated icon for Sign Out -->
                            <span class="nav-text">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row invoice-card-row">
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="card bg-warning invoice-card">
                            <div class="card-body d-flex">
                                <div class="icon me-3">
                                    <svg width="33px" height="32px">
                                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                            d="M31.963,30.931 C31.818,31.160 31.609,31.342 31.363,31.455 C31.175,31.538 30.972,31.582 30.767,31.583 C30.429,31.583 30.102,31.463 29.845,31.243 L25.802,27.786 L21.758,31.243 C21.502,31.463 21.175,31.583 20.837,31.583 C20.498,31.583 20.172,31.463 19.915,31.243 L15.872,27.786 L11.829,31.243 C11.622,31.420 11.370,31.534 11.101,31.572 C10.832,31.609 10.558,31.569 10.311,31.455 C10.065,31.342 9.857,31.160 9.710,30.931 C9.565,30.703 9.488,30.437 9.488,30.167 L9.488,17.416 L2.395,17.416 C2.019,17.416 1.658,17.267 1.392,17.001 C1.126,16.736 0.976,16.375 0.976,16.000 L0.976,6.083 C0.976,4.580 1.574,3.139 2.639,2.076 C3.703,1.014 5.146,0.417 6.651,0.417 L26.511,0.417 C28.016,0.417 29.459,1.014 30.524,2.076 C31.588,3.139 32.186,4.580 32.186,6.083 L32.186,30.167 C32.186,30.437 32.109,30.703 31.963,30.931 ZM9.488,6.083 C9.488,5.332 9.189,4.611 8.657,4.080 C8.125,3.548 7.403,3.250 6.651,3.250 C5.898,3.250 5.177,3.548 4.645,4.080 C4.113,4.611 3.814,5.332 3.814,6.083 L3.814,14.583 L9.488,14.583 L9.488,6.083 ZM29.348,6.083 C29.348,5.332 29.050,4.611 28.517,4.080 C27.985,3.548 27.263,3.250 26.511,3.250 L11.559,3.250 C12.059,4.111 12.324,5.088 12.325,6.083 L12.325,27.092 L14.950,24.840 C15.207,24.620 15.534,24.500 15.872,24.500 C16.210,24.500 16.537,24.620 16.794,24.840 L20.837,28.296 L24.880,24.840 C25.137,24.620 25.463,24.500 25.802,24.500 C26.140,24.500 26.467,24.620 26.724,24.840 L29.348,27.092 L29.348,6.083 ZM25.092,20.250 L16.581,20.250 C16.205,20.250 15.844,20.101 15.578,19.835 C15.312,19.569 15.162,19.209 15.162,18.833 C15.162,18.457 15.312,18.097 15.578,17.831 C15.844,17.566 16.205,17.416 16.581,17.416 L25.092,17.416 C25.469,17.416 25.829,17.566 26.096,17.831 C26.362,18.097 26.511,18.457 26.511,18.833 C26.511,19.209 26.362,19.569 26.096,19.835 C25.829,20.101 25.469,20.250 25.092,20.250 ZM25.092,14.583 L16.581,14.583 C16.205,14.583 15.844,14.434 15.578,14.168 C15.312,13.903 15.162,13.542 15.162,13.167 C15.162,12.791 15.312,12.430 15.578,12.165 C15.844,11.899 16.205,11.750 16.581,11.750 L25.092,11.750 C25.469,11.750 25.829,11.899 26.096,12.165 C26.362,12.430 26.511,12.791 26.511,13.167 C26.511,13.542 26.362,13.903 26.096,14.168 C25.829,14.434 25.469,14.583 25.092,14.583 ZM25.092,8.916 L16.581,8.916 C16.205,8.916 15.844,8.767 15.578,8.501 C15.312,8.236 15.162,7.875 15.162,7.500 C15.162,7.124 15.312,6.764 15.578,6.498 C15.844,6.232 16.205,6.083 16.581,6.083 L25.092,6.083 C25.469,6.083 25.829,6.232 26.096,6.498 C26.362,6.764 26.511,7.124 26.511,7.500 C26.511,7.875 26.362,8.236 26.096,8.501 C25.829,8.767 25.469,8.916 25.092,8.916 Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-white invoice-num"><?= $currentMonthlyProfit ?></h2>
                                    <span class="text-white fs-18">Monthly Profit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="card bg-success invoice-card">
                            <div class="card-body d-flex">
                                <div class="icon me-3">
                                    <svg width="35px" height="34px">
                                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                            d="M32.482,9.730 C31.092,6.789 28.892,4.319 26.120,2.586 C22.265,0.183 17.698,-0.580 13.271,0.442 C8.843,1.458 5.074,4.140 2.668,7.990 C0.255,11.840 -0.509,16.394 0.514,20.822 C1.538,25.244 4.224,29.008 8.072,31.411 C10.785,33.104 13.896,34.000 17.080,34.000 L17.286,34.000 C20.456,33.960 23.541,33.044 26.213,31.358 C26.991,30.866 27.217,29.844 26.725,29.067 C26.234,28.291 25.210,28.065 24.432,28.556 C22.285,29.917 19.799,30.654 17.246,30.687 C14.627,30.720 12.067,29.997 9.834,28.609 C6.730,26.671 4.569,23.644 3.752,20.085 C2.934,16.527 3.546,12.863 5.486,9.763 C9.488,3.370 17.957,1.418 24.359,5.414 C26.592,6.808 28.360,8.793 29.477,11.157 C30.568,13.460 30.993,16.016 30.707,18.539 C30.607,19.448 31.259,20.271 32.177,20.371 C33.087,20.470 33.911,19.820 34.011,18.904 C34.363,15.764 33.832,12.591 32.482,9.730 L32.482,9.730 Z" />
                                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                            d="M22.593,11.237 L14.575,19.244 L11.604,16.277 C10.952,15.626 9.902,15.626 9.250,16.277 C8.599,16.927 8.599,17.976 9.250,18.627 L13.399,22.770 C13.725,23.095 14.150,23.254 14.575,23.254 C15.001,23.254 15.427,23.095 15.753,22.770 L24.940,13.588 C25.592,12.937 25.592,11.888 24.940,11.237 C24.289,10.593 23.238,10.593 22.593,11.237 L22.593,11.237 Z" />
                                    </svg>

                                </div>
                                <div>
                                    <h2 class="text-white invoice-num"><?= $currentMonthlySales ?></h2>
                                    <span class="text-white fs-18">Monthly Sales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="card bg-success invoice-card">
                            <div class="card-body d-flex">
                                <div class="icon me-3">
                                    <svg width="35px" height="34px">
                                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                            d="M32.482,9.730 C31.092,6.789 28.892,4.319 26.120,2.586 C22.265,0.183 17.698,-0.580 13.271,0.442 C8.843,1.458 5.074,4.140 2.668,7.990 C0.255,11.840 -0.509,16.394 0.514,20.822 C1.538,25.244 4.224,29.008 8.072,31.411 C10.785,33.104 13.896,34.000 17.080,34.000 L17.286,34.000 C20.456,33.960 23.541,33.044 26.213,31.358 C26.991,30.866 27.217,29.844 26.725,29.067 C26.234,28.291 25.210,28.065 24.432,28.556 C22.285,29.917 19.799,30.654 17.246,30.687 C14.627,30.720 12.067,29.997 9.834,28.609 C6.730,26.671 4.569,23.644 3.752,20.085 C2.934,16.527 3.546,12.863 5.486,9.763 C9.488,3.370 17.957,1.418 24.359,5.414 C26.592,6.808 28.360,8.793 29.477,11.157 C30.568,13.460 30.993,16.016 30.707,18.539 C30.607,19.448 31.259,20.271 32.177,20.371 C33.087,20.470 33.911,19.820 34.011,18.904 C34.363,15.764 33.832,12.591 32.482,9.730 L32.482,9.730 Z" />
                                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                            d="M22.593,11.237 L14.575,19.244 L11.604,16.277 C10.952,15.626 9.902,15.626 9.250,16.277 C8.599,16.927 8.599,17.976 9.250,18.627 L13.399,22.770 C13.725,23.095 14.150,23.254 14.575,23.254 C15.001,23.254 15.427,23.095 15.753,22.770 L24.940,13.588 C25.592,12.937 25.592,11.888 24.940,11.237 C24.289,10.593 23.238,10.593 22.593,11.237 L22.593,11.237 Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-white invoice-num"><?= $currentMonthlyExpenses ?></h2>
                                    <span class="text-white fs-18">Monthly Expenses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="card bg-success invoice-card">
                            <div class="card-body d-flex">
                                <div class="icon me-3">
                                    <svg width="33px" height="32px">
                                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                            d="M31.963,30.931 C31.818,31.160 31.609,31.342 31.363,31.455 C31.175,31.538 30.972,31.582 30.767,31.583 C30.429,31.583 30.102,31.463 29.845,31.243 L25.802,27.786 L21.758,31.243 C21.502,31.463 21.175,31.583 20.837,31.583 C20.498,31.583 20.172,31.463 19.915,31.243 L15.872,27.786 L11.829,31.243 C11.622,31.420 11.370,31.534 11.101,31.572 C10.832,31.609 10.558,31.569 10.311,31.455 C10.065,31.342 9.857,31.160 9.710,30.931 C9.565,30.703 9.488,30.437 9.488,30.167 L9.488,17.416 L2.395,17.416 C2.019,17.416 1.658,17.267 1.392,17.001 C1.126,16.736 0.976,16.375 0.976,16.000 L0.976,6.083 C0.976,4.580 1.574,3.139 2.639,2.076 C3.703,1.014 5.146,0.417 6.651,0.417 L26.511,0.417 C28.016,0.417 29.459,1.014 30.524,2.076 C31.588,3.139 32.186,4.580 32.186,6.083 L32.186,30.167 C32.186,30.437 32.109,30.703 31.963,30.931 ZM9.488,6.083 C9.488,5.332 9.189,4.611 8.657,4.080 C8.125,3.548 7.403,3.250 6.651,3.250 C5.898,3.250 5.177,3.548 4.645,4.080 C4.113,4.611 3.814,5.332 3.814,6.083 L3.814,14.583 L9.488,14.583 L9.488,6.083 ZM29.348,6.083 C29.348,5.332 29.050,4.611 28.517,4.080 C27.985,3.548 27.263,3.250 26.511,3.250 L11.559,3.250 C12.059,4.111 12.324,5.088 12.325,6.083 L12.325,27.092 L14.950,24.840 C15.207,24.620 15.534,24.500 15.872,24.500 C16.210,24.500 16.537,24.620 16.794,24.840 L20.837,28.296 L24.880,24.840 C25.137,24.620 25.463,24.500 25.802,24.500 C26.140,24.500 26.467,24.620 26.724,24.840 L29.348,27.092 L29.348,6.083 ZM25.092,20.250 L16.581,20.250 C16.205,20.250 15.844,20.101 15.578,19.835 C15.312,19.569 15.162,19.209 15.162,18.833 C15.162,18.457 15.312,18.097 15.578,17.831 C15.844,17.566 16.205,17.416 16.581,17.416 L25.092,17.416 C25.469,17.416 25.829,17.566 26.096,17.831 C26.362,18.097 26.511,18.457 26.511,18.833 C26.511,19.209 26.362,19.569 26.096,19.835 C25.829,20.101 25.469,20.250 25.092,20.250 ZM25.092,14.583 L16.581,14.583 C16.205,14.583 15.844,14.434 15.578,14.168 C15.312,13.903 15.162,13.542 15.162,13.167 C15.162,12.791 15.312,12.430 15.578,12.165 C15.844,11.899 16.205,11.750 16.581,11.750 L25.092,11.750 C25.469,11.750 25.829,11.899 26.096,12.165 C26.362,12.430 26.511,12.791 26.511,13.167 C26.511,13.542 26.362,13.903 26.096,14.168 C25.829,14.434 25.469,14.583 25.092,14.583 ZM25.092,8.916 L16.581,8.916 C16.205,8.916 15.844,8.767 15.578,8.501 C15.312,8.236 15.162,7.875 15.162,7.500 C15.162,7.124 15.312,6.764 15.578,6.498 C15.844,6.232 16.205,6.083 16.581,6.083 L25.092,6.083 C25.469,6.083 25.829,6.232 26.096,6.498 C26.362,6.764 26.511,7.124 26.511,7.500 C26.511,7.875 26.362,8.236 26.096,8.501 C25.829,8.767 25.469,8.916 25.092,8.916 Z" />
                                    </svg>

                                </div>
                                <div>
                                    <h2 class="text-white invoice-num">
                                        <?php echo($productsCount)?>
                                    </h2>
                                    <span class="text-white fs-18">Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-9 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="row align-items-center">
                                    <?php

                                    // Calculate the percentage change for profit
                                    if ($previousMonthlyProfit != 0) {
                                        $percentageChange = (($currentMonthlyProfit - $previousMonthlyProfit) / $previousMonthlyProfit) * 100;
                                    } else {
                                        $percentageChange = 0; // Handle division by zero if previous profit is zero
                                    }

                                    // Determine the sign for profit
                                    $sign = $percentageChange > 0 ? "+" : "-";

                                    // Format the percentage change to 1 decimal place for profit
                                    $percentageChange = number_format($percentageChange, 1);

                                    // Calculate the percentage change for expenses
                                    if ($previousMonthlyExpenses != 0) {
                                        $expensesPercentageChange = (($currentMonthlyExpenses - $previousMonthlyExpenses) / $previousMonthlyExpenses) * 100;
                                    } else {
                                        $expensesPercentageChange = 0; // Handle division by zero if previous expenses is zero
                                    }

                                    // Determine the sign for expenses
                                    $expensesSign = $expensesPercentageChange > 0 ? "+" : "";

                                    // Format the percentage change to 1 decimal place for expenses
                                    $expensesPercentageChange = number_format($expensesPercentageChange, 1);
                                    ?>

                                    <div class="col-xl-6">
                                        <div class="card-bx bg-blue" id="cardBox">
                                            <img class="pattern-img"
                                                src="<?= ROOT ?>/assets/Dashboard/images/pattern/pattern6.png" alt="">
                                            <div class="card-info text-white" id="cardInfo">
                                                <img src="<?= ROOT ?>/assets/Dashboard/images/pattern/circle.png"
                                                    class="mb-4" alt="">
                                                <h2 class="text-white card-balance" id="amountDisplay">₱
                                                    <?= $currentMonthlyExpenses ?></h2>
                                                <p class="fs-16" id="typeDisplay">Current Month's Expenses</p>
                                                <span
                                                    id="percentageDisplay"><?= $expensesSign . $expensesPercentageChange ?>%
                                                    than last month</span>
                                            </div>
                                            <a class="change-btn" href="javascript:void(0);"
                                                onclick="toggleCardContent()"><i
                                                    class="fa fa-caret-up up-ico"></i>Change<span class="reload-icon"><i
                                                        class="fas fa-sync-alt reload active"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="row mt-xl-0 mt-6">
                                            <div class="col-md-6">
                                                <h4 class="card-title">Expenses Overview</h4>
                                                <!-- <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit psu olor</span> -->
                                                <ul class="card-list mt-4">
                                                    <?php
                                                    if (!empty($chartData)) {
                                                        foreach ($chartData as $expense) {
                                                            ?>
                                                            <li>
                                                                <span class="bg-logistic circle"></span><?= htmlspecialchars($expense->expensecategory) ?>
                                                                <span><?= number_format($expense->expensepercentage, 2) ?>%</span>
                                                            </li>
                                                            <?php
                                                        }
                                                    } else {
                                                        ?>
                                                        <li>No expenses found for this month.</li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <canvas id="pieChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-5">
                        <div class="card">
                            <div class="card-header pb-0 border-0">
                                <div>
                                    <h4 class="card-title mb-2">Recent Activity</h4>
                                    <!-- <h2 class="mb-0">$78120</h2> -->
                                </div>
                                <ul class="card-list">
                                    <li class="justify-content-end">Sales<span
                                            class="bg-success circle me-0 ms-2"></span></li>
                                    <li class="justify-content-end">Expenses<span
                                            class="bg-danger circle me-0 ms-2"></span></li>
                                </ul>
                            </div>
                            <div class="card-body pb-0 pt-3">
                                <div id="chartBarUpdated" class="bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-7">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <div class="product-bx">
                                        <img src="<?=ROOT?>/assets/images/productImages/<?= $topSellingProduct->productimageurl ?>" alt="Product Image " class="product-img">
                                    <div class="product-info">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h1 class="card-title mb-2" style="font-size: 22px;">TOP SELLING PRODUCT
                                                </h1>
                                                <span class="fs-12">This month, our top-selling shoes have been flying off the shelves.</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="product-name mt-5"><?= htmlspecialchars($topSellingProduct->productname) ?></h4>
                                        <div class="product-sales-profit mt-2">
                                            <span class="text-style font-w600">Product ID</span>
                                            <span class="font-w600"><?= htmlspecialchars($topSellingProduct->productid) ?></span>
                                        </div>
                                        <div class="product-sales-profit">
                                            <span class="text-style font-w600">Category</span>
                                            <span class="font-w600"><?= htmlspecialchars($topSellingProduct->category)?></span>
                                        </div>
                                        <div class="product-sales-profit">
                                            <span class="text-style font-w600">Stock Sold</span>
                                            <span class="font-w600"><?= htmlspecialchars($topSellingProduct->quantitysold) ?></span>
                                        </div>
                                        <div class="product-sales-profit">
                                            <span class="text-style font-w600">Total Sales</span>
                                            <span class="font-w600"><?= htmlspecialchars($topSellingProduct->totalproductsale)?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0 mt-4">
                                <a href="<?=ROOT?>/Inventory" class="btn btn-outline-primary d-block btn-lg mt-5 ">View
                                    Products</a>
                            </div>
                            <div class="card-body">
                            </div>
                            <!-- <a href="javascript:void(0);" class="btn btn-outline-primary d-block btn-lg mt-5">View More</a> -->
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-6">
                        <div class="card">
                            <div class="card-header d-flex flex-wrap border-0 pb-0">
                                <div class="me-auto mb-sm-0 mb-3">
                                    <h4 class="card-title mb-2">Weekly Transaction Overview</h4>
                                    <span class="fs-12">Here is your weekly report</span>
                                </div>
                                <div class="dropdown me-2">
                                    <a class="btn btn-rounded btn-md btn-primary me-2" href="<?=ROOT?>/Records">
                                        <i class="las la-download scale5 me-3"></i>See Record
                                    </a>

                                    <!-- <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Filter
                                    </button> -->
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                onclick="filterData('daily')">Daily</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                onclick="filterData('weekly')">Weekly</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                onclick="filterData('monthly')">Monthly</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                onclick="filterData('yearly')">Yearly</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pb-2">
                                <div class="d-sm-flex d-block">
                                    <div class="form-check toggle-switch text-end form-switch me-4">
                                        <input checked class="form-check-input" type="checkbox"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Number</label>
                                    </div>
                                    <div class="form-check toggle-switch text-end form-switch me-auto">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault1">
                                        <label class="form-check-label" for="flexSwitchCheckDefault1">Analytics</label>
                                    </div>
                                    <ul class="card-list d-flex mt-sm-0 mt-3">
                                        <li class="me-3"><span class="bg-success circle"></span>Sales</li>
                                        <li><span class="bg-danger circle"></span>Expenses</li>
                                    </ul>   
                                </div>
                                <div id="chartBar3" class="bar-chart"></div>
                                <!-- <div id="chartBarUpdated" class="bar-chart"></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-6">
                        <div class="card">
                            <div class="card-header d-block d-sm-flex border-0">
                                <div class="me-3">
                                    <h4 class="card-title mb-2">Recent Transactions</h4>
                                    <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                                </div>




                                <div class="card-tabs mt-3 mt-sm-0">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#monthly"
                                                role="tab">Sales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Weekly"
                                                role="tab">Expenses</a>
                                        </li>
                                        <!-- <li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Today</a>
										</li> -->
                                    </ul>
                                </div>

                                <!-- MANAGE BUTTON -->
                                <!-- <div class="mb-3">
									<button id="manageButton" class="btn btn-primary" style="display: block;" onclick="manageData()">Manage Sales</button>
								</div> -->

                                <!-- <div class="mb-3">
									<button id="manageButton" class="btn btn-primary btn-sm rounded-4" style="display: block;" onclick="manageData()">Manage Sales</button>
								</div> -->

                                <div class="mb-3 d-flex justify-content-end align-items-center">
                                    <button id="manageButton" class="btn btn-primary btn-sm rounded-4.5"
                                        style="display: block;" onclick="manageData()">Manage Sales</button>
                                </div>

                                <!-- <div class="mb-3">
									<button id="manageButton" class="btn btn-primary btn-sm" style="display: block;" onclick="manageData()">Manage Sales</button>
								</div> -->
                            </div>
                            <div class="card-body tab-content p-0">
                                <div class="tab-pane active show fade" id="monthly" role="tabpanel">
                                    <div class="table-responsive">
                                        <table id="sales-table-all"
                                            class="table table-responsive-md card-table sales-table">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">SaleID</th>
                                                    <th style="text-align: center;">Details</th>
                                                    <th style="text-align: center;">Date</th>
                                                    <th style="text-align: center;">Amount</A></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($latestSales): ?>
                                                <?php foreach ($latestSales as $allSale): ?>
                                                <tr>
                                                    <td style="text-align: center;"
                                                        class="fs-16 text-black font-w600 mb-0">
                                                        <svg class="bgl-success tr-icon" width="63" height="63"
                                                            viewBox="0 0 63 63" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <path
                                                                    d="M35.2219 42.9875C34.8938 42.3094 35.1836 41.4891 35.8617 41.1609C37.7484 40.2531 39.3453 38.8422 40.4828 37.0758C41.6477 35.2656 42.2656 33.1656 42.2656 31C42.2656 24.7875 37.2125 19.7344 31 19.7344C24.7875 19.7344 19.7344 24.7875 19.7344 31C19.7344 33.1656 20.3523 35.2656 21.5117 37.0813C22.6437 38.8477 24.2461 40.2586 26.1328 41.1664C26.8109 41.4945 27.1008 42.3094 26.7727 42.993C26.4445 43.6711 25.6297 43.9609 24.9461 43.6328C22.6 42.5063 20.6148 40.7563 19.2094 38.5578C17.7656 36.3047 17 33.6906 17 31C17 27.2594 18.4547 23.743 21.1016 21.1016C23.743 18.4547 27.2594 17 31 17C34.7406 17 38.257 18.4547 40.8984 21.1016C43.5453 23.7484 45 27.2594 45 31C45 33.6906 44.2344 36.3047 42.7852 38.5578C41.3742 40.7508 39.3891 42.5063 37.0484 43.6328C36.3648 43.9555 35.55 43.6711 35.2219 42.9875Z"
                                                                    fill="#2BC155"></path>
                                                                <path
                                                                    d="M36.3211 31.7274C36.5891 31.9953 36.7203 32.3453 36.7203 32.6953C36.7203 33.0453 36.5891 33.3953 36.3211 33.6633L32.8812 37.1031C32.3781 37.6063 31.7109 37.8797 31.0055 37.8797C30.3 37.8797 29.6273 37.6008 29.1297 37.1031L25.6898 33.6633C25.1539 33.1274 25.1539 32.2633 25.6898 31.7274C26.2258 31.1914 27.0898 31.1914 27.6258 31.7274L29.6437 33.7453L29.6437 25.9742C29.6437 25.2196 30.2562 24.6071 31.0109 24.6071C31.7656 24.6071 32.3781 25.2196 32.3781 25.9742L32.3781 33.7508L34.3961 31.7328C34.9211 31.1969 35.7852 31.1969 36.3211 31.7274Z"
                                                                    fill="#2BC155"></path>
                                                            </g>
                                                        </svg> <?= htmlspecialchars($allSale->saleid) ?>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <h6 class="fs-16 text-black font-w600 mb-0">
                                                            <?= htmlspecialchars($allSale->categoryname) ?>
                                                        </h6>
                                                        <span class="fs-14">PID:
                                                            <?= htmlspecialchars($allSale->productid) ?>,
                                                            <?= htmlspecialchars($allSale->description) ?>, Qty:
                                                            <?= htmlspecialchars($allSale->quantity) ?><span>
                                                    </td>

                                                    <!-- <td style="text-align: center;"><?= htmlspecialchars($allSale->categoryname) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($allSale->productid) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($allSale->description) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($allSale->quantity) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($allSale->saleprice) ?></td> -->
                                                    <?php
                                                                    $transactionDateTime = new DateTime($allSale->saledate);
                                                                    $date = $transactionDateTime->format('Y-m-d');
                                                                    $time = $transactionDateTime->format('h:i:s A'); // 12-hour format with AM/PM
                                                                ?>
                                                    <td style="text-align: center;">
                                                        <h6 class="fs-16 text-black font-w600 mb-0">
                                                            <?= htmlspecialchars($date) ?>
                                                        </h6>
                                                        <span class="fs-14">
                                                            <?= htmlspecialchars($time) ?><span>
                                                    </td>
                                                    <td style="text-align: center;"
                                                        class="fs-16 text-black font-w600 mb-0">
                                                        <?= htmlspecialchars($allSale->amount) ?>
                                                    </td>

                                                    <!-- <td>
                                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Action
                                                                    </button>
                                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                        <?php if ($expense->categoryname === 'PRODUCT EXPENSES'): ?>
                                                                            <li><a class="dropdown-item view-info" data-bs-toggle="modal" data-bs-target="#SetPrice">View Info</a></li>
                                                                        <?php endif; ?>
                                                                    </ul>
                                                                </td> -->
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php else: ?>
                                                <tr>
                                                    <td colspan="10">No products found.</td>
                                                </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Weekly" role="tabpanel">
                                    <div class="table-responsive">
                                        <table id="expenses-table-all"
                                            class="table table-responsive-md card-table expenses-table">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">Exp. ID</th>
                                                    <th style="text-align: center;">Details</th>
                                                    <th style="text-align: center;">Date</th>
                                                    <th style="text-align: center;">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($latestExpenses): ?>
                                                <?php foreach ($latestExpenses as $expense): ?>
                                                <tr data-expenseid="<?= htmlspecialchars($expense->expenseid) ?>"
                                                    data-category="<?= htmlspecialchars($expense->categoryname) ?>"
                                                    data-description="<?= htmlspecialchars($expense->description) ?>"
                                                    data-amount="<?= htmlspecialchars($expense->amount) ?>"
                                                    data-productcategory="<?= htmlspecialchars($expense->productcategory) ?>"
                                                    data-brand="<?= htmlspecialchars($expense->brandname) ?>"
                                                    data-name="<?= htmlspecialchars($expense->productname) ?>"
                                                    data-size="<?= htmlspecialchars($expense->size) ?>"
                                                    data-color="<?= htmlspecialchars($expense->color) ?>"
                                                    data-qty="<?= htmlspecialchars($expense->quantity) ?>"
                                                    data-unitprice="<?= htmlspecialchars($expense->unitprice) ?>"
                                                    data-image="<?= htmlspecialchars($expense->productimageurl) ?>">

                                                    <td style="text-align: center;"
                                                        class="fs-16 text-black font-w600 mb-0">
                                                        <svg class="bgl-danger tr-icon" width="63" height="63"
                                                            viewBox="0 0 63 63" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <path
                                                                    d="M35.2219 19.0125C34.8937 19.6906 35.1836 20.5109 35.8617 20.8391C37.7484 21.7469 39.3453 23.1578 40.4828 24.9242C41.6476 26.7344 42.2656 28.8344 42.2656 31C42.2656 37.2125 37.2125 42.2656 31 42.2656C24.7875 42.2656 19.7344 37.2125 19.7344 31C19.7344 28.8344 20.3523 26.7344 21.5117 24.9187C22.6437 23.1523 24.2461 21.7414 26.1328 20.8336C26.8109 20.5055 27.1008 19.6906 26.7726 19.007C26.4445 18.3289 25.6297 18.0391 24.9461 18.3672C22.6 19.4937 20.6148 21.2437 19.2094 23.4422C17.7656 25.6953 17 28.3094 17 31C17 34.7406 18.4547 38.257 21.1015 40.8984C23.743 43.5453 27.2594 45 31 45C34.7406 45 38.257 43.5453 40.8984 40.8984C43.5453 38.2516 45 34.7406 45 31C45 28.3094 44.2344 25.6953 42.7851 23.4422C41.3742 21.2492 39.389 19.4937 37.0484 18.3672C36.3648 18.0445 35.55 18.3289 35.2219 19.0125Z"
                                                                    fill="#FF2E2E"></path>
                                                                <path
                                                                    d="M36.3211 30.2726C36.589 30.0047 36.7203 29.6547 36.7203 29.3047C36.7203 28.9547 36.589 28.6047 36.3211 28.3367L32.8812 24.8969C32.3781 24.3937 31.7109 24.1203 31.0055 24.1203C30.3 24.1203 29.6273 24.3992 29.1297 24.8969L25.6898 28.3367C25.1539 28.8726 25.1539 29.7367 25.6898 30.2726C26.2258 30.8086 27.0898 30.8086 27.6258 30.2726L29.6437 28.2547L29.6437 36.0258C29.6437 36.7804 30.2562 37.3929 31.0109 37.3929C31.7656 37.3929 32.3781 36.7804 32.3781 36.0258L32.3781 28.2492L34.3961 30.2672C34.9211 30.8031 35.7851 30.8031 36.3211 30.2726Z"
                                                                    fill="#FF2E2E"></path>
                                                            </g>
                                                        </svg>

                                                        <?= htmlspecialchars($expense->expenseid) ?>
                                                    </td>

                                                    <td style="text-align: center;">
                                                        <h6 class="fs-16 text-black font-w600 mb-0">
                                                            <?= htmlspecialchars($expense->categoryname) ?>
                                                        </h6>
                                                        <span class="fs-14">
                                                            <?= htmlspecialchars($expense->description) ?><span>
                                                    </td>

                                                    <?php
                                                                    $transactionDateTime = new DateTime($expense->transactiondate);
                                                                    $date = $transactionDateTime->format('Y-m-d');
                                                                    $time = $transactionDateTime->format('h:i:s A'); // 12-hour format with AM/PM
                                                                ?>
                                                    <td style="text-align: center;">
                                                        <h6 class="fs-16 text-black font-w600 mb-0">
                                                            <?= htmlspecialchars($date) ?>
                                                        </h6>
                                                        <span class="fs-14">
                                                            <?= htmlspecialchars($time) ?><span>
                                                    </td>

                                                    <td style="text-align: center;"
                                                        class="fs-16 text-black font-w600 mb-0">
                                                        <?= htmlspecialchars($expense->amount) ?>
                                                    </td>

                                                </tr>
                                                <?php endforeach; ?>
                                                <?php else: ?>
                                                <tr>
                                                    <td colspan="10">No products found.</td>
                                                </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card bg-success coin-card">
                                    <div class="card-body d-sm-flex d-block align-items-center">
                                        <span class="coin-icon">
                                            <svg width="38" height="41" viewBox="0 0 38 41" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M14.0413 32.5832C15.7416 32.5934 17.4269 32.2659 18.9997 31.6199C20.5708 32.2714 22.2572 32.5991 23.958 32.5832C29.1218 32.5832 33.1663 29.8278 33.1663 26.3088V20.441C33.1663 16.922 29.1218 14.1666 23.958 14.1666C23.7186 14.1666 23.4834 14.1779 23.2497 14.1906V7.55498C23.2497 4.10823 19.2051 1.41656 14.0413 1.41656C8.87759 1.41656 4.83301 4.10823 4.83301 7.55498V26.4448C4.83301 29.8916 8.87759 32.5832 14.0413 32.5832ZM30.333 26.3088C30.333 27.9366 27.715 29.7499 23.958 29.7499C20.201 29.7499 17.583 27.9366 17.583 26.3088V24.9984C19.5015 26.1652 21.7131 26.7604 23.958 26.714C26.203 26.7604 28.4145 26.1652 30.333 24.9984V26.3088ZM23.958 16.9999C27.715 16.9999 30.333 18.8132 30.333 20.441C30.333 22.0687 27.715 23.8807 23.958 23.8807C20.201 23.8807 17.583 22.0673 17.583 20.441C17.583 18.8147 20.201 16.9999 23.958 16.9999ZM14.0413 4.2499C17.7983 4.2499 20.4163 5.9924 20.4163 7.55498C20.4163 9.11757 17.7983 10.8615 14.0413 10.8615C10.2843 10.8615 7.66634 9.11898 7.66634 7.55498C7.66634 5.99098 10.2843 4.2499 14.0413 4.2499ZM7.66634 12.0161C9.59282 13.1601 11.8012 13.7417 14.0413 13.6948C16.2814 13.7417 18.4899 13.1601 20.4163 12.0161V14.6341C18.8724 15.0232 17.4565 15.8078 16.308 16.9107C15.5631 17.0718 14.8034 17.1545 14.0413 17.1572C10.2843 17.1572 7.66634 15.4146 7.66634 13.8521V12.0161ZM7.66634 18.3132C9.59323 19.4561 11.8015 20.0371 14.0413 19.9905C14.2935 19.9905 14.5372 19.9593 14.7851 19.9466C14.764 20.1106 14.7522 20.2756 14.7497 20.441V23.3947C14.5117 23.4089 14.2822 23.4542 14.0413 23.4542C10.2843 23.4542 7.66634 21.7117 7.66634 20.1477V18.3132ZM7.66634 24.6088C9.59282 25.7529 11.8012 26.3344 14.0413 26.2876C14.2793 26.2876 14.5131 26.2692 14.7497 26.2578V26.3088C14.7699 27.5148 15.2334 28.6711 16.0516 29.5572C15.3887 29.6824 14.7159 29.7469 14.0413 29.7499C10.2843 29.7499 7.66634 28.0074 7.66634 26.4448V24.6088Z"
                                                        fill="#fff"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <div>
                                            <h3 class="text-white">Profit Report: In-Depth Financial Analysis</h3>
                                            <p>Our profit report offers detailed analysis, highlighting key metrics and trends. Discover actionable insights to optimize profitability and enhance your business strategy.</p>


                                            <a class="text-white" href="javascript:void(1);" data-toggle="modal" data-target="#learnMoreModal">Learn more >></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card progress-card">
                                        <div class="card-body">
                                            <h4 class="card-title mt-2">Daily Sales Count</h4>
                                            <div class="d-flex align-items-center mt-3 mb-2">
                                                <h2 class="fs-38 mb-0 me-3"><?= $countDailySales ?></h2>
                                                <span class="badge badge-success badge-xl">Daily</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mt-2">Daily Expenses Count</h4>
                                        <div class="d-flex align-items-center mt-3 mb-2">
                                            <h2 class="fs-38 mb-0 me-3"><?= $countDailyExpense ?></h2>
                                            <span class="badge badge-success badge-xl">Daily</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mt-2">Weekly Sales Count</h4>
                                        <div class="d-flex align-items-center mt-3 mb-2">
                                            <h2 class="fs-38 mb-0 me-3"><?= $countWeeklySales ?></h2>
                                            <span class="badge badge-success badge-xl">Weekly</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mt-2">Weekly Expenses Count</h4>
                                        <div class="d-flex align-items-center mt-3 mb-2">
                                            <h2 class="fs-38 mb-0 me-3"><?= $countWeeklyExpense ?></h2>
                                            <span class="badge badge-success badge-xl">Weekly</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Report Modal -->

                    <!-- Generate Report Modal -->
                    <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="reportModalLabel">Select Report Type</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Select the type of report you want to generate:</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#downloadReportModalProfit" onclick="handleReportType('Profit')">Profit</button>
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn btn-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#downloadReportModalSales" onclick="handleReportType('Sales')">Sales</button>
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn btn-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#downloadReportModal" onclick="handleReportType('Expenses')">Expenses</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Download Report Modal Expenses-->
                    <div class="modal fade" id="downloadReportModal" tabindex="-1" aria-labelledby="downloadReportModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="expenses/generatePdf" method="POST">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="downloadReportModalLabel">Download Report Options</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="reportType">Select Report Type:</label>
                                            <select class="form-control" id="reportType" name="report_type" onchange="toggleSpecificDate()">
                                                <option value="">Select...</option>
                                                <option value="1">All</option>
                                                <option value="2">Monthly</option>
                                                <option value="3">Weekly</option>
                                                <option value="4">Daily</option>
                                            </select>
                                        </div>
                                        <div class="text-center mt-3">
                                            <p><strong>OR</strong></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="specificDate">Select Specific Date:</label>
                                            <input type="date" class="form-control" id="specificDate" name="specific_date" onchange="toggleReportType()">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-rounded btn-md btn-secondary" style="width: 100%;" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-rounded btn-md btn-primary" style="width: 100%;">Download Report</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Download Report Modal Sales -->
                    <div class="modal fade" id="downloadReportModalSales" tabindex="-1" aria-labelledby="downloadReportModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="sales/generatePdf" method="POST">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="downloadReportModalLabel">Download Report Options</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="reportType">Select Report Type:</label>
                                            <select class="form-control" id="reportType" name="report_type" onchange="toggleSpecificDate()">
                                                <option value="">Select...</option>
                                                <option value="1">All</option>
                                                <option value="2">Monthly</option>
                                                <option value="3">Weekly</option>
                                                <option value="4">Daily</option>
                                            </select>
                                        </div>
                                        <div class="text-center mt-3">
                                            <p><strong>OR</strong></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="specificDate">Select Specific Date:</label>
                                            <input type="date" class="form-control" id="specificDate" name="specific_date" onchange="toggleReportType()">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-rounded btn-md btn-secondary" style="width: 100%;" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-rounded btn-md btn-primary" style="width: 100%;">Download Report</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Download Report Modal Profit -->
                    <div class="modal fade" id="downloadReportModalProfit" tabindex="-1" aria-labelledby="downloadReportModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="downloadReportModalLabel">Download Report Options</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form id="downloadReportForm" action="Records/GeneratePdf" method="post" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="reportType">Select Report Type:</label>
                                                                <select class="form-control" id="reportType" name="report_type" onchange="toggleSpecificDate()">
                                                                    <option value="">Select...</option>
                                                                    <option value="1">Monthly Profit</option>
                                                                    <option value="2">All Profit Breakdown</option>
                                                                    <option value="4">All Profit Overview</option>
                                                                    <option value="3">Statistical Report</option>

                                                                    <!-- <option value="daily">Daily</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-rounded btn-md btn-secondary" style="width: 100%;" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-rounded btn-md btn-primary" style="width: 100%;">Download Report</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                    </div>

                    <!-- Modal for showing all notifications -->
                    <div class="modal fade" id="alertsModal" tabindex="-1" role="dialog" aria-labelledby="alertsModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="alertsModalLabel">All Alerts</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php if (!empty($notif)): ?>
                                        <div class="list-group">
                                            <?php foreach ($notif as $notification): ?>
                                                <a href="#" class="list-group-item list-group-item-action <?= $notification->is_read ? 'read-notification' : 'unread-notification' ?>">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1"><?= $notification->action ?> <?= $notification->tablename ?></h5>
                                                        <small><?= date('F j, Y', strtotime($notification->notificationtime)) ?></small>
                                                    </div>
                                                    <p class="mb-1"><?= $notification->message ?></p>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php else: ?>
                                        <div class="alert alert-info" role="alert">
                                            No notifications found.
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" id="markAllAsDeletedBtn" >Delete All</button>
                                    <button type="button" class="btn btn-primary" id="markAllAsReadBtn" <?= $notifCount == 0 ? 'disabled' : '' ?>>Mark All as Read</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Learn More Modal HTML -->
                    <div class="modal fade" id="learnMoreModal" tabindex="-1" aria-labelledby="learnMoreModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="learnMoreModalLabel">Monthly Progress Summary and Analysis</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        // Place your PHP code here to fetch and display the content for case 3
                                        // Assuming you have an object $profit to fetch the data
                                        $profit = new ProfitModel();
                                        $products = new ProductsModel();
                                        $expense = new ExpensesModel();
                                        $sale = new SalesModel();

                                        $currentMonthlyProfit = $profit->getMonthlyProfitData();
                                        $previousMonthlyProfit = $profit->getPreviousMonthProfitData();
                                        $latestExpenses = $expense->getLatestExpenses();
                                        $currentMonthlyExpenses = $expense->getMonthlyExpensesData();
                                        $previousMonthlyExpenses = $expense->getPreviousMonthExpensesData();
                                        $currentMonth = $expense->getCurrentMonth();
                                        $productExpense = $expense->getProductExpense();
                                        $allSales = $sale->getAllSales();
                                        $monthlySales = $sale->getMonthlySales();
                                        $weeklySales = $sale->getWeeklySales();
                                        $todaySales = $sale->getDailySales();
                                        $monthlySalesData = $sale->getMonthlySaleData();
                                        $topSellingProduct = $products->getMonthlyTopSellingProduct();

                                        $profit = $currentMonthlyProfit;
                                        $totalSales = $monthlySalesData;
                                        $month = $currentMonth;
                                        $topSellingProductName = $topSellingProduct->productname;
                                        $topSellingProductBrand = $topSellingProduct->brandname;
                                        $topSellingProductCategory = $topSellingProduct->category;
                                        $productSales = $topSellingProduct->totalproductsale;
                                        $topSellingProductQuantitySold = $topSellingProduct->quantitysold;
                                        $totalExpenses = $currentMonthlyExpenses;

                                        if ($profit > 0) {
                                            $profitStatus = '<strong style="color: lightgreen;">positive</strong>';
                                            $profitAmount = '₱' . number_format($profit, 2);
                                        } elseif ($profit < 0) {
                                            $profitStatus = '<strong style="color: red;">negative</strong>';
                                            $profitAmount = '- ₱' . number_format(abs($profit), 2);
                                        } else {
                                            $profitStatus = 'no profit has been made yet this month.';
                                            $profitAmount = '';
                                        }

                                        $currentMonthExpenses = number_format($currentMonthlyExpenses, 2);
                                        $previousMonthExpenses = number_format($previousMonthlyExpenses, 2);

                                        if ($previousMonthlyExpenses > 0) {
                                            $percentChange = (($currentMonthlyExpenses - $previousMonthlyExpenses) / $previousMonthlyExpenses) * 100;
                                        } else {
                                            $percentChange = 0;
                                        }
                                        
                                        echo '<div style="text-align: center;">';
                                        echo '<p>For the month of ' . $month . ', your business generated a total of ₱' . number_format($totalSales, 2) . ' in sales.</p>';
                                        echo '<p>Your top-selling product was <strong>' . $topSellingProductName . '</strong> by <strong>' . $topSellingProductBrand . '</strong>, which belongs to the <strong>' . $topSellingProductCategory . '</strong> category. This product contributed ₱' . number_format($productSales, 2) . ' to the total sales, with ' . $topSellingProductQuantitySold . ' units sold.</p>';

                                        echo '<p>You spent a total of ₱' . $currentMonthExpenses . ' in expenses this month, ';
                                        if ($percentChange > 0) {
                                            echo 'showing an increase of ' . number_format($percentChange, 2) . '% compared to ₱' . $previousMonthExpenses . ' in the previous month.';
                                        } elseif ($percentChange < 0) {
                                            echo 'showing a decrease of ' . number_format(abs($percentChange), 2) . '% compared to ₱' . $previousMonthExpenses . ' in the previous month.';
                                        } else {
                                            echo 'which is the same as ₱' . $previousMonthExpenses . ' in the previous month.';
                                        }
                                        echo '</p>';

                                        echo '<p>Out of the total expenses, ₱' . number_format($productExpense, 2) . ' was spent specifically on product expenses.</p>';

                                        if ($profitAmount > 0) {
                                            echo '<p>Your business is in a ' . $profitStatus . ' position, with a net profit of ' . $profitAmount . ' for the month.</p>';
                                            echo '<p>It\'s recommended to capitalize on the success of <strong>' . $topSellingProductName . '</strong> by exploring opportunities to increase its availability or promotion. Consider offering complementary products or accessories to boost sales further.</p>';
                                        } else {
                                            echo '<p>Your business is in a ' . $profitStatus . ' position, with a net loss of ' . $profitAmount . ' for the month. It\'s crucial to review expenses and strategies to improve profitability.</p>';
                                            echo '<p>One area of focus could be to capitalize on the popularity of <strong>' . $topSellingProductName . '</strong> to increase sales. Consider bundling it with other products or offering promotions to attract more customers.</p>';
                                        }

                                        echo '<p>Keep up the good work and continue to manage your expenses effectively!</p>';
                                        echo '</div>';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End Modal -->

                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scriptss
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?=ROOT?>/assets/Dashboard/vendor/global/global.min.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <!-- Apex Chart -->
    <script src="<?=ROOT?>/assets/Dashboard/vendor/apexchart/apexchart.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/vendor/nouislider/nouislider.min.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/vendor/wnumb/wNumb.js"></script>

    <!-- Dashboard 1 -->
    <script src="<?=ROOT?>/assets/Dashboard/js/dashboard/dashboard-1.js"></script>
    <!-- Dashboard 1 for Bar-->
    <script src="<?= ROOT ?>/assets/js/dashboard-1.js"></script>

    <script src="<?=ROOT?>/assets/Dashboard/js/custom.min.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/js/dlabnav-init.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/js/demo.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/js/styleSwitcher.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>


    <!-- SHOW MANAGE SALES OR EXPENSES -->
    <script>
        // Function to manage the button display based on the active tab
        function manageData() {
            var monthlyTab = document.querySelector('.nav-link[href="#monthly"]');
            var weeklyTab = document.querySelector('.nav-link[href="#Weekly"]');

            if (monthlyTab.classList.contains('active')) {
                // Code to manage sales
                window.location.href = '<?=ROOT?>/Sales'; // Change URL for manage sales
            } else if (weeklyTab.classList.contains('active')) {
                // Code to manage expenses
                window.location.href = '<?=ROOT?>/Expenses'; // Change URL for manage expenses
            }
        }

        // Add event listener to handle tab change and show/hide the button
        document.addEventListener('DOMContentLoaded', function () {
            var tabs = document.querySelectorAll('.nav-tabs .nav-item .nav-link');
            tabs.forEach(function (tab) {
                tab.addEventListener('click', function () {
                    if (tab.getAttribute('href') === '#monthly') {
                        document.getElementById('manageButton').style.display = 'block';
                        document.getElementById('manageButton').textContent = 'Manage Sales';
                    } else if (tab.getAttribute('href') === '#Weekly') {
                        document.getElementById('manageButton').style.display = 'block';
                        document.getElementById('manageButton').textContent = 'Manage Expenses';
                    } else {
                        document.getElementById('manageButton').style.display = 'none';
                    }
                });
            });
        });
    </script>

    <!-- TOGGLE CARD CONTENT -->
    <script>
        function toggleCardContent() {
            var cardBox = document.getElementById('cardBox');
            var amountDisplay = document.getElementById('amountDisplay');
            var typeDisplay = document.getElementById('typeDisplay');
            var percentageDisplay = document.getElementById('percentageDisplay');

            // Check the current content and toggle accordingly
            if (typeDisplay.innerHTML.includes("Expenses")) {
                amountDisplay.innerHTML = "₱ <?= $currentMonthlyProfit ?>";
                typeDisplay.innerHTML = "Current Month's Profit";
                percentageDisplay.innerHTML = "<?= $sign . $percentageChange ?>% than last month";
                cardBox.classList.remove('bg-blue');
            } else {
                amountDisplay.innerHTML = "₱ <?= $currentMonthlyExpenses ?>";
                typeDisplay.innerHTML = "Current Month's Expenses";
                percentageDisplay.innerHTML = "<?= $expensesSign . $expensesPercentageChange ?>% than last month";
                cardBox.classList.add('bg-blue');
            }
        }
    </script>

    <!-- POPULATE CHART DATA -->
    <script>
        $(document).ready(function() {
            // Function to fetch data from database and update chart
            var updatePieChart = function() {
                $.ajax({
                    url: 'Inventory/getData', // PHP script to fetch data
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        // Filter out entries with expensepercentage = 0
                        data = data.filter(function(obj) {
                            return parseFloat(obj.expensepercentage) !== 0;
                        });

                        // Calculate total percentage
                        var totalPercentage = data.reduce(function(acc, obj) {
                            return acc + parseFloat(obj.expensepercentage);
                        }, 0);

                        // Create data array with actual percentages
                        var chartData = {
                            labels: data.map(function(obj) { return obj.expensecategory; }),
                            datasets: [{
                                backgroundColor: [
                                    "#496ecc",
                                    "#68e365",
                                    "#ffa755",
                                    "#c8c8c8",
                                    "#F3FF02"
                                ],
                                data: data.map(function(obj) {
                                    return parseFloat(obj.expensepercentage);
                                })
                            }]
                        };

                        // Update chart with fetched data
                        var ctx = document.getElementById("pieChart").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'pie',
                            data: chartData,
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                tooltips: {
                                    callbacks: {
                                        label: function(tooltipItem, data) {
                                            var label = data.labels[tooltipItem.index] || '';
                                            var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                                            return label + ': ' + value.toFixed(2) + '%';
                                        }
                                    }
                                },
                                legend: {
                                    display: false
                                }
                            }
                        });
                    },
                    error: function(err) {
                        console.error('Error fetching data:', err);
                    }
                });
            };

            // Call the function to initially load the chart
            updatePieChart();

            // You can optionally add an interval to update the chart periodically
            // setInterval(updatePieChart, 60000); // Update every minute
        });
    </script>

    <!-- UPDATE BAR -->
    <script>
        var updateChart = function (barData) {
            // Get the last 4 days from the barData array
            var recentData = barData.slice(-4);
            
            var categories = recentData.map(item => {
                // Convert day names to abbreviations
                return item.day.substring(0, 3); // Extract first 3 characters
            });
            var incomeData = recentData.map(item => item.total_sales);
            var outcomeData = recentData.map(item => item.total_expenses);

            var options = {
                series: [{
                        name: 'Income',
                        data: incomeData,
                    },
                    {
                        name: 'Outcome',
                        data: outcomeData,
                    },
                ],
                chart: {
                    type: 'bar',
                    height: 200,
                    toolbar: {
                        show: false,
                    },
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '57%',
                        borderRadius: 12
                    },
                },
                states: {
                    hover: {
                        filter: 'none',
                    }
                },
                colors: ['#80ec67', '#fe7d65'],
                dataLabels: {
                    enabled: false,
                },
                markers: {
                    shape: "circle",
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'right',
                    show: false,
                    fontSize: '12px',
                    labels: {
                        colors: '#000000',
                    },
                    markers: {
                        width: 18,
                        height: 18,
                        strokeWidth: 0,
                        strokeColor: '#fff',
                        fillColors: undefined,
                        radius: 12,
                    }
                },
                stroke: {
                    show: true,
                    width: 4,
                    colors: ['transparent']
                },
                grid: {
                    borderColor: '#eee',
                },
                xaxis: {
                    categories: categories,
                    labels: {
                        style: {
                            colors: '#3e4954',
                            fontSize: '13px',
                            fontFamily: 'poppins',
                            fontWeight: 400,
                            cssClass: 'apexcharts-xaxis-label',
                        },
                        offsetY: 5, // Adjust the label's position below the chart
                        rotate: 0, // Keep the labels horizontal
                    },
                    axisTicks: {
                        show: false,
                    },
                    crosshairs: {
                        show: false,
                    }
                },
                yaxis: {
                    labels: {
                        offsetX: -16,
                        style: {
                            colors: '#3e4954',
                            fontSize: '13px',
                            fontFamily: 'poppins',
                            fontWeight: 400,
                            cssClass: 'apexcharts-xaxis-label',
                        },
                    },
                },
                fill: {
                    opacity: 1,
                    colors: ['#80ec67', '#fe7d65'],
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return "$ " + val.toFixed(2);
                        }
                    }
                },
                responsive: [{
                        breakpoint: 1600,
                        options: {
                            chart: {
                                height: 400,
                            }
                        },
                    },
                    {
                        breakpoint: 575,
                        options: {
                            chart: {
                                height: 250,
                            }
                        },
                    }
                ]
            };

            var chartBarUpdated = new ApexCharts(document.querySelector("#chartBarUpdated"), options);
            chartBarUpdated.render();
        };

        var fetchData = function () {
            $.ajax({
                url: '<?= ROOT ?>/Records/getDataWeeklyLatest',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    updateChart(data);
                },
                error: function (error) {
                    console.error('Error fetching data:', error);
                }
            });
        };

        fetchData();
    </script>

    <!-- UPDATE BAR DAKO NA GRAPH-->
    <script>
        var updateChart3 = function (barData) {
            var recentData = barData.slice(-7); // Get data for the last 7 days

            var categories = recentData.map(item => {
                return item.day.substring(0, 3); // Extract first 3 characters
            });
            var incomeData = recentData.map(item => item.total_sales);
            var outcomeData = recentData.map(item => item.total_expenses);

            var options = {
                series: [{
                        name: 'Income',
                        data: incomeData,
                    },
                    {
                        name: 'Outcome',
                        data: outcomeData,
                    },
                ],
                chart: {
                    type: 'bar',
                    height: 400,
                    toolbar: {
                        show: false,
                    },
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '57%',
                        borderRadius: 12
                    },
                },
                states: {
                    hover: {
                        filter: 'none',
                    }
                },
                colors: ['#80ec67', '#fe7d65'],
                dataLabels: {
                    enabled: false,
                },
                markers: {
                    shape: "circle",
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'right',
                    show: false,
                    fontSize: '12px',
                    labels: {
                        colors: '#000000',
                    },
                    markers: {
                        width: 18,
                        height: 18,
                        strokeWidth: 0,
                        strokeColor: '#fff',
                        fillColors: undefined,
                        radius: 12,
                    }
                },
                stroke: {
                    show: true,
                    width: 4,
                    colors: ['transparent']
                },
                grid: {
                    borderColor: '#eee',
                },
                xaxis: {
                    categories: categories,
                    labels: {
                        style: {
                            colors: '#3e4954',
                            fontSize: '13px',
                            fontFamily: 'poppins',
                            fontWeight: 400,
                            cssClass: 'apexcharts-xaxis-label',
                        },
                        offsetY: 5, // Adjust the label's position below the chart
                        rotate: 0, // Keep the labels horizontal
                    },
                    axisTicks: {
                        show: false,
                    },
                    crosshairs: {
                        show: false,
                    }
                },
                yaxis: {
                    labels: {
                        offsetX: -16,
                        style: {
                            colors: '#3e4954',
                            fontSize: '13px',
                            fontFamily: 'poppins',
                            fontWeight: 400,
                            cssClass: 'apexcharts-xaxis-label',
                        },
                    },
                },
                fill: {
                    opacity: 1,
                    colors: ['#80ec67', '#fe7d65'],
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return "$ " + val.toFixed(2);
                        }
                    }
                },
                responsive: [{
                        breakpoint: 1600,
                        options: {
                            chart: {
                                height: 400,
                            }
                        },
                    },
                    {
                        breakpoint: 575,
                        options: {
                            chart: {
                                height: 250,
                            }
                        },
                    }
                ]
            };

            var chartBar3 = new ApexCharts(document.querySelector("#chartBar3"), options);
            chartBar3.render();
        };

        var fetchData = function () {
            $.ajax({
                url: 'Records/getDataWeekly',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    updateChart3(data);
                },
                error: function (error) {
                    console.error('Error fetching data:', error);
                }
            });
        };

        fetchData();
    </script>

    <!-- GENERATE REPORT MODAL -->
    <script>
    // Function to show the modal when the "Generate Report" button is clicked
    $(document).ready(function() {
        $('#generateReportBtn').on('click', function() {
            $('#reportModal').modal('show');
        });

        // Function to handle report type selection
        function handleReportType(type) {
            alert('Generating ' + type + ' report...');
            $('#reportModal').modal('hide');
        }
    });
    </script>

    <!-- NOTIFICATIONS MODAL -->
    <script>
        $(document).ready(function () {
            // Toggle dropdown menu
            $('.notification_dropdown').on('click', function (event) {
                event.stopPropagation();
                $('.notification_dropdown .dropdown-menu').toggleClass('show');
            });

            // Close dropdown on click outside
            $(document).click(function (e) {
                if (!$(e.target).closest('.notification_dropdown').length) {
                    $('.notification_dropdown .dropdown-menu').removeClass('show');
                }
            });

            // Show all alerts in modal on button click
            $('.show-all-alerts-btn').on('click', function (e) {
                e.preventDefault();
                $('#alertsModal').modal('show');
            });

            // Mark all as read button click event
            $('#markAllAsReadBtn').on('click', function () {
                $.ajax({
                    url: '<?= ROOT ?>/Home/markAllAsRead',
                    type: 'POST',
                    success: function (response) {
                        alert('All notifications marked as read');
                        $('#alertsModal').modal('hide');
                        location.reload(); // Refresh the page to update notification count
                    },
                    error: function (xhr, status, error) {
                        alert('An error occurred: ' + error);
                    }
                });
            });

            // Mark all as read button click event
            $('#markAllAsDeletedBtn').on('click', function () {
                $.ajax({
                    url: '<?= ROOT ?>/Home/markAllAsDeleted',
                    type: 'POST',
                    success: function (response) {
                        alert('All notifications deleted');
                        $('#alertsModal').modal('hide');
                        location.reload(); // Refresh the page to update notification count
                    },
                    error: function (xhr, status, error) {
                        alert('An error occurred: ' + error);
                    }
                });
            });
        });
    </script>

        <!-- LEARN MORE MODAL -->
        <script>
        $(document).ready(function(){
            $('a[href="javascript:void(1);"]').click(function(){
                $('#learnMoreModal').modal('show');
            });
        });
        </script>
</body>

</html>