<?php
    $conn = mysqli_connect("localhost","richard","","account");

    if( isset($_POST["register"]))
    {
        if(registrasi($_POST) > 0)
            echo "<script>alert('user baru berhasil ditambahkan!');</script>";
        else
            echo "Register error!";
    }

    function registrasi($data) {
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($GLOBALS["conn"],$data["password"]);

        return 1;
    }

    header("location: login.html", true, 301);

?>

<html>
<body>
</body>
</html>