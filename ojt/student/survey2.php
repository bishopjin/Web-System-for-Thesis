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
    header('location: survey_3.php');
  }
  else if ($fn->checkStat($_SESSION['user']) == 'survey_3'){

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
  <!-- <link rel="stylesheet" href="D:/XAMPP/htdocs/ojtt/student/style.css"> -->
  <link rel="stylesheet" href="../includes/css/style.css">
</head>

<body style="	background-image: linear-gradient(to bottom, rgb(28, 181, 224), rgb(0, 0, 70));	background-position: top left;	background-size: 100%;	background-repeat: repeat;" class="">
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container"> <a class="navbar-brand text-primary" href="javascript:void(0)">
        <i class="fa d-inline fa-lg fa-circle-o"></i>
      </a><b><a class="pr-4 text-decoration-none" href="../index.php">PLMun CITCS</a></b>
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

  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2" style="">
          <h2 class="text-center shadow-lg pb-1"><b class="opacity-70">Soft Skill Questionnaire</b></h2>
        </div>
      </div>
    </div>
  </div>

  <div class="">
    <div class="container">
      <div class="row text-light">
        <div class="col-md-10 offset-md-1" style="height: 50px;">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-left opacity-80">Employability Skills</th>
                  <th class="text-center opacity-80">Proficiency</th>
                </tr>
              </thead>
              <tbody>
                <tr></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <form method="POST" action="">
    <div style="" class="">
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="table-responsive" style="opacity: 1;">
              <table class="table">
                <thead>
                  <tr>
                    <th style="width: 389px;"></th>
                    <th class="text-center text-light" style="width: 100px;">Very Poor</th>
                    <th class="text-center text-light" style="width: 100px;">Poor</th>
                    <th class="text-center text-light" style="width: 100px;">Average</th>
                    <th class="text-center text-light" style="width: 100px;">Good</th>
                    <th class="text-center text-light" style="width: 100px;">Excellent</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong class="text-light">1.  Problem solving and Adaptability skills</strong></td>
                  </tr>
                  <tr>
                    <td class="text-light">a. Recognizes alternate routes in meeting objectives. <br></td>
                    <td class="text-center"><input type="radio" name="1a" id="radio1aa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1a" id="radio1ab" value="2"></td>
                    <td class="text-center"><input type="radio" name="1a" id="radio1ac" value="3"></td>
                    <td class="text-center"><input type="radio" name="1a" id="radio1ad" value="4"></td>
                    <td class="text-center"><input type="radio" name="1a" id="radio1ae" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">b. Monitors progress toward objectives in risky ventures. <br></td>
                    <td class="text-center"><input type="radio" name="1b" id="radio1ba" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1b" id="radio1bb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1b" id="radio1bc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1b" id="radio1bd" value="4"></td>
                    <td class="text-center"><input type="radio" name="1b" id="radio1be" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">c. Identifies potential negative outcomes when considering risky venture. <br></td>
                    <td class="text-center"><input type="radio" name="1c" id="radio1ca" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1c" id="radio1cb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1c" id="radio1cc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1c" id="radio1cd" value="4"></td>
                    <td class="text-center"><input type="radio" name="1c" id="radio1ce" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">d. Takes reasonable job related risks. <br></td>
                    <td class="text-center"><input type="radio" name="1d" id="radio1da" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1d" id="radio1db" value="2"></td>
                    <td class="text-center"><input type="radio" name="1d" id="radio1dc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1d" id="radio1dd" value="4"></td>
                    <td class="text-center"><input type="radio" name="1d" id="radio1de" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">e. Is able to adapt to different situations. <br></td>
                    <td class="text-center"><input type="radio" name="1e" id="radio1ea" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1e" id="radio1eb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1e" id="radio1ec" value="3"></td>
                    <td class="text-center"><input type="radio" name="1e" id="radio1ed" value="4"></td>
                    <td class="text-center"><input type="radio" name="1e" id="radio1ee" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">f. Is able to cope with uncertainty. <br></td>
                    <td class="text-center"><input type="radio" name="1f" id="radio1fa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1f" id="radio1fb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1f" id="radio1fc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1f" id="radio1fd" value="4"></td>
                    <td class="text-center"><input type="radio" name="1f" id="radio1fe" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">g. Accepts challenging assignments. <br></td>
                    <td class="text-center"><input type="radio" name="1g" id="radio1ga" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1g" id="radio1gb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1g" id="radio1gc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1g" id="radio1gd" value="4"></td>
                    <td class="text-center"><input type="radio" name="1g" id="radio1ge" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">h. Prefers taking up new challenges and responsibilities. <br></td>
                    <td class="text-center"><input type="radio" name="1h" id="radio1ha" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1h" id="radio1hb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1h" id="radio1hc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1h" id="radio1hd" value="4"></td>
                    <td class="text-center"><input type="radio" name="1h" id="radio1he" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">i. Is able to identify and suggest alternative ways to achieve goals and get the job done. <br></td>
                    <td class="text-center"><input type="radio" name="1i" id="radio1ia" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1i" id="radio1ib" value="2"></td>
                    <td class="text-center"><input type="radio" name="1i" id="radio1ic" value="3"></td>
                    <td class="text-center"><input type="radio" name="1i" id="radio1id" value="4"></td>
                    <td class="text-center"><input type="radio" name="1i" id="radio1ie" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">j. Is able to adapt to changes. <br></td>
                    <td class="text-center"><input type="radio" name="1j" id="radio1ja" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1j" id="radio1jb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1j" id="radio1jc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1j" id="radio1jd" value="4"></td>
                    <td class="text-center"><input type="radio" name="1j" id="radio1je" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">k. Adapts to situations of change. <br></td>
                    <td class="text-center"><input type="radio" name="1k" id="radio1ka" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1k" id="radio1kb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1k" id="radio1kc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1k" id="radio1kd" value="4"></td>
                    <td class="text-center"><input type="radio" name="1k" id="radio1ke" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">l. Initiates change to enhance productivity. <br></td>
                    <td class="text-center"><input type="radio" name="1l" id="radio1la" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1l" id="radio1lb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1l" id="radio1lc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1l" id="radio1ld" value="4"></td>
                    <td class="text-center"><input type="radio" name="1l" id="radio1le" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">m. Is creative and makes suggestions to improve the job. <br></td>
                    <td class="text-center"><input type="radio" name="1m" id="radio1ma" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1m" id="radio1mb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1m" id="radio1mc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1m" id="radio1md" value="4"></td>
                    <td class="text-center"><input type="radio" name="1m" id="radio1me" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">n. Gathers facts and information in finding the solution for problems. <br></td>
                    <td class="text-center"><input type="radio" name="1n" id="radio1na" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1n" id="radio1nb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1n" id="radio1nc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1n" id="radio1nd" value="4"></td>
                    <td class="text-center"><input type="radio" name="1n" id="radio1ne" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">o. Finds effective ways of solving problems. <br></td>
                    <td class="text-center"><input type="radio" name="1o" id="radio1oa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1o" id="radio1ob" value="2"></td>
                    <td class="text-center"><input type="radio" name="1o" id="radio1oc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1o" id="radio1od" value="4"></td>
                    <td class="text-center"><input type="radio" name="1o" id="radio1oe" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">p. Is successful in resolving conflicts with others. <br></td>
                    <td class="text-center"><input type="radio" name="1p" id="radio1pa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1p" id="radio1pb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1p" id="radio1pc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1p" id="radio1pd" value="4"></td>
                    <td class="text-center"><input type="radio" name="1p" id="radio1pe" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">q. Solves problems without getting assistance from others. <br></td>
                    <td class="text-center"><input type="radio" name="1q" id="radio1qa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1q" id="radio1qb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1q" id="radio1qc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1q" id="radio1qd" value="4"></td>
                    <td class="text-center"><input type="radio" name="1q" id="radio1qe" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">r. Provides novel solutions to problems. <br></td>
                    <td class="text-center"><input type="radio" name="1r" id="radio1ra" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1r" id="radio1rb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1r" id="radio1rc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1r" id="radio1rd" value="4"></td>
                    <td class="text-center"><input type="radio" name="1r" id="radio1re" value="5"></td>
                  </tr>
                  <tr>
                    <td class="text-light">s. Is able to identify problems. <br></td>
                    <td class="text-center"><input type="radio" name="1s" id="radio1sa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="1s" id="radio1sb" value="2"></td>
                    <td class="text-center"><input type="radio" name="1s" id="radio1sc" value="3"></td>
                    <td class="text-center"><input type="radio" name="1s" id="radio1sd" value="4"></td>
                    <td class="text-center"><input type="radio" name="1s" id="radio1se" value="5"></td>
                  </tr>
                  <tr></tr>
                  <tr></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="table-responsive" style="opacity: 1;">
              <table class="table">
                <thead class="text-light">
                  <tr>
                    <th style="width: 389px;"></th>
                    <th class="text-center" style="width: 100px;">Very Poor</th>
                    <th class="text-center" style="width: 100px;">Poor</th>
                    <th class="text-center" style="width: 100px;">Average</th>
                    <th class="text-center" style="width: 100px;">Good</th>
                    <th class="text-center" style="width: 100px;">Excellent</th>
                  </tr>
                </thead>
                <tbody class="text-light">
                  <tr>
                    <td><strong class="text-light">2. Interpersonal skills</strong><br></td>
                  </tr>
                  <tr>
                    <td>a. Enjoys the “give and take” policy or working in group. <br></td>
                    <td class="text-center"><input type="radio" name="2a" id="radio2aa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="2a" id="radio2ab" value="2"></td>
                    <td class="text-center"><input type="radio" name="2a" id="radio2ac" value="3"></td>
                    <td class="text-center"><input type="radio" name="2a" id="radio2ad" value="4"></td>
                    <td class="text-center"><input type="radio" name="2a" id="radio2ae" value="5"></td>
                  </tr>
                  <tr>
                    <td>b. Is willing to follow the norms and standards of the group. <br></td>
                    <td class="text-center"><input type="radio" name="2b" id="radio2ba" value="1" required></td>
                    <td class="text-center"><input type="radio" name="2b" id="radio2bb" value="2"></td>
                    <td class="text-center"><input type="radio" name="2b" id="radio2bc" value="3"></td>
                    <td class="text-center"><input type="radio" name="2b" id="radio2bd" value="4"></td>
                    <td class="text-center"><input type="radio" name="2b" id="radio2be" value="5"></td>
                  </tr>
                  <tr>
                    <td>c. Enjoys working as part of a team. <br></td>
                    <td class="text-center"><input type="radio" name="2c" id="radio2ca" value="1" required></td>
                    <td class="text-center"><input type="radio" name="2c" id="radio2cb" value="2"></td>
                    <td class="text-center"><input type="radio" name="2c" id="radio2cc" value="3"></td>
                    <td class="text-center"><input type="radio" name="2c" id="radio2cd" value="4"></td>
                    <td class="text-center"><input type="radio" name="2c" id="radio2ce" value="5"></td>
                  </tr>
                  <tr>
                    <td>d. Gets along easily with people. <br></td>
                    <td class="text-center"><input type="radio" name="2d" id="radio2da" value="1" required></td>
                    <td class="text-center"><input type="radio" name="2d" id="radio2db" value="2"></td>
                    <td class="text-center"><input type="radio" name="2d" id="radio2dc" value="3"></td>
                    <td class="text-center"><input type="radio" name="2d" id="radio2dd" value="4"></td>
                    <td class="text-center"><input type="radio" name="2d" id="radio2de" value="5"></td>
                  </tr>
                  <tr>
                    <td>e.  Works cooperatively with others. <br></td>
                    <td class="text-center"><input type="radio" name="2e" id="radio2ea" value="1" required></td>
                    <td class="text-center"><input type="radio" name="2e" id="radio2eb" value="2"></td>
                    <td class="text-center"><input type="radio" name="2e" id="radio2ec" value="3"></td>
                    <td class="text-center"><input type="radio" name="2e" id="radio2ed" value="4"></td>
                    <td class="text-center"><input type="radio" name="2e" id="radio2ee" value="5"></td>
                  </tr>
                  <tr>
                    <td>f. Places team goals ahead of own goals <br></td>
                    <td class="text-center"><input type="radio" name="2f" id="radio2fa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="2f" id="radio2fb" value="2"></td>
                    <td class="text-center"><input type="radio" name="2f" id="radio2fc" value="3"></td>
                    <td class="text-center"><input type="radio" name="2f" id="radio2fd" value="4"></td>
                    <td class="text-center"><input type="radio" name="2f" id="radio2fe" value="5"></td>
                  </tr>
                  <tr>
                    <td>g. Cooperates well with fellow workers. <br></td>
                    <td class="text-center"><input type="radio" name="2g" id="radio2ga" value="1" required></td>
                    <td class="text-center"><input type="radio" name="2g" id="radio2gb" value="2"></td>
                    <td class="text-center"><input type="radio" name="2g" id="radio2gc" value="3"></td>
                    <td class="text-center"><input type="radio" name="2g" id="radio2gd" value="4"></td>
                    <td class="text-center"><input type="radio" name="2g" id="radio2ge" value="5"></td>
                  </tr>
                  <tr>
                    <td>h. Is able to listen to other people's opinions. <br></td>
                    <td class="text-center"><input type="radio" name="2h" id="radio2ha" value="1" required></td>
                    <td class="text-center"><input type="radio" name="2h" id="radio2hb" value="2"></td>
                    <td class="text-center"><input type="radio" name="2h" id="radio2hc" value="3"></td>
                    <td class="text-center"><input type="radio" name="2h" id="radio2hd" value="4"></td>
                    <td class="text-center"><input type="radio" name="2h" id="radio2he" value="5"></td>
                  </tr>
                  <tr>
                    <td>i. Empathizes with others. <br></td>
                    <td class="text-center"><input type="radio" name="2i" id="radio2ia" value="1" required></td>
                    <td class="text-center"><input type="radio" name="2i" id="radio2ib" value="2"></td>
                    <td class="text-center"><input type="radio" name="2i" id="radio2ic" value="3"></td>
                    <td class="text-center"><input type="radio" name="2i" id="radio2id" value="4"></td>
                    <td class="text-center"><input type="radio" name="2i" id="radio2ie" value="5"></td>
                  </tr>
                  <tr>
                    <td>j. Communicates well with others. <br></td>
                    <td class="text-center"><input type="radio" name="2j" id="radio2ja" value="1" required></td>
                    <td class="text-center"><input type="radio" name="2j" id="radio2jb" value="2"></td>
                    <td class="text-center"><input type="radio" name="2j" id="radio2jc" value="3"></td>
                    <td class="text-center"><input type="radio" name="2j" id="radio2jd" value="4"></td>
                    <td class="text-center"><input type="radio" name="2j" id="radio2je" value="5"></td>
                  </tr>
                  <tr></tr>
                  <tr></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="table-responsive" style="opacity: 1;">
              <table class="table">
                <thead>
                  <tr class="text-light">
                    <th style="width: 389px;" class=""></th>
                    <th class="text-center" style="width: 100px;">Very Poor</th>
                    <th class="text-center" style="width: 100px;">Poor</th>
                    <th class="text-center" style="width: 100px;">Average</th>
                    <th class="text-center" style="width: 100px;">Good</th>
                    <th class="text-center" style="width: 100px;">Excellent</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-light">
                    <td><strong>3. English Language Proficiency and Literacy skills. </strong><br></td>
                  </tr>
                  <tr class="text-light">
                    <td>a. Has no problem in speaking English to others. <br></td>
                    <td class="text-center"><input type="radio" name="3a" id="radio3aa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="3a" id="radio3ab" value="2"></td>
                    <td class="text-center"><input type="radio" name="3a" id="radio3ac" value="3"></td>
                    <td class="text-center"><input type="radio" name="3a" id="radio3ad" value="4"></td>
                    <td class="text-center"><input type="radio" name="3a" id="radio3ae" value="5"></td>
                  </tr>
                  <tr class="text-light">
                    <td>b. Speak confidently using English language when communicating. <br></td>
                    <td class="text-center"><input type="radio" name="3b" id="radio3ba" value="1" required></td>
                    <td class="text-center"><input type="radio" name="3b" id="radio3bb" value="2"></td>
                    <td class="text-center"><input type="radio" name="3b" id="radio3bc" value="3"></td>
                    <td class="text-center"><input type="radio" name="3b" id="radio3bd" value="4"></td>
                    <td class="text-center"><input type="radio" name="3b" id="radio3be" value="5"></td>
                  </tr>
                  <tr class="text-light">
                    <td>c. Is able to communicate with colleagues in English. <br></td>
                    <td class="text-center"><input type="radio" name="3c" id="radio3ca" value="1" required></td>
                    <td class="text-center"><input type="radio" name="3c" id="radio3cb" value="2"></td>
                    <td class="text-center"><input type="radio" name="3c" id="radio3cc" value="3"></td>
                    <td class="text-center"><input type="radio" name="3c" id="radio3cd" value="4"></td>
                    <td class="text-center"><input type="radio" name="3c" id="radio3ce" value="5"></td>
                  </tr>
                  <tr class="text-light">
                    <td>d. Speaks and writes clearly so that others understand. <br></td>
                    <td class="text-center"><input type="radio" name="3d" id="radio3da" value="1" required></td>
                    <td class="text-center"><input type="radio" name="3d" id="radio3db" value="2"></td>
                    <td class="text-center"><input type="radio" name="3d" id="radio3dc" value="3"></td>
                    <td class="text-center"><input type="radio" name="3d" id="radio3dd" value="4"></td>
                    <td class="text-center"><input type="radio" name="3d" id="radio3de" value="5"></td>
                  </tr>
                  <tr class="text-light">
                    <td>e. Listens and asks questions in order to understand instructions and views of others. <br></td>
                    <td class="text-center"><input type="radio" name="3e" id="radio3ea" value="1" required></td>
                    <td class="text-center"><input type="radio" name="3e" id="radio3eb" value="2"></td>
                    <td class="text-center"><input type="radio" name="3e" id="radio3ec" value="3"></td>
                    <td class="text-center"><input type="radio" name="3e" id="radio3ed" value="4"></td>
                    <td class="text-center"><input type="radio" name="3e" id="radio3ee" value="5"></td>
                  </tr>
                  <tr class="text-light">
                    <td>f. Can create documents such as letters, directions, reports, graphs and flow charts in English. <br></td>
                    <td class="text-center"><input type="radio" name="3f" id="radio3fa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="3f" id="radio3fb" value="2"></td>
                    <td class="text-center"><input type="radio" name="3f" id="radio3fc" value="3"></td>
                    <td class="text-center"><input type="radio" name="3f" id="radio3fd" value="4"></td>
                    <td class="text-center"><input type="radio" name="3f" id="radio3fe" value="5"></td>
                  </tr>
                  <tr></tr>
                  <tr></tr>
                  <tr></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="table-responsive" style="opacity: 1;">
              <table class="table">
                <thead>
                  <tr class="text-light">
                    <th style="width: 389px;"></th>
                    <th class="text-center" style="width: 100px;">Very Poor</th>
                    <th class="text-center" style="width: 100px;">Poor</th>
                    <th class="text-center" style="width: 100px;">Average</th>
                    <th class="text-center" style="width: 100px;">Good</th>
                    <th class="text-center" style="width: 100px;">Excellent</th>
                  </tr>
                </thead>
                <tbody class="text-light">
                  <tr class="text-light">
                    <td><strong>4. ICT skills</strong><br></td>
                  </tr>
                  <tr>
                    <td>a. ICT knowledge using the Internet. <br></td>
                    <td class="text-center"><input type="radio" name="4a" id="radio4aa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="4a" id="radio4ab" value="2"></td>
                    <td class="text-center"><input type="radio" name="4a" id="radio4ac" value="3"></td>
                    <td class="text-center"><input type="radio" name="4a" id="radio4ad" value="4"></td>
                    <td class="text-center"><input type="radio" name="4a" id="radio4ae" value="5"></td>
                  </tr>
                   <tr>
                    <td>b. ICT knowledge in word processing. <br></td>
                    <td class="text-center"><input type="radio" name="4b" id="radio4ba" value="1" required></td>
                    <td class="text-center"><input type="radio" name="4b" id="radio4bb" value="2"></td>
                    <td class="text-center"><input type="radio" name="4b" id="radio4bc" value="3"></td>
                    <td class="text-center"><input type="radio" name="4b" id="radio4bd" value="4"></td>
                    <td class="text-center"><input type="radio" name="4b" id="radio4be" value="5"></td>
                  </tr>
                  <tr>
                    <td>c. ICT knowledge in using email. <br></td>
                    <td class="text-center"><input type="radio" name="4c" id="radio4ca" value="1" required></td>
                    <td class="text-center"><input type="radio" name="4c" id="radio4cb" value="2"></td>
                    <td class="text-center"><input type="radio" name="4c" id="radio4cc" value="3"></td>
                    <td class="text-center"><input type="radio" name="4c" id="radio4cd" value="4"></td>
                    <td class="text-center"><input type="radio" name="4c" id="radio4ce" value="5"></td>
                  </tr>
                  <tr>
                    <td>d. ICT knowledge in spreadsheet. <br></td>
                    <td class="text-center"><input type="radio" name="4d" id="radio4da" value="1" required></td>
                    <td class="text-center"><input type="radio" name="4d" id="radio4db" value="2"></td>
                    <td class="text-center"><input type="radio" name="4d" id="radio4dc" value="3"></td>
                    <td class="text-center"><input type="radio" name="4d" id="radio4dd" value="4"></td>
                    <td class="text-center"><input type="radio" name="4d" id="radio4de" value="5"></td>
                  </tr>
                  <tr>
                    <td>e. ICT knowledge in handling presentations. <br></td>
                    <td class="text-center"><input type="radio" name="4e" id="radio4ea" value="1" required></td>
                    <td class="text-center"><input type="radio" name="4e" id="radio4eb" value="2"></td>
                    <td class="text-center"><input type="radio" name="4e" id="radio4ec" value="3"></td>
                    <td class="text-center"><input type="radio" name="4e" id="radio4ed" value="4"></td>
                    <td class="text-center"><input type="radio" name="4e" id="radio4ee" value="5"></td>
                  </tr>
                  <tr></tr>
                  <tr></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="table-responsive" style="opacity: 1;">
              <table class="table">
                <thead class="text-light">
                  <tr>
                    <th style="width: 389px;"></th>
                    <th class="text-center" style="width: 100px;">Very Poor</th>
                    <th class="text-center" style="width: 100px;">Poor</th>
                    <th class="text-center" style="width: 100px;">Average</th>
                    <th class="text-center" style="width: 100px;">Good</th>
                    <th class="text-center" style="width: 100px;">Excellent</th>
                  </tr>
                </thead>
                <tbody class="text-light">
                  <tr>
                    <td><strong>5. Personal organization and Time management skills</strong><br></td>
                  </tr>
                  <tr>
                    <td>a. Allocates time efficiently. <br></td>
                    <td class="text-center"><input type="radio" name="5a" id="radio5aa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="5a" id="radio5ab" value="2"></td>
                    <td class="text-center"><input type="radio" name="5a" id="radio5ac" value="3"></td>
                    <td class="text-center"><input type="radio" name="5a" id="radio5ad" value="4"></td>
                    <td class="text-center"><input type="radio" name="5a" id="radio5ae" value="5"></td>
                  </tr>
                  <tr>
                    <td>b. Is able to meet deadlines. <br></td>
                    <td class="text-center"><input type="radio" name="5b" id="radio5ba" value="1" required></td>
                    <td class="text-center"><input type="radio" name="5b" id="radio5bb" value="2"></td>
                    <td class="text-center"><input type="radio" name="5b" id="radio5bc" value="3"></td>
                    <td class="text-center"><input type="radio" name="5b" id="radio5bd" value="4"></td>
                    <td class="text-center"><input type="radio" name="5b" id="radio5be" value="5"></td>
                  </tr>
                  <tr>
                    <td>c. Uses time and materials to the best advantage of the company. <br></td>
                    <td class="text-center"><input type="radio" name="5c" id="radio5ca" value="1" required></td>
                    <td class="text-center"><input type="radio" name="5c" id="radio5cb" value="2"></td>
                    <td class="text-center"><input type="radio" name="5c" id="radio5cc" value="3"></td>
                    <td class="text-center"><input type="radio" name="5c" id="radio5cd" value="4"></td>
                    <td class="text-center"><input type="radio" name="5c" id="radio5ce" value="5"></td>
                  </tr>
                  <tr>
                    <td>d. Is able to arrive to work on time. <br></td>
                    <td class="text-center"><input type="radio" name="5d" id="radio5da" value="1" required></td>
                    <td class="text-center"><input type="radio" name="5d" id="radio5db" value="2"></td>
                    <td class="text-center"><input type="radio" name="5d" id="radio5dc" value="3"></td>
                    <td class="text-center"><input type="radio" name="5d" id="radio5dd" value="4"></td>
                    <td class="text-center"><input type="radio" name="5d" id="radio5de" value="5"></td>
                  </tr>
                  <tr>
                    <td>e. Completes work in a thorough manner. <br></td>
                    <td class="text-center"><input type="radio" name="5e" id="radio5ea" value="1" required></td>
                    <td class="text-center"><input type="radio" name="5e" id="radio5eb" value="2"></td>
                    <td class="text-center"><input type="radio" name="5e" id="radio5ec" value="3"></td>
                    <td class="text-center"><input type="radio" name="5e" id="radio5ed" value="4"></td>
                    <td class="text-center"><input type="radio" name="5e" id="radio5ee" value="5"></td>
                  </tr>
                  <tr>
                    <td>f. Is able to meet identified standard when performing a job. <br></td>
                    <td class="text-center"><input type="radio" name="5f" id="radio5fa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="5f" id="radio5fb" value="2"></td>
                    <td class="text-center"><input type="radio" name="5f" id="radio5fc" value="3"></td>
                    <td class="text-center"><input type="radio" name="5f" id="radio5fd" value="4"></td>
                    <td class="text-center"><input type="radio" name="5f" id="radio5fe" value="5"></td>
                  </tr>
                  <tr>
                    <td>g. Usually sets priorities. <br></td>
                    <td class="text-center"><input type="radio" name="5g" id="radio5ga" value="1" required></td>
                    <td class="text-center"><input type="radio" name="5g" id="radio5gb" value="2"></td>
                    <td class="text-center"><input type="radio" name="5g" id="radio5gc" value="3"></td>
                    <td class="text-center"><input type="radio" name="5g" id="radio5gd" value="4"></td>
                    <td class="text-center"><input type="radio" name="5g" id="radio5ge" value="5"></td>
                  </tr>
                  <tr></tr>
                  <tr></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="table-responsive" style="opacity: 1;">
              <table class="table">
                <thead class="text-light">
                  <tr>
                    <th style="width: 389px;"></th>
                    <th class="text-center" style="width: 100px;">Very Poor</th>
                    <th class="text-center" style="width: 100px;">Poor</th>
                    <th class="text-center" style="width: 100px;">Average</th>
                    <th class="text-center" style="width: 100px;">Good</th>
                    <th class="text-center" style="width: 100px;">Excellent</th>
                  </tr>
                </thead>
                <tbody class="text-light">
                  <tr>
                    <td><strong>6. Leadership skills</strong><br></td>
                  </tr>
                  <tr>
                    <td>a. Gives direction and guidance to others. <br></td>
                    <td class="text-center"><input type="radio" name="6a" id="radio6aa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="6a" id="radio6ab" value="2"></td>
                    <td class="text-center"><input type="radio" name="6a" id="radio6ac" value="3"></td>
                    <td class="text-center"><input type="radio" name="6a" id="radio6ad" value="4"></td>
                    <td class="text-center"><input type="radio" name="6a" id="radio6ae" value="5"></td>
                  </tr>
                  <tr>
                    <td>b. Has the ability to lead people.<br></td>
                    <td class="text-center"><input type="radio" name="6b" id="radio6ba" value="1" required></td>
                    <td class="text-center"><input type="radio" name="6b" id="radio6bb" value="2"></td>
                    <td class="text-center"><input type="radio" name="6b" id="radio6bc" value="3"></td>
                    <td class="text-center"><input type="radio" name="6b" id="radio6bd" value="4"></td>
                    <td class="text-center"><input type="radio" name="6b" id="radio6be" value="5"></td>
                  </tr>
                  <tr>
                    <td>c. Is able to delegate work to peers. <br></td>
                    <td class="text-center"><input type="radio" name="6c" id="radio6ca" value="1" required></td>
                    <td class="text-center"><input type="radio" name="6c" id="radio6cb" value="2"></td>
                    <td class="text-center"><input type="radio" name="6c" id="radio6cc" value="3"></td>
                    <td class="text-center"><input type="radio" name="6c" id="radio6cd" value="4"></td>
                    <td class="text-center"><input type="radio" name="6c" id="radio6ce" value="5"></td>
                  </tr>
                  <tr>
                    <td>d. Is able to motivate others to work for a common goal. <br></td>
                    <td class="text-center"><input type="radio" name="6d" id="radio6da" value="1" required></td>
                    <td class="text-center"><input type="radio" name="6d" id="radio6db" value="2"></td>
                    <td class="text-center"><input type="radio" name="6d" id="radio6dc" value="3"></td>
                    <td class="text-center"><input type="radio" name="6d" id="radio6dd" value="4"></td>
                    <td class="text-center"><input type="radio" name="6d" id="radio6de" value="5"></td>
                  </tr>
                  <tr>
                    <td>e. Is willing to take ownership and responsibility for the job. <br></td>
                    <td class="text-center"><input type="radio" name="6e" id="radio6ea" value="1" required></td>
                    <td class="text-center"><input type="radio" name="6e" id="radio6eb" value="2"></td>
                    <td class="text-center"><input type="radio" name="6e" id="radio6ec" value="3"></td>
                    <td class="text-center"><input type="radio" name="6e" id="radio6ed" value="4"></td>
                    <td class="text-center"><input type="radio" name="6e" id="radio6ee" value="5"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="table-responsive" style="opacity: 1;">
              <table class="table">
                <thead class="text-light">
                  <tr>
                    <th style="width: 389px;"></th>
                    <th class="text-center" style="width: 100px;">Very Poor</th>
                    <th class="text-center" style="width: 100px;">Poor</th>
                    <th class="text-center" style="width: 100px;">Average</th>
                    <th class="text-center" style="width: 100px;">Good</th>
                    <th class="text-center" style="width: 100px;">Excellent</th>
                  </tr>
                </thead>
                <tbody class="text-light">
                  <tr>
                    <td><strong>7. Communication skills</strong><br></td>
                  </tr>
                  <tr>
                    <td>a. Makes effective presentations. <br></td>
                    <td class="text-center"><input type="radio" name="7a" id="radio7aa" value="1" required></td>
                    <td class="text-center"><input type="radio" name="7a" id="radio7ab" value="2"></td>
                    <td class="text-center"><input type="radio" name="7a" id="radio7ac" value="3"></td>
                    <td class="text-center"><input type="radio" name="7a" id="radio7ad" value="4"></td>
                    <td class="text-center"><input type="radio" name="7a" id="radio7ae" value="5"></td>
                  </tr>
                  <tr>
                    <td>b. Is able to put up a good logical argument to persuade others. <br></td>
                    <td class="text-center"><input type="radio" name="7b" id="radio7ba" value="1" required></td>
                    <td class="text-center"><input type="radio" name="7b" id="radio7bb" value="2"></td>
                    <td class="text-center"><input type="radio" name="7b" id="radio7bc" value="3"></td>
                    <td class="text-center"><input type="radio" name="7b" id="radio7bd" value="4"></td>
                    <td class="text-center"><input type="radio" name="7b" id="radio7be" value="5"></td>
                  </tr>
                  <tr>
                    <td>c. Is able to express ideas verbally, one to one or to groups. <br></td>
                    <td class="text-center"><input type="radio" name="7c" id="radio7ca" value="1" required></td>
                    <td class="text-center"><input type="radio" name="7c" id="radio7cb" value="2"></td>
                    <td class="text-center"><input type="radio" name="7c" id="radio7cc" value="3"></td>
                    <td class="text-center"><input type="radio" name="7c" id="radio7cd" value="4"></td>
                    <td class="text-center"><input type="radio" name="7c" id="radio7ce" value="5"></td>
                  </tr>
                  <tr></tr>
                  <tr></tr>
                  <tr></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center my-3">
            <input type="submit" class="btn btn-primary w-25" value="Submit" name="submit">
          </div>
        </div>
        <?php $fn->saveAns('softSkills'); ?>
      </div>
    </div>
  </form>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <!-- <script src="../includes/assets/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="../includes/assets/cdnjs/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="../includes/assets/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  
</body>

</html>