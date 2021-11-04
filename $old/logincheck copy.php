<html>
<body>
        <?php 
        if ($_POST["username"]=="Richard" && $_POST["password"]=="1234554321")
            header("location: /home/GraphicReport.php", true, 301);
        else
            header("location: /error/penyusup.html", true, 301);
        ?>
</body>
</html>