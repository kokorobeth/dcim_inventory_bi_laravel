<?php 
class Country {
  public $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public function hello() {
    echo "Hallo, nama saya ".$this->name;
  }
}

$indo = new Country('Indonesia');
$brazil = new Country('Brazil');
$spain = new Country('Spanyol');
$argentina = new Country('Argentina');

$countries = array($indo, $brazil, $spain, $argentina);
?>

<h2>The name of Countries</h2>

<p><?php foreach($countries as $country): ?></p>
<p><?= $country->name ?></p>
<p><?php endforeach ?></p>