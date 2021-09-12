
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
        <body class="bg-success p-2 text-dark bg-opacity-25">
            
        <?php

            if (isset($_POST["calcular"])){


                $peso = $_POST["peso"];
                $altura = $_POST["estatura"];

                $imc = $peso/($altura* $altura);

               

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
        
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0  d-flex justify-content-center">
                <div class="col-md-4">
                   <img src="Gym.jpg" class="img-fluid rounded-start" alt="foto">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class = "card-title text-dark text-center fw-bolder"> IMC</h5>
                        <h5 class="card-title text-dark text-center fw-bolder"><?php echo($imc)?></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10 text-star">
            <a href="view2.html" class="link-primary">To Return</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>     
    </body>
</html>


