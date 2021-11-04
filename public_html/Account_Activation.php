<?php
$db_account = mysqli_connect('localhost','root','','account');
if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    $email = mysqli_escape_string($db_account,$_GET['email']); // Set email variable
    $hash = mysqli_escape_string($db_account,$_GET['hash']); // Set hash variable

    $search = mysqli_query($db_account,"SELECT email, hash, active FROM users WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysqli_error($db_account)); 
    $match  = mysqli_num_rows($search);

    echo $match;
    echo "<script>Account has been actived!.</script>";
    header("location: Login.php",true,301);
    exit;
}

else{
    echo "<script>Whoops! Something went wrong with validation url.</script>";
    header("location: SomethingWrong.php",true,301);
}
?>