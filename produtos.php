<?php

include('protect.php');
include('conexao.php');


$sql =  "SELECT * FROM produtos ORDER BY id DESC";
$result = $mysqli->query($sql);
//print_r($result);

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

        <p>
            <a href="logout.php">Sair</a>

        </p>
<div>
</head>

<body>
    
<table class="table">
  <thead>
      <tr>
        
       
        <th scope="col">nome</th>
        <th scope="col">peso</th>
        <th scope="col">valor</th>
      </tr>
  </thead>
  <tbody>
    <?php
    while($user_data = mysqli_fetch_assoc($result))
    {
        echo"<tr>";
        echo"<td>".$user_data['id']."</td>";
        echo"<td>".$user_data['nome']."</td>";
        echo"<td>".$user_data['peso']."</td>";
        echo"<td>".$user_data['valor']."</td>";

    }
    ?>
  </tbody>
</table>
</div>


</body>
</html>