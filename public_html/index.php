<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="index.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php require 'Page/Navbar.php'; ?>
        <h1 class="sdh_title">Welcome to SevenDotsofHope!</h1>
<?php
    if (!isset($_SESSION['login']))
    {
?>
        <div class="d-flex justify-content-center">
            <div class="px-4">
                <a href="login.php">Login</a>
            </div>
            <div class="px-4">
                <a href="register.php">Register</a>
            </div>
        </div>
<?php
    }
?>
    </div>
    </body>
</html>