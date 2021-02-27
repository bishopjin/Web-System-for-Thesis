<?php 
  include '../includes/class/functions.php';
  $fn->session_close();
  if ($fn->checkStat($_SESSION['user']) == 'Done'){
    header('location:index.php');
  }
  else if ($fn->checkStat($_SESSION['user']) == 'survey_1'){
    
  }
  else if ($fn->checkStat($_SESSION['user']) == 'survey_2'){
    header('location: survey_3.php');
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

<body class="bg-dark" onload="shuffle()">
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
              <h6 class="text-center" style="" contenteditable="true">Web Development consists of 10 questions<br></h6>
            </div>
          </div>
          <h5 class="my-3 text-warning">Instruction: Please select the correct answer before the time expires.</h5>

          <form method="POST" action="">

          <div class="row"> <!-- Start of Programming Languages -->
            <div class="col-md-12">
              <h3 class="border-light border-top border-bottom pb-1 rounded-right rounded-left">Web Development:<br></h3>
            </div>

            <div id="questions">
              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;Which of the following is the correct syntax to create a cookie using JavaScript?</p>
                <p><input type="radio" value="a" class="ml-4" name="q1">
                  a.  <code>document.cookie = 'key1 = value1; key2 = value2; expires = date';</code>
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q1">
                  b.  <code>browser.cookie = 'key1 = value1; key2 = value2; expires = date';</code>
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q1">
                  c.  <code>window.cookie = 'key1 = value1; key2 = value2; expires = date';</code>
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;Which of the following JQuery selector select elements whose css class is some-class?</p>
                <p><input type="radio" value="a" class="ml-4" name="q2">
                  a.  <code>$('some-class')</code>
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q2">
                  b.  <code>$('#some-class')</code>
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q2">
                  c.  <code>$('.some-class')</code>
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;How to create a function with the JavaScript Function constructor?</p>
                <p><input type="radio" value="a" class="ml-4" name="q3">
                  a.  <code>var func = Function("x","y","return x+y");</code>
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q3">
                  b.  <code>var func = Function(x,y){ return x+y;}</code>
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q3">
                  c.  <code>var func = new Function("x", "y", "return x + y");</code>
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;Which is the correct CSS syntax?</p>
                <p><input type="radio" value="a" class="ml-4" name="q4">
                  a.  <code>body {color: black}</code>
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q4">
                  b.  <code>{body;color:black}</code>
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q4">
                  c.  <code>{body:color=black(body}</code>
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;Use what to prevent confusion on numbers higher than 9 with hexadecimal colors?</p>
                <p><input type="radio" value="a" class="ml-4" name="q5">
                  a.  #
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q5">
                  b.  % 
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q5">
                  c.  !
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;what will be the output of below code?</p>
                <code>
                  $arr = array(5 => 1, 12 => 2); 
                  $arr[] = 56; 
                  $arr["x"] = 42; 
                  echo var_dump($arr);
                </code>
                <p><input type="radio" value="a" class="ml-4" name="q6">
                  a.  <code>array(4) { [5]=>int(1) [12]=> int(2) [13]=> int(56) ["x"]=> int(42) }</code>
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q6">
                  b.  <code>array(3) { [12]=> int(2) [13]=> int(56) ["x"]=> int(42) }</code>
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q6">
                  c.  <code>1,2,56,42</code>
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;In php Which method is used to getting browser properties?</p>
                <p><input type="radio" value="a" class="ml-4" name="q7">
                  a.  <code>$_SERVER['PHP_SELF']</code>
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q7">
                  b.  <code>$_SERVER['HTTP_USER_AGENT']</code>
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q7">
                  c.  <code>$_SERVER['SERVER_NAME']</code>
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;Study following steps and determine the correct order.</p>
                <p>(1) Open a connection to MySql server</p>
                <p>(2) Execute the SQL query</p>
                <p>(3) Fetch the data from query</p>
                <p>(4) Select database</p>
                <p>(5) Close Connection</p>
                <p><input type="radio" value="a" class="ml-4" name="q8">
                  a.  1, 5, 4, 2, 1
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q8">
                  b.  1, 4, 2, 3, 5
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q8">
                  c.  4, 1, 2, 3, 5 
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;mysql_connect() does not take following parameter.</p>
                <p><input type="radio" value="a" class="ml-4" name="q9">
                  a.  database name
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q9">
                  b.  database host
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q9">
                  c.  user ID
                </p>
              </div>

              <div class="col-md-12 my-3" id="q">
                <p class="h5">&#8226;&nbsp;What will be the ouput of below code ? Assume that today is 2009-5-19:2:45:32 pm.</p>
                <code>
                  $today = date("F j, Y, g:i a");
                </code>
                <p><input type="radio" value="a" class="ml-4" name="q10">
                  a.  May 19, 2009, 2:45 pm
                </p>
                <p><input type="radio" value="b" class="ml-4" name="q10">
                  b.  May 19,09,2:45:32 PM
                </p>
                <p><input type="radio" value="c" class="ml-4" name="q10">
                  c.  May 19,2009,14:45:32 pm
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

          <?php $fn->saveAns('webDev'); ?>
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
          <p class="mb-0">©&nbsp;<?php echo date('Y');?> All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../includes/js/js.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
    var minutes = 5;
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