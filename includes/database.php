<?php

require_once ('auth.php');

try 
{
    $dbh = new PDO('mysql:host='.HOST.';charset=utf8;dbname='.immobilier, USER, PASSWORD);
} catch (PDOException $e) 
    
{
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}