<?php

function makeSqure ($size){
    for($i=1; $i<=$size; $i++){
        for($j=1; $j<=$size; $j++){
            echo "*";
        }
        echo "<br>";
    }
}
$boxSize = 10;
makeSqure($boxSize);

?>