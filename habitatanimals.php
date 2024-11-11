<?php
require_once ('templates/header.php');
require_once ('lib/reception.php');


$id = (int) $_GET['id'];
$animals = getAnimaux($pdo);
$habitats= getAbrisdId($pdo,$id)
?>


    <div class="p-5 text-center">
      <h1 class="display-5 fw-bold"><?= $habitats['name']?></h1>
    </div>

    <div class="row text-center m-5">
        <?php foreach ($animals as  $animal) { 
          if($id===$animal['id_abris'])
            include ('templates/part_animal_habitat.php');
            } ?>     
    </div>

    <?php
    require_once ('templates/footer.php');
    ?>