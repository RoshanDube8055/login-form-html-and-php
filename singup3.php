<?php
 if($_SERVER["REQUEST_METHOD"]=='POST'){
    $username=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    echo"<table border='1'style='border-collapse:collapse;margin-top:120px;margin-left:100px'>
    <tr>
    <th>Username</th>
    <th>Email</th>
    <th>password</th>
    <th>confirmpassword</th>
    </tr>
    <tr>
    <td>$username</td>
    <td>$email</td>
    <td>$password</td>
    <td>$confirmpassword</td>
    </tr>
    </table>";


 }
?>