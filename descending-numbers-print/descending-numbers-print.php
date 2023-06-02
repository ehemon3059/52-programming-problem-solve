<?php
// print 50 to 1 and every 5 number print after new line print
$numbers = 50;

for( $numbers ; $numbers >=1; $numbers--){
    print $numbers .', ';
    if($numbers % 5 == 1 )
    print "<br>";
}

?>