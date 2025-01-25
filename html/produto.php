<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização do Produto - Mareplast</title>
        
    <?php include './includes/head.php'; ?>

</head>
<body>
    
    <?php include './includes/nav.php'; ?>

    <!-- Product Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Product Images -->
                <div class="col-lg-7 mb-4">
                    <div class="product-carousel">
                        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imgs/produto-01.png" class="d-block w-100" alt="Sacola Personalizada - Vista Frontal">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imgs/produto-05.png" class="d-block w-100" alt="Sacola Personalizada - Vista Lateral">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imgs/produto-03.png" class="d-block w-100" alt="Sacola Personalizada - Detalhes">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Próximo</span>
                            </button>
                        </div>
                        <!-- Thumbnails -->
                        <div class="d-flex justify-content-center gap-2 mt-3">
                            <img src="./imgs/produto-01.png" class="thumbnail-preview" alt="Thumbnail 1" onclick="$('#productCarousel').carousel(0)">
                            <img src="./imgs/produto-05.png" class="thumbnail-preview" alt="Thumbnail 2" onclick="$('#productCarousel').carousel(1)">
                            <img src="./imgs/produto-03.png" class="thumbnail-preview" alt="Thumbnail 3" onclick="$('#productCarousel').carousel(2)">
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Produtos</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Sacolas</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sacola Kraft Personalizada</li>
                        </ol>
                    </nav>

                    <h1 class="h2 mb-4">Sacola Kraft Personalizada</h1>
                    <p class="text-muted mb-4">
                        Sacolas kraft personalizadas de alta qualidade, ideais para lojas, eventos e presentes. 
                        Impressão personalizada com sua marca e design exclusivo.
                    </p>

                    <!-- Product Specifications -->
                    <div class="product-specs mb-4">
                        <h3 class="h5 mb-3">Especificações</h3>
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="bi bi-rulers"></i>
                            </div>
                            <div>
                                <strong>Tamanhos Disponíveis</strong>
                                <p class="mb-0">P, M, G, GG</p>
                            </div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="bi bi-palette"></i>
                            </div>
                            <div>
                                <strong>Cores de Impressão</strong>
                                <p class="mb-0">Até 4 cores</p>
                            </div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <div>
                                <strong>Material</strong>
                                <p class="mb-0">Papel Kraft 140g/m²</p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-grid gap-2">
                        <a href="https://wa.me/5515974020934?text=Olá,%20gostaria%20de%20um%20orçamento." target="_wp" rel="nofollow" class="btn btn-custom btn-lg">
                            <i class="bi bi-whatsapp me-2"></i>Solicitar Orçamento
                        </a>
                        <a class="btn btn-clean">
                            <i class="bi bi-download me-2"></i>Baixar Especificações Técnicas
                        </a>
                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="row mt-5">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab">
                                Descrição
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button" role="tab">
                                Especificações Técnicas
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content p-4 border border-top-0 rounded-bottom" id="productTabsContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <h4>Sobre o Produto</h4>
                            <p>Nossas sacolas kraft personalizadas são produzidas com papel de alta qualidade e resistência, 
                            ideais para diversos segmentos do mercado. Com acabamento profissional e impressão de alta definição, 
                            suas sacolas terão uma apresentação premium que valoriza sua marca.</p>
                            
                            <h5 class="mt-4">Características</h5>
                            <ul>
                                <li>Material resistente e durável</li>
                                <li>Impressão de alta qualidade</li>
                                <li>Acabamento profissional</li>
                                <li>Alça em cordão de nylon</li>
                                <li>Diversos tamanhos disponíveis</li>
                                <li>Personalização completa</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="specs" role="tabpanel">
                            <h4>Especificações Técnicas Detalhadas</h4>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Material</th>
                                        <td>Papel Kraft 140g/m²</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Impressão</th>
                                        <td>Offset até 4 cores</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Acabamento</th>
                                        <td>Cordão de nylon, ilhós metálico</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Prazo de Produção</th>
                                        <td>7 a 10 dias úteis após aprovação da arte</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="mb-4">Produtos Relacionados</h3>
            <div class="row g-4">
                <!-- Related Product 1 -->
                <div class="col-md-3">
                    <div class="card h-100 border-0">
                        <img src="./imgs/produto-01.png" class="card-img-top p-3" alt="Produto Relacionado">
                        <div class="card-body">
                            <h5 class="card-title">Sacola Papel Color</h5>
                            <p class="card-text text-muted">Sacolas em papel colorido com sua marca</p>
                        </div>
                    </div>
                </div>
                <!-- Related Product 2 -->
                <div class="col-md-3">
                    <div class="card h-100 border-0">
                        <img src="./imgs/produto-02.png" class="card-img-top p-3" alt="Produto Relacionado">
                        <div class="card-body">
                            <h5 class="card-title">Sacola Premium</h5>
                            <p class="card-text text-muted">Acabamento especial e laminação</p>
                        </div>
                    </div>
                </div>
                <!-- Related Product 3 -->
                <div class="col-md-3">
                    <div class="card h-100 border-0">
                        <img src="./imgs/produto-03.png" class="card-img-top p-3" alt="Produto Relacionado">
                        <div class="card-body">
                            <h5 class="card-title">Mini Sacolas</h5>
                            <p class="card-text text-muted">Ideais para presentes e joias</p>
                        </div>
                    </div>
                </div>
                <!-- Related Product 4 -->
                <div class="col-md-3">
                    <div class="card h-100 border-0">
                        <img src="./imgs/produto-04.png" class="card-img-top p-3" alt="Produto Relacionado">
                        <div class="card-body">
                            <h5 class="card-title">Sacola Ecológica</h5>
                            <p class="card-text text-muted">100% reciclável e sustentável</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include './includes/footer.php'; ?>
    
    
</body>
</html>