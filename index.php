<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>

</head>
<body>


<h1>C A D A S T R O</h1>

<div class="men">
    <?php

if(isset($_SESSION["msg"])){
    echo $_SESSION["msg"];

    unset($_SESSION["msg"]);
}

?>
</div>

<div class="card">
    <form action="config.php" method="post">

        <label for="">Nome:</label>
        <div class="usu">
         <input type="text" name="nome" id="" placeholder = "Digite seu nome" required>
        </div>
        
        <label for="">E-mail:</label>
        <div class="ema">
        <input type="text" name="email" id=""          placeholder =    "Digite seu email" required>
        </div>

       <!-- <label for="">Senha:</label>
        <div class="ema">
        <input type="text" name="senha" id=""         placeholder =    "Digite sua senha" required>
        </div>-->
        
       

        <div class="bb"><input  type="submit" value="Criar"></div>
        
        </form>
</div> 

</body>
</html>