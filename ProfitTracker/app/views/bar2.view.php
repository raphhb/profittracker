<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
    <title>Admin</title>

    <link href="assets/Dashboard/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/Dashboard/vendor/nouislider/nouislider.min.css">
    <link href="assets/Dashboard/css/stylee1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- ApexCharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        .chart-container {
            width: 100%;
            height: 400px;
        }
    </style>
</head>

<body>
    <div id="main-wrapper">
        <div class="content-body">
            <div class="container-fluid">
                <div class="col-xl-6 col-xxl-6">
                    <div class="card">
                        <div class="card-header d-flex flex-wrap border-0 pb-0">
                            <div class="me-auto mb-sm-0 mb-3">
                                <h4 class="card-title mb-2">Transaction Overview</h4>
                                <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                            </div>
                            <div class="dropdown me-2">
                                <button class="btn btn-rounded btn-md btn-primary me-2" onclick="downloadReport()">
                                    <i class="las la-download scale5 me-3"></i>See Record  
                                </button>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 3C12.5523 3 13 2.55228 13 2C13 1.44772 12.5523 1 12 1C11.4477 1 11 1.44772 11 2C11 2.55228 11.4477 3 12 3Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 23C12.5523 23 13 22.5523 13 22C13 21.4477 12.5523 21 12 21C11.4477 21 11 21.4477 11 22C11 22.5523 11.4477 23 12 23Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                    <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="chartBar3" class="bar-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required vendors -->
    <script src="assets/Dashboard/vendor/global/global.min.js"></script>
    <script src="assets/Dashboard/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="assets/Dashboard/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="assets/Dashboard/vendor/apexchart/apexchart.js"></script>
    <script src="assets/Dashboard/vendor/nouislider/nouislider.min.js"></script>
    <script src="assets/Dashboard/vendor/wnumb/wNumb.js"></script>
    <script src="assets/Dashboard/js/dashboard/dashboard-1.js"></script>
    <script src="assets/Dashboard/js/custom.min.js"></script>
    <script src="assets/Dashboard/js/dlabnav-init.js"></script>
    <script src="assets/Dashboard/js/demo.js"></script>
    <script src="assets/Dashboard/js/styleSwitcher.js"></script>

    <script>
        var updateChart3 = function (barData) {
            var recentData = barData.slice(-7); // Get data for the last 7 days

            var categories = recentData.map(item => {
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
                    height: 400,
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

            var chartBar3 = new ApexCharts(document.querySelector("#chartBar3"), options);
            chartBar3.render();
        };

        var fetchData = function () {
            $.ajax({
                url: 'Records/getDataWeekly',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    updateChart3(data);
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
