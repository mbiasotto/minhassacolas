<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos Produtos - Mareplast</title>
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
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .category-filter {
            cursor: pointer;
            padding: 10px 15px;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }
        .category-filter:hover, .category-filter.active {
            background-color: #e91e63;
            color: white;
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
                        <a class="nav-link active" href="#">Produtos</a>
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

    <!-- Products Header -->
    <header class="bg-custom text-white py-5">
        <div class="container">
            <h1 class="display-4 fw-bold">Nossos Produtos</h1>
            <p class="lead">Descubra nossa ampla gama de soluções de impressão para o seu negócio</p>
        </div>
    </header>

    <!-- Products Section -->
    <section class="py-5">
        <div class="container">
            <!-- Category Filters -->
            <div class="mb-4">
                <h2 class="h4 mb-3">Filtrar por Categoria</h2>
                <div class="d-flex flex-wrap gap-2">
                    <span class="category-filter active" data-category="all">Todos</span>
                    <span class="category-filter" data-category="sacolas">Sacolas</span>
                    <span class="category-filter" data-category="embalagens">Embalagens</span>
                    <span class="category-filter" data-category="papelaria">Papelaria</span>
                    <span class="category-filter" data-category="promocional">Material Promocional</span>
                    <span class="category-filter" data-category="rotulos">Rótulos e Etiquetas</span>
                </div>
            </div>

            <!-- Sort Options -->
            <div class="mb-4">
                <label for="sortSelect" class="form-label">Ordenar por:</label>
                <select class="form-select" id="sortSelect" style="width: auto;">
                    <option value="name-asc">Nome (A-Z)</option>
                    <option value="name-desc">Nome (Z-A)</option>
                    <option value="popularity">Popularidade</option>
                    <option value="newest">Mais Recentes</option>
                </select>
            </div>

            <!-- Products Grid -->
            <div class="row g-4" id="productsGrid">
                <!-- Product 1 -->
                <div class="col-md-6 col-lg-4" data-category="sacolas">
                    <div class="card h-100 border-0 product-card">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Sacolas de Papel">
                        <div class="card-body">
                            <h3 class="h5 card-title">Sacolas de Papel</h3>
                            <p class="card-text text-muted">Sacolas personalizadas em papel kraft ou couchê</p>
                            <a href="produto.html" class="btn btn-outline-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-6 col-lg-4" data-category="sacolas">
                    <div class="card h-100 border-0 product-card">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Sacolas de Plástico">
                        <div class="card-body">
                            <h3 class="h5 card-title">Sacolas de Plástico</h3>
                            <p class="card-text text-muted">Sacolas em plástico resistente com sua marca</p>
                            <a href="#" class="btn btn-outline-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-6 col-lg-4" data-category="embalagens">
                    <div class="card h-100 border-0 product-card">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Caixas Personalizadas">
                        <div class="card-body">
                            <h3 class="h5 card-title">Caixas Personalizadas</h3>
                            <p class="card-text text-muted">Embalagens sob medida para seus produtos</p>
                            <a href="#" class="btn btn-outline-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-md-6 col-lg-4" data-category="papelaria">
                    <div class="card h-100 border-0 product-card">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Cartões de Visita">
                        <div class="card-body">
                            <h3 class="h5 card-title">Cartões de Visita</h3>
                            <p class="card-text text-muted">Impressão de alta qualidade em diversos acabamentos</p>
                            <a href="#" class="btn btn-outline-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="col-md-6 col-lg-4" data-category="promocional">
                    <div class="card h-100 border-0 product-card">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Folders e Folhetos">
                        <div class="card-body">
                            <h3 class="h5 card-title">Folders e Folhetos</h3>
                            <p class="card-text text-muted">Material promocional impresso em alta resolução</p>
                            <a href="#" class="btn btn-outline-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-md-6 col-lg-4" data-category="rotulos">
                    <div class="card h-100 border-0 product-card">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Rótulos Adesivos">
                        <div class="card-body">
                            <h3 class="h5 card-title">Rótulos Adesivos</h3>
                            <p class="card-text text-muted">Etiquetas personalizadas para produtos e embalagens</p>
                            <a href="#" class="btn btn-outline-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-md-6 col-lg-4" data-category="papelaria">
                    <div class="card h-100 border-0 product-card">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Envelopes Personalizados">
                        <div class="card-body">
                            <h3 class="h5 card-title">Envelopes Personalizados</h3>
                            <p class="card-text text-muted">Envelopes com sua identidade visual</p>
                            <a href="#" class="btn btn-outline-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="col-md-6 col-lg-4" data-category="promocional">
                    <div class="card h-100 border-0 product-card">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Banners e Faixas">
                        <div class="card-body">
                            <h3 class="h5 card-title">Banners e Faixas</h3>
                            <p class="card-text text-muted">Impressão em grande formato para eventos e divulgação</p>
                            <a href="#" class="btn btn-outline-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="col-md-6 col-lg-4" data-category="embalagens">
                    <div class="card h-100 border-0 product-card">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top p-4" alt="Embalagens para Alimentos">
                        <div class="card-body">
                            <h3 class="h5 card-title">Embalagens para Alimentos</h3>
                            <p class="card-text text-muted">Embalagens seguras e personalizadas para o setor alimentício</p>
                            <a href="#" class="btn btn-outline-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Próxima</a>
                    </li>
                </ul>
            </nav>
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

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Category filter functionality
            $('.category-filter').click(function() {
                $('.category-filter').removeClass('active');
                $(this).addClass('active');
                
                var category = $(this).data('category');
                if(category === 'all') {
                    $('.product-card').parent().show();
                } else {
                    $('.product-card').parent().hide();
                    $('[data-category="' + category + '"]').show();
                }
            });

            // Sort functionality
            $('#sortSelect').change(function() {
                var sortOption = $(this).val();
                var $products = $('#productsGrid').children();
                
                $products.sort(function(a, b) {
                    var an = $(a).find('.card-title').text();
                    var bn = $(b).find('.card-title').text();
                    
                    if(sortOption === 'name-asc') {
                        return an.localeCompare(bn);
                    } else if(sortOption === 'name-desc') {
                        return bn.localeCompare(an);
                    }
                    // Add more sorting options here if needed
                });
                
                $products.detach().appendTo('#productsGrid');
            });
        });
    </script>
</body>
</html>