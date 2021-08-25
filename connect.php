<?php

    $num1=$_POST['n1'];
    $num2 =$_POST['n2'];
    $op =$_POST['op'];
    
    if ($op== "sum"){

        $outcome = $num1+$num2;
        echo "la suma de ".$num1."+".$num2."=".$outcome;
    }elseif($op=="subtraction"){

        $outcome = $num1-$num2;
        echo "la resta de".$num1."-",$num2."=".$outcome;
    }elseif($op =="multiplication"){

        $outcome = $num1*$num2;
        echo"la multiplicacion de ".$num1."*".$num2."=".$outcome;

    }elseif($op =="division"){

        $outcome = $num1/$num2;
        echo "la division de".$num1."/".$num2."=".$outcome;
    }


    



   

?>