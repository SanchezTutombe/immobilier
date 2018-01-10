<?php
require "includes/layout/header.php";

if(isset($_GET['rechercher']))
{
    $recherche = $_GET['recherche'];
    $sql = "SELECT * FROM biens, adresse
            WHERE biend.id_adr = adresse.id_adr ";
    
    if(isset($_GET['min']))
    {
        $sql .= "AND prix > " .$GET['min']." ";
    }
    
     if(isset($_GET['max']))
    {
        $sql .= "AND prix < " .$GET['max']." ";
    }
    
    if(isset($_GET['max']))
    {
        $sql .= "AND commune LIKE '%" .$recherche. "%' ";
    }
    
    $requete = $bdd->query("SELECT * FROM biens WHERE commune LIKE '%" .$recherche."%'");
    
    while($reponse = $requete->fetch())
    {
        echo $reponse['description'];
    }
}
?>



 

<?php require "includes/layout/footer.php";?>