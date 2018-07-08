<?php
require_once('../includes/dash_functions.php');
ini_set('display_errors', 1);
	//get signup action
	if ($_GET['action']=="signup") {
		# code...
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
			$roleid=$_POST['roleid'];
		$hash=password_hash($password, PASSWORD_DEFAULT);
		//querydb("INSERT INTO users (username,email,hashpassword,date)VALUES('$username','$email','$hash')");
		$date=date('Y-m-d');
			$exec->addUsers($username,$email,$hash,$date);
			$lastid=lastid();
			echo $lastid;
			echo "<br >";
			echo $roleid;
			$exec->addUserRole($lastid,$roleid);
		header("Location: ../app/access/index.php");
	}elseif($_GET['action']=="signin") {
		$email=$_POST['email'];
		$password=$_POST['password'];
		echo $email;
		echo $password;
		$hash=password_hash($password, PASSWORD_DEFAULT);
		$u=querydb("SELECT email,username,id,hashpassword from users where email='$email' ");
		$isPasswordCorrect = password_verify($password, $hash);
		$userq=mysqli_fetch_array($u,MYSQLI_ASSOC);
		$uid=$userq['id'];
		$no=numquery("SELECT email,username,id,hashpassword from users where email='$email'");
		$role=processquery("SELECT roleid from user_role where userid='$uid' ");
		$roleid=$role['roleid'];
		if ($no>=1 && $isPasswordCorrect && $roleid=="1" ) {
		session_start();
		$_SESSION['user']=$userq['username'];
		$_SESSION['loggedin']="TRUE";
		header("Location: ../app/freelancer/index.php");			
		
		}elseif ($no>=1 && $isPasswordCorrect && $roleid=="2" ) {
		session_start();
		$_SESSION['user']=$userq['username'];
		$_SESSION['loggedin']="TRUE";
		header("Location: ../app/customer/index.php");			
		}
		elseif ($no<1) {
		//session_start();
			$_SESSION['loggedin']=FALSE;
			header("Location: ../access/index.php");
	}
}elseif ($_GET['action']=="adduser") {
			$username=$_POST['username'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$roleid=$_POST['roles'];
			$date=date('Y-m-d');
			$exec->addUsers($username,$email,$password,$date);
			$lastid=lastid();
			$exec->addUserRole($lastid,$roleid);
			header("Location: ../admin/view_users.php");			
			//SEND MAIL 
			$subject  = 'Activating FaceTwitGram';
			$message  = 'Hi '. $name.' Activate your FaceTwitGram account by clicking on this link. http://localhost/cmdb/access/setup_password.php';
			$headers  = 'From: adamayaapparell@gmail.com' . "\r\n" .
			            'MIME-Version: 1.0' . "\r\n" .
			            'Content-type: text/html; charset=utf-8';
			if(mail($email, $subject, $message, $headers))
			    echo "Email sent";
			else
			    echo "Email sending failed";
		}

elseif ($_GET['action']=="setuppassword") {
		# code...
		$password=$_POST['password'];
		$hash=password_hash($password, PASSWORD_DEFAULT);
		querydb("INSERT INTO users (hashpassword)VALUES('$hash')");
		header("Location: ../access/index.php");
	}	

	