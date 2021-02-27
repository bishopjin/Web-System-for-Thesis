<?php 
  include 'includes/class/functions.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- <link rel="stylesheet" href="../includes/assets/cdnjs/font-awesome.min.css" type="text/css"> -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="includes/css/style.css">
</head>

<body style="background-image: linear-gradient(to bottom, rgb(28, 181, 224), rgb(0, 0, 70));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">

  <wrapper class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <div class="container"> 
        <a class="navbar-brand text-primary" href="javascript:void(0)">
          <i class="fa d-inline fa-lg fa-circle-o"></i>
          </a>
        <b>
          <a class="pr-4 text-decoration-none" href="index.php">PLMun CITCS</a></b>
        <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar5">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar5">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-2 active"> <a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item mr-2">  <a class="nav-link" href="login.php">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container-fluid pt-2 flex-fill text-center text-white d-flex align-items-center">
      <div class="container">
        <div class="row" style="">
          <div class="border col-lg-5 col-12 p-4 pt-0 mx-auto mt-2 mb-4" style="">
            <h1 class="mb-4 text-white">Register</h1>
            <form method="POST" action="">
              <div class="form-group">
                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" autocomplete="off">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name" autocomplete="off">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" autocomplete="off">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="courses" name="courses">Course:</label>
                </div>
                <select class="form-control custom-select" id="course" name="course">
                  <option selected="">Choose course...</option>
                  <option value="BSCS">BSCS</option>
                  <option value="BSIT">BSIT</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" class="form-control my-2" name="academic" id="academic" placeholder="OJT Academic Year example 2016-2017" autocomplete="off">
              </div>
              <div class="form-group">
                <input type="text" class="form-control my-2" name="user" id="user" placeholder="Username" autocomplete="off">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="pass" id="password" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="repass" id="repassword" placeholder="Retype Password">
              </div>
              <div class="form-group text-center">
                <br><span class="mr-4 ml-4 h6">Gender:</span>
                <span class="ml-4"><input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked="">
                  <label class="form-check-label mr-3" for="male"> Male </label></span>
                <span class="ml-4"><input class="form-group-input" type="radio" name="gender" id="female" value="Female">
                  <label class="form-check-label" for="female"> Female </label></span>
              </div>
              <div class="form-group text-center">
                <p class="form-check-label text-white">
                  By clicking Sign Up, you agree to our 
                  <a class="text-decoration-none text-warning" href="terms.php">
                  Terms and Conditions</a>
                </p>
              </div>
              <div class="row">
                <div class="col-md-12" style="">
                  <input type="submit" class="btn btn-primary text-white w-100 btn-lg mt-3 mb-1" name="register" value="Sign Up">
                </div>
              </div>
              <?php $fn->register(); ?>
            </form>
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
 
 <!--  <script src="../includes/assets/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="../includes/assets/cdnjs/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="../includes/assets/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>

</html>