<?php
require_once ('templates/header.php');
require_once ('lib/reception.php');



$animals = getAbriAnimals($pdo);

?>


    <div class="p-5 text-center">
      <h1 class="display-5 fw-bold">Les animaux</h1>
    </div>

    <div class="row text-center m-5">
        <?php foreach ($animals as  $animal) { 
            include ('templates/part_animaux.php');
            } ?>     
    </div>

    <?php
    require_once ('templates/footer.php');
    ?>