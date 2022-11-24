<?php
//connect to the user account class
include("../classes/customer_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}


//--INSERT--//

function insert_ctr ($name, $email, $password, $country, $city, $contact,$photo,$user_role){
  //create an instance of the class
  $newclass = new customer_class();
  
  //connection to the class/returning the method in the customer
  return $newclass->insert_clas($name, $email, $password, $country, $city, $contact,$photo, $user_role);
}

//--SELECT--//
//looging in
function loggingin_ctr($email,$password){

//create an instance of the class
$log=new customer_class();

//connection to the class/returning the method in the customer 
return $log->loggingin_clas($email,$password);

}





//--UPDATE--//

//--DELETE--//

?>