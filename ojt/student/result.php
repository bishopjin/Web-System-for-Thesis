<?php 
  include '../includes/class/functions.php';
  $fn->session_close();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- <link rel="stylesheet" href="../includes/assets/cdnjs/font-awesome.min.css" type="text/css"> -->
  <link rel="stylesheet" href="../includes/css/style.css">
</head>

<body style="	background-image: linear-gradient(to bottom, rgb(28, 181, 224), rgb(0, 0, 70));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
  <wrapper class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <div class="container"> <a class="navbar-brand text-primary" href="javascript:void(0)">
          <i class="fa d-inline fa-lg fa-circle-o"></i>
          </a><b><a class="pr-4" href="../index.php">PLMun CITCS</a></b>
        <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar5">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar5">
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item mr-2 active"> <a class="nav-link" href="#">Home</a></li> -->
            <li class="nav-item mr-2"> 
              <?php if(isset($_SESSION['status'])){
                  echo '<a class="disabled nav-link" href="#">';
                } 
                else{
                  echo '<a class="disabled nav-link" href="survey.php">';
                }?>Survey</a></li>
            <li class="nav-item"> <a class="nav-link" href="../includes/class/logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="text-center container-fluid flex-fill text-white py-5" style="">
      <div class="container">
        <div class="row">
          <div class="col-md-6 card shadow">
            <?php include 'userbar.php'; ?>
          </div>
          <div class="col-md-5 ml-4 text-white">
          	<div class="row font-weight-bold text-left">
                <?php $fn->technicalSkillsScore(); ?>
            </div>
            <hr>
            <div class="row h5 font-weight-bold">
                <?php echo $fn->empPercent(); ?>
            </div>
            <br/>
            <div class="row text-left">
                <?php echo $fn->getSoftSkillScore('description'); ?>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="container-fluid w-100 bg-light py-3">
       <div class="text-center my-auto copyright">© <?php echo date('Y'); ?> PLMun CITCS. All rights reserved</div>
    </footer>
  </wrapper>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>