<?php
session_start(); require "includes/layout/header.php";
?>

<form action="#" method="post" class="row col-md-3 m-auto border p-3">

<?php

if(isset($_POST['login']))
{
    $login = htmlentities($_POST['login']);

    $requete = $dbh->prepare("SELECT * FROM users WHERE pseudo = :login LIMIT 1");
    $requete->bindValue(':login', $login, PDO::PARAM_STR);
    $requete->execute();
    $reponse = $requete->fetch(PDO::FETCH_ASSOC);

    if(password_verify($_POST['password'], $reponse['password']))
    {
        $_SESSION['Users'] = $reponse;
        header("Location:index.php");
    }
    echo '<div class="alert alert-danger text-center col" role="alert">Connection impossible</div>';
}
?>

<body> 
<div align="center">
<div class="wrapper">
   
    <form class="form-signin">       
      <h2 class="form-signin-heading">Connectez vous </h2>
      <input type="text" class="form-control" name="login" placeholder="Email Address" required="" autofocus="" />
<br>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
<br>  
      <label class="checkbox">
<br>
      <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Se souvenir de moi 
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>   
    </form>
  </div>
</body>


<?php require "includes/layout/footer.php";?>