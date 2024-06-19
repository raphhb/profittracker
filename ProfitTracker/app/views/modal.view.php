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
        
    </head>
    <body>


    <div id="main-wrapper">


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
                                                <h3 class="text-white">Get managed by Dompet’s Virtual Assistant</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                                                <a class="text-white" href="javascript:void(0);" data-toggle="modal" data-target="#learnMoreModal">Learn more >></a>
                                            </div>
                                        </div>
                                    </div>
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

        

    </body>
    <script>
    $(document).ready(function(){
        $('a[href="javascript:void(0);"]').click(function(){
            $('#learnMoreModal').modal('show');
        });
    });
    </script>

</html>
