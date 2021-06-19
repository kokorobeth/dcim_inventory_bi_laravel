<?php require_once('data.php'); ?>

<h2>Indonesian People</h2>

<?php foreach($persons as $p): ?>
  <h3><?= $p->name; ?></h3>
  <p><?= $p->age; ?></p>
  <p><?= $p->address; ?></p>
  <hr>

<?php endforeach ?>