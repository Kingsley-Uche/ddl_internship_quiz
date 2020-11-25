<?php

// Complete the staircase function below.
function staircase($n) {

for ( $i =1 ; $i<=$n;$i++) {
        for ( $space = 1; $space <= ($n-$i);$space++) {
                echo " ";
        }
        for ( $hash = 1; $hash <= $i;$hash ++ ) {
                echo "#";
        }
        echo "\n";
}

}
//---end of my code

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);
?>
