
    <div class="col-md-4 my-2">
        <div class="card h-100" >
            <img src="<?=insertImageHab($abri['image_name']);?>" class="card-img-top h-100" alt="<?=$abri['image_name'];?>">
                <div class="card-body">
                    <h5 class="card-title"><?=$abri['name'];?></h5>
                    <p class="card-text"><?=$abri['description'];?></p>
                    <a href="animals.php?id=<?=$abri['id'];?>" class="btn btn-primary">Voir les animaux</a>
                </div>
        </div>
    </div>
