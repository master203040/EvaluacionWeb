
<?php

if (isset($_POST["button"])){


    $weigth = $_POST["weigth"];
    $heigth = $_POST["heigth"];

    $imc = $weigth /($heigth*$heigth);

    echo ("its IMC is from".$imc);

    if($imc < 18.5){

        echo("the weigth  it is insufficient");

    }else if($imc >= 18.5 && $imc <= 24.9){

        echo("the weigth it is normal");

    }else if ($imc >= 25 && $imc <= 29.9 ) {
        
        echo("over weigth it is grade one");

    }else if ($imc >= 27 && $imc <= 29.9) {
        
        echo("over weigth it is grade two");

    }else if ($imc >= 30 && $imc <= 34.9  ){

        echo ("obese one"); 

    }else if ($imc >=35 && $imc <= 39.9){
       
        echo ("obese one"); 

    }else if ($imc >= 40 && $imc <= 49.9){
        
        echo ("obese two"); 

    }else if ($imc >= 50) {
        
        echo ("obese threen"); 
    }else{

        echo("check all data entered ")
    }

}



?>