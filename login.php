<?php
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["pass"];
    $confirmpassword = $_POST["pass2"];

    if (empty($username) || empty($email) || empty($number) || empty($password) || empty($confirmpassword)) {
        $errors[] = "All fields are mandatory.";
    }

    if (!ctype_digit($number)) {
        $errors[] = "Only numbers are allowed in the contact field.";
    }

    if (strlen($number) != 10) {
        $errors[] = "Contact number should be 10 digits.";
    }

    if ($password != $confirmpassword) {
        $errors[] = "Passwords do not match. Please try again.";
    }

    // If there are errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<script>alert('{$error}');</script>";
        }
        echo "<script>window.location.href='login.html';</script>";
    } else {
        // If no errors, display the values
        echo $username, "<br>";
        echo $email, "<br>";
        echo $number, "<br>";
        echo $password, "<br>";
        echo $confirmpassword, "<br>";
    }
}
?>
