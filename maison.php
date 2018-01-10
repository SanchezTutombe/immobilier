<?php
    require_once('includes/layout/header.php');
    require_once ('includes/database.php');
?>

<div class="d-flex flex-row raw col flex-wrap">
    <?php
        
        $categoriesQuery = $dbh->query("SELECT * FROM adverts ORDER BY title ASC");
        $categories = $categoriesQuery->fetchAll();
    
        
       foreach ($categories as $category) {
            
            echo"
                <a href=\"profilmaison.php?biens=".$category['id']."\" class=\"col-md-2 mt-3\">
                    <img src=\"img/upload/biens/".$category['picture']."\" alt=\"".$category['title']."\" title=\"".$category['title']."\" class=\"img-thumbnail img-fluid\">
                </a>
            ";
        }
    ?>
</div>


<?php require_once('includes/layout/footer.php'); ?>
