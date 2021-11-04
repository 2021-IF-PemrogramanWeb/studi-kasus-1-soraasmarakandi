<?php
require 'Functions.php';

function register($data)
{
    global $db_account;

    $email = strtolower(stripslashes($data["email"]));
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db_account,$data["password"]);
    $hash = md5( rand(0,1000) );

    mysqli_query($db_account,"SELECT * FROM tb_account WHERE email='$email'");
    $checkempty = mysqli_affected_rows($db_account);
    if ($checkempty > 0)
    {
?>
        <script type="text/javascript">
            alert("Email already registered.");
            window.location = "Login.php";
        </script>
<?php
        exit;
    }
    
    mysqli_query($db_account,"SELECT * FROM tb_account WHERE username='$username'");
    $checkempty = mysqli_affected_rows($db_account);
    if ($checkempty > 0)
    {
        echo "<script>alert('Username already used. Please use another username.')</script>";
?>
        <script type="text/javascript">
            window.location = "Register.php";
        </script>
<?php
        exit;
    }
    
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($db_account,"INSERT INTO tb_account VALUES('$email','$username','$password','$hash',0,SYSDATE())");

    return mysqli_affected_rows($db_account);
}
?>