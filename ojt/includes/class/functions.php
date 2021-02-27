<?php 
session_start();

class functions
{	
	private $min_population;

	function __construct()
	{
		/*check database connection*/
		try {
			$pdo = new PDO("mysql:host=localhost;dbname=ojt;",'root','');
		} catch (Exception $e) {
			echo $e->getMessage();
			header("location: admin/404.php");
		}
	}

	public function connection()
	{
		$pdo = new PDO("mysql:host=localhost;dbname=ojt;",'root','');
		return $pdo;
	}

	public function session_close()
	{
		if (empty($_SESSION['user'])) {
			header("location: ../login.php");
		}
	}

	public function login_fn()
	{
		if (isset($_POST['login'])) {
			$username = stripcslashes($_POST['username']);
			$password = stripcslashes($_POST['password']);

			$sql = $this->connection()->prepare("SELECT * FROM users");
			$sql->execute();

			while ($col = $sql->fetch(PDO::FETCH_ASSOC)) {

				$sql = $this->connection()->prepare("SELECT * FROM users where username=?");
				$sql->execute([$username]);

				if ($sql->rowCount() > 0) {
					while ($col = $sql->fetch(PDO::FETCH_ASSOC)) {
						if (md5($password) == $col['password']) {
							$_SESSION['user'] = $username;
							$_SESSION['id'] = $col['user_id'];
							if ($col['level'] == 2){
								$sql = $this->connection()->prepare("SELECT * FROM user_info where user_id=?");
								$sql->execute([$_SESSION['id']]);
								if ($sql->rowCount() > 0){
									$_SESSION['status'] = 'Done';
								}
								header("location: student/index.php");
							}
							else{
								header("location: admin/index.php");
							}
						}else{
							echo "<script>alert('Wrong password')</script>";		
						}
					}
				}else{
					echo "<script>alert('Wrong username')</script>";
				}
			}
		}
	}

	//registration
	public function register(){
		$register = false;

		if(isset($_POST['register'])){
			$check_sql = $this->connection()->prepare("SELECT * FROM user_info");
			$check_sql->execute();

			$fname = stripcslashes($_POST['fname']);
			$mname = stripcslashes($_POST['mname']);
			$lname = stripcslashes($_POST['lname']);
			$course = stripcslashes($_POST['course']);
			$academic = stripcslashes($_POST['academic']);
			$user = stripcslashes($_POST['user']);
			$pass = stripcslashes($_POST['pass']);
			$repass = stripcslashes($_POST['repass']);
			$gender = stripcslashes($_POST['gender']);
			//check if null input
			if ($fname == '' OR $lname == '' OR $course == '' OR $user == '' OR $pass == '' OR $repass == '' OR $gender == '' )
			{
				echo "<script>alert('All fields are required!')</script>";
			}
			else
			{
				//check if already registered
				if ($check_sql->rowCount() > 0) {
					while ($col = $check_sql->fetch(PDO::FETCH_ASSOC)) {
						if ($fname == $col['fname'] AND $lname == $col['lname'] AND $gender == $col['gender']){
							$register = true;
						}
					}
				}

				if ($register) {
					echo "<script>alert('User already exits!')</script>";
				}
				else{
					if(!ctype_alpha(str_replace(' ', '', $fname)))
					{
					  echo "<script>alert('Please do not use numbers or special characters on your name!')</script>";
					}
					else if(!ctype_alpha(str_replace(' ', '', $lname)))
					{
					  echo "<script>alert('Please do not use numbers or special characters on your name!')</script>";
					}
					else if(@$password != @$cpassword)
					{
					 echo "<script>alert('Passwords does not match!')</script>"; 
					}
					else
					{	
						$sql_getUserData = $this->connection()->prepare("SELECT * FROM users where username=?");
						$sql_getUserData->execute([$user]);

						if ($sql_getUserData->rowCount() == 0){
							$sql_addUser = $this->connection()->prepare("INSERT INTO users (username, password, level, date_created) values (?,?,?,curdate())");
							$sql_addUser->execute([$user, md5($pass), 2]);
							
							/**/
							$sql_getUserData = $this->connection()->prepare("SELECT * FROM users where username=?");
							$sql_getUserData->execute([$user]);

							$col_userID = $sql_getUserData->fetch(PDO::FETCH_ASSOC);
							$user_id = $col_userID['user_id'];

							$sql_addUserInfo = $this->connection()->prepare("INSERT INTO user_info (user_id, fname, mname, lname, course, gender, academic_year, date_created) VALUES (?,?,?,?,?,?,?,curdate())");
							
							if($sql_addUserInfo->execute([$user_id, $fname, $mname, $lname, $course, $gender, $academic])){
								echo "<script>alert('Account successfully created! Login?');window.location.replace('login.php')</script>";
							}
							else {echo '<script>alert("Failed");</script>';}
						}
						else{
							echo "<script>alert('Username already exist.')</script>";
						}	
					}
				}
			}
		}
	}

	public function checkStat($user)
	{
		$user_id = $this->getUserID($user);
		$sql = $this->connection()->prepare("SELECT status FROM user_info where user_id=?");
		$sql->execute([$user_id]);
		$col = $sql->fetch(PDO::FETCH_ASSOC);

		return $col['status'];
	}

	//get value from checkbox
	public function getValues($tagName)
	{
		//check if checkbox is checked
		if (isset($_POST[$tagName])) 
		{
		    $value = $_POST[$tagName];
		}
		else 
		{ 
		    $value = 'd';
		}
		return $value;
	}

    //get the score from each soft skills points
    public function score()
    {
	  	$numargs = func_num_args();
	  	$average = 0;
	  	$ave_score = 0;
	  
	  	$arg_list = func_get_args();
	    for ($i = 0; $i < $numargs; $i++) 
	    {
	    	$ave_score += ((double)$_POST[$arg_list[$i]] / 5);
	    	$average += (float)$_POST[$arg_list[$i]];
	    }
	  	return array(round(($average / $numargs), 1), round(($ave_score / $numargs), 2));
	}

	public function getPopulation($course,$gender)
	{
        $sql = $this->connection()->prepare("SELECT COUNT(user_info.course) as total FROM users INNER JOIN user_info ON users.user_id = user_info.user_id WHERE user_info.course = ? AND user_info.gender = ? AND user_info.status = 'Done'");
        $sql->execute([$course,$gender]);
        $col = $sql->fetch(PDO::FETCH_ASSOC);
        return $col['total'];
	}

	/*survey*/
	public function getScore($answers, $keyTocorrection)
	{
		$correctCount = 0;
		for ($i=0; $i < sizeof($keyTocorrection); $i++) 
		{ 
			if (strtolower($answers[$i]) === strtolower($keyTocorrection[$i])) 
			{
				$correctCount += 1;
			}
		}
		return $correctCount;
	}

	public function saveAns($survey)
	{
		$user = $_SESSION['user'];
		$user_id = $this->getUserID($user);

		if (isset($_POST['next_page']))
		{  
			$databaseKey = ['c', 'b', 'b', 'b', 'a', 'a', 'c', 'b', 'c', 'c'];
			$webdevKey = ['a', 'c', 'c', 'a', 'a', 'a', 'b', 'b', 'a', 'a'];
			$progKey = ['c', 'a', 'b', 'b', 'c', 'c', 'c', 'b', 'b', 'c'];
			$surveyName = '';
			$next = '';

			$q1 = $this->getValues('q1');
			$q2 = $this->getValues('q2');
			$q3 = $this->getValues('q3');
			$q4 = $this->getValues('q4');
			$q5 = $this->getValues('q5');
			$q6 = $this->getValues('q6');
			$q7 = $this->getValues('q7');
			$q8 = $this->getValues('q8');
			$q9 = $this->getValues('q9');
			$q10 = $this->getValues('q10');

			$userAnswer = array($q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10);
		
			if ($survey === 'databaseManagement') 
			{
				$dbscores = $this->getScore($userAnswer, $databaseKey);

				$sql = $this->connection()->prepare("INSERT INTO answer_technical_skills (user_id, databaseSkills) values (?,?)");
				$sql->execute([$user_id, $dbscores]);
				$surveyName = 'survey_1';
				$next = 'survey_2.php';
			}
			else if ($survey === 'webDev') 
			{
				$webscores = $this->getScore($userAnswer, $webdevKey);

				$sql = $this->connection()->prepare("UPDATE answer_technical_skills set webDevelopmentSkills = ? WHERE user_id = ?");
				$sql->execute([$webscores, $user_id]);

				$surveyName = 'survey_2';
				$next = 'survey_3.php';
			}
			else
			{
				$progscores = $this->getScore($userAnswer, $progKey);

				$sql = $this->connection()->prepare("UPDATE answer_technical_skills set programmingSkills = ? WHERE user_id = ?");
				$sql->execute([$progscores, $user_id]);

				$surveyName = 'survey_3';
				$next = 'survey2.php';
			}
			

			$sql = $this->connection()->prepare("UPDATE user_info set status = ? WHERE user_id = ?");
			if ($sql->execute([$surveyName, $user_id]))
			{
				echo "<script>alert('Proceed to next set of questionnaire!');window.location.replace('".$next."')</script>";
			}
		}
		else if (isset($_POST['submit']))
		{
			$problem = $this->score('1a', '1b', '1c','1d','1e','1f','1g','1h','1i','1j','1k','1l','1m','1n','1o','1p','1q','1r','1s');
			$inter = $this->score('2a', '2b', '2c','2d','2e','2f','2g','2h','2i','2j');
			$english = $this->score('3a', '3b', '3c', '3d', '3e' , '3f');
			$ict = $this->score('4a', '4b', '4c', '4d', '4e');
			$org = $this->score('5a', '5b', '5c', '5d', '5e', '5f', '5g');
			$lead = $this->score('6a', '6b', '6c', '6d', '6e');
			$comm = $this->score('7a', '7b', '7c');

			//save to database soft skills for graph visualization
			$sql = $this->connection()->prepare("INSERT INTO soft_skills_graph_data (user_id, prbGraph, interpersonalGraph, engGraph, ICTGraph, orgGraph, leadGraph, commGraph) values (?,?,?,?,?,?,?,?)");
			$sql->execute([$user_id, $problem[0], $inter[0], $english[0], $ict[0], $org[0], $lead[0], $comm[0]]);

			//save to database soft skills for computation of percentage
			$sql = $this->connection()->prepare("INSERT INTO answer_soft_skills (user_id, Problem, Interpersonal, English, ICT, Personal_Org, Leadership, Communication) values (?,?,?,?,?,?,?,?)");
			$sql->execute([$user_id, $problem[1], $inter[1], $english[1], $ict[1], $org[1], $lead[1], $comm[1]]);
			
			$sql = $this->connection()->prepare("UPDATE user_info set status = 'Done' WHERE user_id = ?");
			if ($sql->execute([$user_id])){
				echo "<script>alert('Thank you for your cooperation!');window.location.replace('index.php')</script>";
			}
		}
	}

	/**/
	public function technicalSkillsScore()
	{
		$user = $_SESSION['user'];
		$user_id = $this->getUserID($user);
		$fontColordb = 'green';
		$fontColorweb = 'green';
		$fontColorprog = 'green';

		$sql = $this->connection()->prepare("SELECT databaseSkills, webDevelopmentSkills, programmingSkills FROM answer_technical_skills WHERE user_id = ?");
		$sql->execute([$user_id]);

		if ($sql->rowCount() > 0) 
		{
			$col = $sql->fetch(PDO::FETCH_ASSOC);

			$db = (int)$col['databaseSkills'];
			$web = (int)$col['webDevelopmentSkills'];
			$prog = (int)$col['programmingSkills'];
			
			if ($db < 5) 
			{
				$fontColordb = 'red';
			}
			if ($web < 5) 
			{
				$fontColorweb = 'red';
			}
			if ($prog < 5) 
			{
				$fontColorprog = 'red';
			}

			echo '
				<p class="h5">Technical Skills Assessment (10 questions each):</p>
				<ul>
					<li>Database Management: &nbsp;'.$db.'/10&nbsp;&nbsp;&nbsp;<span style="color:'.$fontColordb.';">'.$this->equivalent($db, 'technicalSkills').'</span></li>
					<li>Web Development: &nbsp;'.$web.'/10&nbsp;&nbsp;&nbsp;<span style="color:'.$fontColorweb.';">'.$this->equivalent($web, 'technicalSkills').'</span></li>
					<li>Programming: &nbsp;'.$prog.'/10&nbsp;&nbsp;&nbsp;<span style="color:'.$fontColorprog.';">'.$this->equivalent($prog, 'technicalSkills').'</span></li>
				</ul>
				';
		}

	}
	//output the employability percentage
	public function empPercent()
	{
		$tablename = 'answer_soft_skills';

		$prb = $this->fetchAns('Problem', $tablename);
		$inter = $this->fetchAns('Interpersonal', $tablename);
		$eng = $this->fetchAns('English', $tablename);
		$ict = $this->fetchAns('ICT', $tablename);
		$org = $this->fetchAns('Personal_Org', $tablename);
		$lead = $this->fetchAns('Leadership', $tablename);
		$comm = $this->fetchAns('Communication', $tablename);
		
		$emp_soft_array = array($prb, $inter, $eng, $ict, $org, $lead, $comm);
		/*
		* employability percentage
		* emp = (((answer1_1/5)+(anwer1_2/5)+...(answer10_1/5))/(number_of_question)) * 100
		*/
		$emp_percent = (array_sum($emp_soft_array) / sizeof($emp_soft_array)) * 100;
		return 'Employability Percentage : '.round($emp_percent).' %';
	}

	//get the current user's ID
	public function getUserID($user)
	{
		$sql = $this->connection()->prepare("SELECT * FROM users where username=?");
		$sql->execute([$user]);
		$col = $sql->fetch(PDO::FETCH_ASSOC);
		return $col['user_id'];
	}

	public function fetchAns($skill, $tableName)
	{
		$user = $_SESSION['user'];
		$user_id = $this->getUserID($user);

		$sql = $this->connection()->prepare("SELECT * FROM $tableName WHERE user_id = ?");
		$sql->execute([$user_id]);
		$col = $sql->fetch(PDO::FETCH_ASSOC);
		if ($sql->rowCount() > 0) {
			$result = $col[$skill];
		}
		else{ $result = 0; }

		return $result;
	}

	//Data output for graph
	public function equivalent($score, $mode)
	{
		if ($mode === 'technicalSkills') 
		{
			if ($score > 4) 
			{
				$eq = 'PASSED';
			}
			else
			{
				$eq = 'FAILED';
			}
		}
		else
		{
			if ($score < 1.5 AND $score > 0) { $eq = 'Very Poor'; }
			elseif ($score < 2.5 AND $score > 1.4) { $eq = 'Poor'; }
			elseif ($score < 3.5 AND $score > 2.4) { $eq = 'Fair'; }
			elseif ($score < 4.5 AND $score >3.4) { $eq = 'Good'; }
			elseif ($score < 5.5 AND $score >4.4) { $eq = 'Excellent'; }
			else{ $eq = 'None'; }
		}
		
		return $eq;
	}

	public function getSoftSkillScore($mode)
	{
		$tablename = 'soft_skills_graph_data';

		$prbScore = round($this->fetchAns('prbGraph', $tablename), 2);
		$interScore = round($this->fetchAns('interpersonalGraph', $tablename), 2);
		$engScore = round($this->fetchAns('engGraph', $tablename), 2);
		$ictScore = round($this->fetchAns('ICTGraph', $tablename), 2);
		$orgScore = round($this->fetchAns('orgGraph', $tablename), 2);
		$leadScore = round($this->fetchAns('leadGraph', $tablename), 2);
		$commScore = round($this->fetchAns('commGraph', $tablename), 2);

		$skillsScoreArray = array($prbScore, $interScore, $engScore, $ictScore, $orgScore, $leadScore, $commScore);

		if ($mode == 'graph') 
		{
			return $prbScore.", ".
				$interScore.", ".
				$engScore.", ".
				$ictScore.", ".
				$orgScore.", ".
				$leadScore.", ".
				$commScore;
		}
		else
		{
			$equi_array = array();

			$poorValue = ' and in need of improvement for you to get employed';
			$goodValue = ', enhance it more to boost your career in the future';
			$excellentValue = ', focus on your other employability skills that in need of improvement';

			/*$prb = $this->equivalent($prbScore, 'softSkills');
			$inter = $this->equivalent($interScore, 'softSkills');
			$eng = $this->equivalent($engScore, 'softSkills');
			$ict = $this->equivalent($ictScore, 'softSkills');
			$org = $this->equivalent($orgScore, 'softSkills');
			$lead = $this->equivalent($leadScore, 'softSkills');
			$comm = $this->equivalent($commScore, 'softSkills');*/

			for ($i=0; $i < sizeof($skillsScoreArray); $i++) 
			{ 
				if ($skillsScoreArray[$i] > 4.4 && $skillsScoreArray[$i] <= 5) 
				{
					array_push($equi_array, $excellentValue);
				}
				else if ($skillsScoreArray[$i] > 2.4 && $skillsScoreArray[$i] < 4.5) 
				{
					array_push($equi_array, $goodValue);
				}
				else
				{
					array_push($equi_array, $poorValue);
				}
			}

			return "<p><b>Employability Assessment:</b></p>
				<ul>
					 <li>Problem solving and Adaptability skills got a score of ".$prbScore."<i><b>".$equi_array[0]."</b></i>.</li>
					 <li>Interpersonal skills got a score of ".$interScore."<i><b>".$equi_array[1]."</b></i>.</li>
					 <li>English Language Proficiency and Literacy skills got a score of ".$engScore."<i><b>".$equi_array[2]."</b></i>.</li>
					 <li>ICT skills got a score of ".$ictScore."<i><b>".$equi_array[3]."</b></i>.</li>
					 <li>Personal organization and Time management skills got a score of ".$orgScore."<i><b>".$equi_array[4]."</b></i>.</li>
					 <li>Leadership skills got a score of ".$leadScore."<i><b>".$equi_array[5]."</b></i>.</li>
					 <li>Communication skills got a score of ".$commScore."<i><b>".$equi_array[6]."</b></i>.</li>
				</ul>";
		}
		
	}
	/*
	* get the weighted mean
	* weightedMean($numOptin, $columnName, $param1, $aparamN)
	* $arg_list[0] = number of option (likert scale) 
	* $arg_list[1] = column name 
	* $arg_list[2] = gender or course
	* $arg_list[3] = gender
	*/
	public function weightedAverage()
	{
		$value = 0;
		$population = 0;
		//get the number of parameter
		$numargs = func_num_args();
		//get all the parameter and make it an array
	  	$arg_list = func_get_args();
	  	//create an array of size N with value of zero || array(0,0,0,0...)
	  	$response_count = array_fill(0, $arg_list[0], 0);

	  	$column_name = $arg_list[1];
	  	$sql = $this->connection()->prepare("SELECT $column_name FROM users INNER JOIN user_info ON users.user_id = user_info.user_id INNER JOIN soft_skills_graph_data ON soft_skills_graph_data.user_id = user_info.user_id WHERE user_info.course = ? AND user_info.gender= ? AND user_info.status = 'Done'");
		$sql->execute([$arg_list[2], $arg_list[3]]);
	  	$data = $sql->fetchAll(PDO::FETCH_NUM);
	  	/*
	  	* count all the similar value in the record
	  	* example: how many got a score of 4 in each skills
	  	*/
	  	if ($sql->rowCount() > 0 AND isset($this->min_population)) 
	  	{
	  		for ($i=0; $i < sizeof($data[0]); $i++) 
	  		{
		  		for ($j=0; $j < $this->min_population; $j++) 
		  		{ 
		  			for ($k=0; $k < $arg_list[0]; $k++) 
		  			{ 
						if ($data[$j][$i] > ($k + 0.4) AND $data[$j][$i] < ($k + 1.5)) 
						{
							$response_count[$k] += 1;
						}
		  			}
		  		}
		  	}
		  	//sum up
			for ($j=1; $j <= $arg_list[0]; $j++) 
			{ 
				$value += $j * $response_count[$j - 1];
			}
			//get the weighted average
			$wa = round($value / $this->min_population,2);
	  	}
	  	else
	  	{
	  		$wa = 0;
	  	}
	  	$output = array($wa, $this->min_population);

		return $output;
	}
	
	public function adminPage($option, $view, $cat)
	{
		$param_3a = 'BSCS'; 
		$param_3b = 'BSIT'; 
		$param_4a = 'Male'; 
		$param_4b = 'Female';

		$bscs_male = $this->getPopulation($param_3a,$param_4a);
		$bscs_female = $this->getPopulation($param_3a,$param_4b);
		$bsit_male = $this->getPopulation($param_3b,$param_4a);
		$bsit_female = $this->getPopulation($param_3b,$param_4b);

		$current_population = $bscs_male;
		$popultion_array = array($bscs_male, $bscs_female, $bsit_male, $bsit_female);

		for ($i=0; $i < 4; $i++) 
		{ 
			if ($popultion_array[$i] < $current_population) 
			{
				$current_population = $popultion_array[$i];
			}
		}

		if ($current_population > 0) 
		{
			$this->min_population = $current_population;
		}
		else { $this->min_population = 1; }

		//BSCS Male
		$prb = $this->weightedAverage(5, 'prbGraph', $param_3a, $param_4a);
		$inter = $this->weightedAverage(5, 'interpersonalGraph', $param_3a, $param_4a);
		$eng = $this->weightedAverage(5, 'engGraph', $param_3a, $param_4a);
		$ict = $this->weightedAverage(5, 'ICTGraph', $param_3a, $param_4a);
		$org = $this->weightedAverage(5, 'orgGraph', $param_3a, $param_4a);
		$lead = $this->weightedAverage(5, 'leadGraph', $param_3a, $param_4a);
		$comm = $this->weightedAverage(5, 'commGraph', $param_3a, $param_4a); 
		//BSIT Male
		$prbit = $this->weightedAverage(5, 'prbGraph', $param_3b, $param_4a);
		$interit = $this->weightedAverage(5, 'interpersonalGraph', $param_3b, $param_4a);
		$engit = $this->weightedAverage(5, 'engGraph', $param_3b, $param_4a);
		$ictit = $this->weightedAverage(5, 'ICTGraph', $param_3b, $param_4a);
		$orgit = $this->weightedAverage(5, 'orgGraph', $param_3b, $param_4a);
		$leadit = $this->weightedAverage(5, 'leadGraph', $param_3b, $param_4a);
		$commit = $this->weightedAverage(5, 'commGraph', $param_3b, $param_4a);
		//BSCS Female 
		$prbf = $this->weightedAverage(5, 'prbGraph', $param_3a, $param_4b);
		$interf = $this->weightedAverage(5, 'interpersonalGraph', $param_3a, $param_4b);
		$engf = $this->weightedAverage(5, 'engGraph', $param_3a, $param_4b);
		$ictf = $this->weightedAverage(5, 'ICTGraph', $param_3a, $param_4b);
		$orgf = $this->weightedAverage(5, 'orgGraph', $param_3a, $param_4b);
		$leadf = $this->weightedAverage(5, 'leadGraph', $param_3a, $param_4b);
		$commf = $this->weightedAverage(5, 'commGraph', $param_3a, $param_4b);
		//BSIT Female
		$prbfit = $this->weightedAverage(5, 'prbGraph', $param_3b, $param_4b);
		$interfit = $this->weightedAverage(5, 'interpersonalGraph', $param_3b, $param_4b);
		$engfit = $this->weightedAverage(5, 'engGraph', $param_3b, $param_4b);
		$ictfit = $this->weightedAverage(5, 'ICTGraph', $param_3b, $param_4b);
		$orgfit = $this->weightedAverage(5, 'orgGraph', $param_3b, $param_4b);
		$leadfit = $this->weightedAverage(5, 'leadGraph', $param_3b, $param_4b);
		$commfit = $this->weightedAverage(5, 'commGraph', $param_3b, $param_4b);

		$male_all = (int)$prb[1] + (int)$prbit[1];
		$female_all = (int)$prbf[1] + (int)$prbfit[1];

		if ($view == 'graph') 
		{
			if ($option == 1 AND $cat == 'm') 
			{
				echo "$prb[0], $prbit[0], $inter[0], $interit[0], $eng[0], $engit[0], $ict[0], $ictit[0], $org[0], $orgit[0], $lead[0], $leadit[0], $comm[0], $commit[0]";
			}
			else
			{
				echo "$prbf[0], $prbfit[0], $interf[0], $interfit[0], $engf[0], $engfit[0], $ictf[0], $ictfit[0], $orgf[0], $orgfit[0], $leadf[0], $leadfit[0], $commf[0], $commfit[0]";
			}
		}
		else
		{
			echo "<table class='table table-bordered text-center table-condensed'>
	                        <thead class='table-dark'>
	                          <tr>
	                            <th colspan='2'>Employability Skills</th>
	                            <th>Male</th>
	                            <th>Female</th>
	                        </tr>
	                        </thead>
	                        <tbody>
	                          <tr class='bg-secondary text-white'>
	                            <td colspan='4' class='text-left'>Problem Solving and Adaptability</td>
	                          </tr>
	                          <tr>
	                          	<td colspan='2'>BSCS</td>
	                          	<td>$prb[0]</td>
	                          	<td>$prbf[0]</td>
	                          </tr>
	                          <tr>
	                          	<td colspan='2'>BSIT</td>
	                          	<td>$prbit[0]</td>
	                          	<td>$prbfit[0]</td>
	                          </tr>

	                          <tr class='bg-secondary text-white'>
	                            <td colspan='4' class='text-left'>Interpersonal</td>
	                          </tr>
	                          <tr>
	                          	<td colspan='2'>BSCS</td>
	                          	<td>$inter[0]</td>
	                            <td>$interf[0]</td>
	                          </tr>
	                          <tr>
	                          	<td colspan='2'>BSIT</td>
	                          	<td>$interit[0]</td>
	                            <td>$interfit[0]</td>
	                          </tr>

	                          <tr class='bg-secondary text-white'>
	                            <td colspan='4' class='text-left'>English Language Proficiency and Literacy</td>
	                          </tr>
	                          <tr>
	                          	<td colspan='2'>BSCS</td>
	                          	<td>$eng[0]</td>
	                            <td>$engf[0]</td>
	                          </tr>
	                          <tr>
	                          	<td colspan='2'>BSIT</td>
	                          	<td>$engit[0]</td>
	                            <td>$engfit[0]</td>
	                          </tr>

	                          <tr class='bg-secondary text-white'>
	                            <td colspan='4' class='text-left'>Information and Communication Technology</td>
	                          </tr>
	                          <tr>
	                          	<td colspan='2'>BSCS</td>
	                          	<td>$ict[0]</td>
	                            <td>$ictf[0]</td>
	                          </tr>
	                          <tr>
	                          	<td colspan='2'>BSIT</td>
	                          	<td>$ictit[0]</td>
	                            <td>$ictfit[0]</td>
	                          </tr>

	                          <tr class='bg-secondary text-white'>
	                            <td colspan='4' class='text-left'>Personal Organization and Time Management</td>
	                          </tr>
	                          <tr>
	                          	<td colspan='2'>BSCS</td>
	                          	<td>$org[0]</td>
	                            <td>$orgf[0]</td>
	                          </tr>
	                          <tr>
	                          	<td colspan='2'>BSIT</td>
	                          	<td>$orgit[0]</td>
	                            <td>$orgfit[0]</td>
	                          </tr>

	                          <tr class='bg-secondary text-white'>
	                            <td colspan='4' class='text-left'>Leadership</td>
	                          </tr>
	                          <tr>
	                          	<td colspan='2'>BSCS</td>
	                          	<td>$lead[0]</td>
	                            <td>$leadf[0]</td>
	                          </tr>
	                          <tr>
	                          	<td colspan='2'>BSIT</td>
	                          	<td>$leadit[0]</td>
	                            <td>$leadfit[0]</td>
	                          </tr>

	                          <tr class='bg-secondary text-white'>
	                            <td colspan='4' class='text-left'>Communication</td>
	                          </tr>
	                          <tr>
	                          	<td colspan='2'>BSCS</td>
	                          	<td>$comm[0]</td>
	                            <td>$commf[0]</td>
	                          </tr>
	                          <tr>
	                          	<td colspan='2'>BSIT</td>
	                          	<td>$commit[0]</td>
	                            <td>$commfit[0]</td>
	                          </tr>
	                          <tr>
	                            <td colspan='2' class='text-left table-dark'><strong>Population</strong></td>
	                            <td class='table-dark'>$male_all</td>
	                            <td class='table-dark'>$female_all</td>
	                          </tr>
	                        </tbody>
	                      </table>";
	    }
	}
	

	public function deleteUser($user_id)
	{
		$sql = $this->connection()->prepare("DELETE users.*, user_info.* FROM users INNER JOIN user_info ON users.user_id = user_info.user_id WHERE users.user_id=?");
		if($sql->execute([$user_id]))
		{
			$sql2 = $this->connection()->prepare("DELETE answer_soft_skills.*, answer_technical_skills.* FROM answer_soft_skills INNER JOIN answer_technical_skills ON answer_soft_skills.user_id = answer_technical_skills.user_id WHERE answer_soft_skills.user_id=?");
			if($sql2->execute([$user_id]))
			{
				$sql3 = $this->connection()->prepare("DELETE FROM soft_skills_graph_data WHERE user_id=?");
				if($sql3->execute([$user_id]))
				{
					return true;
				}
			}
		}
	}

	public function displayTable()
	{
		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
			if ($this->deleteUser($id) == true)
			{
				echo "<script>alert('Delete user account?');window.location.replace('users.php')</script>";
			}
			else
			{
				//
			}
		}
		$sql = $this->connection()->prepare("SELECT * FROM users INNER JOIN user_info ON users.user_id = user_info.user_id");
		$sql->execute([]);
		echo '<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0 h-25" id="dataTable1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Gender</th>
                                        <th>Status</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>';

        while($col = $sql->fetch(PDO::FETCH_ASSOC))
        {
        	echo '<tr>';
        	$minitial = substr($col["mname"], 0, 1);
            echo '	<td>'.$col["fname"].' '.$minitial.'. ',$col["lname"].'</td>
                	<td>'.$col["course"].'</td>
                	<td>'.$col["gender"].'</td>
                	<td>'.$col["status"].'</td>
                	<td><button type="button" class="btn btn-warning"><a class="text-white text-decoration-none" href="profile.php?id='.$col["user_id"].'">Edit</a></button></td>
                	<td>
                	<button type="button" class="btn btn-danger">
                		<a class="text-white text-decoration-none" href="users.php?id='.$col["user_id"].'">Delete</a>
                	</button>
                	</td>
            	</tr>';
        }

        echo '					</tbody>
                                <tfoot></tfoot>
                            </table>
                        </div>';
	}

	public function displayTable2($column, $header)
	{
		$sql = $this->connection()->prepare("SELECT DISTINCT $column FROM user_info WHERE $column IS NOT NULL;");
		$sql->execute([]);
		$data = $sql->fetchall(PDO::FETCH_COLUMN);

		echo "
			<table class='table table-bordered text-center table-condensed'>
                <thead class= 'table-dark'>
                	<tr>
                		<th>".$header."</th>
                		<th colspan='2'>Database Management</th>
                		<th colspan='2'>Web Development</th>
                		<th colspan='2'>Programming</th>
                	</tr>
                    <tr>
                        <th></th>
                        <th>Passed</th>
                        <th>Failed</th>
                        <th>Passed</th>
                        <th>Failed</th>
                        <th>Passed</th>
                        <th>Failed</th>
                    </tr>
                </thead>
                <tbody> ";

		if ($sql->rowCount() > 0) 
		{
			$cols = 'user_info.'.$column;
			for ($i=0; $i < sizeof($data); $i++) 
			{ 
				$sql = $this->connection()->prepare("SELECT 
					COUNT(CASE WHEN answer_technical_skills.databaseSkills > 4 THEN 1 END) as dbPass, 
					COUNT(CASE WHEN answer_technical_skills.databaseSkills < 5 THEN 1 END) as dbFailed,
					COUNT(CASE WHEN answer_technical_skills.webDevelopmentSkills > 4 THEN 1 END) as webPass, 
					COUNT(CASE WHEN answer_technical_skills.webDevelopmentSkills < 5 THEN 1 END) as webFailed,
					COUNT(CASE WHEN answer_technical_skills.programmingSkills > 4 THEN 1 END) as progPass, 
					COUNT(CASE WHEN answer_technical_skills.programmingSkills < 5 THEN 1 END) as progFailed FROM answer_technical_skills
					 INNER JOIN user_info ON answer_technical_skills.user_id = user_info.user_id
					  WHERE $cols = '".$data[$i]."'");
				$sql->execute([]);

				$col = $sql->fetch(PDO::FETCH_ASSOC);

				echo "
	                  <tr>
	                    <td>".$data[$i]."</td>
	                    <td>".$col['dbPass']."</td>
	                    <td>".$col['dbFailed']."</td>
	                    <td>".$col['webPass']."</td>
	                    <td>".$col['webFailed']."</td>
	                    <td>".$col['progPass']."</td>
	                    <td>".$col['progFailed']."</td>
	                  </tr>
				";
			}
		}
        echo "
                </tbody>
              </table>
		";
	}
	
	public function update_account()
	{
		if (isset($_POST['UpdatePass'])) 
		{
			$username = stripcslashes($_POST['username']);
			$oldpassword = stripcslashes($_POST['oldpass']);
			$password = stripcslashes($_POST['pass']);
			$cpassword = stripcslashes($_POST['cpass']);
			$oldpass = md5($oldpassword);

			$sql = $this->connection()->prepare("SELECT * FROM users WHERE username=?");
			$sql->execute([$username]);  

			if ($sql->rowCount() > 0) 
			{
				$col = $sql->fetch(PDO::FETCH_ASSOC);
				if($password == $cpassword)
				{
					if ($oldpass == $col['password']) 
					{
						$sql = $this->connection()->prepare("UPDATE users set password = ? WHERE username=?");
						$sql->execute([md5($password),$username]);
						if($col['level'] != 1)
						{
							echo "<script>alert('Account Updated.');window.location.replace('profile.php?id=".$col['user_id']."')</script>";
						}
						else
						{
							echo "<script>alert('Account Updated.');window.location.replace('profile.php?')</script>";	
						}
					}
					else
					{
						echo "<script>alert('Wrong Password ".$col['password']."<br>".$oldpass."')</script>";		
					}
				}
				else
				{
					"<script>alert('Password does not match!')</script>";		
				}
				
			}
			else
			{
				echo "<script>alert('Wrong Username')</script>";
			}

		}
		else if(isset($_POST['UpdateUserInfo']))
		{
			$fname = stripcslashes($_POST['fname']);
			$lname = stripcslashes($_POST['lname']);
			$mname = stripcslashes($_POST['mname']);
			$course = stripcslashes($_POST['course']);
			$gender = stripcslashes($_POST['gender']);

			$sql = $this->connection()->prepare("UPDATE user_info SET fname = ?, lname=?, mname=?, course=?, gender=? WHERE user_id=?");
			$sql->execute([$fname, $lname, $mname, $course, $gender, $_GET['id']]);
			echo "<script>alert('Account Updated.');window.location.replace('profile.php?id=".$_GET['id']."')</script>";

		}
	}
}

$fn = new Functions();

?>