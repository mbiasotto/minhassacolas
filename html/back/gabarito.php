<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabaritos - Mareplast</title>
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
        .template-card {
            border-radius: 15px;
            transition: transform 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .template-card .card-body {
            padding: 2rem;
        }
        .template-card h3 {
            margin-bottom: 1.5rem;
        }
        .template-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .template-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(233, 30, 99, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            color: #e91e63;
        }
        .category-filter {
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        .category-filter:hover,
        .category-filter.active {
            background-color: #e91e63;
            color: white !important;
        }
        .download-icon {
            transition: transform 0.3s ease;
        }
        .btn:hover .download-icon {
            transform: translateY(2px);
        }
        .instruction-card {
            border-left: 4px solid #e91e63;
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
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produtos.html">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Como Comprar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Gabarito</a>
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

    <!-- Header -->
    <header class="bg-custom text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Gabaritos</h1>
                    <p class="lead mb-4">
                        Baixe os templates para preparar sua arte com as especificações corretas. 
                        Garantimos assim a melhor qualidade de impressão para seu projeto.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="/placeholder.svg?height=300&width=500" alt="Gabaritos" class="img-fluid rounded-3">
                </div>
            </div>
        </div>
    </header>

    <!-- Instructions Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Como Usar os Gabaritos</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm instruction-card">
                        <div class="card-body">
                            <div class="template-icon">
                                <i class="bi bi-download fs-4"></i>
                            </div>
                            <h3 class="h5 mb-3">1. Baixe o Template</h3>
                            <p class="text-muted mb-0">
                                Escolha o tamanho adequado para seu projeto e faça o download do arquivo em formato AI ou PDF.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm instruction-card">
                        <div class="card-body">
                            <div class="template-icon">
                                <i class="bi bi-pencil-square fs-4"></i>
                            </div>
                            <h3 class="h5 mb-3">2. Prepare sua Arte</h3>
                            <p class="text-muted mb-0">
                                Use as guias e marcações do template para posicionar corretamente sua arte dentro da área segura.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm instruction-card">
                        <div class="card-body">
                            <div class="template-icon">
                                <i class="bi bi-send-check fs-4"></i>
                            </div>
                            <h3 class="h5 mb-3">3. Envie o Arquivo</h3>
                            <p class="text-muted mb-0">
                                Salve em PDF e envie junto com seu pedido. Nossa equipe fará uma análise técnica gratuita.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Templates Section -->
    <section class="py-5">
        <div class="container">
            <!-- Category Filters -->
            <div class="d-flex flex-wrap gap-2 mb-5 justify-content-center">
                <a href="#alca-camiseta" class="category-filter active text-decoration-none text-dark">
                    <i class="bi bi-bag me-2"></i>Alça Camiseta
                </a>
                <a href="#alca-vazada" class="category-filter text-decoration-none text-dark">
                    <i class="bi bi-bag-heart me-2"></i>Alça Vazada
                </a>
                <a href="#cartao" class="category-filter text-decoration-none text-dark">
                    <i class="bi bi-credit-card me-2"></i>Cartão de Visita
                </a>
                <a href="#sacolas" class="category-filter text-decoration-none text-dark">
                    <i class="bi bi-bag-check me-2"></i>Sacolas
                </a>
            </div>

            <!-- Alça Camiseta Templates -->
            <div id="alca-camiseta" class="mb-5">
                <h2 class="h3 mb-4">
                    <i class="bi bi-bag text-pink me-2"></i>
                    Alça Camiseta
                </h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card template-card">
                            <div class="card-body text-center">
                                <h3 class="h4 mb-3">Alça Camiseta 25x35</h3>
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-download me-2"></i>Download
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card template-card">
                            <div class="card-body text-center">
                                <h3 class="h4 mb-3">Alça Camiseta 30x40</h3>
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-download me-2"></i>Download
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card template-card">
                            <div class="card-body text-center">
                                <h3 class="h4 mb-3">Alça Camiseta 40x50</h3>
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-download me-2"></i>Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alça Vazada Templates -->
            <div id="alca-vazada" class="mb-5">
                <h2 class="h3 mb-4">
                    <i class="bi bi-bag-heart text-pink me-2"></i>
                    Alça Vazada
                </h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card template-card">
                            <div class="card-body text-center">
                                <h3 class="h4 mb-3">Alça Vazada 20x30</h3>
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-download me-2"></i>Download
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card template-card">
                            <div class="card-body text-center">
                                <h3 class="h4 mb-3">Alça Vazada 30x40</h3>
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-download me-2"></i>Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cartão de Visita Templates -->
            <div id="cartao" class="mb-5">
                <h2 class="h3 mb-4">
                    <i class="bi bi-credit-card text-pink me-2"></i>
                    Cartão de Visita
                </h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card template-card">
                            <div class="card-body text-center">
                                <h3 class="h4 mb-3">Cartão de Visita 9x5 cm</h3>
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-download me-2"></i>Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sacolas Templates -->
            <div id="sacolas">
                <h2 class="h3 mb-4">
                    <i class="bi bi-bag-check text-pink me-2"></i>
                    Sacolas
                </h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card template-card">
                            <div class="card-body text-center">
                                <h3 class="h4 mb-3">Sacola 18x23x9</h3>
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-download me-2"></i>Download
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card template-card">
                            <div class="card-body text-center">
                                <h3 class="h4 mb-3">Sacola 21x27x9</h3>
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-download me-2"></i>Download
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card template-card">
                            <div class="card-body text-center">
                                <h3 class="h4 mb-3">Sacola 25x34x10</h3>
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-download me-2"></i>Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Requirements -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Especificações Técnicas</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="template-icon">
                                <i class="bi bi-rulers fs-4"></i>
                            </div>
                            <h3 class="h5 mb-3">Sangria</h3>
                            <p class="text-muted mb-0">
                                Adicione 3mm de sangria em todos os lados do arquivo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="template-icon">
                                <i class="bi bi-palette fs-4"></i>
                            </div>
                            <h3 class="h5 mb-3">Cores</h3>
                            <p class="text-muted mb-0">
                                Use o modo de cor CMYK para garantir fidelidade na impressão.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="template-icon">
                                <i class="bi bi-image fs-4"></i>
                            </div>
                            <h3 class="h5 mb-3">Resolução</h3>
                            <p class="text-muted mb-0">
                                Imagens com resolução mínima de 300 DPI.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="template-icon">
                                <i class="bi bi-type fs-4"></i>
                            </div>
                            <h3 class="h5 mb-3">Fontes</h3>
                            <p class="text-muted mb-0">
                                Converter todas as fontes em curvas/outlines.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Help Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Precisa de Ajuda?</h2>
            <p class="text-muted mb-4">
                Nossa equipe está pronta para ajudar você com qualquer dúvida sobre os gabaritos.
            </p>
            <button class="btn btn-custom">
                <i class="bi bi-whatsapp me-2"></i>Falar com um Especialista
            </button>
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
    
    <script>
        // Category filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filters = document.querySelectorAll('.category-filter');
            
            filters.forEach(filter => {
                filter.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all filters
                    filters.forEach(f => f.classList.remove('active'));
                    
                    // Add active class to clicked filter
                    this.classList.add('active');
                    
                    // Smooth scroll to section
                    const targetId = this.getAttribute('href');
                    document.querySelector(targetId).scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            });
        });
    </script>
</body>
</html>

