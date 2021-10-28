<?php
    $conn = mysqli_connect("localhost","richard","","account");
    $result = mysqli_query($conn,"SELECT * FROM data_acc WHERE username=\"".$_POST["username"]."\" AND password=\"".$_POST["password"]."\"");
?>

<html>
<body>
        <?php 
        if ($result->num_rows < 1)
            mysqli_query($conn,"INSERT INTO data_acc VALUES(\"".$_POST["username"]."\",\"".$_POST["password"]."\")");
        header("location: login.html", true, 301);
        ?>
</body>
</html>