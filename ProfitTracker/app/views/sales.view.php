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
    <link href="<?=ROOT?>/assets/Dashboard/css/stylee1.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc0/dist/js/select2.min.js"></script>

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


    <style>
        .bg-yellow {
    background-color: #e8b876;
}

    </style>
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
                                Sales
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
									<p>These are your sales. Keep Earning!. </p>
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
								</div>
								<ul class="card-list">
									<li class="justify-content-end">Sales<span class="bg-success circle me-0 ms-2"></span></li>
									<li class="justify-content-end">Expenses<span class="bg-danger circle me-0 ms-2"></span></li>
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
                                    <?php
                                        // Assuming the variables are calculated or retrieved from somewhere
                                        $totalSales = $monthlySalesData; // Replace with actual total sales for the month
                                        $productSales = $topSellingProduct->totalproductsale; // Total sales from the top-selling product
                                        $profit = $currentMonthlyProfit; // Replace with actual profit calculation for the month
                                        $month = $currentMonth; // Replace with actual month name

                                        // TOP SELLING PRODUCT DETAILS
                                        $topSellingProductName = $topSellingProduct->productname;
                                        $topSellingProductBrand = $topSellingProduct->brandname;
                                        $topSellingProductId = $topSellingProduct->productid;
                                        $topSellingProductSale = $topSellingProduct->totalproductsale;
                                        $topSellingProductCategory = $topSellingProduct->category;
                                        $topSellingProductQuantitySold = $topSellingProduct->quantitysold;
                                        $topSellingProductImageUrl = $topSellingProduct->productimageurl;
                                    ?>

                                    <h3 class="text-white">Good progress, Admin!</h3>
                                    <p>You have made a total of ₱<?= number_format($totalSales, 2); ?> in sales for the month of <?= $month; ?>.</p>
                                    <p>Your top-selling product is <strong><?= $topSellingProductName ?></strong> by <strong><?= $topSellingProductBrand ?></strong>, which belongs to the <strong><?= $topSellingProductCategory ?></strong> category.</p>
                                    <p>This product contributed ₱<?= number_format($productSales, 2); ?> to the total sales, with <?= $topSellingProductQuantitySold ?> units sold.</p>
                                    <img src="<?=ROOT?>/assets/images/productImages/<?= $topSellingProductImageUrl ?>" alt="<?= $topSellingProductName ?>" style="max-width: 150px; margin: 10px auto;">

                                    <?php if ($profit > 0) : ?>
                                        <p>Your current profit status is <strong style="color: lightgreen;">positive</strong>, with a net profit of <strong style="color: lightgreen;">₱<?= number_format($profit, 2); ?></strong> for the month.</p>
                                    <?php elseif ($profit < 0) : ?>
                                        <p>Your current profit status is <strong style="color: red;">negative</strong>, with a net loss of <strong style="color: red;">₱<?= number_format(abs($profit), 2); ?></strong> for the month. Keep pushing forward and focus on improving profitability!</p>
                                    <?php else : ?>
                                        <p>No profit has been made yet this month.</p>
                                    <?php endif; ?>

                                    <!-- <?php if ($profit >= 0) : ?>
                                        <p>Keep up the good work and continue to sustain and increase profitability!</p>
                                    <?php else : ?>
                                        <p>It's important to review sales performance and strategies to maintain and improve profitability. Keep pushing forward!</p>
                                    <?php endif; ?> -->

                                    <a class="text-white" href="javascript:void(1);" data-toggle="modal" data-target="#learnMoreModal">Learn more >></a>
                                </div>
                            </div>

						</div>
					</div>

					<div class="col-xl-9 col-xxl-12 mb-6">
                        <div>
                            <div class="d-flex">       

                                <button type="button" class="btn btn-rounded btn-md btn-primary me-3 me-3 mb-3" style="width: 50%;" data-bs-toggle="modal" data-bs-target="#downloadReportModalSales">
                                    <i class="las la-download scale5 me-2"></i> Download Report
                                </button>

                                <a href="javascript:void(0)" class="btn btn-rounded btn-md btn-primary me-3 me-3 mb-3" style="width: 50%;"
                                data-bs-toggle="modal" data-bs-target="#addSales"><i class="las la-plus scale5 me-3"></i>Add Sales</a>
                            </div>

                            <div class="card">
                                <div class="card-header d-block d-sm-flex border-0">
                                    <div class="me-3">
                                        <h4 class="card-title mb-2">Sales Record</h4>
                                        <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                                    </div>

                                    <div class="card-tabs mt-3 mt-sm-0">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#all" role="tab">All</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#monthly" role="tab">Monthly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Weekly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Today</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- <div class="input-group exp-search-area mt-3 mt-sm-0">
                                        <input type="date" class="form-control" placeholder="Select Date">
                                        <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span> -->
                                    <!-- </div> -->
                                    <!-- <div class="input-group exp-search-area mt-3 mt-sm-0">
                                        <input type="date" class="form-control" placeholder="Select Date">
                                        <span class="input-group-text"><a href="javascript:void(0)"></a></span>
                                    </div> -->
                                </div>
                                <div class="card-body tab-content p-0">
                                    <div class="tab-pane active show fade" id="all" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="sales-table-all" class="table table-responsive-md card-table sales-table">
                                                <thead>
                                                    <tr>
                                                        <th>S.ID</th>
                                                        <th>Category</th>
                                                        <th>P.ID</th>
                                                        <th>Description</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                        <th>Amount</A></th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($allSales): ?>
                                                        <?php foreach ($allSales as $allSale): ?>
                                                            <tr>
                                                                <td style="text-align: center;"><?= htmlspecialchars($allSale->saleid) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($allSale->categoryname) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($allSale->productid) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($allSale->description) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($allSale->quantity) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($allSale->saleprice) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($allSale->amount) ?></td>
                                                                <?php
                                                                    $transactionDateTime = new DateTime($allSale->saledate);
                                                                    $date = $transactionDateTime->format('Y-m-d');
                                                                    $time = $transactionDateTime->format('h:i:s A'); // 12-hour format with AM/PM
                                                                ?>
                                                                <td>
                                                                    <h6 class="fs-16 text-black font-w600 mb-0"><?= htmlspecialchars($date) ?></h6>
                                                                    <span class="fs-14"><?= htmlspecialchars($time) ?></span>
                                                                </td>
                                                                <td>
                                                                    <form id="deleteForm<?= htmlspecialchars($allSale->saleid) ?>" method="POST" action="sales/deleteSale">
                                                                        <input type="hidden" name="saleid" value="<?= htmlspecialchars($allSale->saleid) ?>">
                                                                        <button class="btn btn-primary delete-button" type="button" onclick="confirmDelete(<?= htmlspecialchars($allSale->saleid) ?>)" name="delete_sale">
                                                                            Delete
                                                                        </button>
                                                                    </form>
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
                                            <table id="sales-table-monthly" class="table table-responsive-md card-table sales-table">
                                                <thead>
                                                    <tr>
                                                        <th>S.ID</th>
                                                        <th>Category</th>
                                                        <th>P.ID</th>
                                                        <th>Description</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                        <th>Amount</A></th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if ($monthlySales): ?>
                                                        <?php foreach ($monthlySales as $monthlySale): ?>
                                                            <tr>
                                                                <td style="text-align: center;"><?= htmlspecialchars($monthlySale->saleid) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($monthlySale->categoryname) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($monthlySale->productid) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($monthlySale->description) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($monthlySale->quantity) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($monthlySale->saleprice) ?></td>
                                                                <td style="text-align: center;"><?= htmlspecialchars($monthlySale->amount) ?></td>
                                                                <?php
                                                                    $transactionDateTime = new DateTime($monthlySale->saledate);
                                                                    $date = $transactionDateTime->format('Y-m-d');
                                                                    $time = $transactionDateTime->format('h:i:s A'); // 12-hour format with AM/PM
                                                                ?>
                                                                <td>
                                                                    <h6 class="fs-16 text-black font-w600 mb-0"><?= htmlspecialchars($date) ?></h6>
                                                                    <span class="fs-14"><?= htmlspecialchars($time) ?><span>
                                                                </td>
                                                                <td>
                                                                    <form id="deleteForm<?= htmlspecialchars($monthlySale->saleid) ?>" method="POST" action="sales/deleteSale">
                                                                        <input type="hidden" name="saleid" value="<?= htmlspecialchars($monthlySale->saleid) ?>">
                                                                        <button class="btn btn-primary delete-button" type="button" onclick="confirmDelete(<?= htmlspecialchars($monthlySale->saleid) ?>)" name="delete_sale">
                                                                            Delete
                                                                        </button>
                                                                    </form>
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
                                    <div class="tab-pane" id="Weekly" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="sales-table-weekly" class="table table-responsive-md card-table sales-table">
                                                <thead>
                                                        <tr>
                                                            <th>S.ID</th>
                                                            <th>Category</th>
                                                            <th>P.ID</th>
                                                            <th>Description</th>
                                                            <th>Qty</th>
                                                            <th>Price</th>
                                                            <th>Amount</A></th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($weeklySales): ?>
                                                            <?php foreach ($weeklySales as $weeklySale): ?>
                                                                <tr>
                                                                    <td style="text-align: center;"><?= htmlspecialchars($weeklySale->saleid) ?></td>
                                                                    <td style="text-align: center;"><?= htmlspecialchars($weeklySale->categoryname) ?></td>
                                                                    <td style="text-align: center;"><?= htmlspecialchars($weeklySale->productid) ?></td>
                                                                    <td style="text-align: center;"><?= htmlspecialchars($weeklySale->description) ?></td>
                                                                    <td style="text-align: center;"><?= htmlspecialchars($weeklySale->quantity) ?></td>
                                                                    <td style="text-align: center;"><?= htmlspecialchars($weeklySale->saleprice) ?></td>
                                                                    <td style="text-align: center;"><?= htmlspecialchars($weeklySale->amount) ?></td>
                                                                    <?php
                                                                        $transactionDateTime = new DateTime($weeklySale->saledate);
                                                                        $date = $transactionDateTime->format('Y-m-d');
                                                                        $time = $transactionDateTime->format('h:i:s A'); // 12-hour format with AM/PM
                                                                    ?>
                                                                    <td>
                                                                        <h6 class="fs-16 text-black font-w600 mb-0"><?= htmlspecialchars($date) ?></h6>
                                                                        <span class="fs-14"><?= htmlspecialchars($time) ?><span>
                                                                    </td>
                                                                    <td>
                                                                        <form id="deleteForm<?= htmlspecialchars($weeklySale->saleid) ?>" method="POST" action="sales/deleteSale">
                                                                            <input type="hidden" name="saleid" value="<?= htmlspecialchars($weeklySale->saleid) ?>">
                                                                            <button class="btn btn-primary delete-button" type="button" onclick="confirmDelete(<?= htmlspecialchars($weeklySale->saleid) ?>)" name="delete_sale">
                                                                                Delete
                                                                            </button>
                                                                        </form>
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
                                    <div class="tab-pane" id="Today" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="sales-table-today" class="table table-responsive-md card-table sales-table">
                                                <thead>
                                                        <tr>
                                                            <th>S.ID</th>
                                                            <th>Category</th>
                                                            <th>P.ID</th>
                                                            <th>Description</th>
                                                            <th>Qty</th>
                                                            <th>Price</th>
                                                            <th>Amount</A></th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($todaySales): ?>
                                                            <?php foreach ($todaySales as $todaySale): ?>
                                                                <tr>
                                                                    <td style="text-align: center;"><?= htmlspecialchars($todaySale->saleid) ?></td>
                                                                    <td style="text-align: center;"><?= htmlspecialchars($todaySale->categoryname) ?></td>
                                                                    <td style="text-align: center;"><?= htmlspecialchars($todaySale->productid) ?></td>
                                                                    <td style="text-align: center;"><?= htmlspecialchars($todaySale->description) ?></td>
                                                                    <td style="text-align: center;"><?= htmlspecialchars($todaySale->quantity) ?></td>
                                                                    <td style="text-align: center;"><?= htmlspecialchars($todaySale->saleprice) ?></td>
                                                                    <td style="text-align: center;"><?= htmlspecialchars($todaySale->amount) ?></td>
                                                                    <?php
                                                                        $transactionDateTime = new DateTime($todaySale->saledate);
                                                                        $date = $transactionDateTime->format('Y-m-d');
                                                                        $time = $transactionDateTime->format('h:i:s A'); // 12-hour format with AM/PM
                                                                    ?>
                                                                    <td>
                                                                        <h6 class="fs-16 text-black font-w600 mb-0"><?= htmlspecialchars($date) ?></h6>
                                                                        <span class="fs-14"><?= htmlspecialchars($time) ?><span>
                                                                    </td>
                                                                    <td>
                                                                        <form id="deleteForm<?= htmlspecialchars($todaySale->saleid) ?>" method="POST" action="sales/deleteSale">
                                                                            <input type="hidden" name="saleid" value="<?= htmlspecialchars($todaySale->saleid) ?>">
                                                                            <button class="btn btn-primary delete-button" type="button" onclick="confirmDelete(<?= htmlspecialchars($todaySale->saleid) ?>)" name="delete_sale">
                                                                                Delete
                                                                            </button>
                                                                        </form>
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

                    <div class="modal fade" id="addSales" tabindex="-1" aria-labelledby="addSalesModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addSalesModalLabel">Add Sales</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="addSalesForm" action="Sales/AddSales" method="post" enctype="multipart/form-data">
                                        <!-- Search Product ID -->
                                        <div class="row mb-3">
                                            <div class="col-md-9 col-xxl-9">
                                                <div class="form-group">
                                                    <label for="search-product-id">Search Product ID</label>
                                                    <input type="text" class="form-control" id="search-product-id" name="search_product_id" placeholder="Enter Product ID">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xxl-3 d-flex align-items-end">
                                                <button type="button" class="btn btn-outline-secondary w-100" id="search-product-button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Sales Category (read-only) -->
                                        <div id="categorry" name="categorry" class="row mb-3" style="display: none;">
                                            <div class="col-md-12 col-xxl-12">
                                                <div class="form-group">
                                                    <label for="sales-category">Sales Category</label>
                                                    <input type="text" class="form-control" id="sales-category" name="sales_category" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Shoes and Clothing Fields -->
                                        <div id="shoeShirt" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-6 col-xxl-6">
                                                    <div class="form-group">
                                                        <label for="size">Size</label>
                                                        <input type="text" class="form-control" id="size" name="size" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xxl-6">
                                                    <div class="form-group">
                                                        <label for="color">Color</label>
                                                        <input type="text" class="form-control" id="color" name="color" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xxl-6">
                                                    <div class="form-group">
                                                        <label for="brand">Brand Name</label>
                                                        <input type="text" class="form-control" id="brand" name="brand" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xxl-6">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xxl-6">
                                                    <div class="form-group">
                                                        <label for="unitPrice">Unit Price</label>
                                                        <input type="number" class="form-control" id="unitPrice" name="unitPrice" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xxl-6">
                                                    <div class="form-group">
                                                        <label for="qty">Quantity Sold</label>
                                                        <input type="number" class="form-control" id="qty" name="qty">
                                                    </div>
                                                </div>

                                                <!-- Category ID (Hidden) -->
                                                <input type="hidden" id="category-id" name="category_id">
                                            </div>
                                        </div>

                                        <!-- Merch Fields -->
                                        <div id="merch" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-6 col-xxl-6">
                                                    <div class="form-group">
                                                        <label for="merch-brand">Brand Name</label>
                                                        <input type="text" class="form-control" id="merch-brand" name="merch_brand" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xxl-6">
                                                    <div class="form-group">
                                                        <label for="merch-name">Name</label>
                                                        <input type="text" class="form-control" id="merch-name" name="merch_name" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xxl-6">
                                                    <div class="form-group">
                                                        <label for="merch-unitPrice">Unit Price</label>
                                                        <input type="number" class="form-control" id="merch-unitPrice" name="merch_unitPrice" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xxl-6">
                                                    <div class="form-group">
                                                        <label for="merch-qty">Quantity Sold</label>
                                                        <input type="number" class="form-control" id="merch-qty" name="merch_qty">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Category ID (Hidden) -->
                                            <input type="hidden" id="merch-category-id" name="merch_category_id">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-rounded btn-md btn-secondary" style="width: 100%;" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-rounded btn-md btn-primary" style="width: 100%;" id="addSalesButton">Add Sales</button>
                                        </div>
                                    </form>
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


                    <!-- Download Report Modal Sales
                    <div class="modal fade" id="downloadReportModal" tabindex="-1" aria-labelledby="downloadReportModalLabel" aria-hidden="true">
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
                    </div> -->

                    <!-- <div class="modal fade" id="ViewSales" tabindex="-1" aria-labelledby="viewSalesModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Expenses Info</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> Expense Category</label>
                                                <input type="text" class="form-control" name="category" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" name="description" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="number" class="form-control" name="amount" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Product Category</label>
                                                <input type="text" class="form-control" name="productcategory" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Brand Name</label>
                                            <input type="text" class="form-control" name="brand" value="">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" value="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Size</label>
                                            <input type="text" class="form-control" name="size" value="">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Color</label>
                                            <input type="text" class="form-control" name="color" value="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control" name="qty" value="">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Unit Price</label>
                                            <input type="number" class="form-control" name="unitPrice" value="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Product Image</label>
                                            <input type="file" class="form-control" name="productImg" accept="image/*">
                                        </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-rounded btn-md btn-secondary" style="width: 100%;" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
   
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

    <!-- jQuery CDN -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>     -->
    <!-- DataTables JS CDN -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- Include jQuery library for AJAX -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <script>
        $(document).ready(function() {
            function initializeDataTable(Etable) {
                $(Etable).DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                    "language": {
                        "paginate": {
                            "previous": "Prev",
                            "next": "Next"
                        },
                        "lengthMenu": "Show _MENU_ entries"
                    },
                    "lengthMenu": [5, 10, 25, 50] // Define the entries options here
                });
            }

            // Initialize DataTables for all specified tables
            initializeDataTable('#sales-table-all');
            initializeDataTable('#sales-table-monthly');
            initializeDataTable('#sales-table-weekly');
            initializeDataTable('#sales-table-today');
        });
    </script>


    <script>
        // Event listener for search button click
        document.getElementById("search-product-button").addEventListener("click", function() {
            const productId = document.getElementById("search-product-id").value;

            // AJAX request to fetch product details
            $.ajax({
                url: "Sales/getProductById", // Adjust the URL as per your PHP controller
                method: "POST",
                dataType: "json",
                data: {
                    productId: productId
                },
                success: function(response) {
                    const product = response[0]; // Assuming response is an array with one object

                    if (product) {
                        // Check if the product quantity is equal to or less than zero
                        if (product.quantity <= 0) {
                            alert("Item out of stock");
                            return; // Exit the function if the product is out of stock
                        }

                        document.getElementById("sales-category").value = product.category || "";
                        document.getElementById("category-id").value = product.categoryid || "";
                        
                        // Show "Sales Category" section if the category is SHOES, CLOTHING, or MERCH
                        if (product.category === "SHOES" || product.category === "CLOTHING" || product.category === "MERCH") {
                            document.getElementById("categorry").style.display = "block";
                        } else {
                            document.getElementById("categorry").style.display = "none";
                        }

                        if (product.category === "SHOES" || product.category === "CLOTHING") {
                            document.getElementById("shoeShirt").style.display = "block";
                            document.getElementById("merch").style.display = "none";
                            document.getElementById("size").value = product.size || "";
                            document.getElementById("color").value = product.color || "";
                            document.getElementById("brand").value = product.brandname || "";
                            document.getElementById("name").value = product.productname || "";
                            document.getElementById("unitPrice").value = product.saleprice || "";
                        } else if (product.category === "MERCH") {
                            document.getElementById("shoeShirt").style.display = "none";
                            document.getElementById("merch").style.display = "block";
                            document.getElementById("size").value = "";
                            document.getElementById("color").value = "";
                            document.getElementById("merch-brand").value = product.brandname || "";
                            document.getElementById("merch-name").value = product.productname || "";
                            document.getElementById("merch-unitPrice").value = product.saleprice || "";
                        }
                    } else {
                        alert("Product not found");
                    }
                },
                error: function(xhr, status, error) {
                    alert("Error fetching product details");
                    console.error(xhr.responseText);
                }
            });
        });
    </script>

	
<!-- <script>
    // Function to handle form submission
    document.getElementById('addSalesForm').addEventListener('submit', function(event) {
        // Fetch the form data
        let formData = new FormData(this);

        // Display an alert with the form data
        alertFormData(formData);

        // Prevent the form from submitting
        event.preventDefault();
    });

    // Function to display an alert with form data
    function alertFormData(formData) {
        let alertMessage = '';

        for (var pair of formData.entries()) {
            alertMessage += pair[0] + ': ' + pair[1] + '\n';
        }

        alert(alertMessage);
    }
</script> -->

    <script>
        function toggleSpecificDate() {
            document.getElementById('specificDate').value = '';
        }

        function toggleReportType() {
            document.getElementById('reportType').value = '';
        }
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
        function confirmDelete(saleid) {
            if (confirm("Do you really want to delete this record?")) {
                // Proceed with form submission
                document.getElementById('deleteForm' + saleid).submit();
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
