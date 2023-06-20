<?php 
        include('conexao.php');
        $id_agenda = $_GET['id'];//pega o valor do id_usuario para usar como parametro no update
        $sql = "SELECT * FROM fluxo_caixa where id=$id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Agendamentos - MEDVET</h1>
    <form action="altera_agenda_exe.php" method="post">
        <input name="id" type="hidden" 
        value="<?php echo $row['id']?>">
        <div>
            <label for="data">Data: </label>
            <input type="date" name="data" id="data" 
            value="<?php echo $row['data']?>">
        </div>
        <div>
            <label for="tipo">Tipo: </label>
            <input type="text" name="tipo" id="tipo" 
            value="<?php echo $row['tipo']?>">
        </div>
        <div>
            <label for="valor">Valor: </label>
            <input type="number" name="valor" id="valor" 
            value="<?php echo $row['valor']?>">
        </div>
        <div>
            <label for="hist">Histórico: </label>
            <input type="text" name="hist" id="hist" 
            value="<?php echo $row['historico']?>">
        </div>
        <div>
            <label for="cheque">Cheque: </label>
            <select name="cheque">
                <option value="sim" <?php if($row['cheque'] == 'sim'){echo "selected";}?>>Sim</option>
                <option value="nao" <?php if($row['cheque'] == 'nao'){echo "selected";}?>>Não</option>
            </select>
  
        </div>
        
        <input type="submit" value="Salvar"> 
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>