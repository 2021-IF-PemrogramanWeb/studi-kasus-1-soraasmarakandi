<?php
require 'ConnectDB.php';

global $db;

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($db_account,"SELECT * FROM tb_account WHERE username='$username'");

if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
    if( password_verify($password, $row['password']))
    {
        header("Location: index.php",true,301);
        $_SESSION['login']=$username;
        exit;
    }
}
if (isset($_POST['login']))
    $wrong_password = true;
?>
