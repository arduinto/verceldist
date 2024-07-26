<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="default-css.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="sales-report-area mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-btc"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">PS</h4>
                            <p>24 H</p>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2><?php echo $totalSalesCurrentMonth; ?> PS</h2>
                            <span><?php echo $percentChangeMoM >= 0 ? '+' : ''; ?><?php echo number_format($percentChangeMoM, 2); ?>%</span>
                        </div>
                    </div>
                    <canvas id="coin_sales1" height="100"></canvas>
                </div>
            </div>
            <!-- Add other divs here for New SF and PS Performance with similar logic -->
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx1 = document.getElementById('coin_sales1').getContext('2d');

            const dailySalesData = <?php echo json_encode($dailySalesData); ?>;
            const labels = dailySalesData.map(data => data.date);
            const salesData = dailySalesData.map(data => data.sales);

            new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Daily Sales',
                        data: salesData,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: false
                    }]
                },
                options: {
                    scales: {
                        x: {
                            type: 'time',
                            time: {
                                unit: 'day'
                            }
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>