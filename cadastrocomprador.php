<?php
if(isset($_POST['submit']))
{
	include("conexao.php");
	
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$grupoderisco = $_POST['grupoderisco'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];	
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$resullt = mysqli_query($mysqli, "INSERT INTO compradores (nome, cpf, grupoderisco, endereco, cidade, estado, telefone, email, senha) VALUES ('$nome','$cpf','$grupoderisco','$endereco','$cidade','$estado','$telefone','$email','$senha')");

	header('Location: index.php');

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
*, *:before, *:after { 
  margin:0;
  padding:0;
  font-family: Arial,sans-serif;
}

body{
  margin:20px;
  background: black;
}
 a{
  text-decoration: none;
}

/* esconde as ancoras da tela */
a.links{
  display: none;
}

/* content que contem os formulários */
.content{
  width: 500px;
  margin: 0px auto;
  position: relative; 
}

/* formatando o cabeçalho dos formulários */
h1{
  font-size: 30px;
  color: #4682B4;
  padding: 10px 0;
  font-family: Arial,sans-serif;
  font-weight: bold;
  text-align: center;
  padding-bottom: 30px;
}
h1:after{
  content: ' ';
  display: block;
  width: 100%;
  height: 2px;
  margin-top: 10px;
  background: -webkit-linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,#FF0000,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%); 
  background: linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%); 
}
img{
  width: 310px;
}

p{
  margin-bottom:15px;
}
p:first-child{
  margin: 0px;
}
label{
  color: #405c60;
  position: relative;
}

/**** advanced input styling ****/
/* placeholder */
::-webkit-input-placeholder  {
  color: #bebcbc; 
  font-style: italic;
}
input:-moz-placeholder,
textarea:-moz-placeholder{
  color: #bebcbc;
  font-style: italic;
} 
input {
  outline: none;
}

input:not([type="checkbox"]){
  width: 95%;
  margin-top: 4px;
  padding: 10px;  
  border: 1px solid #b2b2b2;
  
  -webkit-border-radius: 3px;
  border-radius: 3px;
  
  -webkit-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
  box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
  
  -webkit-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

/*estilo do botão submit */
input[type="submit"]{
  width: 100%!important;
  cursor: pointer;  
  background: #4682B4;
  padding: 8px 5px;
  color: #fff;
  font-size: 20px;  
  border: 1px solid #fff; 
  margin-bottom: 10px;  
  text-shadow: 0 1px 1px #333;
  
  -webkit-border-radius: 5px;
  border-radius: 5px;
  
  transition: all 0.2s linear;
}
input[type="submit"]:hover{
  background: #696969;
}

/*marcando os links para mudar de um formulário para outro */
.link{
  position: absolute;
  background: #e1eaeb;
  color: #7f7c7c;
  left: 0px;
  height: 20px;
  width: 440px;
  padding: 17px 30px 20px 30px;
  font-size: 16px;
  text-align: right;
  border-top: 1px solid #dbe5e8;

  -webkit-border-radius: 0 0  5px 5px;
  border-radius: 0 0  5px 5px;
}
.link a {
  font-weight: bold;
  background: #f7f8f1;
  padding: 6px;
  color: #4682B4;
  margin-left: 10px;
  border: 1px solid #FF0000;

  -webkit-border-radius: 4px;
  border-radius: 4px;  

  -webkit-transition: all 0.4s linear;
  transition: all 0.4s  linear;
}
.link a:hover {
  color: #39bfd7;
  background: #f7f7f7;
  border: 1px solid #4ab3c6;
}

.link img{
  width: 50px;
  position: center;
}
/* estilos para para ambos os formulários */
#cadastro, 
#login{
  position: absolute;
  top: 0px;
  width: 88%; 
  padding: 18px 6% 60px 6%;
  margin: 0 0 35px 0;
  background: rgb(247, 247, 247);
  border: 1px solid rgba(147, 184, 189,0.8);
  
  -webkit-box-shadow: 5px;
  border-radius: 5px;
  
  -webkit-animation-duration: 0.5s;
  -webkit-animation-timing-function: ease;
  -webkit-animation-fill-mode: both;

  animation-duration: 0.5s;
  animation-timing-function: ease;
  animation-fill-mode: both;
}

#paracadastro:target ~ .content #cadastro,
#paralogin:target ~ .content #login{
  z-index: 2;
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;

  -webkit-animation-delay: .1s;
  animation-delay: .1s;
}
#registro:target ~ .content #login,
#paralogin:target ~ .content #cadastro{
  -webkit-animation-name: fadeOutLeft;
  animation-name: fadeOutLeft;
}

/*fadeInLeft*/
@-webkit-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-20px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
}

@keyframes fadeInLeft {
  0% {
    opacity: 0;
    transform: translateX(-20px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}

/*fadeOutLeft*/
@-webkit-keyframes fadeOutLeft {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-20px);
  }
}

@keyframes fadeOutLeft {
  0% {
    opacity: 1;
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    transform: translateX(-20px);
  }
}
</style>

</head>
<body>
<div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    
    <div class="content">      
    <div id="cadastro">
            <form action="cadastrocomprador.php" method="POST"> 
              <h1><img class="img"src="imagens/alcool.png">Cadastro Comprador</h1> 
              <p> 
                <label for="nome">Nome completo:</label>
                <input id="nome" name="nome" required="required" type="text" placeholder="Nome" />
              </p>
              
              <p> 
                <label for="cpf">CPF:</label>
                <input id="cpf" name="cpf" required="required" type="text" placeholder="000.000.000-00"/> 
              </p>
			  
			  <br>
			  <label for="grupoderisco">Grupos de Risco:</label><br><br>
                <input id="hipertenso" name="grupoderisco" type="checkbox" valeu="hipertenso"/> Hipertenso
                <input id="asmatico" name="grupoderisco"  type="checkbox" valeu="asmatico"/> Asmático
                <input id="diabetico" name="grupoderisco"  type="checkbox" valeu="diabetico"/> Diabético
                <input id="fumante" name="grupoderisco"  type="checkbox" valeu="fumante"/> Fumante
				<br><br>	
                

              <p> 
                <label for="endereco">Endereço:</label>
                <input id="endereco" name="endereco" required="required" type="text" placeholder="Rua/Bairo/N°"/> 
              </p>

              <p> 
                <label for="cidade">Cidade:</label>
                <input id="cidade" name="cidade" required="required" type="text" placeholder="Cidade:"/> 
              </p>
			  <p> 
                <label for="estado">Estado:</label>
                <input id="estado" name="estado" required="required" type="text" placeholder="Estado:"/> 
              </p>

              <p> 
                <label for="telefone">Telefone:</label>
                <input id="telefone" name="telefone" required="required" type="tel" placeholder="(DDD-XXXXX-XXXX)"/> 
              </p>

              <p> 
                <label for="email">Seu e-mail</label>
                <input id="email" name="email" required="required" type="email" placeholder="email@email.com"/> 
              </p>
              
              <p> 
                <label for="senha">Sua senha</label>
                <input id="senha" name="senha" required="required" type="password" placeholder="**********"/>
              </p>
              
              <p> 
                <input type="submit" name="submit" id="submit"> 
              </p>
              
              <p class="link">
                Já tem conta?
                <a href="logincomprador"> Ir para Login</a>          
              </p>            	
            </form>
          </div>	
   </body>
</html>