<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biotipo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body class="bg-success p-2 text-dark bg-opacity-25">
            


        <?php

        $nombre = $_POST["name"];
        $altura = $_POST["altura"];

        if(isset($_POST["send"])){

        
            if ($altura < 1.70) {
                
                $biotipo ="Infinite";

            }else if($altura <= 1.70 &&  $altura <= 1.80){

                $biotipo = "Average";

            }else if( $altura >= 1.80){

                $biotipo = "Higher";

            }else{

                $biotipo = "Check the input data";
            }
               
        }


        ?>

        <div class="row d-flex justify-content-center p-2">
            <div class="col-md-3">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header fw-bolder text-center">His name: <?php echo($nombre)?></div>
                    <div class="card-body text-dark">
                        <h5 class="card-title">His biotype is: <?php echo($biotipo)?></h5>
                        <h5 class="card-title">His heingt is: <?php echo($altura)?></h5>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-11 text-center">
              <a href="view3.html" class="link-primary">To Return</a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>    
    </body>
</html>