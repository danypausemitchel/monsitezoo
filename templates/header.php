<?php
require_once('lib/config.php');
require_once('lib/pdo.php');

$page = basename($_SERVER['SCRIPT_NAME']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/styles.css">
    <title>zoojosé</title>
</head>

<body>
<header>
      <div id="navbarSite" class="position-fixed navbar navbar-expand-lg bg-warning w-100 fs-4 fw-bold">
        <div class="container-fluid  elementNav fw-bold text-success">
                <i class="bi bi-gitlab ms-5"></i>
          <div class=ms-5>ARCADIA</div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
            <ul class="nav nav-pills">
              <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <?php foreach ($menu as $key => $value) { ?>
                  <li class="nav-item"> <a href="<?=$key; ?>>" class="nav-link <?php if ($page === $key) { echo 'active'; } ?>"><?=$value ;?>
                  </a></li>
              <?php } ?>
                </div>
            </ul>
        </div>

        
        <div class="col-md-3 text-end">
           <a href="logout.php" class="btn btn-outline-danger me-2">Espace professionnel</a>
        </div>
      </nav>
  </header>
  <main class="main-content-website" >
