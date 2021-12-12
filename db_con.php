<?php
session_start();
$username = '';
$email = '';
$errros = array();

$con = mysqli_connect('localhost', 'root', '', 'registration');
if (isset($_POST['reg_user'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password1 = mysqli_real_escape_string($con, $_POST['password1']);
    $password2 = mysqli_real_escape_string($con, $_POST['password2']);
    if (empty($username)) {
        array_push($errors, 'USERNAME IS REQUIRED!');
    }
    if (empty($email)) {
        array_push($errors, 'EMAIL IS REQUIRED!');
    }
    if (empty($password1)) {
        array_push($errors, 'PASSWORD IS REQUIRED!');
    }
    if ($password1 != $password2) {
        array_push($errors, 'PASSWORDS DO NOT MATCH!');
    }
    $user_check_query = "SELECT*FROM registered_users WHERE username == '$username' OR email == '$email' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, 'USERNAME ALREADY EXISTS!');
        }
        if ($user['email'] === $email) {
            array_push($errors, 'EMAIL ALREADY EXISTS!');
        }
    }
    if (count($errors) == 0) {
        $password = md5($password1);
        $query = "INSERT INTO registered_users ( username, email, password) VALUES ('$username', '$email', '$password')";
        $mysqli_query($con, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}
