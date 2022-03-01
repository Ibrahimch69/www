<?php 
$chiffre = 13 ;
echo match ($chiffre){
    2,4,6,8 => "il s'agit d'un nombre paire ",
    3,5,7,9 => "il s'agit d'un nombre impaire ",
    default => 'je sais pas mdr '
};
 /*$name;
 $username = isset($name) ? $name : 'ibrahim';
 echo $username;*/
 $name = "salut";
 $username = $name ?? 'ibrahim';
 echo $username;  