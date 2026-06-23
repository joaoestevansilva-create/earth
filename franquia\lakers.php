<?php

include '../includes/conexao.php';

$time = $conn->query("
SELECT *
FROM equipes
WHERE nome='Los Angeles Lakers'
")->fetch_assoc();

?>

<h1><?= $time['nome']; ?></h1>

<img src="<?= $time['logo']; ?>">

<p><?= $time['historia']; ?></p>

<ul>
<li>Títulos: <?= $time['titulos']; ?></li>
<li>Arena: <?= $time['arena']; ?></li>
<li>Fundação: <?= $time['fundacao']; ?></li>
</ul>