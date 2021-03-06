<?php 
  include '../includes/class/functions.php';
  $fn->session_close();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>User List - PLMun CITCS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"> -->
    <link rel="stylesheet" href="assets/fonts/fonts.googleapis.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"> -->
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"> -->
    <link rel="stylesheet" href="assets/cdn/dataTables.bootstrap4.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
      <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion p-0" style="background-image: linear-gradient(to bottom, rgb(28,181,224), rgb(0,0,70)); background-position: top left; background-repeat: no-repeat;">
        <div class="container-fluid d-flex flex-column p-0">
          <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
            <div class="sidebar-brand-text mx-3"><span>PLMun CITCS</span></div>
          </a>
          <hr class="sidebar-divider my-0">
          <ul class="nav navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item" role="presentation"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link active" href="users.php"><i class="fas fa-table"></i><span>User List</span></a></li>
            <!--<li class="nav-item" role="presentation"><a class="nav-link" href="404.php"><i class="fas fa-exclamation-circle"></i><span>Page Not Found</span></a></li>-->
            <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="traindata.php"><i class="fas fa-window-maximize"></i><span>Training Data</span></a></li> -->
          </ul>
          <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
      </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
          <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
            <ul class="nav navbar-nav flex-nowrap ml-auto">
              <li class="nav-item dropdown no-arrow mx-1" role="presentation">
              </li>
              <li class="nav-item dropdown no-arrow mx-1" role="presentation">
              </li>
              <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
              <div class="d-none d-sm-block topbar-divider"></div>
              <li class="nav-item dropdown no-arrow" role="presentation">
              </li>
              <li class="nav-item dropdown no-arrow">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
                  <span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $_SESSION['user'] ?></span>
                  <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg">
                </a>
                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                  <a class="dropdown-item" role="presentation" href="profile.php">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" role="presentation" href="../includes/class/logout.php">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Users</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">User Info</p>
                    </div>
                    <div class="card-body">

                        <?php $fn->displayTable(); ?>

                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright">© <?php echo date('Y'); ?> PLMun CITCS. All rights reserved</div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-charts.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script> -->
    <script src="assets/cdnjs/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script> -->
    <script src="assets/cdn/jquery.dataTables.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script> -->
    <script src="assets/cdn/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#dataTable1').DataTable({
            "columnDefs": [{
            "targets": [1, 2, 3, 4, 5],
            "orderable": false }]
            });
        });
    </script>

</body>

</html>