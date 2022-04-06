<?php
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
} catch (\Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if ( isset( $_POST['submit'] ) ) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];    
    $pseudo = $_POST['pseudo'];   
    $question = $_POST['question'];   
    $reponse = $_POST['reponse']; 
    $password = $_POST['password'];

    header('location: connexion.php');
    $req = $bdd->prepare("INSERT INTO uses(nom, prenom, pseudo, question, reponse, password) VALUES (?,?,?,?,?,?)");
    $req->execute(array(
        $nom,
        $prenom,
        $pseudo,
        $question,
        $reponse,
        $password
    ));
}
?>