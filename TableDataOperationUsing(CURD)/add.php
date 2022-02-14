<?php 
include('db.php');
if(!isset($_SESSION['IS_LOGIN'])){
    header('location:login.php');        
die();
}
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $city=$_POST['city'];
    mysqli_query($con,"insert into student (name,city) values('$name','$city')");
    header('location:index.php');
die();
}
?>
<a href="logout.php">Add record</a>
<form method="post">
    <input type="text" value="name" name="name"><br>
    <input type="text" value="city" name="city"><br>
    <input type="submit" value="add" name="submit">
</form>