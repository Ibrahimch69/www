<?php
namespace MonSpace;

    class PDO{
        public function prepare(){
            echo "Ceci est une classe personnalisée!!";
        }
    }

    $classPdo = new PDO();
    $classPdo->prepare();

    echo "</br>";


$classPdo = new PDO("test");
    $classPdo->prepare();


    echo __NAMESPACE__;

?>