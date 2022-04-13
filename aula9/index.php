<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07</title>
</head>
<body>
    <form action="cadastro.php" method="post">
        <input type="text" name="nomeCompleto" placeholder="Nome Completo"  maxlength="50"><br><br>
        <input type="number" name="idade" placeholder="Idade" min="0"><br><br>
        <input type="radio" name="genero" value="M" >Masculino<br>
        <input type="radio" name="genero" value="F">Feminino<br>
        <input type="radio" name="genero" value="X">Prefiro não identificar<br><br>
        <select name="estado" >
            <option value="">Selecione seu estado</option>
            <option value="PR">Paraná</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="SC">Santa Catarina</option>
        </select><br><br>
        <input type="checkbox" name="termos" >Aceito os termos e condições<br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>