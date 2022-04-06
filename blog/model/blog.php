<?php 
session_start();

class User{

    public $email;
    public $password;

    public function __construct($email, $password,$role){
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
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
$user2 = new User("idris@gmail.com", "123",0);





//setcookie('toto','salut',time()+3600*24*31);

$_SESSION['password'] = $_POST['password'];


if ($_POST['password']!==$user->get_password()) {
    echo "mdp incorect";
}
if ($_POST['email']!==$user->get_email()) {
    echo "mail incorect";
}

if ($_POST['password']!==$user2->get_password()) {
    echo "mdp incorect";
}
if ($_POST['email']!==$user2->get_email()) {
    echo "mail incorect";
}
if ($_POST['password']== $user->get_password()&&$_POST['email']==$user->get_email()) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['role'] = $user->get_role();
    header("location:citation.php"); 
}
if ($_POST['password']== $user2->get_password()&&$_POST['email']==$user2->get_email()) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['role'] = $user2->get_role();
    header("location:citation2.php"); 
}
/* echo date("d/m/y");
 echo "voila mon cookie".  $_COOKIE['toto'];*/
