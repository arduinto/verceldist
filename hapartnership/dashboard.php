<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HAP Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="dashboard.php"><img src="assets/images/icon/Telkomsel.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="summary.php">Summary</a></li>
                                    <li><a href="#">Summary Owner</a></li>
                                    <li><a href="#">Trend SF WPI </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>NTE
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="index.php">Stock NTE</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Dery Ardianto <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="login.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-btc"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">PS</h4>
                                        <p>MoM</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2>345 PS</h2>
                                        <span>+ 45.87%</span>
                                    </div>
                                </div>
                                <canvas id="coin_sales1" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-btc"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">New SF</h4>
                                        <p>MoM</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2>146 SF</h2>
                                        <span>- 45.87%</span>
                                    </div>
                                </div>
                                <canvas id="coin_sales2" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-eur"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">PS Performance</h4>
                                        <p>MoM</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2>12343 PS</h2>
                                        <span>+ 45.87%</span>
                                    </div>
                                </div>
                                <canvas id="coin_sales3" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sales report area end -->
                <!-- overview area start -->
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Overview</h4>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected>Last 24 Hours</option>
                                        <option value="0">01 July 2018</option>
                                    </select>
                                </div>
                                <div id="verview-shart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 coin-distribution">
                        <div class="card h-full">
                            <div class="card-body">
                                <h4 class="header-title mb-0">PS Distribution</h4>
                                <!-- <div id="coin_distribution"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- overview area end -->
                <!-- market value area start -->
                <!-- Summary Branch start -->
                <div class="row">
                    <!-- table danger start -->
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Summary Branch</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-danger">
                                                <tr class="text-white">
                                                    <th rowspan="2">REGION</th>
                                                    <th rowspan="2">BRANCH</th>
                                                    <th colspan="3">JUMLAH SALES FORCE</th>
                                                    <th colspan="3">TARGET NEW SF REGISTER</th>
                                                    <th colspan="3">New SF LoS <= 2 Bln Prod Min 1 PS</th>
                                                    <th rowspan="2">SF Existing Prod Min 10 PS</th>
                                                    <th colspan="5">KLASIFIKASI SF BASED ON PS</th>
                                                    <th colspan="5">PS PERFORMANCE</th>
                                                    <th rowspan="2">RANK</th>
                                                </tr>
                                                <tr class="text-white">
                                                    <th>SF Existing</th>
                                                    <th>New SF LoS <= 2 Bulan</th>
                                                    <th>TOTAL SF</th>
                                                    <th>Target New SF Register</th>
                                                    <th>New SF Register Bulan Jul</th>
                                                    <th>Ach</th>
                                                    <th>Target</th>
                                                    <th>Ach</th>
                                                    <th>%</th>
                                                    <th>0 PS</th>
                                                    <th>1-5 PS</th>
                                                    <th>6-9 PS</th>
                                                    <th>>=10 PS</th>
                                                    <th>Target</th>
                                                    <th>MTD</th>
                                                    <th>% Ach to Target</th>
                                                    <th>MoM</th>
                                                    <th>DRR</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>SUMBAGUT</td>
                                                    <td>BANDA ACEH</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                    <td>20</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>5</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>10%</td>
                                                    <td>5%</td>
                                                    <td>Mark</td>
                                                    <td>09 / 07 / 2018</td>
                                                    <td>$120</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                    <td>20</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>5</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>10%</td>
                                                    <td>5%</td>
                                                    <td>Mark</td>
                                                    <td>09 / 07 / 2018</td>
                                                    <td>$120</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                </tr>
                                                <tr>
                                                    <td>SUMBAGUT</td>
                                                    <td>BANDA ACEH</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                    <td>20</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>5</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>10%</td>
                                                    <td>5%</td>
                                                    <td>Mark</td>
                                                    <td>09 / 07 / 2018</td>
                                                    <td>$120</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                    <td>20</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>5</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>10%</td>
                                                    <td>5%</td>
                                                    <td>Mark</td>
                                                    <td>09 / 07 / 2018</td>
                                                    <td>$120</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                </tr>
                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table danger end -->
                </div>
                <!-- Summary Branch end -->
                <!-- Summary Agency start -->
                <div class="row">
                    <!-- table danger start -->
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Summary Agency</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-danger">
                                                <tr class="text-white">
                                                    <th rowspan="2">REGION</th>
                                                    <th rowspan="2">BRANCH</th>
                                                    <th rowspan="2">WOK</th>
                                                    <th rowspan="2">AGENCY</th>
                                                    <th colspan="3">JUMLAH SALES FORCE</th>
                                                    <th colspan="3">TARGET NEW SF REGISTER</th>
                                                    <th colspan="3">New SF LoS <= 2 Bln Prod Min 1 PS</th>
                                                    <th rowspan="2">SF Existing Prod Min 10 PS</th>
                                                    <th colspan="5">KLASIFIKASI SF BASED ON PS</th>
                                                    <th colspan="5">PS PERFORMANCE</th>
                                                    <th rowspan="2">RANK</th>
                                                </tr>
                                                <tr class="text-white">
                                                    <th>SF Existing</th>
                                                    <th>New SF LoS <= 2 Bulan</th>
                                                    <th>TOTAL SF</th>
                                                    <th>Target New SF Register</th>
                                                    <th>New SF Register Bulan Jul</th>
                                                    <th>Ach</th>
                                                    <th>Target</th>
                                                    <th>Ach</th>
                                                    <th>%</th>
                                                    <th>0 PS</th>
                                                    <th>1-5 PS</th>
                                                    <th>6-9 PS</th>
                                                    <th>>=10 PS</th>
                                                    <th>Target</th>
                                                    <th>MTD</th>
                                                    <th>% Ach to Target</th>
                                                    <th>MoM</th>
                                                    <th>DRR</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>SUMBAGUT</td>
                                                    <td>BANDA ACEH</td>
                                                    <td>SABANG ACEH</td>
                                                    <td>KOPERASI PEGAWAI PERUSAHAAN UMUM KANTOR TELEKOMUNIKASI LHOKSEUMAWE</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                    <td>20</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>5</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>10%</td>
                                                    <td>5%</td>
                                                    <td>Mark</td>
                                                    <td>09 / 07 / 2018</td>
                                                    <td>$120</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>09 / 07 / 2018</td>
                                                    <td>$120</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                    <td>20</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>5</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>10%</td>
                                                    <td>5%</td>
                                                    <td>Mark</td>
                                                    <td>09 / 07 / 2018</td>
                                                    <td>$120</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                </tr>
                                                <tr>
                                                    <td>SUMBAGUT</td>
                                                    <td>BANDA ACEH</td>
                                                    <td>SABANG ACEH</td>
                                                    <td>KOPERASI PEGAWAI PERUSAHAAN UMUM KANTOR TELEKOMUNIKASI LHOKSEUMAWE</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                    <td>20</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>5</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>10%</td>
                                                    <td>5%</td>
                                                    <td>Mark</td>
                                                    <td>09 / 07 / 2018</td>
                                                    <td>$120</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>09 / 07 / 2018</td>
                                                    <td>$120</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                    <td>20</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>5</td>
                                                    <td>10</td>
                                                    <td>50%</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>10%</td>
                                                    <td>5%</td>
                                                    <td>Mark</td>
                                                    <td>09 / 07 / 2018</td>
                                                    <td>$120</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                </tr>
                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table danger end -->
                </div>
                <!-- Summary Agency end -->
                <!-- Summary area end -->
                <!-- row area start -->
                <div class="row mt-5">
                    <!-- Live Crypto Price area start -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Top 5 WOK</h4>
                                <div class="cripto-live mt-5">
                                    <ul>
                                        <li>
                                            <div class="icon b">b</div> Sabang Aceh<span><i class="fa fa-long-arrow-up"></i>$876909.00</span>
                                        </li>
                                        <li>
                                            <div class="icon l">l</div> Kota Medan 1<span><i class="fa fa-long-arrow-up"></i>$29780.00</span>
                                        </li>
                                        <li>
                                            <div class="icon d">d</div> Langsa<span><i class="fa fa-long-arrow-up"></i>$13276.00</span>
                                        </li>
                                        <li>
                                            <div class="icon b">b</div> Pekanbaru - Siak<span><i class="fa fa-long-arrow-down"></i>$5684.890</span>
                                        </li>
                                        <li>
                                            <div class="icon e">e</div> Bangka Utara<span><i class="fa fa-long-arrow-down"></i>$3890.98</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Live Crypto Price area end -->
                    <!-- trading history area start -->
                    <div class="col-lg-8 mt-sm-30 mt-xs-30">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title">Trading History</h4>
                                    <div class="trd-history-tabs">
                                        <ul class="nav" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#buy_order" role="tab">Buy Order</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#sell_order" role="tab">Sell Order</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected>Last 24 Hours</option>
                                        <option value="0">01 July 2018</option>
                                    </select>
                                </div>
                                <div class="trad-history mt-4">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="buy_order" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="dbkit-table">
                                                    <tr class="heading-td">
                                                        <td>Trading ID</td>
                                                        <td>Time</td>
                                                        <td>Status</td>
                                                        <td>Amount</td>
                                                        <td>Last Trade</td>
                                                    </tr>
                                                    <tr>
                                                        <td>78211</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$758.90</td>
                                                        <td>$05245.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>782782</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$77878.90</td>
                                                        <td>$7778.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>89675978</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$0768.90</td>
                                                        <td>$0945.090</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sell_order" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="dbkit-table">
                                                    <tr class="heading-td">
                                                        <td>Trading ID</td>
                                                        <td>Time</td>
                                                        <td>Status</td>
                                                        <td>Amount</td>
                                                        <td>Last Trade</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8964978</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$445.90</td>
                                                        <td>$094545.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>89675978</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$78.90</td>
                                                        <td>$074852945.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>78527878</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$0768.90</td>
                                                        <td>$65465.090</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- trading history area end -->
                </div>
                <!-- row area end -->
                <div class="row mt-5">
                    <!-- latest news area start -->
                    <!-- latest news area end -->
                    <!-- exchange area start -->
                    <!-- exchange area end -->
                </div>
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2024. Household Agency and Partnership.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a data-toggle="tab" href="#settings" class="active-show">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>