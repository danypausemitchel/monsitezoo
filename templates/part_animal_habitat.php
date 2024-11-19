
<div class="col-md-4 my-2">
        <div class="card h-100" >
            <!-- Protection attaque avec htmlentities -->
            <img src="<?=insertImageAnimaux($animal['image_name']);?>" class="card-img-top h-100" alt="<?=htmlentities($animal['image_name']);?>">
                <div class="card-body">
                    <h5 class="card-title"><?=htmlentities($animal['name']);?></h5>
                    <p class="card-text"><?=htmlentities($animal['description']);?></p>
                </div>
        </div>
    </div>