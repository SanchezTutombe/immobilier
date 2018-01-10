<?php
    require_once('includes/layout/header.php');
    require_once ('includes/database.php');

    if (!isset($_GET['adverts']) OR empty((int)$_GET['adverts'])) {
        header('Location: index.php');
    }
   
    $urlPage = "profilmaison.php?maison=".$_GET['adverts']."&page=";

    $maisonQuery = $dbh->prepare('SELECT * FROM adverts WHERE id=:id');
    $maisonQuery->bindValue(':id', (int)$_GET['adverts'], PDO::PARAM_INT);
    $maisonQuery->execute();
    $maison = $maisonQuery->fetch();

    if (!$maison) {
        header('Location: index.php');
    }
?>

<section class="row col-md-7 m-auto">
    <h3 class="col-sm-12 bg-dark text-white p-1"><?php echo $maison['id']; ?></h3>
    
    <div class="col-md-6 p-0 mb-3">
        <img src="img/upload/biens/<?php echo $maison['image']; ?>" alt="<?php echo $maison['nom']; ?>" title="<?php echo $maison['nom']; ?>" class="img-fluid">
    </div>
    
    <ul class="list-group col-md-6">
        <li class="list-group-item">Type d'annonce : <?php echo $maison['advert_type']; ?></li>
        <li class="list-group-item">Date de mise en vente : <?php echo $maison['sale_date']; ?></li>
        <li class="list-group-item">Type d'annonce : <?php echo $maison['advert_type']; ?></li>
        <li class="list-group-item">Titre : <?php echo $maison['title']; ?></li>
        <li class="list-group-item">Ville : <?php echo $maison['ville']; ?></li>
        <li class="list-group-item">Taille : <?php echo $maison['area']; ?></li>
        <li class="list-group-item">Nombre de pièces : <?php echo $maison['room']; ?></li>
        <li class="list-group-item">Nombre de chambres : <?php echo $maison['bedroom']; ?></li>
        <li class="list-group-item">Prix : <?php echo $maison['price']; ?></li>
    </ul>
    
    <h5 class="mt-3">Description :</h5>
    <p class="text-justify"><?php echo $maison['description']; ?></p>


</section>
<?php require_once('includes/layout/footer.php'); ?>

