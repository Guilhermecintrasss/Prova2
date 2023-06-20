<?php 
        include('conexao.php');
        $id_agenda = $_GET['id_agenda'];//pega o valor do id_usuario para usar como parametro no update
        $sql = "SELECT * FROM agenda where id_agenda=$id_agenda";
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
        value="<?php echo $row['id_agenda']?>">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" 
            value="<?php echo $row['nome']?>">
        </div>
        <input type="submit" value="Salvar"> 
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>