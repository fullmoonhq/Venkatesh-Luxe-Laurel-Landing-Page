<?php

//get data from form  
$name = $_REQUEST['Name'];
$contact= $_REQUEST['Contact'];
$email= $_REQUEST['Email'];

$txt ="Name : ". $name . "\r\nEmail : " . $email . "\r\nContact :" . $contact;

if(empty($name) || empty($contact) || empty($email)){
    echo "Please fill all fields";
}
else{
  mail("pridelifestylehomes@gmail.com","New Lead interested in Venkatesh Laurel.",$txt, "From: $email");

  header('Location:thankyou.html');

}
?>  


