<?php

//start session
session_start(); 

//for header redirection
ob_start();

//funtion to check for login

function check_login_index()
{
    if(!isset($_SESSION['cid']))
 {
    header('location:login/logout.php');
 }
}
function logged_in(){
   if (isset($_SESSION['cid'])) {
      return true;
   };
   return false;
}

//function to get user ID
function get_id (){
   $id=$_SESSION['cid'];
  return $id;
}

//function to check for role (admin, customer, etc)
function check_user_role(){
	return $_SESSION['userRole'];
	
		//header('location:../homepage.php);
	
}



?>