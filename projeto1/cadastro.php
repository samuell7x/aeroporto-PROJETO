<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2e0c3b6f6.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">

<div class="container my-5">
    <h2 class="text-center mb-4 fw-bold text-primary">
        <i class="fas fa-users"></i> Lista de Clientes
    </h2>

    <?php
    include('config.php');

    $sql = "SELECT * FROM usuarios";
    $res = $conn->query($sql);

    if ($res && $res->num_rows > 0) {
        echo "<div class='table-responsive'>";
        echo "<table class='table table-bordered table-hover align-middle text-center'>";
        echo "<thead class='table-primary'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
              </thead>
              <tbody>";

while ($row = $res->fetch_object()) {
    echo "<tr>";
    echo "<td>{$row->id}</td>";
    echo "<td>{$row->nome}</td>";
    echo "<td>{$row->email}</td>";
    echo "<td>
            <a href='editar-user.php?id={$row->id}' class='btn btn-success btn-sm me-2'>
                <i class='fas fa-edit'></i> Editar
            </a>
            <a href='salvar-user.php?acao=excluir&id={$row->id}' 
               class='btn btn-danger btn-sm'
               onclick=\"return confirm('Tem certeza que deseja excluir este usuário?');\">
               <i class='fas fa-trash-alt'></i> Excluir
            </a>
          </td>";
    echo "</tr>";
}



        echo "</tbody></table></div>";
    } else {
        echo "<div class='alert alert-warning text-center'>Nenhum cliente encontrado.</div>";
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
