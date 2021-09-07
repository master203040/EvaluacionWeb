<?php

    $number1=$_POST['n1'];
    $number2 =$_POST['n2'];
    $op =$_POST['op'];


    if ($op== "sum"){

        $outcome = $number1+$number2;
        echo "la suma de ".$number1."+".$number2."=".$outcome;
        
    }elseif($op=="subtraction"){

        $outcome = $number1-$number2;
        echo "la resta de".$number1."-",$number2."=".$outcome;
        
    }elseif($op =="multiplication"){

        $outcome = $number1*$number2;
        echo"la multiplicacion de ".$number1."*".$number2."=".$outcome;

    }elseif($op =="division"){

        $outcome = $number1/$number2;
        echo "la division de".$number1."/".$number2."=".$outcome;
    }   
    
    
    

    



   

?>