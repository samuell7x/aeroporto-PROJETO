<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">Login</h3>

        <form action="index.php?page=salvar" method="POST">
            <input type="hidden" name="acao" value="cadastrar">

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
            </div>

            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail">
            </div>

            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">ENVIAR</button>
            </div>
        </form>
    </div>

</body>
</html>
