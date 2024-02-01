<?php   
$errors=array();
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["name"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    $address=$_POST["address"];
    $contact=$_POST["tel"];
    $collagename=$_POST["collagename"];

    if(empty($username)||empty($password)||empty($confirmpassword)||empty($address)||empty($contact)||empty($collagename)){
       $errors[]="all filds are mendotory";
    }
    if($password != $confirmpassword){
        $errors[]="Your confirmpassword has not match with the password";
    }
    if(!ctype_digit($contact)){
        $errors[]="Only digit add here charetor not allowed";
    }
    if(strlen($contact)!=10){
        $errors[]="digit length should be 10 digit's";
    }
    if(!empty($errors)){
        foreach($errors as $error){
            echo"<script>alert('{$error}')</script>";
        }
        echo "<script>window.location.href='login3.html';</script>";
    }
    
    else{

    echo "<table border='1' style='border-collapse: collapse;background-color:orange;margin-top:100px;margin-left:100px';>
    <tr>
        <th>Username</th>
        <th>Password</th>
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
    <tr>
  </table>";
}
 }
?>