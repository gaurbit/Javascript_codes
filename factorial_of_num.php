<?php
// factorial of a number
if(isset($_POST['value'])){
$t=$_POST['value'];
$fact=1;
for ($i=1; $i<=$t ; $i++) { 
    $fact = $fact*$i;
}
echo $fact;
}
?>
<html>
    <body>
        <form method="post">
            <input type="number" name="value"></br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>