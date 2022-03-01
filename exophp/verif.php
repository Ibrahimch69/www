<?php 
session_start();


$_SESSION['email'] = $_POST['email'];
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['code'] = $_POST['code'];
$_SESSION['date'] = $_POST['date'];




if (empty($_SESSION['nom'])) {
    echo "nom incorect";
}else{
    echo "salut ".$_SESSION['nom'] ;
}
if (empty($_SESSION['prenom'])) {
    echo " prenom incorect";
 } else{
     echo" ".$_SESSION['prenom']. '<br>' ;
 } 

if (empty($_SESSION['email'])) {
    echo " mail incorect";
}else{
    echo " ton mail est ".$_SESSION['email'].'<br>';
}


if (empty($_SESSION['code'])) {
    echo " cp incorect";
}else{
    echo " tu viens du  ".$_SESSION['code']  ;
} 
if (empty($_SESSION['date'])) {
    echo " date incorect";
}else{
    echo "tu est ne le  ".$_SESSION['date'] ;
}
echo "voila mon cookie".  $_COOKIE['toto'];
/*
echo date("d/m/y"); 
date_default_timezone_set('Europe/Amsterdam'); 
$DateAndTime = date('m-d-Y h:i:s a', time());  
echo  $DateAndTime;*/
