<?php
require 'header.php';
require 'data.php';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Some Teams</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Europa Cup 2026/27</h1>
    <div class="cards">
        <?php foreach ($teams as $name => $info): ?>
            <div class="card">
                <p>
                    <?= $name ?>
                </p>
                <img src="<?= ($info['logo_uefa']) ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
</body>