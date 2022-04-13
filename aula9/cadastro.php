<?php
//declarar funções sempre no inicio do código.

function exibeErro($mensagem)
{
    // escreve o que a ''função'' vai fazer. 
    echo "<H2>Erro -- $mensagem </H2>";
}
 //Declarar função com retorno
function formataNome($nome){
    $nome = strtolower($nome);
    $nome = ucwords($nome);

    return $nome;
}



if (
    isset($_POST['nomeCompleto']) &&
    isset($_POST['idade']) &&
    isset($_POST['genero']) &&
    isset($_POST['estado'])
) {

    $nome = $_POST['nomeCompleto'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $estado = $_POST['estado'];

    $tamanhoDoNome = strlen($nome);

    if (empty($nome) || $tamanhoDoNome > 50) {
        exibeErro('Preencha seu nome corretamente!');
    } else if (!is_numeric($idade) || $idade < 0) {
        exibeErro('Preencha sua idade corretamente!');
    } else if ($genero != 'F' && $genero != 'M' && $genero != 'X') {
        exibeErro('Selecione o seu genero');
    } else if (empty($estado)) {
        exibeErro('Selecione o seu Estado!');
    } else if (!isset($_POST['termos'])) {
        exibeErro('aceite os termos');
    } else {
        $nome = formataNome($nome);
        
        echo "<h2>Cadastro efetuado com sucesso!<br>Boas vindas, $nome!</h2>";

        if ($idade >= 18) {
            echo "<h3>Versão completa disponível.</h3>";
        } else {
            echo "<h3>Versão habilitada: controle dos pais.</h3>";
        }

        if ($genero == 'M') {
            echo "<p>Gênero selecionado: Masculino.</p>";
        } else if ($genero == 'F') {
            echo "<p>Gênero selecionado: Feminino.</p>";
        } else {
            echo "<p>Você não quis selecionar seu gênero.</p>";
        }

        $estado = strtoupper($estado);

        echo "<p>Estado: $estado</p>";
    }
} else {
    exibeErro('Acesse pelo formulario');
}
