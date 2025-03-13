<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <?php
        // Check if we're in a subdirectory
        $isSubdir = strpos($_SERVER['PHP_SELF'], '/produtos/') !== false;
        $prefix = $isSubdir ? '../' : './';
        ?>
        <a class="navbar-brand" href="<?php echo $prefix; ?>">
            <img src="<?php echo $prefix; ?>imgs/logo.png" alt="Mareplast">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="mobile-menu-overlay"></div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <button class="mobile-menu-close d-lg-none">×</button>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $prefix; ?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $prefix; ?>quemsomos.php"       class="nav-link">SOBRE NÓS</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="<?php echo $prefix; ?>produtos.php" class="nav-link">PRODUTOS <i class="bi bi-chevron-down ms-1"></i></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo $prefix; ?>produtos/sacolas-plastico.php">Sacolas Plásticas</a></li>
                        <li><a class="dropdown-item" href="<?php echo $prefix; ?>produtos/sacolas-papel.php">Sacolas de Papel</a></li>
                        <li><a class="dropdown-item" href="<?php echo $prefix; ?>produtos/impressos.php">Impressos Gráficos</a></li>
                        <li><a class="dropdown-item" href="<?php echo $prefix; ?>produtos/envelopes.php">Envelopes para Envio</a></li>
                    </ul>
                </li>
                <!--
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $prefix; ?>comprar.php">COMO COMPRAR</a>
                </li>
                -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $prefix; ?>contato.php">CONTATO</a>
                </li>
            </ul>
            <div class="d-lg-none contatos">
                <a href="tel:+551532232417" class="d-block mb-2">
                    <i class="bi bi-telephone-fill me-2"></i>15 3223-2417
                </a>
                <a href="mailto:contato@mareplast.com.br" class="d-block mb-2">
                    <i class="bi bi-envelope-fill me-2"></i>contato@mareplast.com.br
                </a>
            </div>
            <div class="d-flex social">
                <a href="https://wa.me/5515974020934?text=Olá,%20gostaria%20de%20um%20orçamento." target="_wp" rel="nofollow" class="btn btn-custom">
                <i class="bi bi-whatsapp"></i> ORÇAMENTO
            </a>
            </div>
        </div>
    </div>
</nav>
