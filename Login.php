<script>
// prevent refresh for submitting form again
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php
// require 'Login_Check.php';

//     global $wrong_password;
//     if(isset($_POST['login']))
//     {
//         if(login($_POST) > 0) {

//         }
//         else {
            
//         }
//     }
session_start();

if( isset($_SESSION["login"] )) {
    header("Location: GraphicReport.php");
    exit;
}

require 'Functions.php';

    global $db_account;
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($db_account,"SELECT * FROM tb_account WHERE username='$username'");

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row['password']))
            {
                $_SESSION["login"] = true;
?>
                <script type="text/javascript">
                    window.location = "GraphicReport.php";
                </script>
<?php
            }
        }
        $wrong_password = true;
    }   
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
            <div class="card card-body mx-auto" style="width: 25rem;margin-top: 9rem;">
                <h1>Login</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="usernameInput" class="form-label">Username</label>
                        <input type="username" name="username" class="form-control" id="usernameInput" aria-describedby="emailHelp">
                        <div id="usernameHelp" class="form-text">Enter your username.</div>
                    </div>

                    <?php if (isset($wrong_password)) 
                          { 
                    ?>
                            <p style="color:red;">Wrong password.</p>
                    <?php 
                          } 
                    ?>

                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="passwordInput">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Submit</button>
                </form>
                <div class="d-flex mt-3">
                    <p>Don't have account?&nbsp;</p>
                    <a href="Register.php">Create new account!</a>
                </div>
            </div>
    </body>
</html>