    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- PAGE TITLE HERE -->
        <title>Admin</title>

        <link href="<?= ROOT ?>/assets/Dashboard/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
        <link rel="stylesheet" href="<?= ROOT ?>/assets/Dashboard/vendor/nouislider/nouislider.min.css">
        <!-- Style css -->
        <link href="<?= ROOT ?>/assets/Dashboard/css/style.css" rel="stylesheet">

    </head>

    <body>

        <div id="main-wrapper">
            <div class="content-body">
                <!-- row -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-xxl-5">
                            <div class="card">
                                <div class="card-header pb-0 border-0">
                                    <div>
                                        <h4 class="card-title mb-2">Activity</h4>
                                        <h2 class="mb-0">$78120</h2>
                                    </div>
                                    <ul class="card-list">
                                        <li class="justify-content-end">Income<span
                                                class="bg-success circle me-0 ms-2"></span></li>
                                        <li class="justify-content-end">Outcome<span
                                                class="bg-danger circle me-0 ms-2"></span></li>
                                    </ul>
                                </div>
                                <div class="card-body pb-0 pt-3">
                                    <div id="chartBarUpdated" class="bar-chart"></div>
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

        <!-- Apex Chart -->
        <script src="<?= ROOT ?>/assets/Dashboard/vendor/apexchart/apexchart.js"></script>
        <script src="<?= ROOT ?>/assets/Dashboard/vendor/nouislider/nouislider.min.js"></script>
        <script src="<?= ROOT ?>/assets/Dashboard/vendor/wnumb/wNumb.js"></script>

        <!-- Dashboard 1 -->
        <script src="<?= ROOT ?>/assets/js/dashboard-1.js"></script>

        <script src="<?= ROOT ?>/assets/Dashboard/js/custom.min.js"></script>
        <script src="<?= ROOT ?>/assets/Dashboard/js/dlabnav-init.js"></script>
        <script src="<?= ROOT ?>/assets/Dashboard/js/demo.js"></script>
        <script src="<?= ROOT ?>/assets/Dashboard/js/styleSwitcher.js"></script>

        <script>
            var updateChart = function (barData) {
                // Get the last 4 days from the barData array
                var recentData = barData;
                
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
                    url: '<?= ROOT ?>/Records/getDataWeekly',
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
    </body>

    </html>
