<?php
session_start();
include 'userconfig.php';
// Get the submitted OTP value
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$email = $_POST['email'];

if ($password !== $confirm_password) {
    // OTPs do not match, display an error message
    // $errors[] = "Passwords do not match";
} else {
    // OTPs match, proceed to newpass.php
    $hash_password = md5($password);

    $sql = "UPDATE plantiq_login SET password = '$hash_password' WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    header('Location: ../index.php');

}

// if (!empty($errors)) {
//     // Redirect back to the login page with the error messages
//     $errorString = implode(',', $errors);
//     header('Location: ../newpass.php?errors=' . urlencode($errorString));
//     exit();
// }
?>