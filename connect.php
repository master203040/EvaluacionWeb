<?php


    $num1=$_GET['n1'];
    $num2 =$_GET['n2'];
    $option = $_GET['op'];
    $outcome = 0;
    if($option=="1"){
        $outcome = $num1+$num2;
    }elseif ($option == "2") {
        $outcome= $num1-$num2;
    }elseif ($option =="3"){
      $outcome = $num1*$num2;  
    }elseif ($option=="4") {
        $outcome = $num1/$num2;
    }

    echo"el resultado es : ".$outcome;

?>