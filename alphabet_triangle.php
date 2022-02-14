<?php
// $alpha = range("A","Z");
// for ($i=0; $i<5; $i++) { 
//     for ($j=0; $j<=$i; $j++) { 
//         echo $alpha[$i];
//     }
//     echo "</br>";
// }

for ($i=65; $i<=69; $i++) { 
    for ($j=5;$j>=$i-64; $j--) { 
        echo chr($i);
    }            
    echo "</br>";
}
?>