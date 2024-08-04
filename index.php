
<?php
    require_once 'templates/header.php';
?>
    <section id="accueil">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/images/zoo.jpg" class="d-block mx-lg-auto img-fluid" alt="zoo" width="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Gardez vos listes avec vous !</h1>
                <p class="lead">Bienvenue sur CheckIt, votre nouvelle plateforme de création de listes de tâches en ligne. Avec CheckIt, vous pouvez facilement créer des listes de choses à faire pour tous les aspects de votre vie. Que vous planifiez votre prochain voyage, que vous organisiez votre travail ou que vous fassiez des courses, CheckIt vous aide à rester organisé et à suivre vos tâches en toute simplicité.</p>
            </div>
        </div>
    </div>
    
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Gardez vos listes avec vous !</h1>
                <p class="lead">Bienvenue sur CheckIt, votre nouvelle plateforme de création de listes de tâches en ligne. Avec CheckIt, vous pouvez facilement créer des listes de choses à faire pour tous les aspects de votre vie. Que vous planifiez votre prochain voyage, que vous organisiez votre travail ou que vous fassiez des courses, CheckIt vous aide à rester organisé et à suivre vos tâches en toute simplicité.</p>
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/images/panneausolaire_1.jpg" class="d-block mx-lg-auto img-fluid" alt="zoo" width="500" loading="lazy">
            </div>
        </div>
    </div>
    </section>

    <section class="p-5 text-center" id="temoignages">
              <div class="container">
              <h2 class="mb-5">LES SERVICES</h2> 
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators mb-0" style="bottom: -30px;">

                  <!-- Mettre les indicateurs -->
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="p-y3">
                      <p class="description"><i>Un guide pour visite des habitats est offert.</i></p>
                      <p class="name">Visite des habitats</p>
                    </div>
                    <img src="assets/images/guide.jpg" class="d-block m-auto img-thumbnail w-50" alt="guide">
                  </div>

                  <div class="carousel-item">
                    <div class="p-y3">
                      <p class="description"><i>Nous proposons aussi une visite du zoo en petit train.</i></p>
                      <p class="name">Le petit train</p>
                    </div>
                    <img src="assets/images/petittrain.jpg" class="d-block m-auto img-thumbnail w-50" alt="train">
                  </div>

                  <div class="carousel-item">
                    <div class="p-y3">
                      <p class="description"><i>Le site dispose d'un restaurant (Tél. direct 0000 00 00 00).</i></p>
                      <p class="name">Le resto</p>
                    </div>
                    <img src="assets/images/resto.jpg" class="d-block m-auto img-thumbnail w-50" alt="resto">
                  </div>
                </div>
                
                <!-- Mettre les commandes -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <a class="btn btn-danger" href="#accueil" id="scroll-top-button">
              <i class="bi bi-chevron-up"></i>
            </a>

            
            </section>


<?php
    require_once 'templates/footer.php';
?>