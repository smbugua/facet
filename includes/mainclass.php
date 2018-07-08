<?php
include('auth.php');
/**
* this class will house all functions to run all table inserts ,updates and deletions
*/
class MainClass
{
		//UpdateAnyTable
	function updateTable($table,$var,$input,$id){
		querydb("UPDATE `$table` SET `$var`='$input' WHERE  id = '$id' ");
	}

	//Add Job
	function addJob($rid,$title,$desc,$budget,$date){
		querydb("INSERT into jobs(requesterid,title,description,budget,datecreated)values('$rid','$title','$desc','$budget','$date')");
	}
//Add job platform
	function addJobPlatform($jobid,$platformida){
		querydb("INSERT INTO jobplatform(jobid,platformid)values('$jobid','$platformid')");
	}
	//Add job assignee
	function addJobAssignee($jobid,$assigneeid){
		querydb("INSERT INTO jobassignee(jobid,assigneeid)values('$jobid','$assigneeid')");
	}

//Add job assignee
	function addFreelancerWallet($userid,$walletid,$walletref){
		querydb("INSERT INTO freelancerwallet(userid,walletid,walletref)values('$userid','$walletid','$walletref')");
	}
//add payment mode
	function addPaymentMode($mode){
		querydb("INSERT INTO paymentmodes(mode)VALUES('$mode')");
	}
	
	//add platfrom
	function addplatform($name){
		querydb("INSERT INTO platform(name)VALUES('$name')");
	}

	//add userplatfrom
	function addUserPlatfrom($userid,$platformid,$url,$status){
		querydb("INSERT INTO userplatform(userid,platformid,url,status)values('$userid','$platformid','$url','0')");
	}


	//add users
	function addUsers($username,$email,$password){
		querydb("INSERT INTO users(username,email,hashpassword)VALUES('$name','$username','$email','$password')");
	}


	function addUserRole($userid,$roleid){
		querydb("INSERT INTO user_role(userid,roleid)VALUES('$userid','$roleid')");
	}
	
	function addRole($name){
		querydb("INSERT INTO userrole(name)values('$name')");
	}

	function editObject($action,$id){
		echo("../controllers/updatecontroller.php?action=$action&&id=$id");
	}
	function editClass($object,$id){
		echo ("edit$object.php?id=$id");
	}
	function capturePost(){
		
	}
}