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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Europa Cup 2026/27</h1>
    <ul>
        <?php foreach ($teams as $name => $info): ?>
            <li> <?= $name ?>
                <img src="<?= ($info['logo_uefa']) ?>" alt="">
            </li>
        <?php endforeach; ?>
    </ul>
</body>