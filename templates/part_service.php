<?php 
    $i=0;
    foreach ($services as $service) { 
      if($i==0){ ?>
        <div class="carousel-item active">
          <div class="p-y3">
            <!-- Protection attaque avec htmlentities -->
            <h3 class="name"><?=htmlentities($service['nom']);?></h3>
             <p class="description fw-bold"><i><?=htmlentities($service['description']);?></i></p>
          </div>
          <img src="<?=insertImageServ($service['image_name']);?>" class="d-block m-auto img-thumbnail w-50" alt="<?=htmlentities($service['image_name']);?>">
        </div>

        <?php               
          $i++;   } else{
            if($i != 0){?>
              <div class="carousel-item"> 
                <div class="p-y3">
                  <h3 class="name"><?=htmlentities($service['nom']);?></h3>
                  <p class="description fw-bold"><i><?=htmlentities($service['description']);?></i></p>
                </div>
                <img src="<?=insertImageServ($service['image_name']);?>" class="d-block m-auto img-thumbnail w-50" alt="<?=htmlentities($service['image_name']);?>">
                <?php $i++; ?>
              </div>

        <?php 
            } 
          } 
        }
    ?>            