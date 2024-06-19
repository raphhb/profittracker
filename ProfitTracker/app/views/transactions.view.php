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
                                <li class="nav-item">
                                    <div class="input-group search-area">
                                        <input type="text" class="form-control" placeholder="Search here...">
                                        <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                                    </div>
                                </li>
                                <li class="nav-item dropdown notification_dropdown">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <span class="badge light text-white bg-primary rounded-circle">2</span>
                                    </a>
                                    
                                </li>
                                <li class="nav-item dropdown notification_dropdown">
                                    <a class="nav-link  ai-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                        <span class="badge light text-white bg-primary rounded-circle">12</span>
                                    </a>
                                
                                </li>
                                <li class="nav-item dropdown notification_dropdown">
                                    <a class="nav-link bell bell-link" href="javascript:void(0);">
                                        <span class="badge light text-white bg-primary rounded-circle">5</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="btn btn-primary d-sm-inline-block d-none">Generate Report<i class="las la-signal ms-3 scale5"></i></a>
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
                                <img src="images/ion/man (1).png" width="20" alt=""/>
                                <div class="header-info ms-3">
                                    <span class="font-w600 ">Hi,<b>AC</b></span>
                                    <small class="text-end font-w400">xyz@gmail.com</small>
                                </div>
                            </a>
                            
                        </li>
                        <li><a href="javascript:void()" aria-expanded="false">
                                <i class="flaticon-025-dashboard"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>
                        <li><a href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-050-info"></i>
                                <span class="nav-text">Apps</span>
                            </a>
                        </li>
                        <li><a href="javascript:void()" aria-expanded="false">
                                <i class="flaticon-041-graph"></i>
                                <span class="nav-text">Charts</span>
                            </a>
                        </li>
                        <li><a href="javascript:void()" aria-expanded="false">
                                <i class="flaticon-086-star"></i>
                                <span class="nav-text">Bootstrap</span>
                            </a>
                        </li>
                        <li><a href="javascript:void()" aria-expanded="false">
                                <i class="flaticon-045-heart"></i>
                                <span class="nav-text">Plugins</span>
                            </a>
                        </li>
                        <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                                <i class="flaticon-013-checkmark"></i>
                                <span class="nav-text">Widget</span>
                            </a>
                        </li>
                        <li><a href="javascript:void()" aria-expanded="false">
                                <i class="flaticon-072-printer"></i>
                                <span class="nav-text">Forms</span>
                            </a>
                        </li>
                        <li><a href="javascript:void()" aria-expanded="false">
                                <i class="flaticon-043-menu"></i>
                                <span class="nav-text">Table</span>
                            </a>
                        </li>
                        <li><a href="javascript:void()" aria-expanded="false">
                                <i class="flaticon-022-copy"></i>
                                <span class="nav-text">Pages</span>
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
                                                <h3 class="text-white">Get managed by Dompet’s Virtual Assistant</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                                                <a class="text-white" href="javascript:void(0);">Learn more >></a>
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
                                                <h4 class="card-title mb-2">Transactions</h4>
                                                <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                                            </div>
                                                <!-- Search Bar
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search transactions..." aria-label="Search transactions">
                                                    <button class="btn btn-primary" type="button">Search</button>
                                                </div> -->
                                            <div class="card-tabs mt-3 mt-sm-0">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">Expenses</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Sales</a>
                                                    </li>
                                                    <!-- <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Merch</a>
                                                    </li> -->
                                                </ul>
                                            </div>
                                        </div> <!-- end -->
                                        <div class="card-body tab-content p-0">
                                            <div class="tab-pane active show fade" id="monthly" role="tabpanel">
                                                <div class="table-responsive">
                                                <!-- <div class="dataTables_length" id="transactions-table_length">
                                                    <label>Show 
                                                        <select name="transactions-table_length" aria-controls="transactions-table" class="">
                                                            <option value="10">10</option><option value="25">25</option>
                                                            <option value="50">50</option><option value="100">100</option>
                                                        </select> entries
                                                    </label>
                                                </div> -->
                                                    <table id="transactions-table" class="table table-responsive-md card-table transactions-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Expense ID</th>
                                                                <th>Category</th>
                                                                <th>Description</th>
                                                                <th>Amount</th>
                                                                <th>Size</th>
                                                                <th>Color</th>
                                                                <th>Price</th>
                                                                <th>Qty</th>
                                                                <th>Image</th>
                                                                <th>Added Date</th>
                                                                <th>Action</th>
                                                                <!-- <th>Action</th> -->
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
                                                                        <td><?= htmlspecialchars($shoe->quantity) ?></td>
                                                                        <td><img src="<?=APP?>/productImages/<?= $shoe->imageurl ?>" alt="Product Image"style="width: 100%;"></td>

                                                                        <td><?= htmlspecialchars($shoe->addeddate) ?></td>
                                                                        <td><button class="btn btn-danger btn-sm delete-btn"><i class="bi bi-trash"></i></button></td>                                                                    </tr>
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
                                                                        <td><?= htmlspecialchars($clothes->quantity) ?></td>
                                                                        <td><img src="<?= htmlspecialchars($clothes->imageurl) ?>" alt="Product Image" style="width:50px;height:50px;"></td>
                                                                        <td><?= htmlspecialchars($clothes->addeddate) ?></td>
                                                                        <td><button class="btn btn-danger btn-sm delete-btn"><i class="bi bi-trash"></i></button></td>
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
                                                                        <td><?= htmlspecialchars($mrch->quantity) ?></td>
                                                                        <td><img src="<?=APP?>/productImages/<?= $mrch->imageurl ?>" alt="Product Image"style="width: 100%;"></td>
                                                                        <td><?= htmlspecialchars($mrch->addeddate) ?></td>
                                                                        <td><button class="btn btn-danger btn-sm delete-btn"><i class="bi bi-trash"></i></button></td>
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
    </body>
</html>