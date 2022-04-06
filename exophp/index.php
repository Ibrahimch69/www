<?php //CONNEXION BDD
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=mychat-comments;charset=utf8' , 'root', '');
}
catch (\Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}



    $req = $bdd-> prepare('SELECT * FROM users');
    $req-> execute();

      while($donnes = $req->fetch()){
          echo 'Bonjour '.$donnes['pseudo'];
      } ?>
<!--
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="verif.php" method="POST">
    <input type="text" name="email" placeholder="email"/></br></br>
    <input type="text" name="nom" place  holder="nom"/></br></br>
    <input type="prenom" name="prenom" placeholder="prenom"/></br></br>
    <input type="text" name="date" placeholder="date de naissance"/></br></br>
    <input type="text" name="code" placeholder="codepostal"/></br></br>
  <button type="submit">envoyer</button>
</form>
</body>
</html>
-->