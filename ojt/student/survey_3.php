<?php 
  include '../includes/class/functions.php';
  $fn->session_close();
  if ($fn->checkStat($_SESSION['user']) == 'Done'){
    header('location:index.php');
  }
  else if ($fn->checkStat($_SESSION['user']) == 'survey_1'){
    header('location: survey_2.php');
  }
  else if ($fn->checkStat($_SESSION['user']) == 'survey_2'){
    
  }
  else if ($fn->checkStat($_SESSION['user']) == 'survey_3'){
    header('location: survey2.php');
  }
  else{
    header('location: survey.php');
  }
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

<body class="bg-dark"  onload="shuffle()">
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
      <a class="navbar-brand text-primary" href="javascript:void(0)">
        <i class="fa d-inline fa-lg fa-circle-o"></i>
      </a>
      <b><a class="pr-4 text-decoration-none" href="../index.php">PLMun CITCS</a></b>
      <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar5">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar5">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item mr-2"> <a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item mr-2 active"> <a class="nav-link" href="#">Survey</a></li> -->
          <li class="nav-item"> <a class="nav-link" href="../includes/class/logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-0 pt-3">
    <div class="container mt-0 pt-2">
      <div class="row text-light d-flex justify-content-center align-items-center flex-grow-0">
        <div class="col-md-8 pt-1 text-center justify-content-center" style="">
          <h2 class="text-center shadow py-1" contenteditable="true"><b>Technical Skill Questionnaire</b></h2>
        </div>
      </div>
      <div class="row">
        <div class="h-100 col-lg-10 pt-1 mt-3 mb-5 text-light offset-md-1" style="">
          <div class="row border-danger border-0 my-0 mt-0">
            <div class="col-md-8 offset-md-2 border-top-0 border-bottom border-primary pt-2 shadow-sm" style="">
              <h6 class="text-center" style="" contenteditable="true">Programming consists of 10 questions<br></h6>
            </div>
          </div>
          <h5 class="my-3 text-warning">Instruction: Please select the correct answer before the time expires.</h5>

          <form method="POST" action="">

          <div class="row"> <!-- Start of Programming Languages -->
            <div class="col-md-12">
              <h3 class="border-light border-top border-bottom pb-1 rounded-right rounded-left">Programming:<br></h3>
            </div>

            <div id="questions">
              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;What is the value of p, if x = 0 and p = 0.</p>
                <p>
                  while x < 10 <br>
                  &nbsp;x = x + 1 <br>
                  &nbsp;p = p * x <br>
                </p>
                <p><input type="radio" value="a" class="ml-4" name="q1">
                  a.  120
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q1">
                  b.  3628800
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q1">
                  c.  0
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;What is the final output of x, if x = 1.</p>
                <p>
                  while x < 20 <br>
                    &nbsp;if x mod 2 = 0 <br>
                      &nbsp;&nbsp;x = x + 3 <br>
                    &nbsp;else <br>
                      &nbsp;&nbsp;x = x * 2 <br>
                </p>
                <p><input type="radio" value="a" class="ml-4" name="q2">
                  a.  26
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q2">
                  b.  10
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q2">
                  c.  30
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;What is the value of y, given the array of  a = [2, 1, 6, 9, 0, 3].</p>
                <p>
                  for each i in a <br>
                    &nbsp; y = i <br>
                    &nbsp; if y < 5 <br>
                      &nbsp;&nbsp; y = y + 5 <br>
                    &nbsp; y = y * 10 <br>
                </p>
                <p><input type="radio" value="a" class="ml-4" name="q3">
                  a.  50
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q3">
                  b.  80
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q3">
                  c.  100
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;What is the output of the function test, if the argument1 = 10.</p>
                <p>
                  function test(argument1, argument2 = 4) <br>
                  &nbsp; while argument2 < argument1 <br>
                    &nbsp;&nbsp; argument2 = argument2 + 1 <br>
                    &nbsp;&nbsp; argument1 = argument1 <br>

                  &nbsp; return argument2
                </p>
                <p><input type="radio" value="a" class="ml-4" name="q4">
                  a.  9
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q4">
                  b.  10
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q4">
                  c.  11
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">
                  &#8226;&nbsp;Given the array x = [2, 6, 4, 9, 0, 3, 5], what is the value of y after fourth iteration?
                </p>
                <p>
                  y = 0 <br>
                  i = 1 <br>
                  while i < 7 <br>
                    &nbsp; if x[i] > 0 and x[i] < 9 <br>
                      &nbsp;&nbsp; y = y + x[i] <br>
                    &nbsp; else <br>
                      &nbsp;&nbsp; y = y – x[i] <br>
                    &nbsp; i = i + 1
                </p>
                <p><input type="radio" value="a" class="ml-4" name="q5">
                  a.  10
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q5">
                  b.  6
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q5">
                  c.  1
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;What is the value of t, if x = 1.</p>
                <p>
                  t = 0 <br>
                  do <br>
                    &nbsp; t = t + 1 <br>
                    &nbsp; x = t <br>
                  while x < 10 <br>
                </p>
                <p><input type="radio" value="a" class="ml-4" name="q6">
                  a.  7
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q6">
                  b.  9
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q6">
                  c.  11
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;What will be the output if x = 100.01.</p>
                <p>
                  if x >= 100.10 and x < 99 <br>
                    &nbsp; print “I AM LEGEND” <br>
                  else if x == 100 or x <= 100.1 <br>
                    &nbsp; print “NO YOUR NOT” <br>
                  else <br>
                    &nbsp; print “YES I AM”
                </p>
                <p><input type="radio" value="a" class="ml-4" name="q7">
                  a. I AM LEGEND
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q7">
                  b. YES I AM
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q7">
                  c. NO YOUR NOT
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">
                  &#8226;&nbsp;What is the sum of element (left of index 3) and element (two step back of index 6), 
                  from given array arr =  [2, 5, 6, 0, 3, 2.9, 8, 4].
                </p>
                <p><input type="radio" value="a" class="ml-4" name="q8">
                  a.  10.9
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q8">
                  b.  9
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q8">
                  c.  14
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">
                  &#8226;&nbsp;What is the value or array[2][1], from array =  [[9, 1, 0], [6, 7, 3], [2, 5, 1], [0, 0, 0]].
                </p>
                <p><input type="radio" value="a" class="ml-4" name="q9">
                  a.  0
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q9">
                  b.  5
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q9">
                  c.  3
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;What is the index of the highest value from the given array, arr = [-2, -5, -6, 0, -3, -2.9, -8, -4].</p>
                <p><input type="radio" value="a" class="ml-4" name="q10">
                  a.  2
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q10">
                  b.  6
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q10">
                  c.  3
                </p>
              </div>
            </div>
          </div>

          <!-- Change the value of each checkbox to 1  -->
          <div class="row">
            <div class="col-md-12 my-3 text-center" style="">
              <input type="submit" class="btn text-center btn-lg w-25 btn-primary text-light mt-0" value="Next" name="next_page">
            </div>
          </div>

          <?php $fn->saveAns('progSkills'); ?>
          <form>

        </div>
      </div>
    </div>
  </div>

  <!-- floating timer  -->
  <div class="float-left position-fixed bg-light py-2 rounded" id="timers">
    <h4><b>
      <span class="ml-2 mr-1">Timer:</span>
      <span id="minute"></span>&nbsp;
      <span id="second"></span>
    </b></h4>
  </div>

  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">©&nbsp;<?php echo date('Y'); ?> All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../includes/js/js.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
    var minutes = 10;
    var seconds = 0;
    var secondsStr;
    var minutesStr;

    $(document).ready(function(){
      var timer_pos;
        if (window.innerWidth < 400){ 
          timer_pos = '70px';
        }
        else{
          timer_pos = ((window.screen.height / 2) - 70) + "px";
        }
        document.getElementById("timers").style.bottom = timer_pos;
        document.getElementById("timers").style.width = '170px';

        if (performance.navigation.type == 1) {
          minutes = parseInt(localStorage.getItem("minutesLap"));
          seconds = parseInt(localStorage.getItem("secondLap"));
        }
    });
  
    //count down timer interval 1 second
    var x = setInterval(function() {
      if (seconds < 1) {
        minutes-=1;
        seconds = 59;
      }
      if (seconds < 10) {
        secondsStr = '0' + seconds;
      }
      else{
        secondsStr = seconds;
      }
      if (minutes < 10) {
        minutesStr = '0' + minutes;
      }
      else{
        minutesStr = minutes;
      }
      if (minutes < 1) {
        document.getElementById("second").style.color = 'red';
        document.getElementById("minute").style.color = 'red';
      }
      document.getElementById("second").innerHTML = secondsStr;
      document.getElementById("minute").innerHTML = minutesStr + ' :';
    
      seconds -= 1;
      localStorage.setItem("minutesLap", minutes.toString());
      localStorage.setItem("secondLap", seconds.toString());
      // If the count down is over, auto click next
      if (minutes < 1 && seconds < 1) {
        clearInterval(x);
        document.getElementsByClassName("btn")[0].click();
      }
    }, 1000);
  </script>
</body>

</html>