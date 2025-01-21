<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos - Mareplast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <style>
        .bg-custom {
            background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%);
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
        .text-pink {
            color: #e91e63;
        }
        .timeline-year {
            width: 100px;
            height: 100px;
            background: #e91e63;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 2rem;
        }
        .value-card {
            border-radius: 15px;
            transition: transform 0.3s ease;
            height: 100%;
        }
        .value-card:hover {
            transform: translateY(-5px);
        }
        .value-icon {
            width: 80px;
            height: 80px;
            background-color: rgba(233, 30, 99, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: #e91e63;
        }
        .client-logo {
            filter: grayscale(100%);
            opacity: 0.6;
            transition: all 0.3s ease;
            max-width: 150px;
            height: auto;
        }
        .client-logo:hover {
            filter: grayscale(0%);
            opacity: 1;
        }
        .photo-gallery img {
            border-radius: 10px;
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
        }
        .photo-gallery img:hover {
            transform: scale(1.02);
        }
        .stats-card {
            text-align: center;
            padding: 2rem;
            border-radius: 15px;
            background: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .stats-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #e91e63;
            margin-bottom: 0.5rem;
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
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produtos.html">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Como Comprar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gabarito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.html">Contato</a>
                    </li>
                </ul>
                <button class="btn btn-custom">
                    <i class="bi bi-whatsapp"></i> ORÇAMENTO
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-custom text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Nossa História</h1>
                    <p class="lead mb-4">Desde 1987, construindo uma trajetória de sucesso e inovação no mercado de impressão digital.</p>
                </div>
                <div class="col-lg-6">
                    <img src="/placeholder.svg?height=400&width=500" alt="Nossa História" class="img-fluid rounded-3">
                </div>
            </div>
        </div>
    </header>

    <!-- Company Stats -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="stats-card">
                        <div class="stats-number">35+</div>
                        <div class="text-muted">Anos de Experiência</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card">
                        <div class="stats-number">5000+</div>
                        <div class="text-muted">Clientes Atendidos</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card">
                        <div class="stats-number">1M+</div>
                        <div class="text-muted">Produtos Entregues</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card">
                        <div class="stats-number">98%</div>
                        <div class="text-muted">Clientes Satisfeitos</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="timeline-year">1987</div>
                    <p class="lead mb-5">
                        Fundada em 25 de maio de 1987, a MAREPLAST iniciou suas atividades como uma pequena empresa de 
                        produção de sacolas e impressos. Com o passar dos anos, a empresa cresceu e expandiu seus negócios, 
                        obtendo uma escala de produção que a coloca em posição de liderança entre seus concorrentes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission, Vision, Values -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Missão, Visão e Valores</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card value-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="value-icon">
                                <i class="bi bi-target fs-1"></i>
                            </div>
                            <h3 class="h4 mb-3">Missão</h3>
                            <p class="text-muted">
                                Oferecer soluções inovadoras em impressão digital, contribuindo para o sucesso 
                                dos nossos clientes através de produtos de alta qualidade e atendimento excepcional.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card value-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="value-icon">
                                <i class="bi bi-eye fs-1"></i>
                            </div>
                            <h3 class="h4 mb-3">Visão</h3>
                            <p class="text-muted">
                                Ser reconhecida como referência nacional em soluções de impressão digital, 
                                mantendo o compromisso com a inovação e a satisfação dos clientes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card value-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="value-icon">
                                <i class="bi bi-heart fs-1"></i>
                            </div>
                            <h3 class="h4 mb-3">Valores</h3>
                            <ul class="list-unstyled text-muted text-start">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i>Qualidade</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i>Inovação</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i>Compromisso</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i>Ética</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i>Sustentabilidade</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Photos -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Nossa Estrutura</h2>
            <div class="row g-4 photo-gallery">
                <div class="col-md-6">
                    <img src="/placeholder.svg?height=400&width=600" alt="Fachada da Empresa" class="img-fluid w-100">
                </div>
                <div class="col-md-6">
                    <div class="row g-4">
                        <div class="col-6">
                            <img src="/placeholder.svg?height=200&width=300" alt="Área de Produção" class="img-fluid w-100">
                        </div>
                        <div class="col-6">
                            <img src="/placeholder.svg?height=200&width=300" alt="Equipamentos" class="img-fluid w-100">
                        </div>
                        <div class="col-6">
                            <img src="/placeholder.svg?height=200&width=300" alt="Sala de Reunião" class="img-fluid w-100">
                        </div>
                        <div class="col-6">
                            <img src="/placeholder.svg?height=200&width=300" alt="Showroom" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="/placeholder.svg?height=400&width=500" alt="Tecnologia" class="img-fluid rounded-3">
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-4">Tecnologia de Ponta</h2>
                    <p class="text-muted mb-4">
                        Para alcançar esse sucesso, a MAREPLAST investiu em equipamentos modernos de última geração para produção. 
                        A empresa tem como compromisso utilizar tecnologia de ponta em todos os processos produtivos, garantindo 
                        produtos de alta qualidade e eficiência.
                    </p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-printer-fill text-pink fs-3 me-3"></i>
                                <h3 class="h5 mb-0">Impressão Digital</h3>
                            </div>
                            <p class="text-muted">Equipamentos de última geração para impressão em alta resolução.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-gear-fill text-pink fs-3 me-3"></i>
                                <h3 class="h5 mb-0">Automação</h3>
                            </div>
                            <p class="text-muted">Processos automatizados para maior precisão e produtividade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Logos -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Clientes que Confiam em Nosso Trabalho</h2>
            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-6 col-md-3 text-center">
                    <img src="/placeholder.svg?height=80&width=150" alt="Logo Cliente 1" class="client-logo">
                </div>
                <div class="col-6 col-md-3 text-center">
                    <img src="/placeholder.svg?height=80&width=150" alt="Logo Cliente 2" class="client-logo">
                </div>
                <div class="col-6 col-md-3 text-center">
                    <img src="/placeholder.svg?height=80&width=150" alt="Logo Cliente 3" class="client-logo">
                </div>
                <div class="col-6 col-md-3 text-center">
                    <img src="/placeholder.svg?height=80&width=150" alt="Logo Cliente 4" class="client-logo">
                </div>
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
                            R. Henrique Manasses, 305<br>
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
                <small class="text-muted">© 2024 Mareplast. Todos os direitos reservados.</small>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>