<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

if($nome == "" || $email == ""){
    echo "informe seus dados";   
} else if(strpos($email, '@') == false){
    echo "informe seu email corretamente";
} else if (strlen($mensagem) < 20){
    echo "mensagem muito curta, informe no minimo 20 caracteres";
} else 
    echo "mensagem enviada com sucesso";

?>