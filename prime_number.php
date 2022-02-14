<?php
// $x=13;
// $count = 0;
// for ($i=2; $i<=$x; $i++){
//     if ($x%$i==0) {
//         ++$count;
//         break;
//     }
// }
// if ($count==0) {
//     echo "prime";
// }else{
//     echo "not prime";
// }

$count = 0;
$num = 2;
if(isset($_POST['value'])){
while ($count<$_POST['value']) {
    $div_count=0;
    for($i=1;$i<=$num;$i++){
        if (($num%$i)==0) {
            $div_count++;
        }
    }
    if ($div_count<3) {
        echo $num . ",";
        $count++;
    }
    $num++;
}
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