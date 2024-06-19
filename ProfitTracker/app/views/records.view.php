<!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- PAGE TITLE HERE -->
        <title>Admin</title>
        
        <link href="<?=ROOT?>/assets/Dashboard/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=ROOT?>/assets/Dashboard/vendor/nouislider/nouislider.min.css">
        <!-- Style css -->
        <link href="<?=ROOT?>/assets/Dashboard/css/stylee.css" rel="stylesheet">
        <link href="cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Custome Style css -->
        <link href="<?=ROOT?>/assets/css/custom-datatable.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

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

        <!-- CHANGED OR ADDED CSS FROM STYLE.CSS -->
        <link rel="stylesheet" href="<?=ROOT?>/assets/Dashboard/css/modal.css">
        <link rel="stylesheet" href="<?=ROOT?>/assets/Dashboard/css/datatable.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">

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
    <path class="svg-logo-primary-path" d="M48.3418 41.8457H41.0957C36.8148 41.8457 33.332 38.3629 33.332 34.082C33.332 29.8011 36.8148 26.3184 41.0957 26.3184H48.3418V19.2275C48.3418 16.9408 46.4879 15.0869 44.2012 15.0869H4.14062C1.85386 15.0869 0 16.9408 0 19.2275V48.8594C0 51.1462 1.85386 53 4.14062 53H44.2012C46.4879 53 48.3418 51.1462 48.3418 48.8594V41.8457Z" fill="#FF0000"/>
    <path class="svg-logo-primary-path" d="M51.4473 29.4238H41.0957C38.5272 29.4238 36.4375 31.5135 36.4375 34.082C36.4375 36.6506 38.5272 38.7402 41.0957 38.7402H51.4473C52.3034 38.7402 53 38.0437 53 37.1875V30.9766C53 30.1204 52.3034 29.4238 51.4473 29.4238ZM41.0957 35.6348C40.2382 35.6348 39.543 34.9396 39.543 34.082C39.543 33.2245 40.2382 32.5293 41.0957 32.5293C41.9532 32.5293 42.6484 33.2245 42.6484 34.082C42.6484 34.9396 41.9532 35.6348 41.0957 35.6348Z" fill="#FF0000"/>
</svg>

				<p class="brand-title" width="124px" height="33px"  style="font-size: 25px;">ProfitPro</p>
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
                    <img src="<?=ROOT?>/assets/Dashboard/images/ion/man (1).png" width="20" alt=""/>
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
            <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
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
            <div class="content-body">
                <!-- row -->
                <div class="container-fluid">
                    <div class="row invoice-card-row">
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card coin-card">
                                <div class="card-body d-sm-flex d-block align-items-center">
                                    <div class="row g-0">
                                        <div class="col-md-8">
                                            <div>
                                                <h3 class="text-white">Get Managed Effectively</h3>
                                                <p>Optimize your workflow with streamlined task management and personalized support. Achieve better record-keeping and focus on what matters most while we handle the details.</p>
                                                <a class="text-white" href="javascript:void(1);" data-toggle="modal" data-target="#learnMoreModal">Learn more >></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- TEST -->
                    <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="card-header d-block d-sm-flex border-0">
                                            <div class="me-3">
                                                <h4 class="card-title mb-2">Total Profit Overview</h4>
                                                <span class="fs-12">PROFITTTTTTTTT DATAAA</span>
                                            </div>
                                            <div class="card-tabs mt-3 mt-sm-0">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#Alll" role="tab">All</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#monthlyy" role="tab">This Month</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#Weeklyy" role="tab">This Week</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#Todayy" role="tab">This Day</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <!-- Button trigger modal -->
                                            <div>
                                                
                                            </div>
                                        </div>
                                        </div> <!-- end -->
                            
                                        <!-- <div class="row mb-3">
                                            <div class="col-md-12">
                                                <form method="post" action="<?=ROOT?>/inventory/generatePDF" onsubmit="alertDateAndSubmit(this); return false;">
                                                    <div class="form-group">
                                                        <label for="report_date">Select Specific Date to Download:</label>
                                                        <input type="date" id="report_date" name="report_date" class="form-control" required>
                                                    </div>
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#downloadReportModal">
                                                    <i class="las la-download scale5 me-3"></i>Download Report</a>
                                                    </button>
                                                </form>
                                            </div>
                                        </div> -->
                                    </div>
                                        <div class="card-body tab-content p-0">
                            
                                            <div class="tab-pane active show fade" id="Alll" role="tabpanel">
                                                    <div class="table-responsive">
                                                    <table id="transactions-table44" class="table table-responsive-md card-table transactions-table44">
                                                            <thead>
                                                                <tr>
                                                                    <th>Month</th>
                                                                    <th>Year</th>
                                                                    <th>Total Sales</th>
                                                                    <th>Total Expenses</th>                                                               
                                                                    <th>Profit</th>
                                                                    <th>Action</th>
                                                                    <!-- <th>Action</th> -->
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if ($allProfitData): ?>
                                                                    <?php foreach ($allProfitData as $profitAll): ?>
                                                                        <tr>
                                                                            <td><?= htmlspecialchars($profitAll->monthh) ?></td>
                                                                            <td><?= htmlspecialchars($profitAll->yearr) ?></td>
                                                                            <td><?= htmlspecialchars($profitAll->total_sales) ?></td>
                                                                            <td><?= htmlspecialchars($profitAll->total_expenses) ?></td>
                                                                            <td><?= htmlspecialchars($profitAll->profit) ?></td>
                                                                            <td>
                                                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    Action
                                                                                </button>
                                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                                </ul>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                <?php else: ?>
                                                                    <tr>
                                                                        <td colspan="10">No data available in table</td>
                                                                    </tr>   
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="monthlyy" role="tabpanel">
                                                    <div class="table-responsive">
                                                        <table id="transactions-tablee" class="table table-responsive-md card-table transactions-tablee">
                                                            <thead>
                                                                <tr>
                                                                    <th>Month</th>
                                                                    <th>Year</th>
                                                                    <th>Total Sales</th>
                                                                    <th>Total Expenses</th>                                                               
                                                                    <th>Profit</th>
                                                                    <th>Action</th>
                                                                    <!-- <th>Action</th> -->
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if ($monthlyProfitData): ?>
                                                                    <?php foreach ($monthlyProfitData as $profitMonthly): ?>
                                                                        <tr>
                                                                            <td><?= htmlspecialchars($profitMonthly->month) ?></td>
                                                                            <td><?= htmlspecialchars($profitMonthly->year) ?></td>
                                                                            <td><?= htmlspecialchars($profitMonthly->total_sales) ?></td>
                                                                            <td><?= htmlspecialchars($profitMonthly->total_expenses) ?></td>
                                                                            <td><?= htmlspecialchars($profitMonthly->profit) ?></td>
                                                                            <td>
                                                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    Action
                                                                                </button>
                                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                                </ul>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                <?php else: ?>
                                                                    <tr>
                                                                        <td colspan="10">No data available in table</td>
                                                                    </tr>   
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="Weeklyy" role="tabpanel">
                                                    <div class="table-responsive">
                                                    <table id="transactions-table22" class="table table-responsive-md card-table transactions-table22">
                                                    <thead>
                                                                <tr>
                                                                    <!-- <th>Date</th>
                                                                    <th>Day</th> -->
                                                                    <th>Week</th>
                                                                    <th>Month</th>
                                                                    <th>Year</th>
                                                                    <th>Total Sales</th>
                                                                    <th>Total Expenses</th>                                                               
                                                                    <th>Profit</th>
                                                                    <th>Action</th>
                                                                    <!-- <th>Action</th> -->
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if ($weeklyProfitData): ?>
                                                                    <?php foreach ($weeklyProfitData as $profitWeekly): ?>
                                                                        <tr>
                                                                            <!-- <td><?= htmlspecialchars($profitWeekly->date) ?></td>
                                                                            <td><?= htmlspecialchars($profitWeekly->day) ?></td> -->
                                                                            <td><?= htmlspecialchars($profitWeekly->week) ?></td>
                                                                            <td><?= htmlspecialchars($profitWeekly->month) ?></td>
                                                                            <td><?= htmlspecialchars($profitWeekly->year) ?></td>
                                                                            <td><?= htmlspecialchars($profitWeekly->total_sales) ?></td>
                                                                            <td><?= htmlspecialchars($profitWeekly->total_expenses) ?></td>
                                                                            <td><?= htmlspecialchars($profitWeekly->profit) ?></td>
                                                                            <td>
                                                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    Action
                                                                                </button>
                                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                                </ul>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                <?php else: ?>
                                                                    <tr>
                                                                        <td colspan="10">No data available in table</td>
                                                                    </tr>   
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="Todayy" role="tabpanel">
                                                    <div class="table-responsive">
                                                    <table id="transactions-table33" class="table table-responsive-md card-table transactions-table33">
                                                            <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Day</th>
                                                                    <th>Week</th>
                                                                    <th>Month</th>
                                                                    <th>Year</th>
                                                                    <th>Total Sales</th>
                                                                    <th>Total Expenses</th>                                                               
                                                                    <th>Profit</th>
                                                                    <th>Action</th>
                                                                    <!-- <th>Action</th> -->
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if ($dailyProfitData): ?>
                                                                    <?php foreach ($dailyProfitData as $profitDaily): ?>
                                                                        <tr>
                                                                            <td><?= htmlspecialchars($profitDaily->date) ?></td>
                                                                            <td><?= htmlspecialchars($profitDaily->day) ?></td>
                                                                            <td><?= htmlspecialchars($profitDaily->week) ?></td>
                                                                            <td><?= htmlspecialchars($profitDaily->month) ?></td>
                                                                            <td><?= htmlspecialchars($profitDaily->year) ?></td>
                                                                            <td><?= htmlspecialchars($profitDaily->total_sales) ?></td>
                                                                            <td><?= htmlspecialchars($profitDaily->total_expenses) ?></td>
                                                                            <td><?= htmlspecialchars($profitDaily->profit) ?></td>
                                                                            <td>
                                                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    Action
                                                                                </button>
                                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                                </ul>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                <?php else: ?>
                                                                    <tr>
                                                                        <td colspan="10">No data available in table</td>
                                                                    </tr>   
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-xl-6">
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="row  mt-xl-0 mt-4"> 
                                                <div class="col-md-6">
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- <canvas id="polarChart"></canvas> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="card-header d-block d-sm-flex border-0">
                                            <div class="me-3">
                                                <h4 class="card-title mb-2">Profit Breakdown</h4>
                                                <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                                            </div>
                                            <div class="card-tabs mt-3 mt-sm-0">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#All" role="tab">All</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#monthly" role="tab">Monthly</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Weekly</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Daily</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#downloadReportModalProfit">
                                                <i class="las la-download scale5 me-2"></i> Download Report
                                            </button>
                                        </div>
                                        </div> <!-- end -->
                            
                                        <!-- <div class="row mb-3">
                                            <div class="col-md-12">
                                                <form method="post" action="<?=ROOT?>/inventory/generatePDF" onsubmit="alertDateAndSubmit(this); return false;">
                                                    <div class="form-group">
                                                        <label for="report_date">Select Specific Date to Download:</label>
                                                        <input type="date" id="report_date" name="report_date" class="form-control" required>
                                                    </div>
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#downloadReportModal">
                                                    <i class="las la-download scale5 me-3"></i>Download Report</a>
                                                    </button>
                                                </form>
                                            </div>
                                        </div> -->
                                    </div>
                                        <div class="card-body tab-content p-0">
                            
                                            <div class="tab-pane" id="All" role="tabpanel">
                                                    <div class="table-responsive">
                                                    <table id="transactions-table4" class="table table-responsive-md card-table transactions-table4">
                                                            <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Day</th>
                                                                    <th>Week</th>
                                                                    <th>Month</th>
                                                                    <th>Year</th>
                                                                    <th>Total Sales</th>
                                                                    <th>Total Expenses</th>                                                               
                                                                    <th>Profit</th>
                                                                    <th>Action</th>
                                                                    <!-- <th>Action</th> -->
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if ($allProfit): ?>
                                                                    <?php foreach ($allProfit as $profitAll): ?>
                                                                        <tr>
                                                                            <td><?= htmlspecialchars($profitAll->date) ?></td>
                                                                            <td><?= htmlspecialchars($profitAll->day) ?></td>
                                                                            <td><?= htmlspecialchars($profitAll->week) ?></td>
                                                                            <td><?= htmlspecialchars($profitAll->month) ?></td>
                                                                            <td><?= htmlspecialchars($profitAll->year) ?></td>
                                                                            <td><?= htmlspecialchars($profitAll->total_sales) ?></td>
                                                                            <td><?= htmlspecialchars($profitAll->total_expenses) ?></td>
                                                                            <td><?= htmlspecialchars($profitAll->profit) ?></td>
                                                                            <td>
                                                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    Action
                                                                                </button>
                                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                                </ul>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                <?php else: ?>
                                                                    <tr>
                                                                        <td colspan="10">No data available in table</td>
                                                                    </tr>   
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane active show fade" id="monthly" role="tabpanel">
                                                    <div class="table-responsive">
                                                        <table id="transactions-table" class="table table-responsive-md card-table transactions-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Day</th>
                                                                    <th>Week</th>
                                                                    <th>Month</th>
                                                                    <th>Year</th>
                                                                    <th>Total Sales</th>
                                                                    <th>Total Expenses</th>                                                               
                                                                    <th>Profit</th>
                                                                    <th>Action</th>
                                                                    <!-- <th>Action</th> -->
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if ($monthlyProfit): ?>
                                                                    <?php foreach ($monthlyProfit as $profitMonthly): ?>
                                                                        <tr>
                                                                            <td><?= htmlspecialchars($profitMonthly->date) ?></td>
                                                                            <td><?= htmlspecialchars($profitMonthly->day) ?></td>
                                                                            <td><?= htmlspecialchars($profitMonthly->week) ?></td>
                                                                            <td><?= htmlspecialchars($profitMonthly->month) ?></td>
                                                                            <td><?= htmlspecialchars($profitMonthly->year) ?></td>
                                                                            <td><?= htmlspecialchars($profitMonthly->total_sales) ?></td>
                                                                            <td><?= htmlspecialchars($profitMonthly->total_expenses) ?></td>
                                                                            <td><?= htmlspecialchars($profitMonthly->profit) ?></td>
                                                                            <td>
                                                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    Action
                                                                                </button>
                                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                                </ul>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                <?php else: ?>
                                                                    <tr>
                                                                        <td colspan="10">No data available in table</td>
                                                                    </tr>   
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="Weekly" role="tabpanel">
                                                    <div class="table-responsive">
                                                    <table id="transactions-table2" class="table table-responsive-md card-table transactions-table2">
                                                    <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Day</th>
                                                                    <th>Week</th>
                                                                    <th>Month</th>
                                                                    <th>Year</th>
                                                                    <th>Total Sales</th>
                                                                    <th>Total Expenses</th>                                                               
                                                                    <th>Profit</th>
                                                                    <th>Action</th>
                                                                    <!-- <th>Action</th> -->
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if ($weeklyProfit): ?>
                                                                    <?php foreach ($weeklyProfit as $profitWeekly): ?>
                                                                        <tr>
                                                                            <td><?= htmlspecialchars($profitWeekly->date) ?></td>
                                                                            <td><?= htmlspecialchars($profitWeekly->day) ?></td>
                                                                            <td><?= htmlspecialchars($profitWeekly->week) ?></td>
                                                                            <td><?= htmlspecialchars($profitWeekly->month) ?></td>
                                                                            <td><?= htmlspecialchars($profitWeekly->year) ?></td>
                                                                            <td><?= htmlspecialchars($profitWeekly->total_sales) ?></td>
                                                                            <td><?= htmlspecialchars($profitWeekly->total_expenses) ?></td>
                                                                            <td><?= htmlspecialchars($profitWeekly->profit) ?></td>
                                                                            <td>
                                                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    Action
                                                                                </button>
                                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                                </ul>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                <?php else: ?>
                                                                    <tr>
                                                                        <td colspan="10">No data available in table</td>
                                                                    </tr>   
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="Today" role="tabpanel">
                                                    <div class="table-responsive">
                                                    <table id="transactions-table3" class="table table-responsive-md card-table transactions-table3">
                                                            <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Day</th>
                                                                    <th>Week</th>
                                                                    <th>Month</th>
                                                                    <th>Year</th>
                                                                    <th>Total Sales</th>
                                                                    <th>Total Expenses</th>                                                               
                                                                    <th>Profit</th>
                                                                    <th>Action</th>
                                                                    <!-- <th>Action</th> -->
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if ($dailyProfit): ?>
                                                                    <?php foreach ($dailyProfit as $profitDaily): ?>
                                                                        <tr>
                                                                            <td><?= htmlspecialchars($profitDaily->date) ?></td>
                                                                            <td><?= htmlspecialchars($profitDaily->day) ?></td>
                                                                            <td><?= htmlspecialchars($profitDaily->week) ?></td>
                                                                            <td><?= htmlspecialchars($profitDaily->month) ?></td>
                                                                            <td><?= htmlspecialchars($profitDaily->year) ?></td>
                                                                            <td><?= htmlspecialchars($profitDaily->total_sales) ?></td>
                                                                            <td><?= htmlspecialchars($profitDaily->total_expenses) ?></td>
                                                                            <td><?= htmlspecialchars($profitDaily->profit) ?></td>
                                                                            <td>
                                                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    Action
                                                                                </button>
                                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                                </ul>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                <?php else: ?>
                                                                    <tr>
                                                                        <td colspan="10">No data available in table</td>
                                                                    </tr>   
                                                                <?php endif; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-xl-6">
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="row  mt-xl-0 mt-4"> 
                                                <div class="col-md-6">
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- <canvas id="polarChart"></canvas> -->
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
                                        

        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

        <script>
            function toggleSpecificDate() {
                var reportTypeSelect = document.getElementById('reportType');
                var specificDateInput = document.getElementById('specificDate');

                if (reportTypeSelect.value !== "") {
                    specificDateInput.disabled = true;
                } else {
                    specificDateInput.disabled = false;
                }
            }

            function toggleReportType() {
                var reportTypeSelect = document.getElementById('reportType');
                var specificDateInput = document.getElementById('specificDate');

                if (specificDateInput.value !== "") {
                    reportTypeSelect.disabled = true;
                } else {
                    reportTypeSelect.disabled = false;
                }
            }
        </script>

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

        <script src="<?=ROOT?>/assets/Dashboard/js/custom.min.js"></script>
        <script src="<?=ROOT?>/assets/Dashboard/js/dlabnav-init.js"></script>
        <script src="<?=ROOT?>/assets/Dashboard/js/demo.js"></script>
        <script src="<?=ROOT?>/assets/Dashboard/js/styleSwitcher.js"></script>

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!-- DataTables JS CDN -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap JS and Popper.js -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

        <!-- Initialize DataTables -->
        <script>
            $(document).ready(function() {

                // FOR THE PROFIT
                initializeDataTable('#transactions-table', 'Prev', 'Next');
                initializeDataTable('#transactions-table2', 'Prev', 'Next');
                initializeDataTable('#transactions-table3', 'Prev', 'Next');
                initializeDataTable('#transactions-table4', 'Prev', 'Next');

                // FOR THE PROFIT DATA
                initializeDataTable('#transactions-tablee', 'Prev', 'Next');
                initializeDataTable('#transactions-table22', 'Prev', 'Next');
                initializeDataTable('#transactions-table33', 'Prev', 'Next');
                initializeDataTable('#transactions-table44', 'Prev', 'Next');
            });

            function initializeDataTable(tableId, prevText, nextText) {
                $(tableId).DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                    "language": {
                        "paginate": {
                            "previous": prevText,
                            "next": nextText
                        },
                        "lengthMenu": "Show _MENU_ entries"
                    },
                    "lengthMenu": [5, 10, 25, 50] // Define the entries options here
                });
            }
        </script>

        
        <!-- <script>
            function alertDateAndSubmit(form) {
                const dateInput = document.getElementById('report_date');
                const selectedDate = dateInput.value;
                alert('Selected date: ' + selectedDate);
                form.submit();
            }
        </script> -->

        <!-- Function to show the modal when the "Generate Report" button is clicked -->
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

        <!-- LEARN MORE MODAL -->
        <script>
        $(document).ready(function(){
            $('a[href="javascript:void(1);"]').click(function(){
                $('#learnMoreModal').modal('show');
            });
        });
        </script>
        
        <!-- NOTIF BAR -->
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
    </body>
</html>