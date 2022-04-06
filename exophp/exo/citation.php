<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<?php 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_destroy(); 
    header('location:index1.php');
 }
 ?>

<form action="citation.php" method="POST">
    <button type="submit">deco</button>
</form> 
<?php session_start(); 
  
?>
<?php echo "bonjour ".$_SESSION['email']; ?> <br>






<div id="myDIV" class="header">
 
  <input type="text" id="myInput" placeholder="Title...">
  <span onclick="newElement()" class="addBtn">ajoute un citation</span>
</div>

<ul id="myUL">
</ul>

</body>
</html>