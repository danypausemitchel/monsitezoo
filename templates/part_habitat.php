
    <div class="col-md-4 my-2">
        <div class="card h-100" >
            <!-- Protection attaque avec htmlentities -->
            <img src="<?=insertImageHab($abri['image_name']);?>" class="card-img-top h-100" alt="<?=htmlentities($abri['image_name']);?>">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?=htmlentities($abri['name']);?></h5>
                    <p class="card-text"><?=htmlentities($abri['description']);?></p>
                    <div mt-auto>
                        <a href="habitatanimals.php?id=<?=$abri['id'];?>" class="btn btn-primary">Voir les animaux de cet habitat</a>
                    </div>
                    
                </div>
        </div>
    </div>
