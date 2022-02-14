<?php
$count=0;
echo "0<br>";
echo "1<br>";
$first=0;
$second=1;
while ($count<15) {
    $third=$first+$second;
    echo $third." ";
    $first=$second;
    $second=$third;
    $count++;
}
?>