<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
require('index.php');

$req = $bdd->prepare('SELECT * FROM post');
$req->execute();

while($result= $req->fetch()){
     echo $result["id"]."<br>";
     echo $result["titre"]."<br>";
}
?>

</body>
</html>