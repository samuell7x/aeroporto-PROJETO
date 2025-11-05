
<?php
$success = $error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
    $mensagem = trim(filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    
    if ($nome && $email && $mensagem) {
        $success = 'Mensagem enviada com sucesso! Em breve entraremos em contato.';
    } else {
        $error = 'Por favor, preencha todos os campos corretamente.';
    }
}
?>
<div class="row">
    <div class="col-md-8 mx-auto">
        <h2 class="mb-4">Fale Conosco</h2>
        
        <?php if ($success): ?>
            <div class="alert alert-success"><?= $success ?></div>
        <?php endif; ?>
        
        <?php if ($error): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <div class="card shadow-sm">
            <div class="card-body">
                <form method="post" action="index.php?pg=faleconosco">
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Mensagem</label>
                        <textarea name="mensagem" class="form-control" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane me-2"></i>Enviar Mensagem
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>