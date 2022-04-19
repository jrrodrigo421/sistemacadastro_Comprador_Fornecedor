<?php
include("conexao.php");

if(isset($_POST['CNPJ']) || isset($_POST['senha'])) {

    if(strlen($_POST['CNPJ']) == 0) {
        echo "Preencha seu CNPJ";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $CNPJ = $mysqli->real_escape_string($_POST['CNPJ']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM fornecedores WHERE CNPJ = '$CNPJ' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na Execução do Cód SQL: " . $mysqli->error);   
        
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {

                session_start();

            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painelfornecedor.php");


        } else {
            echo "Falha ao Logar, CNPJ ou senha Incorretos";
        }

    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, Blue, White);
        }
        div {
            background-color: rgba(0,0,0,0.9);
            position: absolute;
            top: 20%;
            left: 35%;
            
            padding: 80px;
            border-radius:15px;
            color: white;

        }
        button {

            background-color: dodgerblue;
            border: none;
        }
    </style>
</head>
<body>
    <div>
        <h1>Acesse sua conta: </h1>
        <form   action="" method="POST">
            <p>
                <label>CNPJ  </label>
                <input type="text" name="CNPJ">
            </p>
            <p>
                <label>Senha</label>
                <input type="Password" name="senha">
                <p>
                    <button type="submit" class="btn btn-primary">ENTRAR</button>
                </p>
                <p>
                    <button type="submit" class="btn btn-primary"><a href="./cadastrofornecedor.php">FAÇA SEU CADASTRO</a></button><br><br><br>

                </p>
    </div>
</body>
</html>