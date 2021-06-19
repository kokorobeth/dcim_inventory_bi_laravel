<?php 
class Person {
  public $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public function hello() {
    echo "Hallo, nama saya ".$this->name;
  }
}

$male = new Person('Aziz');
$female = new Person('Anggie');

?>

<p><?php echo $male->name; ?></p>
<p><?= $female->name; ?></p>