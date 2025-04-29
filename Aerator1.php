<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Autorator Dashboard</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: { families: ["Public Sans:300,400,500,600,700"] },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["assets/css/fonts.min.css"],
      },
      active: function () {
        sessionStorage.fonts = true;
      },
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css" />
</head>
<style>
  .custom-container {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  }
</style>

<!--thermo -->
</style>
<link href="assets/css/anychart-ui.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/anychart-font.min.css" rel="stylesheet" type="text/css">
<style>
  html,
  body,
  #container {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
  }
</style>


<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">
      <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
          <a href="index.php" class="logo">
            <img src="assets/img/kaiadmin/autorator-ijo.svg" alt="navbar brand" class="navbar-brand" height="60" />
          </a>
          <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
              <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
              <i class="gg-menu-left"></i>
            </button>
          </div>
          <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
          </button>
        </div>
        <!-- End Logo Header -->
      </div>
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <ul class="nav nav-secondary">
            <li class="nav-item active">
              <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="dashboard">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="Aerator1.php">
                      <span class="sub-item">Aerator</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Sidebar -->

    <div class="main-panel">
      <div class="main-header">
        <div class="main-header-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.php" class="logo">
              <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
          <div class="container-fluid">
            <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
              <div class="input-group">
              </div>
            </nav>

            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">

              </a>
              <ul class="dropdown-menu dropdown-search animated fadeIn">
                <form class="navbar-left navbar-form nav-search">
                  <div class="input-group">
                    <input type="text" placeholder="Search ..." class="form-control" />
                  </div>
                </form>
              </ul>
              </li>

              <li class="nav-item topbar-icon dropdown hidden-caret">
              </li>
              <div class="dropdown-menu quick-actions animated fadeIn">
                <div class="quick-actions-header">
                  <span class="title mb-1">Quick Actions</span>
                  <span class="subtitle op-7">Shortcuts</span>
                </div>
                <div class="quick-actions-scroll scrollbar-outer">
                  <div class="quick-actions-items">
                    <div class="row m-0">
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div class="avatar-item bg-danger rounded-circle">
                            <i class="far fa-calendar-alt"></i>
                          </div>
                          <span class="text">Calendar</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div class="avatar-item bg-warning rounded-circle">
                            <i class="fas fa-map"></i>
                          </div>
                          <span class="text">Maps</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div class="avatar-item bg-info rounded-circle">
                            <i class="fas fa-file-excel"></i>
                          </div>
                          <span class="text">Reports</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div class="avatar-item bg-success rounded-circle">
                            <i class="fas fa-envelope"></i>
                          </div>
                          <span class="text">Emails</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div class="avatar-item bg-primary rounded-circle">
                            <i class="fas fa-file-invoice-dollar"></i>
                          </div>
                          <span class="text">Invoice</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div class="avatar-item bg-secondary rounded-circle">
                            <i class="fas fa-credit-card"></i>
                          </div>
                          <span class="text">Payments</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              </li>

            </ul>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
      <style>
        /* Menyembunyikan chart1 */
        .chart1 {
          display: none;
        }
      </style>

      <!-- Container Chart KWH (disembunyikan) -->
      <div class="container chart1">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-round">
              <div class="card-header">
                <div class="card-head-row">
                  <div class="card-title" style="margin-top:35px;">KWH</div>
                  <div class="card-tools">
                    <a href="#" class="btn btn-label-success btn-round btn-sm me-2">
                      <span class="btn-label"><i class="fa fa-pencil"></i></span>Export
                    </a>
                    <a href="#" class="btn btn-label-info btn-round btn-sm">
                      <span class="btn-label"><i class="fa fa-print"></i></span>Print
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-container">
                  <canvas id="statisticsChart"></canvas>
                </div>
                <div id="myChartLegend"></div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      <script>
        let chart1, chart2, chart3, chart4;

        function fetchData(callback) {
          fetch('get-data-sensor.php')
            .then(response => response.json())
            .then(data => {
              callback(data);
            })
            .catch(error => console.error('Gagal mengambil data:', error));
        }

        function processNodeData(nodeData, fields) {
          const reversedData = [...nodeData].reverse();
          const timestamps = reversedData.map(item => item.timestamp.split(' ')[1]);

          const pzemData = {};
          fields.forEach(field => {
            pzemData[field] = reversedData.map(item => item[field]);
          });

          return { timestamps, pzemData };
        }

        function initChart(ctx, timestamps, pzemData, fields) {
          const datasets = fields.map((field, idx) => ({
            label: field,
            data: pzemData[field],
            borderColor: `hsl(${idx * 40}, 70%, 50%)`,
            backgroundColor: `hsla(${idx * 40}, 70%, 50%, 0.2)`,
            fill: true
          }));

          return new Chart(ctx, {
            type: 'line',
            data: {
              labels: timestamps,
              datasets: datasets
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              animation: { duration: 0 },
              plugins: {
                legend: { display: true }
              }
            }
          });
        }

        function updateChart(chart, timestamps, pzemData, fields) {
          chart.data.labels = timestamps;
          fields.forEach((field, i) => {
            chart.data.datasets[i].data = pzemData[field];
          });
          chart.update();
        }

        fetchData((data) => {
          const node1Fields = [
            'PZEM1_V', 'PZEM1_A', 'PZEM1_P',
            'PZEM2_V', 'PZEM2_A', 'PZEM2_P',
            'PZEM3_V', 'PZEM3_A', 'PZEM3_P'
          ];
          const node2Fields = [
            'PZEM1_V', 'PZEM1_A', 'PZEM1_P',
            'PZEM2_V', 'PZEM2_A', 'PZEM2_P',
            'PZEM3_V', 'PZEM3_A', 'PZEM3_P'
          ];
          const node3Fields = [
            'PZEM1_V', 'PZEM1_A', 'PZEM1_P',
            'PZEM2_V', 'PZEM2_A', 'PZEM2_P',
            'PZEM3_V', 'PZEM3_A', 'PZEM3_P'
          ];
          const node4Fields = [
            'PZEM1_V', 'PZEM1_A', 'PZEM1_P',
            'PZEM2_V', 'PZEM2_A', 'PZEM2_P',
            'PZEM3_V', 'PZEM3_A', 'PZEM3_P'
          ];

          const node1 = processNodeData(data.node1, node1Fields);
          const node2 = processNodeData(data.node2, node2Fields);
          const node3 = processNodeData(data.node3, node3Fields);
          const node4 = processNodeData(data.node4, node4Fields);

          chart1 = initChart(document.getElementById('statisticsChart1'), node1.timestamps, node1.pzemData, node1Fields);
          chart2 = initChart(document.getElementById('statisticsChart2'), node2.timestamps, node2.pzemData, node2Fields);
          chart3 = initChart(document.getElementById('statisticsChart3'), node3.timestamps, node3.pzemData, node3Fields);
          chart4 = initChart(document.getElementById('statisticsChart4'), node4.timestamps, node4.pzemData, node4Fields);

          setInterval(() => {
            fetchData((newData) => {
              const node1 = processNodeData(newData.node1, node1Fields);
              const node2 = processNodeData(newData.node2, node2Fields);
              const node3 = processNodeData(newData.node3, node3Fields);
              const node4 = processNodeData(newData.node4, node4Fields);

              updateChart(chart1, node1.timestamps, node1.pzemData, node1Fields);
              updateChart(chart2, node2.timestamps, node2.pzemData, node2Fields);
              updateChart(chart3, node3.timestamps, node3.pzemData, node3Fields);
              updateChart(chart4, node4.timestamps, node4.pzemData, node4Fields);
            });
          }, 5000);
        });
      </script>


      <!-- Container Chart Aerator1-4 -->
      <div class="container-fluid" style="padding-top: 80px;">

        <div class="row no-scroll">
          <!-- Aerator1 -->
          <div class="col-md-6 mb-3">
            <div class="card card-round">
              <div class="card-header">
                <div class="card-head-row">
                  <div class="card-title">Aerator1</div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-container" style="width: 100%; height: 400px;">
                  <canvas id="statisticsChart1"></canvas>
                </div>
                <div id="myChartLegend1"></div>
              </div>
            </div>
          </div>


          <!-- Aerator2 -->
          <div class="col-md-6 mb-3">
            <div class="card card-round">
              <div class="card-header">
                <div class="card-head-row">
                  <div class="card-title">Aerator2</div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-container" style="width: 100%; height: 400px;">
                  <canvas id="statisticsChart2"></canvas>
                </div>
                <div id="myChartLegend2"></div>
              </div>
            </div>
          </div>

          <!-- Aerator3 -->
          <div class="col-md-6 mb-3">
            <div class="card card-round">
              <div class="card-header">
                <div class="card-head-row">
                  <div class="card-title">Aerator3</div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-container">
                  <canvas id="statisticsChart3"></canvas>
                </div>
                <div id="myChartLegend3"></div>
              </div>
            </div>
          </div>

          <!-- Aerator4 -->
          <div class="col-md-6 mb-3">
            <div class="card card-round">
              <div class="card-header">
                <div class="card-head-row">
                  <div class="card-title">Aerator4</div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-container">
                  <canvas id="statisticsChart4"></canvas>
                </div>
                <div id="myChartLegend4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">

      </footer>
    </div>

    <!-- Custom template | don't include it in your project! -->
    <div class="custom-template">
      <div class="title">Settings</div>
      <div class="custom-content">
        <div class="switcher">
          <div class="switch-block">
            <h4>Logo Header</h4>
            <div class="btnSwitch">
              <button type="button" class="selected changeLogoHeaderColor" data-color="dark"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
              <br />
              <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
            </div>
          </div>
          <div class="switch-block">
            <h4>Navbar Header</h4>
            <div class="btnSwitch">
              <button type="button" class="changeTopBarColor" data-color="dark"></button>
              <button type="button" class="changeTopBarColor" data-color="blue"></button>
              <button type="button" class="changeTopBarColor" data-color="purple"></button>
              <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
              <button type="button" class="changeTopBarColor" data-color="green"></button>
              <button type="button" class="changeTopBarColor" data-color="orange"></button>
              <button type="button" class="changeTopBarColor" data-color="red"></button>
              <button type="button" class="selected changeTopBarColor" data-color="white"></button>
              <br />
              <button type="button" class="changeTopBarColor" data-color="dark2"></button>
              <button type="button" class="changeTopBarColor" data-color="blue2"></button>
              <button type="button" class="changeTopBarColor" data-color="purple2"></button>
              <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
              <button type="button" class="changeTopBarColor" data-color="green2"></button>
              <button type="button" class="changeTopBarColor" data-color="orange2"></button>
              <button type="button" class="changeTopBarColor" data-color="red2"></button>
            </div>
          </div>
          <div class="switch-block">
            <h4>Sidebar</h4>
            <div class="btnSwitch">
              <button type="button" class="changeSideBarColor" data-color="white"></button>
              <button type="button" class="selected changeSideBarColor" data-color="dark"></button>
              <button type="button" class="changeSideBarColor" data-color="dark2"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="custom-toggle">
        <i class="icon-settings"></i>
      </div>
    </div>
    <!-- End Custom template -->
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/js-fluid-meter.js"></script>


  <!-- jQuery Scrollbar -->
  <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

  <!-- Chart JS -->
  <script src="assets/js/plugin/chart.js/chart.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

  <!-- Chart Circle -->
  <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

  <!-- Datatables -->
  <script src="assets/js/plugin/datatables/datatables.min.js"></script>

  

  <!-- jQuery Vector Maps -->
  <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
  <script src="assets/js/plugin/jsvectormap/world.js"></script>

  <!-- Sweet Alert -->
  <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Kaiadmin JS -->
  <script src="assets/js/kaiadmin.min.js"></script>

  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <script src="assets/js/setting-demo.js"></script>
  <script src="assets/js/demo.js"></script>
  <script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#177dff",
      fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#f3545d",
      fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#ffa534",
      fillColor: "rgba(255, 165, 52, .14)",
    });
  </script>

</body>

</html>