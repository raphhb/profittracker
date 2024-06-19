<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <link href="<?= ROOT ?>/assets/Dashboard/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/Dashboard/vendor/nouislider/nouislider.min.css">
    <link href="<?= ROOT ?>/assets/Dashboard/css/stylee1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .bg-white {
            background-color: white;
        }

        .bg-blue {
            background-color: blue;
        }
    </style>
</head>

<body>
    <div id="main-wrapper">
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <?php

                                    // Example values, replace with actual values
                                    $currentMonthlyProfit = 500;
                                    $previousMonthlyProfit = 200;
                                    $currentMonthlyExpenses = 300;
                                    $previousMonthlyExpenses = 250;

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
                                        <div class="card-bx bg-white" id="cardBox">
                                            <img class="pattern-img"
                                                src="<?= ROOT ?>/assets/Dashboard/images/pattern/pattern6.png" alt="">
                                            <div class="card-info text-white" id="cardInfo">
                                                <img src="<?= ROOT ?>/assets/Dashboard/images/pattern/circle.png"
                                                    class="mb-4" alt="">
                                                <h2 class="text-white card-balance" id="amountDisplay">₱
                                                    <?= $currentMonthlyProfit ?></h2>
                                                <p class="fs-16" id="typeDisplay">Current Month's Profit</p>
                                                <span
                                                    id="percentageDisplay"><?= $sign . $percentageChange ?>% than last month</span>
                                            </div>
                                            <a class="change-btn" href="javascript:void(0);"
                                                onclick="toggleCardContent()"><i
                                                    class="fa fa-caret-up up-ico"></i>Change<span class="reload-icon"><i
                                                        class="fas fa-sync-alt reload active"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card-bx bg-blue" id="cardBoxExpenses" style="display: none;">
                                            <img class="pattern-img"
                                                src="<?= ROOT ?>/assets/Dashboard/images/pattern/pattern6.png" alt="">
                                            <div class="card-info text-white" id="cardInfoExpenses">
                                                <img src="<?= ROOT ?>/assets/Dashboard/images/pattern/circle.png"
                                                    class="mb-4" alt="">
                                                <h2 class="text-white card-balance" id="amountDisplayExpenses">₱
                                                    <?= $currentMonthlyExpenses ?></h2>
                                                <p class="fs-16" id="typeDisplayExpenses">Current Month's Expenses</p>
                                                <span
                                                    id="percentageDisplayExpenses"><?= $expensesSign . $expensesPercentageChange ?>% than last month</span>
                                            </div>
                                            <a class="change-btn" href="javascript:void(0);"
                                                onclick="toggleCardContent()"><i
                                                    class="fa fa-caret-up up-ico"></i>Change<span class="reload-icon"><i
                                                        class="fas fa-sync-alt reload active"></i></span></a>
                                        </div>
                                        <div class="row mt-xl-0 mt-4" id="expensesOverview"
                                            style="display: none;">
                                            <div class="col-md-6">
                                                <h4 class="card-title">Expenses Overview</h4>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit psu
                                                    olor</span>
                                                <ul class="card-list mt-4">
                                                    <li><span
                                                            class="bg-logistic circle"></span>Logistics<span>20%</span>
                                                    </li>
                                                    <li><span class="bg-supply circle"></span>Store
                                                        Supplies<span>40%</span></li>
                                                    <li><span class="bg-util circle"></span>Utilities<span>15%</span>
                                                    </li>
                                                    <li><span class="bg-light circle"></span>Government<span>10%</span>
                                                    </li>
                                                    <li><span class="bg-rent circle"></span>Rent<span>15%</span></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <canvas id="polarChart"></canvas>
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
    <script src="<?= ROOT ?>/assets/Dashboard/vendor/global/global.min.js"></script>
    <script src="<?= ROOT ?>/assets/Dashboard/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?= ROOT ?>/assets/Dashboard/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?= ROOT ?>/assets/Dashboard/vendor/apexchart/apexchart.js"></script>
    <script src="<?= ROOT ?>/assets/Dashboard/vendor/nouislider/nouislider.min.js"></script>
    <script src="<?= ROOT ?>/assets/Dashboard/vendor/wnumb/wNumb.js"></script>
    <script src="<?= ROOT ?>/assets/Dashboard/js/dashboard/dashboard-1.js"></script>
    <script src="<?= ROOT ?>/assets/Dashboard/js/custom.min.js"></script>
    <script src="<?= ROOT ?>/assets/Dashboard/js/dlabnav-init.js"></script>
    <script src="<?= ROOT ?>/assets/Dashboard/js/demo.js"></script>
    <script src="<?= ROOT ?>/assets/Dashboard/js/styleSwitcher.js"></script>

    <script>
        function toggleCardContent() {
            var cardBox = document.getElementById('cardBox');
            var cardBoxExpenses = document.getElementById('cardBoxExpenses');
            var expensesOverview = document.getElementById('expensesOverview');

            // Check the current content and toggle accordingly
            if (cardBox.style.display === 'block') {
                cardBox.style.display = 'none';
                cardBoxExpenses.style.display = 'block';
                expensesOverview.style.display = 'block';
            } else {
                cardBox.style.display = 'block';
                cardBoxExpenses.style.display = 'none';
                expensesOverview.style.display = 'none';
            }
        }
    </script>
</body>

</html>
