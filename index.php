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

      <div class="container">
        <div class="page-inner">
          <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
              <h3 class="fw-bold mb-3">Dashboard</h3>
              <h6 class="op-7 mb-2">Automatic Aerator</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-primary bubble-shadow-small">
                        <i class="far fa-check-circle"></i>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Aerator1</p>
                        <h4 class="card-title" id="aerator1">Loading...</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-info bubble-shadow-small">
                        <i class="far fa-check-circle"></i>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Aerator2</p>
                        <h4 class="card-title" id="aerator2">Loading...</h4>
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-success bubble-shadow-small">
                        <i class="far fa-check-circle"></i>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Aerator3</p>
                        <h4 class="card-title" id="aerator3">Loading...</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-secondary bubble-shadow-small">
                        <i class="far fa-check-circle"></i>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Aerator4</p>
                        <h4 class="card-title" id="aerator4">Loading...</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script>
            function fetchAeratorStatus() {
              fetch("get-data-aerator.php")
                .then(response => response.json())
                .then(data => {
                  // Konversi angka ke status ON/OFF
                  document.getElementById("aerator1").innerText = (data.aerator1 == "1") ? "ON" : "OFF";
                  document.getElementById("aerator2").innerText = (data.aerator2 == "1") ? "ON" : "OFF";
                  document.getElementById("aerator3").innerText = (data.aerator3 == "1") ? "ON" : "OFF";
                  document.getElementById("aerator4").innerText = (data.aerator4 == "1") ? "ON" : "OFF";
                })
                .catch(err => console.error("Gagal mengambil data:", err));
            }

            window.onload = fetchAeratorStatus;
            setInterval(fetchAeratorStatus, 5000); // Auto-refresh tiap 5 detik
          </script>

          <div class="row">
            <div class="col-md-8">
              <div class="card card-round">
                <div class="card-header">
                  <div class="card-head-row">
                    <div class="card-title">KWH</div>
                    <div class="card-tools">

                    </div>
                  </div>
                </div>
                <style>
                  .chart-container {
                    position: relative;
                    width: 100%;
                    /* misal 16:9 → padding-bottom: 56.25% */
                    padding-bottom: 52.35%;
                  }

                  .chart-container canvas {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100% !important;
                    height: 100% !important;
                  }
                </style>

                <div class="card-body">
                  <div class="chart-container" style="min-height: 475px">
                    <canvas id="statisticsChart"></canvas>
                  </div>
                  <div id="myChartLegend"></div>
                </div>
              </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
            <script>


              fetch('get-data-kwh.php')
                .then(response => response.json())
                .then(data => {
                  // Filter data untuk mengabaikan nilai kwh yang null
                  const filterData = (nodeData) => {
                    return nodeData.filter(item => item.kwh !== null);
                  };

                  // Ambil data yang sudah difilter
                  const node1 = filterData(data.node1);
                  const node2 = filterData(data.node2);
                  const node3 = filterData(data.node3);
                  const node4 = filterData(data.node4);

                  // Ambil waktu dan kWh untuk chart
                  const labels = node1.map(row => row.waktu); // Ambil waktu untuk node1
                  const kwhNode1 = node1.map(row => row.kwh); // Ambil kwh untuk node1
                  const kwhNode2 = node2.map(row => row.kwh); // Ambil kwh untuk node2
                  const kwhNode3 = node3.map(row => row.kwh); // Ambil kwh untuk node3
                  const kwhNode4 = node4.map(row => row.kwh); // Ambil kwh untuk node4

                  // Membuat chart pertama kali
                  const ctx = document.getElementById('statisticsChart').getContext('2d');
                  statisticsChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                      labels: labels,  // Waktu sebagai label
                      datasets: [
                        {
                          label: 'Node 1',
                          data: kwhNode1,
                          borderColor: 'rgba(255, 99, 132, 1)',
                          backgroundColor: 'rgba(255, 99, 132, 0.2)',
                          fill: false,
                          tension: 0.4
                        },
                        {
                          label: 'Node 2',
                          data: kwhNode2,
                          borderColor: 'rgba(54, 162, 235, 1)',
                          backgroundColor: 'rgba(54, 162, 235, 0.2)',
                          fill: false,
                          tension: 0.4
                        },
                        {
                          label: 'Node 3',
                          data: kwhNode3,
                          borderColor: 'rgba(255, 206, 86, 1)',
                          backgroundColor: 'rgba(255, 206, 86, 0.2)',
                          fill: false,
                          tension: 0.4
                        },
                        {
                          label: 'Node 4',
                          data: kwhNode4,
                          borderColor: 'rgba(75, 192, 192, 1)',
                          backgroundColor: 'rgba(75, 192, 192, 0.2)',
                          fill: false,
                          tension: 0.4
                        }
                      ]
                    },
                    options: {
                      responsive: true,
                      plugins: {
                        legend: {
                          position: 'bottom'
                        }
                      },
                      scales: {
                        x: {
                          type: 'category', // Gunakan 'category' untuk menonaktifkan interpretasi waktu
                          reverse: false,   // Data terbaru akan muncul di kanan
                          title: {
                            display: true,
                            text: 'Waktu'
                          }
                        },
                        y: {
                          title: {
                            display: true,
                            text: 'KWH'
                          },
                          beginAtZero: true
                        }
                      }
                    }
                  });

                  // Fungsi untuk update chart dengan data baru
                  function updateChart(newData) {
                    // Tambahkan data baru ke labels dan datasets chart
                    statisticsChart.data.labels.push(newData.waktu);
                    statisticsChart.data.datasets[0].data.push(newData.kwhNode1);
                    statisticsChart.data.datasets[1].data.push(newData.kwhNode2);
                    statisticsChart.data.datasets[2].data.push(newData.kwhNode3);
                    statisticsChart.data.datasets[3].data.push(newData.kwhNode4);

                    // Membatasi chart agar hanya menampilkan 10 data terbaru
                    if (statisticsChart.data.labels.length > 10) {
                      statisticsChart.data.labels.shift();  // Hapus label yang paling lama
                      statisticsChart.data.datasets.forEach(dataset => dataset.data.shift()); // Hapus data yang paling lama
                    }

                    // Memperbarui chart
                    statisticsChart.update();
                  }


                  // Simulasikan update chart setelah 5 detik
                  setTimeout(() => updateChart(newData), 5000);
                });
            </script>

            <style>
              .card-title {
                font-size: 1.2rem;
                font-weight: bold;
              }
            </style>
            <div class="col-md-4">
              <div class="container custom-container mb-4">
                <div class="row">
                  <div class="col text-center">
                    <div id="fluid-meter" class="mx-auto"></div>
                    <p class="card-title">Dissolved Oxygen</p>
                    <p class="card-title">mg/L</p>
                  </div>
                </div>
              </div>
              <div class="card" style="width: 100%; max-width: 500px; height: 250px;">
                <div class="card-header">
                  <div class="card-title">Suhu</div>
                </div>
                <div class="card-body d-flex justify-content-center align-items-center p-4" style="height: 150px;">
                  <i class="fa fa-thermometer-three-quarters text-danger" aria-hidden="true"
                    style="font-size: 72px; margin-right: 15px;"></i>
                  <h3 class="m-0" id="Suhu">...</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- update suhu -->
        <script>
          function updateSuhu() {
            fetch('get-data-do.php')
              .then(response => response.json())
              .then(data => {
                if (data.length > 0) {
                  document.getElementById('Suhu').textContent = data[0].Suhu + '°C';
                } else {
                  console.error('Data kosong');
                }
              })
              .catch(error => {
                console.error('Gagal ambil data suhu:', error);
              });
          }

          updateSuhu(); // Saat halaman dibuka
          setInterval(updateSuhu, 5000); // Setiap 5 detik
        </script>




        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">

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
    <div id="fluid-meter"></div>

    <script>
      var fm = new FluidMeter();

      fm.init({
        targetContainer: document.getElementById("fluid-meter"),
        fillPercentage: 0, // Nilai awal, nanti diupdate
        options: {
          fontFamily: "Raleway",
          drawPercentageSign: false,
          drawBubbles: true,
          size: 250,
          borderWidth: 19,
          backgroundColor: "#e2e2e2",
          foregroundColor: "#fafafa",
          foregroundFluidLayer: {
            fillStyle: "blue",
            angularSpeed: 100,
            maxAmplitude: 12,
            frequency: 30,
            horizontalSpeed: -150
          },
          backgroundFluidLayer: {
            fillStyle: "cyan",
            angularSpeed: 100,
            maxAmplitude: 9,
            frequency: 30,
            horizontalSpeed: 150
          }
        }
      });

      // Fungsi update fluid meter
      function updateFluidMeter() {
        fetch("get-data-do.php")
          .then(response => response.json())
          .then(data => {
            if (data.length > 0) {
              const doValue = parseFloat(data[0].DO); // ambil dari data[0]
              fm.setPercentage(doValue); // asumsi nilainya 0-100
            } else {
              console.error("Data kosong");
            }
          })
          .catch(err => {
            console.error("Gagal mengambil data:", err);
          });
      }

      // Pertama kali load
      updateFluidMeter();

      // Update tiap 5 detik
      setInterval(updateFluidMeter, 5000);
    </script>




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