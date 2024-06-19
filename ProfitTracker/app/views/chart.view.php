<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE TITLE HERE -->
    <title>Admin</title>

    <!-- CSS -->
    <link href="<?=ROOT?>/assets/Dashboard/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=ROOT?>/assets/Dashboard/vendor/nouislider/nouislider.min.css">
    <link href="<?=ROOT?>/assets/Dashboard/css/style.css" rel="stylesheet">

    <!-- Include jQuery via CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div id="main-wrapper">
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-xl-6">
                                        <div class="card-bx bg-blue">
                                            <img class="pattern-img" src="<?=ROOT?>/assets/Dashboard/images/pattern/pattern6.png" alt="">
                                            <div class="card-info text-white">
                                                <img src="<?=ROOT?>/assets/Dashboard/images/pattern/circle.png" class="mb-4" alt="">
                                                <h2 class="text-white card-balance">$824,571.93</h2>
                                                <p class="fs-16">Wallet Balance</p>
                                                <span>+0,8% than last week</span>
                                            </div>
                                            <a class="change-btn" href="javascript:void(0);"><i class="fa fa-caret-up up-ico"></i>Change<span class="reload-icon"><i class="fas fa-sync-alt reload active"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="row  mt-xl-0 mt-4">
                                            <div class="col-md-6">
                                                <h4 class="card-title">Expenses Overview</h4>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit psu olor</span>
                                                <ul class="card-list mt-2">
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
                </div>
            </div>
        </div>
    </div>

    <!-- Required vendors -->
    <script src="<?=ROOT?>/assets/Dashboard/vendor/global/global.min.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/vendor/apexchart/apexchart.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/vendor/nouislider/nouislider.min.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/vendor/wnumb/wNumb.js"></script>

    <!-- Your custom scripts -->
    <script src="<?=ROOT?>/assets/Dashboard/js/custom.min.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/js/dlabnav-init.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/js/demo.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/js/styleSwitcher.js"></script>

    <!-- jQuery (ensure it's loaded before other scripts) -->
    <script src="<?=ROOT?>/assets/Dashboard/vendor/jquery/jquery.min.js"></script>

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
                        Chart.defaults.global.legend.display = true;
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
</body>

</html>