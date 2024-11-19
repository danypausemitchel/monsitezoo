<?php
require_once ('templates/header.php');
require_once ('lib/reception.php');



$animals = getAbriAnimals($pdo);

?>


    <div class="p-5">
      <h1 class="d-flex justify-content-center m-4 fw-bold">Les animaux</h1>
    </div>

    <div class="row text-center m-auto">
        <?php foreach ($animals as  $animal) { 
            include ('templates/part_animaux.php');
            } ?>     
    </div>

    <?php
    require_once ('templates/footer.php');
    ?>