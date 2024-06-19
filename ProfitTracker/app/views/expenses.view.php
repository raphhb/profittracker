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
	<link rel="stylesheet" href="<?=ROOT?>/assets/Dashboard/css/style.css">

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

    <!-- ERROR HANDLING -->
    <?php if (!empty($errorMessage)): ?>
        <script>
            alert("<?= htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8') ?>");
            window.location.href = '<?= ROOT ?>/Sales'; // Adjust the URL to your specific routing
        </script>
    <?php endif; ?>
    

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
					<path class="svg-logo-primary-path" d="M48.3418 41.8457H41.0957C36.8148 41.8457 33.332 38.3629 33.332 34.082C33.332 29.8011 36.8148 26.3184 41.0957 26.3184H48.3418V19.2275C48.3418 16.9408 46.4879 15.0869 44.2012 15.0869H4.14062C1.85386 15.0869 0 16.9408 0 19.2275V48.8594C0 51.1462 1.85386 53 4.14062 53H44.2012C46.4879 53 48.3418 51.1462 48.3418 48.8594V41.8457Z" fill="#5BCFC5"/>
					<path class="svg-logo-primary-path" d="M51.4473 29.4238H41.0957C38.5272 29.4238 36.4375 31.5135 36.4375 34.082C36.4375 36.6506 38.5272 38.7402 41.0957 38.7402H51.4473C52.3034 38.7402 53 38.0437 53 37.1875V30.9766C53 30.1204 52.3034 29.4238 51.4473 29.4238ZM41.0957 35.6348C40.2382 35.6348 39.543 34.9396 39.543 34.082C39.543 33.2245 40.2382 32.5293 41.0957 32.5293C41.9532 32.5293 42.6484 33.2245 42.6484 34.082C42.6484 34.9396 41.9532 35.6348 41.0957 35.6348Z" fill="#5BCFC5"/>
				</svg>
                
				<p class="brand-title" width="124px" height="33px"  style="font-size: 30px;">Admin</p>
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
                                Expenses 
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
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid ">

				<div class="row ">
					<div class="col-xl-9 col-xxl-12">
                        <div class="card coin-card">
							<div class="card-body d-sm-flex d-block align-items-center">
								<span class="coin-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="83" viewBox="0 0 16 16">
                                        <g fill="currentColor"><path d="M11 6a3 3 0 1 1-6 0a3 3 0 0 1 6 0"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/></g>
                                    </svg>
								</span>
							    <div>
									<h3 class="text-white">Welcome back, Administrator</h3>
									<p>These are your expenses. Keep them low. </p>
									<a class="text-white" href="<?=ROOT?>/Records">See Records >></a>
								</div>
							</div>
						</div>
					</div>
                    
					<div class="col-xl-3 col-xxl-6">
						<div class="card">
							<div class="card-header pb-0 border-0">
								<div>
									<h4 class="card-title mb-2">Recent Activity</h4>
									<!-- <h2 class="mb-0"><?= $currentMonthlyExpenses ?></h2> -->
								</div>
								<ul class="card-list">
									<li class="justify-content-end">Income<span class="bg-success circle me-0 ms-2"></span></li>
									<li class="justify-content-end">Outcome<span class="bg-danger circle me-0 ms-2"></span></li>
								</ul>
							</div>
							<div class="card-body pb-0 pt-3">
                                <div id="chartBarUpdated" class="bar-chart"></div>
							</div>
						</div>
					</div>

                    <div class="col-xl-3 col-xxl-6">
                        <div class="card coin-card">
                            <div class="card-header border-1">
                                <h3 class="text-white">Profit Status</h3>
                            </div>
                            <div class="card-body align-items-center text-center">
                                <div>
                                    
                                    <!-- Assuming profit value is calculated and stored in a variable -->
                                    <?php
                                        $totalExpenses = $currentMonthlyExpenses; // Current Month Expenses
                                        $productExpenses = $productExpense; // Replace with actual product expenses
                                        $profit = $currentMonthlyProfit; // Replace with actual profit calculation
                                        $month = $currentMonth; // Replace with actual profit calculation
                                    ?>

                                    <h3 class="text-white">Good progress, Admin!</h3>
                                    <p>You have made a total of ₱<?php echo $totalExpenses; ?> in expenses for the month of <?php echo $month; ?>. Out of this, ₱<?php echo $productExpenses; ?> was spent specifically on product expenses.</p>

                                    
                                    <?php if ($profit > 0) : ?>
                                        <p>Your current profit status is <strong style="color: lightgreen;">positive</strong>, with a net profit of <strong style="color: lightgreen;">₱<?= $profit; ?></strong> for the month.</p>
                                    <?php elseif ($profit < 0) : ?>
                                        <p>Your current profit status is <strong style="color: red;">negative</strong>, with a net loss of <strong style="color: red;">₱<?= abs($profit); ?></strong> for the month. Keep pushing forward and focus on improving profitability!</p>
                                    <?php else : ?>
                                        <p>No profit has been made yet this month.</p>
                                    <?php endif; ?>

                                    <?php if ($profit >= 0) : ?>
                                        <p>Keep up the good work and continue to manage your expenses effectively!</p>
                                    <?php else : ?>
                                        <p>It's important to review expenses and strategies to improve profitability. Keep pushing forward!</p>
                                    <?php endif; ?>
                                    <a class="text-white" href="javascript:void(1);" data-toggle="modal" data-target="#learnMoreModal">Learn more >></a>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="col-xl-9 col-xxl-12 mb-6">
                    <div class="d-flex">
                        <form method="post" action="<?=ROOT?>/Expenses/generatePDF" style="width: 50%;">
                            <!-- <button type="submit" name="download_report" class="btn btn-rounded btn-md btn-primary me-3 mb-3" style="width: 98%;">
                                <i class="las la-download scale5 me-3"></i>Download Report
                            </button> -->
                            <button type="button" class="btn btn-rounded btn-md btn-primary me-3 mb-3" style="width: 98%;" data-bs-toggle="modal" data-bs-target="#downloadReportModal">
                                    <i class="las la-download scale5 me-3"></i> Download Report
                            </button>
                        </form>
                        
                        <a href="javascript:void(0)" class="btn btn-rounded btn-md btn-primary me-3 mb-3" style="width: 50%;" data-bs-toggle="modal" data-bs-target="#addExpense">
                            <i class="las la-plus scale5 me-3"></i>Add Expense
                        </a>
                    </div>

                            <div class="card">
                                <div class="card-header d-block d-sm-flex border-0">
                                    <div class="me-3">
                                        <h4 class="card-title mb-2">Expense Record</h4>
                                        <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                                    </div>

                                    <div class="card-tabs mt-3 mt-sm-0">
                                        <ul class="nav nav-tabs" role="tablist">

                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#Today" role="tab">Today</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Weekly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#monthly" role="tab">Monthly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#all" role="tab">All</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- <div class="input-group exp-search-area mt-3 mt-sm-0">
                                        <input type="date" class="form-control" placeholder="Select Date">
                                        <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                                    </div> -->
                                </div>
                                <div class="card-body tab-content p-0">
                                    <div class="tab-pane" id="all" role="tabpanel">
                                        <div class="table-responsive">
                                            <!-- <table id="expenses-table-monthly" class="table table-responsive-md card-table expenses-table"> -->
                                            <table id="expenses-table-all" class="table table-responsive-md card-table expenses-table">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center;">Exp. ID</th>
                                                        <th style="text-align: center;">Category</th>
                                                        <th style="text-align: center;">Description</th>
                                                        <th style="text-align: center;">Amount</th>
                                                        <th style="text-align: center;">Date</th>
                                                        <th style="text-align: center;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($expenses): ?>
                                                        <?php foreach ($expenses as $expense): ?>
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

                                                                <td style="text-align: center;"><?= htmlspecialchars($expense->expenseid) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($expense->categoryname) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($expense->description) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($expense->amount) ?></td>
                                                                <?php
                                                                    $transactionDateTime = new DateTime($expense->transactiondate);
                                                                    $date = $transactionDateTime->format('Y-m-d');
                                                                    $time = $transactionDateTime->format('h:i:s A'); // 12-hour format with AM/PM
                                                                ?>
                                                                <td>
                                                                    <h6 class="fs-16 text-black font-w600 mb-0"><?= htmlspecialchars($date) ?></h6>
                                                                    <span class="fs-14"><?= htmlspecialchars($time) ?><span>
                                                                </td>
                                                                <td>
                                                                    <?php if ($expense->categoryname === 'PRODUCT'): ?>
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton<?= htmlspecialchars($expense->expenseid) ?>" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                Action
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton<?= htmlspecialchars($expense->expenseid) ?>">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="editExpense(<?= htmlspecialchars($expense->expenseid) ?>)">Edit</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="confirmDelete(<?= htmlspecialchars($expense->expenseid) ?>)">Delete</a></li>
                                                                                <li><a class="dropdown-item view-info" data-bs-toggle="modal" data-bs-target="#ViewExpense">View Info</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    <?php else: ?>
                                                                        <button class="btn btn-danger" type="button" onclick="confirmDelete(<?= htmlspecialchars($expense->expenseid) ?>)">Delete</button>
                                                                    <?php endif; ?>
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
                                    <div class="tab-pane" id="monthly" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="expenses-table-monthly" class="table table-responsive-md card-table expenses-table">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center;">Exp. ID</th>
                                                        <th style="text-align: center;">Category</th>
                                                        <th style="text-align: center;">Description</th>
                                                        <th style="text-align: center;">Amount</th>
                                                        <th style="text-align: center;">Date</th>
                                                        <th style="text-align: center;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($monthlyExpenses): ?>
                                                        <?php foreach ($monthlyExpenses as $expenseMonthly): ?>
                                                            <tr data-expenseid="<?= htmlspecialchars($expenseMonthly->expenseid) ?>"
                                                                data-category="<?= htmlspecialchars($expenseMonthly->categoryname) ?>"
                                                                data-description="<?= htmlspecialchars($expenseMonthly->description) ?>"
                                                                data-amount="<?= htmlspecialchars($expenseMonthly->amount) ?>"
                                                                data-productcategory="<?= htmlspecialchars($expenseMonthly->productcategory) ?>"
                                                                data-brand="<?= htmlspecialchars($expenseMonthly->brandname) ?>"
                                                                data-name="<?= htmlspecialchars($expenseMonthly->productname) ?>"
                                                                data-size="<?= htmlspecialchars($expenseMonthly->size) ?>"
                                                                data-color="<?= htmlspecialchars($expenseMonthly->color) ?>"
                                                                data-qty="<?= htmlspecialchars($expenseMonthly->quantity) ?>"
                                                                data-unitprice="<?= htmlspecialchars($expenseMonthly->unitprice) ?>"
                                                                data-image="<?= htmlspecialchars($expenseMonthly->productimageurl) ?>">
                                                                <td style="text-align: center;"><?= htmlspecialchars($expenseMonthly->expenseid) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($expenseMonthly->categoryname) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($expenseMonthly->description) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($expenseMonthly->amount) ?></td>
                                                                <?php
                                                                    $transactionDateTime = new DateTime($expenseMonthly->transactiondate);
                                                                    $date = $transactionDateTime->format('Y-m-d');
                                                                    $time = $transactionDateTime->format('h:i:s A'); // 12-hour format with AM/PM
                                                                ?>
                                                                <td>
                                                                    <h6 class="fs-16 text-black font-w600 mb-0"><?= htmlspecialchars($date) ?></h6>
                                                                    <span class="fs-14"><?= htmlspecialchars($time) ?></span>
                                                                </td>
                                                                <td>
                                                                    <?php if ($expenseMonthly->categoryname === 'PRODUCT'): ?>
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton<?= htmlspecialchars($expenseMonthly->expenseid) ?>" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                Action
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton<?= htmlspecialchars($expenseMonthly->expenseid) ?>">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="editExpense(<?= htmlspecialchars($expenseMonthly->expenseid) ?>)">Edit</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="confirmDelete(<?= htmlspecialchars($expenseMonthly->expenseid) ?>)">Delete</a></li>
                                                                                <li><a class="dropdown-item view-info" data-bs-toggle="modal" data-bs-target="#ViewExpense">View Info</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    <?php else: ?>
                                                                        <button class="btn btn-danger" type="button" onclick="confirmDelete(<?= htmlspecialchars($expenseMonthly->expenseid) ?>)">Delete</button>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <tr>
                                                            <td colspan="6">No products found.</td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="Weekly" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="expenses-table-weekly" class="table table-responsive-md card-table expenses-table">

                                            <thead>
                                                    <tr>
                                                        <th style="text-align: center;">Exp. ID</th>
                                                        <th style="text-align: center;">Category</th>
                                                        <th style="text-align: center;">Description</th>
                                                        <th style="text-align: center;">Amount</th>
                                                        <th style="text-align: center;">Date</th>
                                                        <th style="text-align: center;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($weeklyExpenses): ?>
                                                        <?php foreach ($weeklyExpenses as $expense): ?>
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

                                                                <td style="text-align: center;"><?= htmlspecialchars($expense->expenseid) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($expense->categoryname) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($expense->description) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($expense->amount) ?></td>
                                                                <?php
                                                                    $transactionDateTime = new DateTime($expense->transactiondate);
                                                                    $date = $transactionDateTime->format('Y-m-d');
                                                                    $time = $transactionDateTime->format('h:i:s A'); // 12-hour format with AM/PM
                                                                ?>
                                                                <td>
                                                                    <h6 class="fs-16 text-black font-w600 mb-0"><?= htmlspecialchars($date) ?></h6>
                                                                    <span class="fs-14"><?= htmlspecialchars($time) ?><span>
                                                                </td>
                                                                <td>
                                                                    <?php if ($expense->categoryname === 'PRODUCT'): ?>
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton<?= htmlspecialchars($expense->expenseid) ?>" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                Action
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton<?= htmlspecialchars($expense->expenseid) ?>">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="editExpense(<?= htmlspecialchars($expense->expenseid) ?>)">Edit</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="confirmDelete(<?= htmlspecialchars($expense->expenseid) ?>)">Delete</a></li>
                                                                                <li><a class="dropdown-item view-info" data-bs-toggle="modal" data-bs-target="#ViewExpense">View Info</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    <?php else: ?>
                                                                        <button class="btn btn-danger" type="button" onclick="confirmDelete(<?= htmlspecialchars($expense->expenseid) ?>)">Delete</button>
                                                                    <?php endif; ?>
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
                                    <div class="tab-pane active show fade" id="Today" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="expenses-table-today" class="table table-responsive-md card-table expenses-table">

                                            <thead>
                                                    <tr>
                                                        <th style="text-align: center;">Exp. ID</th>
                                                        <th style="text-align: center;">Category</th>
                                                        <th style="text-align: center;">Description</th>
                                                        <th style="text-align: center;">Amount</th>
                                                        <th style="text-align: center;">Date</th>
                                                        <th style="text-align: center;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($dailyExpenses): ?>
                                                        <?php foreach ($dailyExpenses as $expense): ?>
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

                                                                <td style="text-align: center;"><?= htmlspecialchars($expense->expenseid) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($expense->categoryname) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($expense->description) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($expense->amount) ?></td>
                                                                <?php
                                                                    $transactionDateTime = new DateTime($expense->transactiondate);
                                                                    $date = $transactionDateTime->format('Y-m-d');
                                                                    $time = $transactionDateTime->format('h:i:s A'); // 12-hour format with AM/PM
                                                                ?>
                                                                <td>
                                                                    <h6 class="fs-16 text-black font-w600 mb-0"><?= htmlspecialchars($date) ?></h6>
                                                                    <span class="fs-14"><?= htmlspecialchars($time) ?><span>
                                                                </td>
                                                                <td>
                                                                    <?php if ($expense->categoryname === 'PRODUCT'): ?>
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton<?= htmlspecialchars($expense->expenseid) ?>" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                Action
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton<?= htmlspecialchars($expense->expenseid) ?>">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="editExpense(<?= htmlspecialchars($expense->expenseid) ?>)">Edit</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="confirmDelete(<?= htmlspecialchars($expense->expenseid) ?>)">Delete</a></li>
                                                                                <li><a class="dropdown-item view-info" data-bs-toggle="modal" data-bs-target="#ViewExpense">View Info</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    <?php else: ?>
                                                                        <button class="btn btn-danger" type="button" onclick="confirmDelete(<?= htmlspecialchars($expense->expenseid) ?>)">Delete</button>
                                                                    <?php endif; ?>
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
                    </div>

                    <div class="modal fade" id="addExpense" tabindex="-1" aria-labelledby="addExpenseModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form action="expenses/addexpense" method="post" enctype="multipart/form-data">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Expense</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12 col-xxl-12">
                                                <div class="form-group">
                                                    <label>Expense Category</label>
                                                    <select class="form-control select2" name="main_category" id="categorySelect">
                                                        <option selected disabled>Choose category</option>
                                                        <option value="1">Product Expenses</option>
                                                        <option value="2">Utilities Expenses</option>
                                                        <option value="3">Logistics Expenses</option>
                                                        <option value="4">Rent</option>
                                                        <option value="5">Government/Compliance</option>
                                                        <option value="6">Store Supplies</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="UtiLog" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-6 col-xxl-6" id="descriptionField">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <input type="text" class="form-control" name="description" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xxl-6" id="amountField">
                                                    <div class="form-group">
                                                        <label>Amount</label>
                                                        <input type="number" class="form-control" name="amount" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="products" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-12 col-xxl-12">
                                                    <div class="form-group">
                                                        <label>Subcategory</label>
                                                        <select class="form-control select2" name="product_subcategory" id="prod-subcategory">
                                                            <option selected disabled>Choose Category</option>
                                                            <option value="1">Merch</option>
                                                            <option value="2">Shoes</option>
                                                            <option value="3">Clothing</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="shoeShirt" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-6 col-xxl-6">
                                                        <div class="form-group">
                                                            <label>Size</label>
                                                            <input type="text" class="form-control" name="size">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xxl-6">
                                                        <div class="form-group">
                                                            <label>Color</label>
                                                            <input type="text" class="form-control" name="color">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="merch" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-6 col-xxl-6">
                                                        <div class="form-group">
                                                            <label>Brand Name</label>
                                                            <input type="text" class="form-control" name="brand">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xxl-6">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" name="name">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-xxl-6">
                                                        <div class="form-group">
                                                            <label>Quantity</label>
                                                            <input type="number" class="form-control" name="qty">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xxl-6">
                                                        <div class="form-group">
                                                            <label>Unit Price</label>
                                                            <input type="number" class="form-control" name="unitPrice">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 col-xxl-12">
                                                        <div class="form-group">
                                                            <label>Product Image</label>
                                                            <input type="file" class="form-control" name="productImg" accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-rounded btn-md btn-secondary" style="width: 100%;" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-rounded btn-md btn-primary" style="width: 100%;">Add Expense</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="ViewExpense" tabindex="-1" aria-labelledby="viewExpenseModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Expense Info</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Expense Category</label>
                                                <input type="text" class="form-control" id="modal-category" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" id="modal-description" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="number" class="form-control" id="modal-amount" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Product Category</label>
                                                <input type="text" class="form-control" id="modal-productcategory" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Brand Name</label>
                                                <input type="text" class="form-control" id="modal-brand" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="modal-name" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Size</label>
                                                <input type="text" class="form-control" id="modal-size" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Color</label>
                                                <input type="text" class="form-control" id="modal-color" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" class="form-control" id="modal-qty" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Unit Price</label>
                                                <input type="number" class="form-control" id="modal-unitprice" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="image">Image:</label>
                                                <img id="modal-image" class="img-fluid" src="" alt="Expense Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-rounded btn-md btn-secondary" style="width: 100%;" data-bs-dismiss="modal">Close</button>
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

                    <!-- Download Report Modal -->
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
                    
                    <!-- Add this modal at the end of your HTML -->
                    <div class="modal fade" id="deleteExpenseModal" tabindex="-1" aria-labelledby="deleteExpenseModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteExpenseModalLabel">Confirm Deletion</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Please enter the reason for deletion:</p>
                                    <textarea class="form-control" id="deleteReason" rows="3"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                                </div>
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
        Scripts
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

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>     -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- ADDED JS FOR DATATABLES -->
    <script src="<?=ROOT?>/assets/Dashboard/js/datatable.js"></script>

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

    <script>
        document.getElementById("categorySelect").addEventListener("change", function() {
            var selectedValue = this.value;
            var UtiLogDiv = document.getElementById("UtiLog");
            var productsDiv = document.getElementById("products");

            if ((selectedValue === "2") || (selectedValue === "3") || (selectedValue === "4") 
                || (selectedValue === "5") || (selectedValue === "6")) {
                UtiLogDiv.style.display = "block";
                productsDiv.style.display = "none";
                amountField.style.display = "block"; // Show the Amount field
                                        // Adjust the Description field to half width
                document.getElementById("descriptionField").className = "col-md-6 col-xxl-6";

            } else if (selectedValue === "1") {
                UtiLogDiv.style.display = "block";
                UtiLogDiv.style.display = "block";
                productsDiv.style.display = "block";
                amountField.style.display = "none"; // Hide the Amount field
                // Adjust the Description field to full width
                document.getElementById("descriptionField").className = "col-md-12 col-xxl-12";
                var amountInput = document.querySelector("#amountField input[name='amount']");
                amountInput.required = !(selectedValue === "1");
            } else {
                UtiLogDiv.style.display = "none";
                productsDiv.style.display = "none";
            }

                // Update the required attribute of the Amount field based on selectedValue

        });

        document.getElementById("prod-subcategory").addEventListener("change", function() {
            var selectedValue = this.value;
            var shoeShirtDiv = document.getElementById("shoeShirt");
            var merchDiv = document.getElementById("merch");

            if ((selectedValue === "2") || (selectedValue === "3")) {
                shoeShirtDiv.style.display = "block";
                merchDiv.style.display = "block";
                
            } else if (selectedValue === "1") {
                shoeShirtDiv.style.display = "none";
                merchDiv.style.display = "block";
            }else{
                shoeShirtDiv.style.display = "none";
                merchDiv.style.display = "none";
            }
        });
    </script>

    <!-- view expense -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.view-info').forEach(function (element) {
                element.addEventListener('click', function () {
                    var row = this.closest('tr');
                    var modal = document.getElementById('ViewExpense');
                    
                    document.getElementById('modal-category').value = row.getAttribute('data-category');
                    document.getElementById('modal-description').value = row.getAttribute('data-description');
                    document.getElementById('modal-amount').value = row.getAttribute('data-amount');
                    document.getElementById('modal-productcategory').value = row.getAttribute('data-productcategory');
                    document.getElementById('modal-brand').value = row.getAttribute('data-brand');
                    document.getElementById('modal-name').value = row.getAttribute('data-name');
                    document.getElementById('modal-size').value = row.getAttribute('data-size');
                    document.getElementById('modal-color').value = row.getAttribute('data-color');
                    document.getElementById('modal-qty').value = row.getAttribute('data-qty');
                    document.getElementById('modal-unitprice').value = row.getAttribute('data-unitprice');
                    var imagePath = row.getAttribute('data-image');
                    document.getElementById('modal-image').src = "assets/images/productimages/" + imagePath;
                });
            });
        });
    </script>
	
    <!-- update chart -->
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

    <!-- confirm delte -->
    <script>
        function confirmDelete(expenseid) {
            if (confirm("Do you really want to delete this expense record?")) {
                // Proceed with form submission
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = 'expenses/deleteExpense'; // Adjust the URL as needed

                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'expenseid';
                input.value = expenseid;

                form.appendChild(input);
                document.body.appendChild(form);

                form.submit();
            } else {
                // Do nothing
            }
        }
    </script>

    <!-- notif -->
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
