<?php
include('db.php');
if(isset($_POST['submit'])){
    $username=mysqli_real_escape_string($con, $_POST['username']);
    $password=mysqli_real_escape_string($con, $_POST['password']);
    $res=mysqli_query($con,"select * from admin_user where username='$username' and password='$password'");
    if(mysqli_num_rows($res)>0){
        $_SESSION['IS_LOGIN']='yes';
        header('location:index.php');        
    die();
    }else{
        echo "please enter valid username";
    }
}
?>
<form method="post">
    Username:
    <input type="username" name="username"><br>
    Password:
    <input type="password" name="password"><br>
    <input type="submit" name="submit">
</form>
