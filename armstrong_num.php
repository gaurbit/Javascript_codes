<?php
$num=153;
$len=$num;
$sum=0;
for ($i=0; $i<strlen($len); $i++) { 
$rem=$num%10;
$sum= $sum+($rem*$rem*$rem);
$num=$num/10;
}
echo $sum;
?>