<?php 
    $i=0;
    foreach ($services as $service) { 
      if($i==0){ ?>
        <div class="carousel-item active">
          <div class="p-y3">
            <h3 class="name"><?=$service['title'];?></h3>
             <p class="description fw-bold"><i><?=$service['description'];?></br><?=$service['description_suite'];?></i></p>
          </div>
          <img src="<?=insertImageServ($service['image_name']);?>" class="d-block m-auto img-thumbnail w-50" alt="<?=$service['image_name'];?>">
        </div>

        <?php               
          $i++;   } else{
            if($i != 0){?>
              <div class="carousel-item"> 
                <div class="p-y3">
                  <h3 class="name"><?=$service['title'];?></h3>
                  <p class="description fw-bold"><i><?=$service['description'];?></br><?=$service['description_suite'];?></i></p>
                </div>
                <img src="<?=insertImageServ($service['image_name']);?>" class="d-block m-auto img-thumbnail w-50" alt="<?=$service['image_name'];?>">
                <?php $i++; ?>
              </div>

        <?php 
            } 
          } 
        }
    ?>            