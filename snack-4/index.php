<!--
## Snack 4
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta 
-->

<?php 

$numeriRandom = [];

//numero random
$random = rand(1,100);
echo "<p>" . $random . "</p>";

for($i = 0; $i < 15; $i++) {
    if(!in_array($random, $numeriRandom)  ) {
        echo $numeriRandom[] = $random[$i];
    }   
}

?>
