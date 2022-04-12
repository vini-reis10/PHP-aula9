<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7</title>
</head>
<body>
    <form action="cadasto.php" method="post">
        <input type="text" name="nome" placeholder="Digite seu nome completo"  maxlength="50"> <br><br>
        <input type="number" name="idade" placeholder="Informe sua idade"  min="1" maxlength="3"><br><br>
        <!--Campos Novos-->
        <input type="radio" name="genero" value="F">Feminino<br>
        <input type="radio" name="genero" value="M">Masculino<br>
        <input type="radio" name="genero" value="O">Outro<br><br>

        <select name="Estado" required>
            <option value="">Selecione o seu estado</option>
            <option value="PR">Paraná</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="SC">Santa Catarina</option>
        </select><br><br>

        <input type="checkbox" name="Termos" required>Aceito os termos.<br><br>

        <!--SUBMIT-->
        <input type="submit" value="Cadastrar">


        
        
    </form>
</html>