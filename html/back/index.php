<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mareplast - Sacolas Personalizadas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <?php include './includes/head.php'; ?>

    <style>
        .bg-custom {
            background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%);
        }
        .hero-section {
            min-height: 80vh;
            position: relative;
            overflow: hidden;
        }
        .btn-custom {
            background-color: #e91e63;
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 25px;
        }
        .btn-custom:hover {
            background-color: #d81557;
            color: white;
        }
        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }
        .text-pink {
            color: #e91e63;
        }
        .stats-icon {
            width: 80px;
            height: 80px;
            background-color: #e91e63;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 2rem;
        }
        .client-logo {
            max-height: 80px;
            width: auto;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: all 0.3s ease;
        }
        .client-logo:hover {
            filter: grayscale(0%);
            opacity: 1;
        }
        .stats-icon {
            width: 80px;
            height: 80px;
            background-color: #e91e63;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 2rem;
            transition: transform 0.3s ease-in-out;
        }
        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    
    <?php include './includes/nav.php'; ?>

    <!-- Hero Section -->
    <section class="bg-custom hero-section text-white">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="h5 mb-3">Bem-vindo</p>
                    <h1 class="display-4 fw-bold mb-4">Sacolas<br>Personalizadas</h1>
                    <p class="lead mb-4">
                        Oferecemos soluções completas para sacolas personalizadas o para sua marca.
                        Com tecnologia avançada e equipe especializada, transformamos suas
                        ideias em sacolas de alta qualidade.
                    </p>
                    <button class="btn btn-custom btn-lg">Nossos Produtos</button>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="/placeholder.svg?height=400&width=600" alt="Sacolas Personalizadas" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-custom text-white py-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <div class="feature-icon mx-auto">
                        <i class="bi bi-pencil-square"></i>
                    </div>
                    <h3 class="h5">Criamos seu layout</h3>
                    <p class="mb-0">Design personalizado para seu negócio</p>
                </div>
                <div class="col-md-3">
                    <div class="feature-icon mx-auto">
                        <i class="bi bi-handshake"></i>
                    </div>
                    <h3 class="h5">Cobrimos qualquer oferta</h3>
                    <p class="mb-0">Garantimos o melhor preço do mercado</p>
                </div>
                <div class="col-md-3">
                    <div class="feature-icon mx-auto">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <h3 class="h5">Parcelamos em até 12x</h3>
                    <p class="mb-0">Facilidade no pagamento</p>
                </div>
                <div class="col-md-3">
                    <div class="feature-icon mx-auto">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h3 class="h5">Atendimento diferenciado</h3>
                    <p class="mb-0">Suporte especializado 24/7</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-5">
        <div class="container text-center">
            <p class="text-pink mb-0">Nossa linha de</p>
            <h2 class="display-4 mb-5">Produtos</h2>
            
            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 bg-light">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Sacolas de Papel">
                        <div class="card-body">
                            <h3 class="h5 card-title">SACOLAS DE PAPEL</h3>
                            <div class="mx-auto" style="width: 50px; height: 3px; background-color: #ffd700;"></div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 bg-light">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Sacolas de Plástico">
                        <div class="card-body">
                            <h3 class="h5 card-title">SACOLAS DE PLÁSTICO</h3>
                            <div class="mx-auto" style="width: 50px; height: 3px; background-color: #ffd700;"></div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 bg-light">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Saco para Transporte">
                        <div class="card-body">
                            <h3 class="h5 card-title">SACO PARA TRANSPORTE</h3>
                            <div class="mx-auto" style="width: 50px; height: 3px; background-color: #ffd700;"></div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 bg-light">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Panfletos">
                        <div class="card-body">
                            <h3 class="h5 card-title">PANFLETOS</h3>
                            <div class="mx-auto" style="width: 50px; height: 3px; background-color: #ffd700;"></div>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 bg-light">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Tags">
                        <div class="card-body">
                            <h3 class="h5 card-title">TAGS</h3>
                            <div class="mx-auto" style="width: 50px; height: 3px; background-color: #ffd700;"></div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 bg-light">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Cartões de Visita">
                        <div class="card-body">
                            <h3 class="h5 card-title">CARTÕES DE VISITA</h3>
                            <div class="mx-auto" style="width: 50px; height: 3px; background-color: #ffd700;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <a href="#" class="btn btn-custom btn-lg px-5">Todos os Produtos</a>
            </div>
        </div>
    </section>

    <?php include './includes/porque.php'; ?>

    <?php include './includes/clientes.php'; ?>

    <?php include './includes/ajuda.php'; ?>

    <?php include './includes/footer.php'; ?>
    
    
</body>
</html>