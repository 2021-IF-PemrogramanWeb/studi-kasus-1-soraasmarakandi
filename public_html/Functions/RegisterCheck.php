<?php
require 'ConnectDB.php';

function register($data)
{
    global $db;

    $email = strtolower(stripslashes($data["email"]));
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db,$data["password"]);
    $hash = md5( rand(0,1000) );

    mysqli_query($db,"SELECT * FROM tb_account WHERE email='$email'");
    $checkempty = mysqli_affected_rows($db);
    if ($checkempty > 0)
    {
?>
        <script type="text/javascript">
            alert("Email already registered.");
            window.location = "login.php";
        </script>
<?php
        exit;
    }
    
    mysqli_query($db,"SELECT * FROM tb_account WHERE username='$username'");
    $checkempty = mysqli_affected_rows($db);
    if ($checkempty > 0)
    {
        echo "<script>alert('Username already used. Please use another username.')</script>";
?>
        <script type="text/javascript">
            window.location = "register.php";
        </script>
<?php
        exit;
    }
    
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($db,"INSERT INTO tb_account VALUES('$email','$username','$password','$hash')");

    return mysqli_affected_rows($db);
}
?>