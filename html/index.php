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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/placeholder.svg?height=40&width=120" alt="Mareplast" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Como Comprar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gabarito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
                <button class="btn btn-custom">
                    <i class="bi bi-whatsapp"></i> ORÇAMENTO
                </button>
            </div>
        </div>
    </nav>

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

    <!-- Why Choose Us Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="text-pink h5">Por que escolher a</p>
                    <h2 class="display-4 mb-5">Mareplast?</h2>
                    
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-award text-pink fs-1 me-3"></i>
                            <div>
                                <h3 class="h5 mb-1">Qualidade Premium</h3>
                                <p class="mb-0 text-muted">Utilizamos equipamentos de última geração e materiais de alta qualidade.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-clock text-pink fs-1 me-3"></i>
                            <div>
                                <h3 class="h5 mb-1">Entrega Rápida</h3>
                                <p class="mb-0 text-muted">Cumprimos prazos rigorosamente, com agilidade e eficiência.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-currency-dollar text-pink fs-1 me-3"></i>
                            <div>
                                <h3 class="h5 mb-1">Preços Competitivos</h3>
                                <p class="mb-0 text-muted">Oferecemos o melhor custo-benefício do mercado.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-headset text-pink fs-1 me-3"></i>
                            <div>
                                <h3 class="h5 mb-1">Suporte Personalizado</h3>
                                <p class="mb-0 text-muted">Atendimento dedicado em todas as etapas do seu projeto.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/placeholder.svg?height=400&width=600" alt="Nossa Fábrica" class="img-fluid rounded-3 shadow">
                </div>
            </div>

            <!-- Statistics -->
            <div class="row mt-5 pt-5 text-center">
                <div class="col-6 col-md-3 mb-4">
                    <div class="stats-icon">
                        <i class="bi bi-emoji-smile"></i>
                    </div>
                    <h3 class="h2 mb-2 stat-count" data-count="270">0</h3>
                    <p class="text-muted">Clientes Satisfeitos</p>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <div class="stats-icon">
                        <i class="bi bi-printer"></i>
                    </div>
                    <h3 class="h2 mb-2 stat-count" data-count="1320">0</h3>
                    <p class="text-muted">Projetos Concluídos</p>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <div class="stats-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h3 class="h2 mb-2 stat-count" data-count="180">0</h3>
                    <p class="text-muted">Time de Especialistas</p>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <div class="stats-icon">
                        <i class="bi bi-trophy"></i>
                    </div>
                    <h3 class="h2 mb-2 stat-count" data-count="15">0</h3>
                    <p class="text-muted">Anos de Experiência</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="py-5">
        <div class="container text-center">
            <p class="text-pink mb-0">nossos</p>
            <h2 class="display-4 mb-5">Clientes</h2>
            
            <div class="row g-5 align-items-center">
                <!-- Row 1 -->
                <div class="col-6 col-md-3">
                    <img src="/placeholder.svg?height=80&width=120" alt="Company" class="client-logo">
                </div>
                <div class="col-6 col-md-3">
                    <img src="/placeholder.svg?height=80&width=120" alt="BIJUNLIS" class="client-logo">
                </div>
                <div class="col-6 col-md-3">
                    <img src="/placeholder.svg?height=80&width=120" alt="Wave Logo" class="client-logo">
                </div>
                <div class="col-6 col-md-3">
                    <img src="/placeholder.svg?height=80&width=120" alt="Business Logo" class="client-logo">
                </div>
                
                <!-- Row 2 -->
                <div class="col-6 col-md-3">
                    <img src="/placeholder.svg?height=80&width=120" alt="Premium" class="client-logo">
                </div>
                <div class="col-6 col-md-3">
                    <img src="/placeholder.svg?height=80&width=120" alt="Tech" class="client-logo">
                </div>
                <div class="col-6 col-md-3">
                    <img src="/placeholder.svg?height=80&width=120" alt="Profieng Services" class="client-logo">
                </div>
                <div class="col-6 col-md-3">
                    <img src="/placeholder.svg?height=80&width=120" alt="L-XESUNE" class="client-logo">
                </div>
                
                <!-- Row 3 -->
                <div class="col-6 col-md-3">
                    <img src="/placeholder.svg?height=80&width=120" alt="LAI G" class="client-logo">
                </div>
                <div class="col-6 col-md-3">
                    <img src="/placeholder.svg?height=80&width=120" alt="Hexagon Logo" class="client-logo">
                </div>
                <div class="col-6 col-md-3">
                    <img src="/placeholder.svg?height=80&width=120" alt="Congany" class="client-logo">
                </div>
                <div class="col-6 col-md-3">
                    <img src="/placeholder.svg?height=80&width=120" alt="Innovamy" class="client-logo">
                </div>
            </div>
        </div>
    </section>

    <!-- Help Center Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="display-4 mb-2">Central de Ajuda</h2>
            <p class="text-pink mb-5">Encontre aqui todo o suporte necessário para seus projetos</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="mb-3">
                        <i class="bi bi-book display-4 text-pink"></i>
                    </div>
                    <h3 class="h4 mb-3">Guia de Pedidos</h3>
                    <p class="mb-3">Aprenda passo a passo como fazer seus pedidos corretamente</p>
                    <button class="btn btn-dark px-4">Ver Tutoriais</button>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <i class="bi bi-rulers display-4 text-pink"></i>
                    </div>
                    <h3 class="h4 mb-3">Gabaritos para Download</h3>
                    <p class="mb-3">Modelos prontos para seus arquivos em diversos formatos</p>
                    <button class="btn btn-dark px-4">Baixar Gabaritos</button>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <i class="bi bi-gear display-4 text-pink"></i>
                    </div>
                    <h3 class="h4 mb-3">Suporte Técnico</h3>
                    <p class="mb-3">Orientações técnicas para preparação de arquivos</p>
                    <button class="btn btn-dark px-4">Obter Ajuda</button>
                </div>
            </div>

            <div class="mt-5 pt-4">
                <p class="mb-3">Precisa de ajuda adicional? Entre em contato com nossa equipe de suporte</p>
                <button class="btn btn-outline-dark px-4">Contatar Suporte</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    <img src="/placeholder.svg?height=40&width=120" alt="Logo" class="mb-3" height="40">
                    <p class="text-muted">Soluções completas em impressão digital para seu negócio.</p>
                </div>
                
                <div class="col-lg-3">
                    <h5 class="mb-3">Contato</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-geo-alt me-2"></i>
                            Av. Fulvio Claudio Biazzi, 393<br>
                            <span class="ms-4">Sorocaba - SP</span>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-telephone me-2"></i>
                            (15) 3223-2417
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-envelope me-2"></i>
                            contato@mareplast.com.br
                        </li>
                    </ul>
                </div>
                
                <div class="col-lg-3">
                    <h5 class="mb-3">Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Sobre Nós</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Produtos</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Como Comprar</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Gabaritos</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Contato</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3">
                    <h5 class="mb-3">Redes Sociais</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-light"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-instagram fs-5"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-linkedin fs-5"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="border-top border-secondary mt-4 pt-4 text-center">
                <small class="text-muted">© 2024 Maraplast. Todos os direitos reservados.</small>
            </div>
        </div>
    </footer>




    <script>
        $(document).ready(function () {
    // Função para animar a contagem
    function animateCount(element) {
        let count = 0;
        const target = +$(element).data('count');
        const increment = Math.ceil(target / 100);
        const duration = 2000; // Duração total da animação em ms
        const stepTime = duration / (target / increment); // Tempo entre os incrementos

        const interval = setInterval(() => {
            count += increment;
            if (count >= target) {
                $(element).text(target);
                clearInterval(interval);
            } else {
                $(element).text(count);
            }
        }, stepTime);
    }

    // Função para verificar visibilidade e iniciar a contagem
    function checkStatsVisibility() {
        $('.stat-count').each(function () {
            const elementTop = $(this).offset().top;
            const viewportBottom = $(window).scrollTop() + $(window).height();

            if (!$(this).hasClass('counted') && viewportBottom >= elementTop) {
                $(this).addClass('counted');
                animateCount(this);
            }
        });
    }

    // Chamar a função ao carregar a página e ao rolar
    $(window).on('scroll', checkStatsVisibility);
    $(window).on('load', checkStatsVisibility); // Certificar que a função será chamada após o carregamento completo
});

    </script>

    
</body>
</html>