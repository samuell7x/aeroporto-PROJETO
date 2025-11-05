<?php
include('config.php');

// garante que exista a ação
$acao = $_REQUEST['acao'] ?? '';

switch ($acao) {

    case 'cadastrar':
        $nome  = $conn->real_escape_string($_POST['nome'] ?? '');
        $email = $conn->real_escape_string($_POST['email'] ?? '');
        $senha = $conn->real_escape_string($_POST['senha'] ?? '');

        // verifica campos obrigatórios
        if (empty($nome) || empty($email) || empty($senha)) {
            echo "<script>alert('Preencha todos os campos.'); location.href='index.php?page=cadastro';</script>";
            exit;
        }

        // evita e-mail duplicado
        $check = $conn->query("SELECT id FROM usuarios WHERE email = '{$email}'");
        if ($check && $check->num_rows > 0) {
            echo "<script>alert('Esse e-mail já está cadastrado!'); location.href='index.php?page=cadastro';</script>";
            exit;
        }

        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";
        $res = $conn->query($sql);

        if ($res) {
            echo "<script>alert('Usuário cadastrado com sucesso!'); location.href='index.php?page=clientes';</script>";
            exit;
        } else {
            echo "<script>alert('Erro ao cadastrar: " . $conn->error . "'); location.href='index.php?page=cadastro';</script>";
            exit;
        }
      

    case 'editar':
        $id    = intval($_POST['id'] ?? 0);
        $nome  = $conn->real_escape_string($_POST['nome'] ?? '');
        $email = $conn->real_escape_string($_POST['email'] ?? '');
        $senha = $conn->real_escape_string($_POST['senha'] ?? '');

        if ($id <= 0 || empty($nome) || empty($email)) {
            echo "<script>alert('Dados inválidos.'); location.href='index.php?page=clientes';</script>";
            exit;
        }

        if (!empty($senha)) {
            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}' WHERE id={$id}";
        } else {
            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}' WHERE id={$id}";
        }

        $res = $conn->query($sql);

        if ($res) {
            echo "<script>alert('Usuário atualizado com sucesso!'); location.href='index.php?page=clientes';</script>";
            exit;
        } else {
            echo "<script>alert('Erro ao atualizar: " . $conn->error . "'); location.href='index.php?page=editar&id={$id}';</script>";
            exit;
        }
      

    case 'excluir':
        $id = intval($_REQUEST['id'] ?? 0);

        if ($id <= 0) {
            echo "<script>alert('ID inválido!'); location.href='index.php?page=clientes';</script>";
            exit;
        }

        $sql = "DELETE FROM usuarios WHERE id={$id}";
        $res = $conn->query($sql);

        if ($res) {
            echo "<script>alert('Usuário excluído com sucesso!'); location.href='index.php?page=clientes';</script>";
            exit;
        } else {
            echo "<script>alert('Erro ao excluir: " . $conn->error . "'); location.href='index.php?page=clientes';</script>";
            exit;
        }
   

    default:
        echo "<script>alert('Ação inválida ou não informada!'); location.href='index.php?page=clientes';</script>";
        exit;
     
}
?>
