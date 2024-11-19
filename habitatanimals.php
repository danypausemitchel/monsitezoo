<?php
require_once ('templates/header.php');
require_once ('lib/reception.php');

$error =false;

$id = (int) $_GET['id'];
$animals = getAbriAnimalsById($pdo, $id);
$habitats= getAbrisId($pdo,$id)
?>


    <div class="p-5">
      <h1 class="d-flex justify-content-center m-4 fw-bold"><?= $habitats['name']?></h1>
    </div>

    <div class="row text-center m-auto">
        <?php foreach ($animals as  $animal) { 
            include ('templates/part_animal_habitat.php');
            } ?>     
    </div>

    <?php
    require_once ('templates/footer.php');
    ?>
    