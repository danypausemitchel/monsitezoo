
<?php
require_once 'templates/header.php';
?>


    <section id="accueil">
        <div class="container col-xxl-8 px-4 py-5 ">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5" >
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="assets/images/zoo.jpg" class="d-block mx-lg-auto img-fluid" alt="zoo" width="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Bienvenue sur notre page !</h1>
                    <p class="lead">Vous allez découvrir si vous êtes amené à venir visiter notre site, plein d'animaux
                      qui vivent dans espace plutôt naturel, ainsi toutes les autres activités et services que nous proposons.</p>
                </div>
                <table class="table table-primary table-striped w-50 mx-auto">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        </section>

        <section>
        <div class="container col-xxl-8 px-4 py-3">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Être le plus écologique possible !</h1>
                    <p class="lead">Nos espaces d'acceuil c'est à dire parking, le bureau d'accueil, le restaurant..., sont équipés avec des panneaux solaires et la cuisine se fait le plus au feu de bois.</p>
                </div>
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="assets/images/panneausolaire_1.jpg" class="d-block mx-lg-auto img-fluid" alt="zoo" width="500" loading="lazy">
                </div>
            </div>
        </div>
        </section>

        <section>
        <div class="row text-center m-5">
          <div class="col-md-4 my-2">
                <div class="card" >
            <img src="assets/images/habitatelephant.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
          </div>

          <div class="col-md-4 my-2">
          <div class="card" >
            <img src="assets/images/habitatlion.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
           </div> 
            </div>
            
            <div class="col-md-4 my-2">
          <div class="card" >
            <img src="assets/images/habitatsavane.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
           </div> 
            </div>

  

        </section>
        <section class="p-5 text-center" id="services">
            <div class="container">
              <h2 class="display-5 fw-bold lh-1 mb-5">LES SERVICES</h2>
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
                      <p class="description"><i>Un guide pour visiter les habitats est proposé gratuitement.</i></p>
                      <h3 class="name">Visite des habitats</h3>
                    </div>
                    <img src="assets/images/guide.jpg" class="d-block m-auto img-thumbnail w-50" alt="guide">
                  </div>

                  <div class="carousel-item">
                    <div class="p-y3">
                      <p class="description"><i>Nous proposons aussi une visite du zoo en petit train.</i></p>
                      <h3 class="name">Le petit train</h3>
                    </div>
                    <img src="assets/images/petittrain.jpg" class="d-block m-auto img-thumbnail w-50" alt="train">
                  </div>

                  <div class="carousel-item">
                    <div class="p-y3">
                      <p class="description"><i>Le site dispose d'un restaurant (Tél. direct 0000 00 00 00).</i></p>
                      <h3 class="name">Le resto</h3>
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
            <a href="#accueil" class="btn btn-danger" id="scroll-top-button">
                <i class="bi bi-chevron-up"></i>
            </a>                          
        </section>


<?php
require_once 'templates/footer.php';
?>