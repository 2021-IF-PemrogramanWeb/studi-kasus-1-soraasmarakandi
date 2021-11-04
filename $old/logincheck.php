<?php
    $conn = mysqli_connect("localhost","richard","","account");
    $result = mysqli_query($conn,"SELECT * FROM data_acc WHERE username=\"".$_POST["username"]."\" AND password=\"".$_POST["password"]."\"");
?>

<html>
<body>
        <?php 
        if ($result->num_rows > 0)
            header("location: /home/GraphicReport.php", true, 301);
        else
            header("location: /error/penyusup.html", true, 301);
        ?>
</body>
</html>