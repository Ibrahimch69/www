<?php
	$bdd = new PDO('mysql:host=localhost;dbname=baseded', 'root', '');

    if(isset($_POST['formconnexion'])) {
    //    $id = htmlspecialchars($_POST['id']);
        $titre = htmlspecialchars($_POST['titre']);
        $content = htmlspecialchars($_POST['content']);
        $author = htmlspecialchars($_POST['author']);
        $req = $bdd->prepare("INSERT INTO post(titre,content, author) VALUES(?, ?, ?)");
        $req->execute(array($titre, $content, $author));

    };

    ?>
 	<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div>
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="">
           
            <input type="titre" name="titre" placeholder="titre" />
            <input type="content" name="content" placeholder="content" />
            <input type="author" name="author" placeholder="author" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php

         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
         
      </div>
   </body>
</html>