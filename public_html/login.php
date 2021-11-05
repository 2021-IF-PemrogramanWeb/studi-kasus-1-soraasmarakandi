<script>
// prevent refresh for submitting form again
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php
session_start();
if ( isset($_SESSION['login']) )
{
    header('location: home.php',true,301);    
}

require 'login_check.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <?php require 'navbar.php'; ?>
    </head>
    <body>
        <?php if (isset($wrong_password)) 
              { 
        ?>
                <div class="alert alert-danger" role="alert">
                  Wrong Password.
                </div>
        <?php 
                unset($wrong_password);
              } 
        ?>
            <div class="card card-body mx-auto" style="width: 25rem;margin-top: 9rem;">
                <h1>Login</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="usernameInput" class="form-label">Username</label>
                        <input type="username" name="username" class="form-control" id="usernameInput" aria-describedby="emailHelp">
                        <div id="usernameHelp" class="form-text">Enter your username.</div>
                    </div>

                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="passwordInput">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Submit</button>
                </form>
                <div class="d-flex mt-3">
                    <p>Don't have account?&nbsp;</p>
                    <a href="register.php">Create new account!</a>
                </div>
            </div>
    </body>
</html>