
<div class="col-md-4 my-2">
        <div class="card h-100" >
            <img src="<?=insertImageAnimaux($animal['image_name']);?>" class="card-img-top h-100" alt="<?=$animal['image_name'];?>">
                <div class="card-body">
                    <h5 class="card-title"><?=$animal['name'];?></h5>
                    <p class="card-text"><?=$animal['description'];?></p>
                    <p class="card-text fw-bold">Habitat : <?php if($animal['id_abris']===$abri['id'])?><?$abri['name']?></p>
                </div>
        </div>
    </div>