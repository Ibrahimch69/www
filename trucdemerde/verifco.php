<?php
    session_start();

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=bdd', 'root', '');
    }  catch (\Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

        if(isset($_POST['submit'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = sha1($_POST['password']);
        if(!empty($pseudo) AND !empty($password)) {
            $select = $bdd->prepare("SELECT * FROM uses WHERE pseudo = ? AND password = ?");
            $select->execute(array($pseudo, $password));
            $userexist = $select->rowCount();
            if($userexist == 1) {
                header('location:index.html');
            }else{
                echo "mot de passe ou mail incorect";
            }
        }else{
                echo "Tous les champs doivent être complétés";
        }
    }
?>