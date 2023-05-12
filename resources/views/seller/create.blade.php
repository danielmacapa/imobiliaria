<html>

<head>
</head>

<body>
    <div class="container_form">

        <h1>Cadastro de Vendedores</h1>

        <form class="form" action="{{ route('seller.store') }}" method="post">

            <div class="form_grupo">
                <label for="nome" class="form_label">Nome</label>
                <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
            </div>

            <div class="submit">

                <input type="hidden" name="acao" value="enviar">
                <button type="submit" name="Submit" class="submit_btn">Cadastrar</button>

            </div>
        </form>

    </div>
    <!--container_form-->
</body>

</html>
