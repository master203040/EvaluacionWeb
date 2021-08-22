<?php


    $n1=$_GET['n1'];
    $n2 =$_GET['n2'];
    $op = $_GET['op'];
    $outcome = 0;
    if($op=="sum"){
        $outcome = $n1+$n2;
    }elseif ($op == "subtraction") {
        $outcome= $n1-$n2;
    }elseif ($op =="multiplication"){
      $outcome = $n1*$n2;  
    }elseif ($op =="division") {
        $outcome = $n1/$n2;
    }

    echo"el resultado es : ".$outcome;

?>