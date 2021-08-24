<?php


    $n1=$_POST['n1'];
    $n2 =$_POST['n2'];
    $op =$_POST['op'];
    $outcome = 0;

    if(isset($op=="sum")){
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