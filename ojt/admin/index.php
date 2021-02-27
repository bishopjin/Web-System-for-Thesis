<?php 
  include '../includes/class/functions.php';
  $fn->session_close();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Dashboard - PLMun CITCS</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"> -->
        <link rel="stylesheet" href="assets/fonts/fonts.googleapis.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    </head>
    <body id="page-top">
        <div id="wrapper">
            <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion p-0" style="background-image: linear-gradient(to bottom, rgb(28,181,224), rgb(0,0,70)); background-position: top left; background-repeat: no-repeat;">
                <div class="container-fluid d-flex flex-column p-0">
                    <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php"> <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fas fa-laugh-wink"></i>
                        </div> <div class="sidebar-brand-text mx-3">
                            <span>PLMun CITCS</span>
                        </div> </a>
                    <hr class="sidebar-divider my-0">
                    <ul class="nav navbar-nav text-light" id="accordionSidebar">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="profile.php"><i class="fas fa-user"></i><span>Profile</span></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="users.php"><i class="fas fa-table"></i><span>User List</span></a>
                        </li>
                        <!--<li class="nav-item" role="presentation"><a class="nav-link" href="404.php"><i class="fas fa-exclamation-circle"></i><span>Page Not Found</span></a></li>-->
                        <!-- <li class="nav-item" role="presentation">
                            <a class="nav-link" href="traindata.php"><i class="fas fa-window-maximize"></i><span>Training Data</span></a>
                        </li> -->
                    </ul>
                    <div class="text-center d-none d-md-inline">
                        <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
                    </div>
                </div>
            </nav>
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                        <div class="container-fluid">
                            <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button">
                                <i class="fas fa-bars"></i>
                            </button>
                            <!-- <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                  <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
              </div>
            </form> -->
                            <ul class="nav navbar-nav flex-nowrap ml-auto">
                                <!-- <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto navbar-search w-100">
                    <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                      <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                    </div>
                  </form>
                </div>
              </li> -->
                                <li class="nav-item dropdown no-arrow mx-1" role="presentation">
</li>
                                <li class="nav-item dropdown no-arrow mx-1" role="presentation">
</li>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                                <div class="d-none d-sm-block topbar-divider"></div>
                                <li class="nav-item dropdown no-arrow" role="presentation">
</li>
                                <li class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $_SESSION['user'] ?></span> <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"> </a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                        <a class="dropdown-item" role="presentation" href="profile.php"> <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile </a>
                                        <!-- <a class="dropdown-item" role="presentation" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings
                  </a>
                  <a class="dropdown-item" role="presentation" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log
                  </a> -->
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" role="presentation" href="../includes/class/logout.php"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="container-fluid">
                        <div class="d-sm-flex justify-content-between align-items-center mb-4">
                            <h3 class="text-dark mb-0">Dashboard</h3>
                            <!-- <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a> -->
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xl-3 mb-4">
                                <div class="card shadow border-left-primary py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col mr-2">
                                                <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                                    <span>Male Population (BSCS)</span>
                                                </div>
                                                <div class="text-dark font-weight-bold h5 mb-0">
                                                    <span><?php echo $fn->getPopulation('BSCS','Male'); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-male fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 mb-4">
                                <div class="card shadow border-left-danger py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col mr-2">
                                                <div class="text-uppercase text-danger font-weight-bold text-xs mb-1">
                                                    <span>Female Population (BSCS)</span>
                                                </div>
                                                <div class="text-dark font-weight-bold h5 mb-0">
                                                    <span><?php echo $fn->getPopulation('BSCS','Female'); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-female fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 mb-4">
                                <div class="card shadow border-left-primary py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col mr-2">
                                                <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                                    <span>Male Population (BSIT)</span>
                                                </div>
                                                <div class="text-dark font-weight-bold h5 mb-0">
                                                    <span><?php echo $fn->getPopulation('BSIT','Male'); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-male fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 mb-4">
                                <div class="card shadow border-left-danger py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col mr-2">
                                                <div class="text-uppercase text-danger font-weight-bold text-xs mb-1">
                                                    <span>Female Population (BSIT)</span>
                                                </div>
                                                <div class="text-dark font-weight-bold h5 mb-0">
                                                    <span><?php echo $fn->getPopulation('BSIT','Female'); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-female fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-BSCS" align="center" role="tabpanel" aria-labelledby="TabOne">
                                <!-- Tab One -->
                                <div class="col-xl-9 col-md-9"> 
                                    <!-- BSCS Male vs BSCS Female -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h6 class="text-primary font-weight-bold mx-0 my-0">Graphical Representations</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-area min-vh-100">
                                                <canvas id="csgender"></canvas>
                                                <!-- CS GENDER -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-md-9"> 
                                    <?php $fn->adminPage(1, 'table', null); ?>
                                </div>
                            </div>
                        <!-- End of tab content-->
                    </div>
                    <br><hr>
                    <div class="row">
                        <div class="col-xl-12 text-center my-3">
                            <h2>Technical Skills</h2><br>
                            <?php $fn->displayTable2('academic_year', 'Academic Year'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 text-center my-3">
                            <?php $fn->displayTable2('gender', 'Gender'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 text-center my-3">
                            <?php $fn->displayTable2('course', 'Course'); ?>
                        </div>
                    </div>
                </div>
                    </div>
                    <footer class="bg-white sticky-footer">
                        <div class="container my-auto">
                            <div class="text-center my-auto copyright">© <?php echo date('Y'); ?> PLMun CITCS. All rights reserved</div>
                        </div>
                    </footer>
                </div>
                <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
            </div>
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/js/chart.min.js"></script>
            <!--<script src="assets/js/bs-charts.js"></script>-->
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script> -->
            <script src="assets/cdnjs/jquery.easing.js"></script>
            <script src="assets/js/theme.js"></script>
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script> -->
            <script src="assets/cdnjs/chart.min.js"></script>
            <script src="assets/cdn/dataTables.bootstrap4.min.js"></script>
    
            <script type="text/javascript">
    var bg_color_1 = "rgba(0,0,250,0.3)";
    var bg_color_2 = "rgba(250,0,0,0.3)";
    var chart_label = [["Problem solving and Adaptability", "BSCS"], ["BSIT"], 
                        ["Interpersonal", "BSCS"], ["BSIT"],
                        ["English Language Proficiency and Literacy", "BSCS"], ["BSIT"],
                        ["Information and Communication Tech", "BSCS"], ["BSIT"],
                        ["Personal Org and Time Mgmt", "BSCS"], ["BSIT"],
                        ["Leadership", "BSCS"], ["BSIT"],
                        ["Communication", "BSCS"], ["BSIT"]];
    var options = {
                  plugins:{
                    labels:{
                        render: 'value',
                        fontSize: 50
                    }
                  },
                  responsive: true,
                  maintainAspectRatio: false,
                  scales: {
                      yAxes: [{
                          barThickness: 20,
                          maxBarThickness: 20
                      }],

                      xAxes: [{
                          ticks: {
                              beginAtZero:true,
                              max: 5
                          }

                      }]
                  }
              };

    var csgender = {
        labels: chart_label,
        datasets: [{
            label: "Male",
            backgroundColor:bg_color_1,
            data: [
                <?php
                  $fn->adminPage(1, 'graph', 'm');
                ?>
            ]
        },
        {
            label: "Female",
            backgroundColor:bg_color_2,
            data: [
                <?php
                  $fn->adminPage(1, 'graph', 'f');
                ?>
            ]
        }]
    };
    

    var ctx = document.getElementById("csgender");
    var myChart = new Chart(ctx, {
        type: 'horizontalBar',
        data: csgender,
        options: options
    });

  </script>
    </body>
</html>