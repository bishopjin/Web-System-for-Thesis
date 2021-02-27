<?php 
  include '../includes/class/functions.php';
  $fn->session_close();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Training Data - PLMun CITCS</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"> -->
        <link rel="stylesheet" href="assets/fonts/fonts.googleapis.css">
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"> -->
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
                            <a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="profile.php"><i class="fas fa-user"></i><span>Profile</span></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="users.php"><i class="fas fa-table"></i><span>User List</span></a>
                        </li>
                        <!--<li class="nav-item" role="presentation"><a class="nav-link" href="404.php"><i class="fas fa-exclamation-circle"></i><span>Page Not Found</span></a></li>-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="traindata.php"><i class="fas fa-window-maximize"></i><span>Training Data</span></a>
                        </li>
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
                            <ul class="nav navbar-nav flex-nowrap ml-auto">
   
                                <li class="nav-item dropdown no-arrow mx-1" role="presentation"></li>
                                <li class="nav-item dropdown no-arrow mx-1" role="presentation"></li>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                                <div class="d-none d-sm-block topbar-divider"></div>
                                <li class="nav-item dropdown no-arrow" role="presentation"></li>
                                <li class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $_SESSION['user']; ?></span> <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"> </a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                        <a class="dropdown-item" role="presentation" href="profile.php"> <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile </a>
                                        <!-- <a class="dropdown-item" role="presentation" href="#"> <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings </a>
                                        <a class="dropdown-item" role="presentation" href="#"> <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log </a> -->
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" role="presentation" href="../includes/class/logout.php"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="container-fluid">
                        <h3 class="text-dark mb-5">Training Data</h3>
                        <div class="row mb-3">
                            <div class="col-lg-6 justify-content-center">
                                <div class="card mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Job Position</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input class="form-control" type="type" placeholder="Enter job position.." name="jobpos" autocomplete="off" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Web Design:</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="html5" id="Choice2A" value="1">
                                                    <label class="form-check-label" for="Choice2A">HTML5</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="css" id="Choice2B" value="1">
                                                    <label class="form-check-label" for="Choice2B">CSS</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="bootstrap" id="Choice2C" value="1">
                                                    <label class="form-check-label" for="Choice2C">Bootstrap</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Operating System:</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="linux" id="Choice5A" value="1">
                                                    <label class="form-check-label" for="Choice5A">Linux</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="windows" id="Choice5B" value="1">
                                                    <label class="form-check-label" for="Choice5B">Windows</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="ios" id="Choice5D" value="1">
                                                    <label class="form-check-label" for="Choice5D">iOS</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="android" id="Choice5E" value="1">
                                                    <label class="form-check-label" for="Choice5E">Android</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Framework:</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="asp" id="Choice6A" value="1">
                                                    <label class="form-check-label" for="Choice6A">ASP.NET</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="codeigniter" id="Choic6B" value="1">
                                                    <label class="form-check-label" for="Choice6B">CodeIgniter</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="laravel" id="Choice6C" value="1">
                                                    <label class="form-check-label" for="Choice6C">Laravel</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="wordpress" id="Choice6D" value="1">
                                                    <label class="form-check-label" for="Choice6D">WordPress</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 justify-content-center">
                                <div class="card mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Programming Language:</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="csharp" id="Choice1AB" value="1">
                                                    <label class="form-check-label" for="Choice1B">C#</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="java" id="Choice1C" value="1">
                                                    <label class="form-check-label" for="Choice1C">Java</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="python" id="Choice1D" value="1">
                                                    <label class="form-check-label" for="Choice1D">Python</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="swift" id="Choice1E" value="1">
                                                    <label class="form-check-label" for="Choice1E">Swift/Objective-C</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="vbnet" id="Choice1F" value="1">
                                                    <label class="form-check-label" for="Choice1F">VB.NET</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="php" id="Choice1G" value="1">
                                                    <label class="form-check-label" for="Choice1G">PHP</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="javascript" id="Choice1H" value="1">
                                                    <label class="form-check-label" for="Choice1H">JavaScript</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="jquery" id="Choice1I" value="1">
                                                    <label class="form-check-label" for="Choice1I">jQuery</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="typescript" id="Choice1J" value="1">
                                                    <label class="form-check-label" for="Choice1J">TypeScript</label>
                                                </div>
                                            </div>
                                            <!-- <div class="col">
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Computer Network:</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="lan" id="Choice4A" value="1">
                                                    <label class="form-check-label" for="Choice4A">Local Area Network</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Database:</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="sql" id="Choice3A" value="1">
                                                    <label class="form-check-label" for="Choice3A">SQL (MySQL...)</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="nosql" id="Choice3B" value="1">
                                                    <label class="form-check-label" for="Choice3B">No SQL (MongoDB...)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Server:</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="apache" id="Choice7A" value="1">
                                                    <label class="form-check-label" for="Choice7A">Apache Server</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check form-control-lg">
                                                    <input class="form-check-input" type="checkbox" name="msserver" id="Choice7B" value="1">
                                                    <label class="form-check-label" for="Choice7B">Microsoft Server</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="form-row justify-content-center">
                                            <div class="form-group mt-3">
                                                <button class="btn btn-primary btn-sm" type="train" name="train">New Training Data</button>
                                            </div>
                                                <?php $fn->trainData(); ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="text-center my-auto copyright">
                            <span>Copyright © PLMun CITCS 2019</span>
                        </div>
                    </div>
                </footer>
            </div>
            <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        </div>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script> -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/chart.min.js"></script>
        <script src="assets/js/bs-charts.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script> -->
        <script src="assets/cdnjs/jquery.easing.js"></script>
        <script src="assets/js/theme.js"></script>
    </body>
</html>