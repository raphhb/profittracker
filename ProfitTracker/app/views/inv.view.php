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
        
        <script>
        function alertDateAndSubmit(form) {
            const dateInput = document.getElementById('report_date');
            const selectedDate = dateInput.value;
            alert('Selected date: ' + selectedDate);
            form.submit();
        }
    </script>
    </head>
    <body>

        <div id="main-wrapper">
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
                                        </div> <!-- end -->
                                        <div class="row mb-3">
                <div class="col-md-12">
                    <form method="post" action="<?=ROOT?>/inventory/generatePDF" onsubmit="alertDateAndSubmit(this); return false;">
                        <div class="form-group">
                            <label for="report_date">Select Specific Date to Download:</label>
                            <input type="date" id="report_date" name="report_date" class="form-control" required>
                        </div>
                        <button type="submit" name="download_report" class="btn btn-primary">Download Report</button>
                    </form>
                </div>
            </div>

                                    </div>
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

            


        </div>

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
        function alertDateAndSubmit(form) {
            const dateInput = document.getElementById('report_date');
            const selectedDate = dateInput.value;
            alert('Selected date: ' + selectedDate);
            form.submit();
        }
    </script>
    </body>
</html>