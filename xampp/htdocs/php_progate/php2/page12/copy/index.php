<?php include('data.php'); ?>


<h2>Indonesian Peple</h2>

<h3><?php foreach($persons as $p): ?></h3>
<p><?= $p->getName(); ?></p>
<p><?= $p->age; ?></p>
<p><?= $p->address; ?></p>
<hr>
<p><?php endforeach ?></p>