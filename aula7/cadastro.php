<?php

if (isset($_POST['nome']) && 
isset($_POST['idade']) && 
isset($_POST['genero']) &&
isset($_POST['estado'])){

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome) || strlen($nome) > 50){
    echo "<h3>Preencha seu nome com no máximo 50 caracteres</h3>";

}

else if (!is_numeric($idade) || ($idade) < 0.0){
    echo"<h3>Preencha sua idade corretamente!</h3>";

}

    
}

else{
    echo "<h3>Prencha todos os campos! </h3>";
}