<?php
include('db.php'); 
if(!isset($_SESSION['IS_LOGIN'])){
    header('location:login.php');        
die();
}
$id=mysqli_real_escape_string($con,$_GET['id']);
if (isset($_POST['submit'])) {
    $name=mysqli_real_escape_string($con, $_POST['name']);
    $city=mysqli_real_escape_string($con, $_POST['city']);
    mysqli_query($con,"update student set name='$name', city='$city' where id='$id'");
    header('location:index.php');
die();
}
$res = mysqli_query($con, "select * from student where id='$id'");
if(mysqli_num_rows($res)==0){
    header('location:index.php');
die();
};
$row = mysqli_fetch_assoc($res);
$name=$row['name'];
$city=$row['city'];
?>
<a href="logout.php">Add record</a>
<form method="post">
    <input type="text" value="<?php echo $name ?>" name="name"><br>
    <input type="text" value="<?php echo $city ?>" name="city"><br>
    <input type="submit" value="edit" name="submit">
</form>