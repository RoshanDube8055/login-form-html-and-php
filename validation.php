<?php
$errors=array();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["name"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    $address=$_POST["address"];
    $contact=$_POST["tel"];
    $collagename=$_POST["collagename"];

    if(empty($username)||empty($password)||empty($confirmpassword)||empty($address)||empty($collagename)){
        $errors[]="All feilds are mandotory ! please cheak and fill the information";
    }
    if($password != $confirmpassword){
        $errors[]="Password not match with confirmpassword !!! please try again";
    }
    if(!ctype_digit($contact)){
        $errors[]="Only digit allowed here";
    }
    if(strlen($contact)>10 ||strlen($contact)<10){
        $errors[]="number should be 10 digits";
    }
    if(!empty($errors)){
        foreach($errors as $error){
            echo"<script>alert('{$error}')</script>";
        }
        echo"<script>window.location.href='validation.html';</script>";
    }
    else{
        echo"<table border='1'style='background-color:yellow;margin-top:50px;margin-left:50px;border-collapse:collapse';>
        <tr>
        <th>username</th>
        <th>password</th>
        <th>confirmpassword</th>
        <th>address</th>
        <th>contact</th>
        <th>collagename</th>
        </tr>
        <tr>
        <td>$username</td>
        <td>$password</td>
        <td>$confirmpassword</td>
        <td>$address</td>
        <td>$contact</td>
        <td>$collagename</td>
        </tr>
        </table>";
    }
}

?>