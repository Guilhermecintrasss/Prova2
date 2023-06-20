<?php 
include("conexao.php");

if($consulta == 'st') {
    $sql ="select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
} else if($consulta == 'ts') {
    $sql ="select sum(valor) valor from fluxo_caixa where tipo = 'saida";
} else if($consulta == 'te'){
    $sql ="select sum(case when tipo = 'entrada' then valor else 0 end) - 
    sum(case when tipo = 'saida' then valor else 0 end) as valor from fluxo_caixa";
}
echo "<a href='index.php'>Voltar</a>";
?>