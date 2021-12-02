<?php
require 'ConnectDB.php';

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($db,"SELECT * FROM tb_account WHERE username='$username'");

if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
    if( password_verify($password, $row['password']))
    {
        header("Location: index.php",true,301);
        $_SESSION['login']=$username;
        exit;
    }
    else
        $wrong_password = false;
}
else
{
    $no_account = true;
}
?>
