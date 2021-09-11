
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



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
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
            <div class="container">
                <form action="connect.php" method="POST">
                    <h1 class="text-center">Calculation</h1>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label  class="form-label">Enter then fist number</label>
                                <input type="text" class="form-control" name="n1">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label  class="form-label">Enter then second number</label>
                                <input type="text" class="form-control" name="n2">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4">
                            <select class="form-select" aria-label="Default select example" name="op">
                                <option selected>Open this select menu</option>
                                <option value="sum">sum</option>
                                <option value="subtraction">subtraction</option>
                                <option value="multiplication">multiplication</option>
                                <option value="division">division</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary w-100" name="button">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>    
    </body>
</html>