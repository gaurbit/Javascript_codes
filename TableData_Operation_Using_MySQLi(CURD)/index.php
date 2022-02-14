<?php
include('db.php');
$res = mysqli_query($con, "select * from student");
if(!isset($_SESSION['IS_LOGIN'])){
    header('location:login.php');        
die();
}
?>
<a href="add.php">Add record</a>
<a href="logout.php">delete record</a>

<table border="1">
    <tr>
        <th>sno</th>
        <th>name</th>
        <th>city</th>
        <th></th>
    </tr>
<?php
    $i=1;
    while ($row=mysqli_fetch_assoc($res)) {
        ?>
    <tr>
        <td><?php echo $i ?> </td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['city'] ?></td>
        <td>
            <a href="edit.php?id=<?php echo $row['id']?>">edit</a>
            <a href="delete.php?id=<?php echo $row['id']?>">del</a>
        </td>
    </tr>
    <?php $i++;
 } ?>
</table>
