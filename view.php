<?php

if (isset($_POST["send"])){

    $fruit = array(
                
        array('name'=>"nombreFruit1",'foto1'=>""),
        array('name'=>"nombreFruit2",'foto'=>""),
        array('name'=>"nombreFruit3",'foto'=>""),
        array('name'=>"nombreFruit4",'foto'=>""),
        array('name'=>"nombreFruit5",'foto'=>"")
        
    
    
    );

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation Workshpos</title>
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
        <form action="view.php" method="POST">
            <div class="container">
                <h1 class="text-white text-center fw-bould p-1">Menu for a splash</h1>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Choose the first fruit</label>
                            <input type="text" class="form-control" name="nombreFruit1">
                          </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Choose the second fruit</label>
                            <input type="text" class="form-control" name="fruit2">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Choose the third fruit</label>
                            <input type="text" class="form-control" name="fruit3">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Choose the four fruit</label>
                            <input type="text" class="form-control" name="fruit4">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Choose the five fruit</label>
                            <input type="text" class="form-control" name="fruit5">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary w-100" name="send">Send</button>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>    
</body>
</html>