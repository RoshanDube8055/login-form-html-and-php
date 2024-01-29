<?php
$error=array();
if($_SERVER["REQUEST_METHOD"] =="POST"){
$username=$_POST["name"];
$address=$_POST["address"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$password=$_POST["password"];
$confirmpassword=$_POST["ConfirmPassword"];

if(empty($username)||empty($address)||empty($email)||empty($contact)){
    $error[]="All feilds are mendatory ! please cheak";
}
if(!ctype_digit($contact)){
    $error[]="only number are allowed in the contact!";
}
if(strlen($contact)!=10){
    $error[]="number should be 10 digits !";
}
if($password != $confirmpassword){
    $error[]="password not match ! please try gain";
}
if(!empty($error)){
    foreach ($error as $errors){
        echo"<script>alert('{$errors}')</script>";
    }
    echo "<script>window.location.href='login2.html';</script>";
}
else{
    echo $username,"<br>";
    echo $address,"<br>";
    echo $email,"<br>";
    echo $contact,"<br>";
    echo $password,"<br>";
    echo $confirmpassword,"<br>";
}
}
?>