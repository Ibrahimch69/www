<?php
session_start();
	$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');
    if(isset($_POST['formconnexion'])) {
        $mailconnect = htmlspecialchars($_POST['mailconnect']);
        $mdpconnect = sha1($_POST['mdpconnect']);
        if(!empty($mailconnect) AND !empty($mdpconnect)) {
            $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
            $requser->execute(array($mailconnect, $mdpconnect));
            $userexist = $requser->rowCount();
            if($userexist == 1) {
                header('location:index1.php');
            }else{
                $erreur="mot de passe ou mail incorect";
            }
        
        
        }else{
                $erreur="Tous les champs doivent être complétés";
        }
    }
   ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <body class="marbre">
        <main class="mt-5 pt-5">
            <div class="container d-flex justify-content-center">
                    <form class="d-flex flex-column p-5 my-5" action="" method="post">
                        <input class="form-control my-3" type="text" name="mailconnect" placeholder="nom"/>
                        <input class="form-control my-3"type="password" name="mdpconnect" placeholder="mot de passse"/>

                        <a class="white" href="inscription.php">Inscrivez-vous si ce n’est pas encore fait</a>
                        <button type="submit"  name="formconnexion" >envoyer</button>
                      <?php
                        if(isset($erreur)){
                        echo '<font color=red>'. $erreur.'</font>';
                    }
                    ?>
                    </form>
            </div>
        </main>
     
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>