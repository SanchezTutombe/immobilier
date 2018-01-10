<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=immobilier', 'root', '');
?>

    <html>

    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <link rel="stylesheet" href="css/style.css">
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/zoombox/zoombox.js"></script>
        <link href="js/zoombox/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="js/gallerie.js"></script>
        <script type="text/javascript">
        jQuery(function($){
            $('a.zoombox').zoombox();
        });
        </script>
    </head>

    <body>

        <header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Delprat<br>Immobilier</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Nos biens
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="maison.php">Maison</a>
          <a class="dropdown-item" href="appart.php">Appartement</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="signin.php">Connexion</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="signup.php">Inscription</a>
      </li>
       
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
  </div>
</nav>

        </header>
