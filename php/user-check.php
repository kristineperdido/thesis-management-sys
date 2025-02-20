<?php

session_start();
include ($_SERVER['DOCUMENT_ROOT'] . "/thesis-mgmt/dbconnect.php");

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = test_input($_POST['username']);

$sql = "SELECT * FROM users WHERE UserName='$username'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) === 1)
{
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['UserName'];
    $_SESSION['sec_question'] = $row['SecurityQuestion'];
    $_SESSION['sec_answer'] = $row['SecurityAnswer'];
    header("Location: /thesis-mgmt/forgotpassword/securityquestion.php");
} else
{
    header("Location: /thesis-mgmt/forgotpassword/index.php?error=Username does not exists.");
}