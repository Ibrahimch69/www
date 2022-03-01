<?php
class jeux {
  // Properties
  public $name;
  public $puissance;
  public $laram; 

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_puissance($puissance) {
    $this->puissance = $puissance;
  }
  function get_puissance() {
    return $this->puissance;
  }
    function set_laram($laram) {
    $this->laram = $laram;
  }
  function get_laram() {
    return $this->laram;
  }
  	
}


$apple = new jeux();
$apple->set_name('ps5');
$apple->set_puissance('10');
$apple->set_laram('16go');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "puissance: " . $apple->get_puissance();
echo "<br>";
echo "ram :". $apple->get_laram();
?>