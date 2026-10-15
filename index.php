<?php
require 'data.php';
?>

<h1>Europa Cup 2026/27</h1>
<ul>
    <?php foreach ($teams as $name => $info): ?>
        <li> <?= $name ?>
            <img src="<?= htmlspecialchars($info['logo_uefa']) ?>" alt="">
        </li>
    <?php endforeach; ?>
</ul>