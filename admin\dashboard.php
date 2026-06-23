<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location: login.php");
exit;
}
?>
assets/js/darkmode.j
<h1>Painel Administrativo</h1>

<ul>

<li>
<a href="equipes.php">
Gerenciar Equipes
</a>
</li>

<li>
<a href="jogadores.php">
Gerenciar Jogadores
</a>
</li>

<li>
<a href="campeoes.php">
Gerenciar Campeões
</a>
</li>

</ul>