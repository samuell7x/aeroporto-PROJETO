<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AirLines - Voos e Passagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="top-bar bg-dark text-white py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <small><i class="fas fa-phone me-2"></i>(83)9999-9999</small>
                </div>
                <div class="col-md-6 text-end">
                    <a href="login.php" class="text-white me-3"><small>Cadastre-se</small></a>
                    <a href="cadastro.php" class="text-white"><small>Clientes</small></a>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-plane-departure text-primary"></i>
                <span class="fw-bold">Y2k AirLines</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= empty($_GET['pg']) ? 'active' : '' ?>" href="index.php">
                            <i class="fas fa-home"></i> Início
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isset($_GET['pg']) && $_GET['pg'] === 'voos' ? 'active' : '' ?>"
                            href="index.php?pg=voos">
                            <i class="fas fa-plane"></i> Voos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isset($_GET['pg']) && $_GET['pg'] === 'checkin' ? 'active' : '' ?>"
                            href="index.php?pg=checkin">
                            <i class="fas fa-clipboard-check"></i> Check-in
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isset($_GET['pg']) && $_GET['pg'] === 'status' ? 'active' : '' ?>"
                            href="index.php?pg=status">
                            <i class="fas fa-info-circle"></i> Status
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isset($_GET['pg']) && $_GET['pg'] === 'promocoes' ? 'active' : '' ?>"
                            href="index.php?pg=promocoes">
                            <i class="fas fa-tag"></i> Promoções
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isset($_GET['pg']) && $_GET['pg'] === 'quemsomos' ? 'active' : '' ?>"
                            href="index.php?pg=quemsomos">
                            <i class="fas fa-users"></i> Quem Somos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isset($_GET['pg']) && $_GET['pg'] === 'faleconosco' ? 'active' : '' ?>"
                            href="index.php?pg=faleconosco">
                            <i class="fas fa-envelope"></i> Contato
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">

  