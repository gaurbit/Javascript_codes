<?php
include('db.php');
if(!isset($_SESSION['IS_LOGIN'])){
    header('location:login.php');        
die();
}
$id = $_GET['id'];
echo $id;
if($id==null){
    header('location:index.php');
die();
};
mysqli_query($con,"delete from student where id=$id");
header('location:index.php');
die();
?>
