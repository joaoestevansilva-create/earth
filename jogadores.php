<?php

include 'includes/conexao.php';

$dados = $conn->query("
SELECT *
FROM jogadores
");

?>

<div class="container py-5">

<div class="row">

<?php while($j = $dados->fetch_assoc()) { ?>

<div class="col-md-3">

<div class="card shadow mb-4">

<img src="<?= $j['foto']; ?>" class="card-img-top">

<div class="card-body">

<h5><?= $j['nome']; ?></h5>

<p><?= $j['posicao']; ?></p>

</div>

</div>

</div>

<?php } ?>

</div>

</div>