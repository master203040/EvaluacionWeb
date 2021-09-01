<?php

$opt1 = $_POST["opt1"];
$opt2 = $_POST["opt2"];
$opt3 = $_POST["opt3"];
$opt4 = $_POST["opt4"];
$opt5 = $_POST["opt5"];

try {
    
    if( $opt1 == "Papaya" && $opt2 == "Pineapple" && $opt3 == "Mango" &&  $opt4 == "Strawberry" && $opt5 == "Vanilla ice Cream"){

        echo ("la primera fruta es :".$opt1.)
    }

} catch (\Throwable $th) {
    //throw $th;
}


?>