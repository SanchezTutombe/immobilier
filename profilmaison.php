<?php
    require_once('includes/layout/header.php');
    require_once ('includes/database.php');

    if (!isset($_GET['biens']) OR empty((int)$_GET['biens'])) {
        header('Location: index.php');
    }
   
    $urlPage = "profilmaison.php?maison=".$_GET['biens']."&page=";

    $maisonQuery = $dbh->prepare('SELECT * FROM biens WHERE id=:id');
    $maisonQuery->bindValue(':id', (int)$_GET['biens'], PDO::PARAM_INT);
    $maisonQuery->execute();
    $maison = $maisonQuery->fetch();

    if (!$maison) {
        header('Location: index.php');
    }
?>

<section class="row col-md-7 m-auto">
    <h3 class="col-sm-12 bg-dark text-white p-1"><?php echo $maison['nom']; ?></h3>
    <div class="col-md-6 p-0 mb-3">
        <img src="img/upload/biens/<?php echo $maison['image']; ?>" alt="<?php echo $maison['nom']; ?>" title="<?php echo $maison['nom']; ?>" class="img-fluid">
    </div>
    <ul class="list-group col-md-6">
        <li class="list-group-item">Taille : <?php echo $maison['taille']; ?></li>
        <li class="list-group-item">Nombre de pièces : <?php echo $maison['nbpieces']; ?></li>
        <li class="list-group-item">Prix : <?php echo $maison['prix']; ?></li>
    </ul>
    <h5 class="mt-3">Description :</h5>
    <p class="text-justify"><?php echo $maison['description']; ?></p>


</section>
<?php require_once('includes/layout/footer.php'); ?>

