<?php
	$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');
    if(isset($_POST['forminscription'])) 
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = sha1($_POST['mdp']);
        if(!empty($_POST['pseudo']) AND !empty($_POST['mail'])AND !empty($_POST['mdp']))
        {
                $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                   
            $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
            $insertmbr->execute(array($pseudo, $mail, $mdp));
            $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
            header('location:index1.php');
        } 
        
        
        else {
            $erreur = "mail deja utilise";
        }
               }else{
             
                   $erreur =" tous les champs doivenr etre completes";
               }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>blog</title>
    </head>
    <body class="marbre">
        <main class="mt-5 pt-5">
            <div class="container d-flex justify-content-center">
                <form class="d-flex flex-column p-5 my-5" action="" method="post">

                        <input class="form-control my-3" placeholder="Pseudo"id="pseudo" name="pseudo" type="text">
                        <input class="form-control my-3" placeholder="Email"id="mail" name="mail" type="email">
                        <input class="form-control my-3"type="password"id="mdp" name="mdp" placeholder="mot de passse"/>
                        <button type="submit" name="forminscription" > envoyer </button>
                        <?php
                    if(isset($erreur)){
                        echo '<font color=red>'. $erreur.'</font>';
                    }
                    ?>
                    </form>
                
            </div>
        </main>
        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>