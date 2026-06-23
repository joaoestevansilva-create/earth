<?php

include 'includes/conexao.php';

$sql = "
SELECT nome,titulos
FROM equipes
ORDER BY titulos DESC
";

$result = $conn->query($sql);

?>

<table class="table table-striped">

<thead>
<tr>
<th>Posição</th>
<th>Equipe</th>
<th>Títulos</th>
</tr>
</thead>

<tbody>

<?php
$i=1;

while($row = $result->fetch_assoc()){
?>

<tr>
<td><?= $i++; ?></td>
<td><?= $row['nome']; ?></td>
<td><?= $row['titulos']; ?></td>
</tr>

<?php } ?>

</tbody>

</table>