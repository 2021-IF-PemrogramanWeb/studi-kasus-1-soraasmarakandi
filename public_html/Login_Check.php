<?php
require 'Functions.php';

function login($data)
{
    global $db_account;

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($db_account,"SELECT * FROM tb_account WHERE username='$username'");

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row['password']))
        {
            header("Location: Home.php",true,301);
            exit;
        }
    }
?>
    <script type="text/javascript">
        window.location = "Login.php";
    </script>
<?php
    $wrong_password = true;
}
?>