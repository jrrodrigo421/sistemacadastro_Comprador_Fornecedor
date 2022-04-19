    <?php

    include('protect.php');
    include('conexao.php');

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, Blue, White);
        }
        div {
            background-color: rgba(0,0,0,0.5);
            position: absolute;
            top: 20%;
            left: 35%;
            
            padding: 80px;
            border-radius:15px;
            color: white;

        }

    </style>
    <div>
        BEM VINDO ao Painel Principal, <?php echo$_SESSION['nome'] ?>. 
        </p>
                <p>
                    <button type="submit" class="btn btn-primary"><a href="./produtos.php">PRODUTOS</a></button><br><br><br>

                </p>
    
    </div>
        <p>
            <a href="logout.php">Sair</a>

        </p>
<body>
</body>
</html>