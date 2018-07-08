<?php // logout.php
include_once '../../includes/auth.php';
if (isset($_SESSION['user']))
{
destroySession();
header("Location: index.php");
}
else 
{
header("Location: index.php");
}
?>