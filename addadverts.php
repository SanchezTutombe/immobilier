<?php require_once ('includes/layout/header.php');

    if (!empty($_POST['name'])) {
        $name = !empty($_POST['name']) ? htmlentities($_POST['name']) : '';
        $city = !empty($_POST['city']) ? htmlentities($_POST['name']) : '';
        $zipCode = !empty($_POST['zipCode']) ? htmlentities($_POST['zipCode']) : '';
        $price = !empty($_POST['price']) ? htmlentities($_POST['price']) : '';
        $descritpion = !empty($_POST['descritpion']) ? htmlentities($_POST['descritpion']) : '';
        $type = !empty($_POST['type']) ? htmlentities($_POST['type']) : '';

        $requete = $dbh->prepare('INSERT INTO adverts (`title`, `ville`, `price`, `description`, `advert_type`, `sale_date`, `user_id`) VALUES (:title, :ville, :price, :description, :advert_type, NOW(), :user_id)');
        $requete->bindValue(':title', $name, PDO::PARAM_STR);
        $requete->bindValue(':ville', $city, PDO::PARAM_STR);
        $requete->bindValue(':price', $price, PDO::PARAM_INT);
        $requete->bindValue(':description', $descritpion, PDO::PARAM_STR);
        $requete->bindValue(':advert_type', $type, PDO::PARAM_STR);
        $requete->bindValue(':user_id', $_SESSION['Users']['id'], PDO::PARAM_INT);
        if ($requete->execute()) {
            $lastId = $dbh->lastInsertId();
            header('Location:advert.php?id=$'.$lastId);
        }
    }
?>

    <div class="container">
        <form method="post" class="row">
            <div class="form-group col-3">
                <label for="Titre">Nom de l'annonce :</label>
                <input name="name" type="text" class="form-control" id="Titre" placeholder="Titre" value="<?php echo $title = !empty($advert) ? $advert['title'] : ''; ?>" required>
            </div>
            <div class="form-group col-3">
                <label for="Titre">Ville :</label>
                <input name="city" type="text" class="form-control" id="Titre" placeholder="Ville" value="<?php echo $title = !empty($advert) ? $advert['ville'] : ''; ?>" required>
            </div>
            <div class="form-group col-3">
                <label for="Titre">Code postal :</label>
                <input name="zipCode" type="number" class="form-control" id="Titre" placeholder="Code postal" value="<?php echo $title = !empty($advert) ? $advert['zip_code'] : ''; ?>" required>
            </div>
            <div class="form-group col-3">
                <label for="Prix">Prix :</label>
                <input name="price" type="number" class="form-control" id="Prix" placeholder="Prix" value="<?php echo $title = !empty($advert) ? $advert['price'] : ''; ?>" required>
            </div>
            <div class="form-group col-12">
                <label for="description">Description :</label>
                <textarea name="description" class="form-control" id="description" rows="3" required><?php echo $title = !empty($advert) ? $advert['description'] : ''; ?></textarea>
            </div>
            <div class="form-group col-4">
                <label for="type">Type :</label>
                <select name="type" id="Type" class="form-control"  required>
                    <option disabled selected>Type d'annonce</option>
                    <option value="location">Location</option>
                    <option value="achat">Achat</option>
                </select>
            </div>
            <div class="col-8 text-right mt-4">
                <button class="btn btn-success" type="submit">Ajouter</button>
            </div>
        </form>
    </div>

<?php require_once ('includes/layout/footer.php');