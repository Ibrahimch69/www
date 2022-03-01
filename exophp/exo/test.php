<?php 
session_start();

class User{

    public $email;
    public $password;

    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
        $this->role = 0;
    }

    public function get_email() {
       return $this->email;
    } 
    public function get_password() {
       return $this->password;
    }

    public function get_role() {
       return $this->role;
    }

}

$user = new User("ibrahim@gmail.com", "123456789", 1);
$user2 = new User("idris@gmail.com", "123456789");





//setcookie('toto','salut',time()+3600*24*31);
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];


if ($_SESSION['password']!=="123456789") {
    echo "mtp incorect";
}
if ($_SESSION['email']!=="ibrahim@gmail.com") {
    echo "mail incorect";
}
if ($_SESSION['password']=="123456789"&&$_SESSION['email']=="ibrahim@gmail.com") {
 require("citation.php"); 
 }


 
/* echo date("d/m/y");
 echo "voila mon cookie".  $_COOKIE['toto'];*/
 