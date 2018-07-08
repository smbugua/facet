<?php
include('mainclass.php');
$exec=new mainclass();

function get_users(){
$count_nodes=processquery("SELECT count(*) as c from users");
$result=$count_nodes['c'];
return $result;	
}

function get_jobs_assigned($userid){
$count_jobs=processquery("SELECT count(*) as c from jobassignee where assigneeid='$userid'");
$result=$count_jobs['c'];
return $result;

}

function get_jobs_created($userid){
	$count_jobs=processquery("SELECT count(*) as c from jobs where requesterid='$userid'");
$result=$count_jobs['c'];
return $result;
}

function get_jobs_status($userid,$status){
	$count_jobs=processquery("SELECT count(*) as c from jobs where requesterid='$userid' and status='$status'");
$result=$count_jobs['c'];
return $result;
}
function get_amount_paid($requesterid){
	$count_jobs=processquery("SELECT count(j.id) as c from jobs j  inner join walletpayments wp on wp.jobid = j.id  where j.requesterid='$userid' and j.status='2'");
$result=$count_jobs['c'];
return $result;
}
function get_amount_received($userid){
		$count_jobs=processquery("SELECT count(j.id) as c from jobassignee j  inner join walletpayments wp on wp.jobid = j.jobid  where j.assigneeid='$userid' ");
$result=$count_jobs['c'];
return $result;
}
	function get_user_roles(){
$count_nodes=querydb("SELECT id,name from userrole order by id asc where id !='3'");
$result=$count_nodes;
return $result;	
}
function get_userid($user){
	$u=processquery("SELECT id from users where username='$user'");
	$userid=$u['id'];
	return $userid;
}