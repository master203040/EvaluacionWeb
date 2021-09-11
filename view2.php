
<?php

if (isset($_POST["calcular"])){


    $peso = $_POST["peso"];
    $altura = $_POST["estatura"];

    $imc = $peso/($altura* $altura);

    echo ("its IMC is from ".$imc);

    if($imc < 18.5){

        echo(" the weigth  it is insufficient");

    }else if($imc >= 18.5 && $imc <= 24.9){

        echo(" the weigth it is normal <bre>");

    }else if ($imc >= 25 && $imc <= 29.9 ) {
        
        echo(" over weigth it is grade one ");

    }else if ($imc >= 27 && $imc <= 29.9) {
        
        echo(" over weigth it is grade two ");

    }else if ($imc >= 30 && $imc <= 34.9  ){

        echo (" obese one "); 

    }else if ($imc >=35 && $imc <= 39.9){
       
        echo (" obese one "); 

    }else if ($imc >= 40 && $imc <= 49.9){
        
        echo (" obese two "); 

    }else if ($imc >= 50) {
        
        echo (" obese threen "); 
    }else{

        echo(" check all data entered ");
    }

}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 ">
                <li><a href="index.html" class="nav-link px-2 link-dark text-white">Workshop_one</a></li>
                <li><a href="view.html" class="nav-link px-2 link-dark text-white">Workshop_two</a></li>
                <li><a href="view2.html" class="nav-link px-2 link-dark text-white">Workshop_threen</a></li>
                <li><a href="#" class="nav-link px-2 link-dark text-white" >FAQs</a></li>
                <li><a href="#" class="nav-link px-2 link-dark text-white">About</a></li>
            </ul>
        </header>
    </div>
    <main>
        <form action="massPerson.php" method="POST">
            <div class="container">
                <h1 class="text-white text-center fw-bould p-1">Calculate the Body mass of a Person</h1>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">what´s is your name</label>
                            <input type="text" class="form-control" name="name">
                          </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">what is your weight</label>
                            <input type="number" class="form-control" name="peso" step="0.01" placeholder="Kg">
                          </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">what is your height</label>
                            <input type="number" class="form-control" name="estatura" step="0.01">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary w-100" name="calcular">Send</button>
                    </div>
                </div>
            </div>
        </form>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>    
</body>
</html>