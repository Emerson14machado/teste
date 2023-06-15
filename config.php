<?php

session_start();/*vai procurar se há uma session antes de executar o código*/
include_once("conexao.php"); /*vai realizar a conexão com o banco de dados logo no começo */

$nome = filter_input(INPUT_POST, 'nome',
FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email',
FILTER_SANITIZE_EMAIL);


/*echo "Nome: $nome<br>";
/*echo "E-mail: $email";*/

$result = "INSERT INTO usuarios(nome, email, senha, criacao) values ('$nome', '$email', '$senha', NOW()) ";/*colocaar exatamente igual como está no myadimin */

$resultado = mysqli_query($conn, $result); /*vai executar como se fosse no mysql */


if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p> Usuário cadastrado com sucesso.</p>"; /*mostra uma mensagem para o usuário */
    header("Location: index.php"); /*redireciona novamente para a mesma página */
}else{
    header("Location: index.php");
}

?>