<?php
require_once "templates/header.php";
require_once "lib/habitat.php";
require_once "lib/service.php";

$abris = getHabitats($pdo);
$services = getServices($pdo);
?>


    <section id="accueil">
        <div class="container col-xxl-8 px-4 py-5 ">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5" >
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="assets/images/site/zoo.jpg" class="d-block mx-lg-auto img-fluid rounded" alt="zoo" width="500" loading="lazy">
                </div>
                <div class="col-10 col-sm-8 col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-4">Bienvenue sur notre page !</h1>
                    <h5 class="fw-bold">Vous allez découvrir, si vous êtes amené à venir visiter notre site, plein d'animaux
                      qui vivent dans un espace plutôt naturel, ainsi toutes les autres activités et services que nous vous proposons.</h5>
                </div>

            </div>
        </div>
        </section>

        <section>
        <div class="container col-xxl-8 px-4 py-3">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-4">Être le plus écologique possible !</h1>
                    <h5 class="fw-bold">Nos espaces d'acceuil c'est à dire le parking, l'espace de réception, le restaurant..., sont équipés avec des panneaux solaires et la cuisine se fait le plus au feu de bois.
                    ,lors des différents visites, du rafraichissement simple sont prévues gratuitement, pour préserver le plus possible des déchets sur le parc.
                    </h5>
                </div>
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="assets/images/site/panneausolaire_1.jpg" class="d-block mx-lg-auto img-fluid rounded" alt="zoo" width="500" loading="lazy">
                </div>
            </div>
        </div>
        </section>

        <section class="p-5 text-center" id="habitats" >
          <h2 class="display-5 fw-bold lh-1 mb-3 text-warning">LES HABITATS</h2>
          <div class="row text-center m-5">
            <?php foreach ($abris as $abri) { 
              include ('templates/part_habitat.php');
              } ?> 
           </div> 
        </section>

        <section class="p-5 text-center" id="services">
            <div class="container">
              <h2 class="display-5 fw-bold lh-1 mb-3 text-primary">LES SERVICES</h2>
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

              <!-- Mettre les indicateurs -->
                <div class="carousel-indicators mb-0" style="bottom: -30px;">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

            <div class="carousel-inner">
            <?php include ('templates/part_service.php')?>;
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
            <a href="#accueil" class="btn btn-outline-danger" id="scroll-top-button">
                <i class="bi bi-chevron-up"></i>
            </a>
        </section>


<?php
  require_once 'templates/footer.php';
?>