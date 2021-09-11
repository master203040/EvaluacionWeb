

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
                <div class="col">
                    <div class="card h-100">
                        <img src="<?php echo($fruta["imagen"]) ?>" class="card-img-top" alt="foto">
                        <div class="card-body">
                            <h5 class="card-title text-dark"><?php echo($fruta["name"])?></h5>
                        </div>
                    </div>
                 </div>
            <?php endif ?>
        <?php endforeach ?>
    <?php endif ?>