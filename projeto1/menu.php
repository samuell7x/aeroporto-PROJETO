
<div class="bg-light py-2 mb-4">
    <div class="container">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link <?= (($_GET['pg'] ?? '') === 'quemsomos') ? 'active' : '' ?>" 
                   href="index.php?pg=quemsomos">
                    <i class="fas fa-building"></i> Institucional
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= (($_GET['pg'] ?? '') === 'clientes') ? 'active' : '' ?>" 
                   href="index.php?pg=clientes">
                    <i class="fas fa-users"></i> Clientes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= (($_GET['pg'] ?? '') === 'faleconosco') ? 'active' : '' ?>" 
                   href="index.php?pg=faleconosco">
                    <i class="fas fa-envelope"></i> Fale Conosco
                </a>
            </li>
        </ul>
    </div>
</div>