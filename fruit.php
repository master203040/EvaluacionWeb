<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpFrutas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body class = "bg-success p-2 text-dark bg-opacity-25">
<?php

if(isset($_POST["send"])){
    $frutas=array(

        "fruit1" => array("name"=>$_POST["fruitName1"],"imagen"=>$_POST["imagenPiture1"]),
        "fruit2"=> array("name"=>$_POST["fruitName2"],"imagen"=>$_POST["imagenPiture2"]),
        "fruit3"=> array("name"=>$_POST["fruitName3"],"imagen"=>$_POST["imagenPiture3"]),
        "fruit4"=> array("name"=>$_POST["fruitName4"],"imagen"=>$_POST["imagenPiture4"]),
        "fruit5"=> array("name"=>$_POST["fruitName5"],"imagen"=>$_POST["imagenPiture5"]),

    );
}

?>
<div class="row row-cols-1 row-cols-md-3 g-5 ms-1">
<?php if(isset($_POST["send"])): ?>
    <?php foreach($frutas as $fruta): ?>
        <?php if($fruta["name"]  !=null):  ?>
            <div class="col-md-4 p-2">
                <div class="card" style = "width:18rem;">
                    <img src="<?php echo($fruta["imagen"]) ?>" class="card-img-top" alt="foto">
                    <div class="card-body">
                        <h5 class="card-title text-dark text-center fw-bolder"><?php echo($fruta["name"])?></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-10 text-center">
              <a href="view.html" class="link-primary">To Return</a>
            </div>
        <?php endif ?>
    <?php endforeach ?>
<?php endif ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>    
</body>
</html>


