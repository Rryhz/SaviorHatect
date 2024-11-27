<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - Hatect</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="img/Logo Hatect/Logo Hatect.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo me-5" href="index.html"><img src="assets/images/Logo Hatect/Logo Text.png" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            <span class="input-group-text" id="search">
              <i class="icon-search"></i>
            </span>
          </div>
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
          <i class="icon-bell mx-0"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Application Error</h6>
              <p class="font-weight-light small-text mb-0 text-muted"> Just now </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <i class="ti-settings mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Settings</h6>
              <p class="font-weight-light small-text mb-0 text-muted"> Private message </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="ti-user mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">New user registration</h6>
              <p class="font-weight-light small-text mb-0 text-muted"> 2 days ago </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="assets/images/faces/face28.jpg" alt="profile" />
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/dashboard">
        <i class="icon-grid mdi mdi-home"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="icon-grid mdi mdi-exit-to-app"></i>
        <span class="menu-title">Logout</span>
      </a>
    </li>
  </ul>
</nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome <strong>John</strong></h3>
                    <h6 class="font-weight-normal mb-0">here is your field today :</span></h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg position-relative">
                  <!-- Menambahkan position-relative untuk penataan absolute position -->
                  <div class="card-people mt-auto">
                    <img src="assets/images/dashboard/people.svg" alt="people">
                  </div>
                  <div class="weather-info position-absolute top-0 end-0 m-3 text-end">
                    <!-- Memposisikan elemen di pojok kanan atas -->
                    <div>
                      <h2 class="mb-2 font-weight-normal">
                        <i class="icon-sun me-2"></i>28<sup>C</sup>
                      </h2>
                    </div>
                    <div>
                      <h4 class="location font-weight-normal">Bogor</h4>
                      <h6 class="font-weight-normal">Babakan</h6>
                    </div>
                  </div>
                </div>
              </div>
            
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <p class="card-title">Pest Quick Monitoring</p>
                      <a class="text-info">Last 30 days</a>
                    </div>
                    <p class="font-weight-500">
                      Pest Quick Monitoring merupakan sistem atau fitur yang digunakan untuk memantau keberadaan, jenis, dan jumlah hama secara cepat pada suatu area tertentu, seperti ladang atau perkebunan.
                    </p>
                    <div id="sales-chart-legend" class="chartjs-legend mt-4 mb-2"></div>
                    <canvas id="sales-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <!-- Container untuk menampilkan elemen secara berdampingan -->
              <div class="d-flex justify-content-between">
                <!-- Bagian #1 -->
                <div class="col-md-6 grid-margin stretch-card me-3">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Order Details</p>
                      <p class="font-weight-500">
                        The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc
                      </p>
                      <div class="d-flex flex-wrap mb-5">
                        <div class="me-5 mt-3">
                          <p class="text-muted">Order value</p>
                          <h3 class="text-primary fs-30 font-weight-medium">12.3k</h3>
                        </div>
                        <div class="me-5 mt-3">
                          <p class="text-muted">Orders</p>
                          <h3 class="text-primary fs-30 font-weight-medium">14k</h3>
                        </div>
                        <div class="me-5 mt-3">
                          <p class="text-muted">Users</p>
                          <h3 class="text-primary fs-30 font-weight-medium">71.56%</h3>
                        </div>
                        <div class="mt-3">
                          <p class="text-muted">Downloads</p>
                          <h3 class="text-primary fs-30 font-weight-medium">34040</h3>
                        </div>
                      </div>
                      <canvas id="order-chart"></canvas>
                    </div>
                  </div>
                </div>
            
                <!-- Bagian #2 -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Distribusi Jenis Hama yang Terdeteksi</p>
                      <p class="font-weight-500">
                        Total distribusi hama yang menyerang ladang Anda  selama satu bulan terakhir
                      </p>
                    <div class="chart-container" style="position: relative; height: 300px; width: 300px;">
                      <canvas id="pest-distribution-chart"></canvas>
                    </div>
                  <div id="pest-legend" style="margin-top: 20px;"></div>
                </div>
              </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title mb-0">Status Hama di Ladang</p>
                    <div class="table-responsive">
                      <table class="table table-striped table-borderless">
                        <thead>
                          <tr>
                            <th>Nama Tanaman</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Search Engine Marketing</td>
                            <td>21 Sep 2018</td>
                            <td class="font-weight-medium">
                              <div class="badge badge-success">Aman</div>
                            </td>
                          </tr>
                          <tr>
                            <td>Search Engine Optimization</td>
                            <td>13 Jun 2018</td>
                            <td class="font-weight-medium">
                              <div class="badge badge-success">Aman</div>
                            </td>
                          </tr>
                          <tr>
                            <td>Display Advertising</td>
                            <td>28 Sep 2018</td>
                            <td class="font-weight-medium">
                              <div class="badge badge-warning">Sedang</div>
                            </td>
                          </tr>
                          <tr>
                            <td>Pay Per Click Advertising</td>
                            <td>30 Jun 2018</td>
                            <td class="font-weight-medium">
                              <div class="badge badge-warning">Sedang</div>
                            </td>
                          </tr>
                          <tr>
                            <td>E-Mail Marketing</td>
                            <td>01 Nov 2018</td>
                            <td class="font-weight-medium">
                              <div class="badge badge-danger">Tinggi</div>
                            </td>
                          </tr>
                          <tr>
                            <td>Referral Marketing</td>
                            <td>20 Mar 2018</td>
                            <td class="font-weight-medium">
                              <div class="badge badge-warning">Sedang</div>
                            </td>
                          </tr>
                          <tr>
                            <td>Social media marketing</td>
                            <td>26 Oct 2018</td>
                            <td class="font-weight-medium">
                              <div class="badge badge-success">Aman</div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
    <script src="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <script src="assets/js/dataTables.select.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="../../assets/js/chart.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>