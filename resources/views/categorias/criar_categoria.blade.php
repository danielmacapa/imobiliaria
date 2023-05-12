<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Categorias</title>
    <h1>Formulário de Cadastro</h1>
    <form class="form" action="#" method="post">
        @csrf
        <div class="form_grupo">
            <label for="nome" class="form_label">Nome</label>
            <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
        </div>
        <div class="submit">
            <input type="hidden" name="acao" value="Enviar">
            <button type="submit" name="Enviar" class="submit_btn">Cadastrar</button>
        </div>
    </form>
</head>

<body>

</body>

</html>
