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
        <link href="<?=ROOT?>/assets/Dashboard/css/style.css" rel="stylesheet">
        <link href="cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
        <!-- Custome Style css -->
        <link href="<?=ROOT?>/assets/css/custom-datatable.css" rel="stylesheet">

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
            
            <!--**********************************
                Content body start
            ***********************************-->
            <div class="content-body">
                <!-- row -->
                <div class="container-fluid">
                    <div class="row invoice-card-row"></div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card coin-card">
                                <div class="card-body d-sm-flex d-block align-items-center">
                                    <div class="row g-0">
                                        <div class="col-md-8">
                                            <div>
                                                <h3 class="text-white">Enhance Your Business Efficiency</h3>
                                                <p>Optimize your workflow with streamlined task management and personalized support. Achieve better inventory management and focus on what matters most while we handle the details.</p>
                                                <a class="text-white" href="javascript:void(1);" data-toggle="modal" data-target="#learnMoreModal">Learn more >></a>
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
                                                <h4 class="card-title mb-2">Inventory</h4>
                                                <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                                            </div>
                                            <div class="card-tabs mt-3 mt-sm-0">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">Shoes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Clothing</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Merch</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                    <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#downloadReportModalProducts">
                                                    <i class="las la-download scale5 me-2"></i> Download Report
                                                </button>
                                            </div>
                                        </div> <!-- end -->

                                        <div class="card-body tab-content p-0">
                                            <div class="tab-pane active show fade" id="monthly" role="tabpanel">
                                                <div class="table-responsive">

                                                    <table id="transactions-table" class="table table-responsive-md card-table transactions-table">
                                                    <thead>
                                                        <tr>
                                                            <th>P.ID</th>
                                                            <th>Category</th>
                                                            <th>Brand</th>
                                                            <th>Name</th>
                                                            <th>Size</th>
                                                            <th>Color</th>
                                                            <th>Price</th>
                                                            <th>Sale Price</th>
                                                            <th>Qty</th>
                                                            <th>Image</th>
                                                            <th>Added Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if ($shoes): ?>
                                                            <?php foreach ($shoes as $shoe): ?>
                                                                <tr>
                                                                    <td><?= htmlspecialchars($shoe->productid) ?></td>
                                                                    <td><?= htmlspecialchars($shoe->productcategory) ?></td>
                                                                    <td><?= htmlspecialchars($shoe->brandname) ?></td>
                                                                    <td><?= htmlspecialchars($shoe->name) ?></td>
                                                                    <td><?= htmlspecialchars($shoe->size) ?></td>
                                                                    <td><?= htmlspecialchars($shoe->color) ?></td>
                                                                    <td><?= htmlspecialchars($shoe->price) ?></td>
                                                                    <td><?= htmlspecialchars($shoe->saleprice) ?></td>
                                                                    <td><?= htmlspecialchars($shoe->quantity) ?></td>
                                                                    <td><img src="<?=ROOT?>/assets/images/productImages/<?= $shoe->imageurl ?>" alt="Product Image"style="width: 100%;"></td>
                                                                    
                                                                    <?php
                                                                        $transactionDateTime = new DateTime($shoe->addeddate);
                                                                        $date = $transactionDateTime->format('Y-m-d');
                                                                        $time = $transactionDateTime->format('h:i:s A'); // 12-hour format with AM/PM
                                                                    ?>
                                                                    <td>
                                                                        <h6 class="fs-16 text-black font-w600 mb-0"><?= htmlspecialchars($date) ?></h6>
                                                                        <span class="fs-14"><?= htmlspecialchars($time) ?><span>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            Action
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#SetPrice" onclick="setProductDetails('<?= htmlspecialchars($shoe->productid) ?>', '<?= htmlspecialchars(addslashes($shoe->name)) ?>', '<?= htmlspecialchars($shoe->price) ?>')">Set Sale Price</a></li>
                                                                        </ul>                                                                        </ul>
                                                                    </td>  
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php else: ?>
                                                            <tr>
                                                                <td colspan="11">No products found.</td>
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
                                                                <th>P.ID</th>
                                                                <th>Category</th>
                                                                <th>Brand</th>
                                                                <th>Name</th>
                                                                <th>Size</th>
                                                                <th>Color</th>
                                                                <th>Price</th>
                                                                <th>Sale Price</th>
                                                                <th>Qty</th>
                                                                <th>Image</th>
                                                                <th>Added Date</th>
                                                                <th>Action</th>
                                                                <!-- <th>Action</th> -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php if ($clothing): ?>
                                                                <?php foreach ($clothing as $clothes): ?>
                                                                    <tr>
                                                                        <td><?= htmlspecialchars($clothes->productid) ?></td>
                                                                        <td><?= htmlspecialchars($clothes->productcategory) ?></td>
                                                                        <td><?= htmlspecialchars($clothes->brandname) ?></td>
                                                                        <td><?= htmlspecialchars($clothes->name) ?></td>
                                                                        <td><?= htmlspecialchars($clothes->size) ?></td>
                                                                        <td><?= htmlspecialchars($clothes->color) ?></td>
                                                                        <td><?= htmlspecialchars($clothes->price) ?></td>
                                                                        <td><?= htmlspecialchars($clothes->saleprice) ?></td>
                                                                        <td><?= htmlspecialchars($clothes->quantity) ?></td>
                                                                        <td><img src="<?=ROOT?>/assets/images/productImages/<?= $clothes->imageurl ?>" alt="Product Image"style="width: 100%;"></td>
                                                                        
                                                                        <?php
                                                                        $transactionDateTime = new DateTime($clothes->addeddate);
                                                                        $date = $transactionDateTime->format('Y-m-d');
                                                                        $time = $transactionDateTime->format('h:i:s A'); // 12-hour format with AM/PM
                                                                        ?>
                                                                        <td>
                                                                            <h6 class="fs-16 text-black font-w600 mb-0"><?= htmlspecialchars($date) ?></h6>
                                                                            <span class="fs-14"><?= htmlspecialchars($time) ?><span>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                Action
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#SetPrice" onclick="setProductDetails('<?= htmlspecialchars($clothes->productid) ?>', '<?= htmlspecialchars(addslashes($clothes->name)) ?>', '<?= htmlspecialchars($clothes->price) ?>')">Set Sale Price</a></li>
                                                                            </ul>                                                                        </ul>
                                                                        </td>  
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
                                                <table id="transactions-table3" class="table table-responsive-md card-table transactions-table3">
                                                        <thead>
                                                            <tr>
                                                                <th>P.ID</th>
                                                                <th>Category</th>
                                                                <th>Brand</th>
                                                                <th>Name</th>
                                                                <th>Size</th>
                                                                <th>Color</th>
                                                                <th>Price</th>
                                                                <th>Sale Price</th>
                                                                <th>Qty</th>
                                                                <th>Image</th>
                                                                <th>Added Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php if ($merch): ?>
                                                                <?php foreach ($merch as $mrch): ?>
                                                                    <tr>
                                                                        <td><?= htmlspecialchars($mrch->productid) ?></td>
                                                                        <td><?= htmlspecialchars($mrch->productcategory) ?></td>
                                                                        <td><?= htmlspecialchars($mrch->brandname) ?></td>
                                                                        <td><?= htmlspecialchars($mrch->name) ?></td>
                                                                        <td><?= htmlspecialchars($mrch->size) ?></td>
                                                                        <td><?= htmlspecialchars($mrch->color) ?></td>
                                                                        <td><?= htmlspecialchars($mrch->price) ?></td>
                                                                        <td><?= htmlspecialchars($mrch->saleprice) ?></td>
                                                                        <td><?= htmlspecialchars($mrch->quantity) ?></td>
                                                                        <td><img src="<?=ROOT?>/assets/images/productImages/<?= $mrch->imageurl ?>" alt="Product Image"style="width: 100%;"></td>
                                                                        <?php
                                                                        $transactionDateTime = new DateTime($mrch->addeddate);
                                                                        $date = $transactionDateTime->format('Y-m-d');
                                                                        $time = $transactionDateTime->format('h:i:s A'); // 12-hour format with AM/PM
                                                                        ?>
                                                                        <td>
                                                                            <h6 class="fs-16 text-black font-w600 mb-0"><?= htmlspecialchars($date) ?></h6>
                                                                            <span class="fs-14"><?= htmlspecialchars($time) ?><span>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                Action
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#SetPrice" onclick="setProductDetails('<?= htmlspecialchars($mrch->productid) ?>', '<?= htmlspecialchars(addslashes($mrch->name)) ?>', '<?= htmlspecialchars($mrch->price) ?>')">Set Sale Price</a></li>
                                                                            </ul>                                                                        
                                                                            </ul>
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

                                        <!-- SET PRICE -->
                                        <div class="modal fade" id="SetPrice" tabindex="-1" aria-labelledby="setPriceModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="setPriceModalLabel">Set Sale Price</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="setPriceForm" action="Inventory/UpdatePrice" method="post" enctype="multipart/form-data">
                                                            <!-- Product ID Field -->
                                                            <div class="row mb-3">
                                                                <div class="col-md-12 col-xxl-12">
                                                                    <div class="form-group">
                                                                        <label for="product-id">Product ID</label>
                                                                        <input type="text" class="form-control" id="product-id" name="product_id" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Product Name Field -->
                                                            <div class="row mb-3">
                                                                <div class="col-md-12 col-xxl-12">
                                                                    <div class="form-group">
                                                                        <label for="product-name">Product Name</label>
                                                                        <input type="text" class="form-control" id="product-name" name="product_name" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Price Field -->
                                                            <div class="row mb-3">
                                                                <div class="col-md-12 col-xxl-12">
                                                                    <div class="form-group">
                                                                        <label for="price">Price</label>
                                                                        <input type="number" class="form-control" id="price" name="price" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Sale Price Field -->
                                                            <div class="row mb-3">
                                                                <div class="col-md-12 col-xxl-12">
                                                                    <div class="form-group">
                                                                        <label for="sale-price">Sale Price</label>
                                                                        <input type="number" class="form-control" id="sale-price" name="sale_price">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-rounded btn-md btn-secondary" style="width: 100%;" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-rounded btn-md btn-primary" style="width: 100%;" id="setPriceButton">Set Price</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- DOWNLOAD PRODUCTS MODAL -->
                                        <div class="modal fade" id="downloadReportModalProducts" tabindex="-1" aria-labelledby="downloadReportModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="downloadReportModalLabel">Download Report Options</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form id="downloadReportForm" action="Inventory/generatePdf" method="post" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="reportType">Select Report Type:</label>
                                                                <select class="form-control" id="reportType" name="report_type" onchange="toggleSpecificDate()">
                                                                    <option value="">Select...</option>
                                                                    <option value="1">All</option>
                                                                    <option value="2">Shoes</option>
                                                                    <option value="3">Clothing</option>
                                                                    <option value="4">Merch</option>
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
            <!--**********************************
                Content body end
            ***********************************-->
            
            
            
            <!--**********************************
                Footer start
            ***********************************-->

            <!--**********************************
                Footer end
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

        <script src="<?=ROOT?>/assets/Dashboard/js/custom.min.js"></script>
        <script src="<?=ROOT?>/assets/Dashboard/js/dlabnav-init.js"></script>
        <script src="<?=ROOT?>/assets/Dashboard/js/demo.js"></script>
        <script src="<?=ROOT?>/assets/Dashboard/js/styleSwitcher.js"></script>

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!-- DataTables JS CDN -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        
        <!-- Initialize DataTables -->
        <script>
            $(document).ready(function() {
                $('#transactions-table').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                    "language": {
                        "paginate": {
                            "previous": "Previous",
                            "next": "Next"
                        },
                        "lengthMenu": "Show _MENU_ entries"
                    },
                    "lengthMenu": [5, 10, 25, 50] // Define the entries options here
                });
                $('#transactions-table2').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                    "language": {
                        "paginate": {
                            "previous": "Previous",
                            "next": "Next"
                        },
                        "lengthMenu": "Show _MENU_ entries"
                    },
                    "lengthMenu": [5, 10, 25, 50] // Define the entries options here
                });

                $('#transactions-table3').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                    "language": {
                        "paginate": {
                            "previous": "Previous",
                            "next": "Next"
                        },
                        "lengthMenu": "Show _MENU_ entries"
                    },
                    "lengthMenu": [5, 10, 25, 50] // Define the entries options here
                });
            });
            
        </script>
        <script>
            
                // Function to handle form submission
        document.getElementById('setPriceForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Get form data
            var productId = document.getElementById('product-id').value;
            var productName = document.getElementById('product-name').value;
            var price = document.getElementById('price').value;
            var salePrice = document.getElementById('sale-price').value;

            // Alert the data
            alert('Product ID: ' + productId + '\nProduct Name: ' + productName + '\nSale Price: ' + salePrice);

            // You can optionally submit the form using AJAX or proceed with form submission
            // For now, we'll just submit the form
            this.submit();
        });

        // Function to set product details in the modal fields
        function setProductDetails(productId, productName, price) {
            document.getElementById('product-id').value = productId;
            document.getElementById('product-name').value = productName;
            document.getElementById('price').value = price;
        }
        </script>

    <script>
        function alertDateAndSubmit(form) {
            const dateInput = document.getElementById('report_date');
            const selectedDate = dateInput.value;
            alert('Selected date: ' + selectedDate);
            form.submit();
        }
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