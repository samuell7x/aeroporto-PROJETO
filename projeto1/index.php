<?php
require_once "topo.php";

$allowed_pages = [
    'conteudo',
    'voos',
    'checkin',
    'status',
    'promocoes',
    'faleconosco',
    'quemsomos',
    'clientes',
    'login',
    'cadastro'
];

$page = 'conteudo';

if (isset($_GET['pg'])) {
    $requested_page = filter_input(INPUT_GET, 'pg', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (in_array($requested_page, $allowed_pages)) {
        $page = $requested_page;
    }
}

$page_file = __DIR__ . "/{$page}.php";

if (file_exists($page_file)) {
    include_once $page_file;
} else {
    include_once __DIR__ . "/conteudo.php";
}

require_once "rodape.php";
?>

<div class="container">
    <div class="row">
        <div class="col mt-5">
            <?php
            include "config.php";

            $page_request = $_REQUEST["page"] ?? '';

            switch ($page_request) {
                case "login":
                    include("login.php");
                    break;

                case "cadastro":
                    include("cadastro.php");
                    break;

                case "salvar":
                    include("salvar-user.php");
                    break;

                case "editar":
                    include("editar-user.php");
                    break;
            }
            ?>
        </div>
    </div>
</div>
