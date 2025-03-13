<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mareplast - Sacolas Personalizadas</title>
    
    <?php include './includes/head.php'; ?>
    <link rel="stylesheet" href="./css/hero-animations.css">

</head>
<body>
    
    <?php include './includes/nav.php'; ?>

    <!-- Hero Section -->
    <section class="bg-custom hero-section">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 animate animate-left">
                    <p class="h5 mb-3">Bem-vindo</p>
                    <h1 class="display-4 fw-bold mb-4">Sacolas<br>Personalizadas</h1>
                    <p class="lead mb-4">
                        Oferecemos soluções completas para sua marca, com tecnologia avançada e 
                        equipe especializada, transformamos suas ideias em sacolas de alta qualidade.
                    </p>
                    <a href="./produtos.php" class="btn btn-custom btn-lg">Nossos Produtos</a>
                </div>
                <div class="col-lg-6 imagens">
                    <div class="position-relative">
                        <img src="./imgs/mockups/mockup-kraft.png" alt="Sacola Kraft" class="position-absolute animate animate-right produto01">
                        <img src="./imgs/mockups/mockup-papel.png" alt="Sacola Papel" class="position-absolute animate animate-left produto02">
                        <img src="./imgs/mockups/mockup-vinho.png" alt="Sacola Vinho" class="position-absolute animate animate.show produto03">
                        <img src="./imgs/mockups/mockup-sacola.png" alt="Sacola Personalizada" class="position-absolute animate animate-up produto04">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="destaques bg-light">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3 animate animate-up">
                    <div class="icon-circle">
                        <i class="bi bi-pencil-square"></i>
                    </div>
                    <h3 class="h5">Criamos seu layout</h3>
                    <p class="mb-0">Design personalizado para seu negócio</p>
                </div>
                <div class="col-md-3 animate animate-up">
                    <div class="icon-circle">
                        <i class="bi bi-hand-thumbs-up"></i>
                    </div>
                    <h3 class="h5">Preço justo e qualidade garantida</h3>
                    <p class="mb-0">Confira nossas condições especiais e surpreenda-se!</p>
                </div>
                <div class="col-md-3 animate animate-up">
                    <div class="icon-circle">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <h3 class="h5">Parcelamos em até 12x</h3>
                    <p class="mb-0">Facilidade no pagamento</p>
                </div>
                <div class="col-md-3 animate animate-up">
                    <div class="icon-circle">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h3 class="h5">Atendimento diferenciado</h3>
                    <p class="mb-0">Suporte especializado</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-5">
        <div class="container text-center">
            <p class="text-pink mb-0 animate animate-up">Nossa linha de</p>
            <h2 class="display-4 mb-5 animate animate-up">Produtos</h2>
            
            <?php include './includes/produtos.php'; ?>

            <!--
            <div class="mt-5">
                <a href="./produtos.php" class="btn btn-custom btn-lg px-5">Todos os Produtos</a>
            </div>
            -->
        </div>
    </section>

    <?php include './includes/porque.php'; ?>

    <?php include './includes/clientes.php'; ?>

    <?php include './includes/ajuda.php'; ?>

    <?php include './includes/cta.php'; ?>

    <?php include './includes/footer.php'; ?>
    
    <!-- Animation Scripts -->
    <script src="./js/animations.js"></script>
</body>
</html>