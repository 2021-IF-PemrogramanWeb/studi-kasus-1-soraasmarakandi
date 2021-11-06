<script>
// prevent refresh for submitting form again
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php
require 'navbar.php';
require 'register_check.php';

    if(isset($_POST['register']))
    {
        if($_POST['password'] == $_POST['passwordConfirm'])
        {
            if(register($_POST) > 0) {
                echo"<script>alert('Your account has been created.')</script>";
?>
            <script type="text/javascript">
                window.location = "login.php";
            </script>
<?php
            }
            else {
                echo mysqli_error($db_account);
            }
        }
        else
        {
?>
            <script type="text/javascript">
                alert("Your password confirmation doesn\'t match, make sure you type the password correctly.");
                window.location = "register.php";
            </script>
<?php
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
            <div class="card card-body mx-auto" style="width: 50rem;margin-top: 5rem;">
                <h1>Register</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="emailInput" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="usernameInput" class="form-label">Username</label>
                        <input name="username" type="username" class="form-control" id="usernameInput" aria-describedby="usernameHelp">
                        <div id="usernameHelp" class="form-text">Put your username here.</div>
                    </div>
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="passwordInput" aria-describedby="passwordHelp">
                        <div id="passwordHelp" class="form-text">Create an unique and memoriable password!</div>
                    </div>
                    <div class="mb-3">
                        <label for="passwordConfirmInput" class="form-label">Password Confirmation</label>
                        <input name="passwordConfirm" type="password" class="form-control" id="passwordConfirmInput" aria-describedby="passwordConfirmHelp">
                        <div id="passwordConfirmHelp" class="form-text">We suggest typing rather than copying to make sure the password is your best choice.</div>
                    </div>
                    <button name="register" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
    </body>
</html>