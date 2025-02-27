<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sacolas de Papel Personalizadas - Mareplast</title>
        
    <?php include '../includes/head.php'; ?>

</head>
<body>
    
    <?php include '../includes/nav.php'; ?>

    <!-- Header -->
    <header class="banner-interno">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>Sacolas de Papel</h1>
                    <p class="lead mb-4">
                        Sacolas personalizadas de alta qualidade, perfeitas para lojas, eventos e presentes.
                        Impressão personalizada com sua marca e design exclusivo.
                    </p>
                    <a href="https://wa.me/5515974020934?text=Olá,%20gostaria%20de%20um%20orçamento%20para%20sacolas%20de%20papel%20personalizadas." target="_wp" rel="nofollow" class="btn btn-custom btn-lg">
                        <i class="bi bi-whatsapp me-2"></i>Solicitar Orçamento
                    </a>
                </div>
                <div class="col-lg-6">
                    
                </div>
            </div>
        </div>
    </header>

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
                                    <img src="../imgs/produtos/produto_sacola_papel.png" class="d-block w-100" alt="Sacola de Papel - Vista Frontal">
                                </div>
                                <div class="carousel-item">
                                    <img src="../imgs/produto-05.png" class="d-block w-100" alt="Sacola de Papel - Vista Lateral">
                                </div>
                                <div class="carousel-item">
                                    <img src="../imgs/produto-03.png" class="d-block w-100" alt="Sacola de Papel - Detalhes">
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
                            <img src="../imgs/produtos/produto_sacola_papel.png" class="thumbnail-preview" alt="Thumbnail 1" onclick="$('#productCarousel').carousel(0)">
                            <img src="../imgs/produto-05.png" class="thumbnail-preview" alt="Thumbnail 2" onclick="$('#productCarousel').carousel(1)">
                            <img src="../imgs/produto-03.png" class="thumbnail-preview" alt="Thumbnail 3" onclick="$('#productCarousel').carousel(2)">
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../produtos.php" class="text-decoration-none">Produtos</a></li>
                            <li class="breadcrumb-item"><a href="../produtos.php" class="text-decoration-none">Sacolas</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sacolas de Papel</li>
                        </ol>
                    </nav>

                    <h1 class="h2 mb-4">Sacolas de Papel Personalizadas</h1>
                    <p class="text-muted mb-4">
                        Sacolas de papel personalizadas de alta qualidade, perfeitas para lojas, eventos e presentes. 
                        Impressão personalizada com sua marca e design exclusivo, produzidas com papel premium para 
                        garantir resistência e durabilidade.
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
                                <p class="mb-0">PP, P, M, G, GG</p>
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
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="bi bi-stack"></i>
                            </div>
                            <div>
                                <strong>Pedido Mínimo</strong>
                                <p class="mb-0">1.000 unidades</p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-grid gap-2">
                        <a href="https://wa.me/5515974020934?text=Olá,%20gostaria%20de%20um%20orçamento%20para%20sacolas%20de%20papel%20personalizadas." target="_wp" rel="nofollow" class="btn btn-custom btn-lg">
                            <i class="bi bi-whatsapp me-2"></i>Solicitar Orçamento
                        </a>
                        <a href="#" class="btn btn-clean" data-bs-toggle="modal" data-bs-target="#especificacoesModal">
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
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sizes-tab" data-bs-toggle="tab" data-bs-target="#sizes" type="button" role="tab">
                                Tabela de Tamanhos
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content p-4 border border-top-0 rounded-bottom" id="productTabsContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <h4>Sobre o Produto</h4>
                            <p>Nossas sacolas de papel personalizadas são a escolha perfeita para empresas que buscam qualidade e sofisticação. 
                            Produzidas com papel kraft de alta gramatura, oferecem excelente resistência e durabilidade, além de um acabamento 
                            premium que valoriza sua marca.</p>
                            
                            <h5 class="mt-4">Características</h5>
                            <ul>
                                <li>Material resistente e durável</li>
                                <li>Impressão de alta qualidade</li>
                                <li>Acabamento profissional</li>
                                <li>Alça em cordão de nylon ou fita</li>
                                <li>Diversos tamanhos disponíveis</li>
                                <li>Personalização completa</li>
                                <li>Opções de acabamento especial</li>
                                <li>Ideal para diversos segmentos</li>
                            </ul>

                            <h5 class="mt-4">Aplicações</h5>
                            <ul>
                                <li>Lojas de varejo</li>
                                <li>Boutiques</li>
                                <li>Eventos corporativos</li>
                                <li>Feiras e exposições</li>
                                <li>Embalagens para presente</li>
                                <li>Restaurantes</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="specs" role="tabpanel">
                            <h4>Especificações Técnicas Detalhadas</h4>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Material Base</th>
                                        <td>Papel Kraft 140g/m²</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Impressão</th>
                                        <td>Offset até 4 cores</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Acabamentos Disponíveis</th>
                                        <td>Cordão de nylon, fita de cetim, ilhós metálico</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Acabamentos Especiais</th>
                                        <td>Hot stamping, verniz localizado, laminação</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Quantidade Mínima</th>
                                        <td>1.000 unidades</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Prazo de Produção</th>
                                        <td>7 a 10 dias úteis após aprovação da arte</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="sizes" role="tabpanel">
                            <h4>Tabela de Tamanhos Padrão</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Tamanho</th>
                                            <th>Largura (cm)</th>
                                            <th>Altura (cm)</th>
                                            <th>Lateral (cm)</th>
                                            <th>Uso Recomendado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PP</td>
                                            <td>20</td>
                                            <td>25</td>
                                            <td>8</td>
                                            <td>Acessórios, joias</td>
                                        </tr>
                                        <tr>
                                            <td>P</td>
                                            <td>26</td>
                                            <td>35</td>
                                            <td>12</td>
                                            <td>Roupas pequenas, presentes</td>
                                        </tr>
                                        <tr>
                                            <td>M</td>
                                            <td>32</td>
                                            <td>45</td>
                                            <td>15</td>
                                            <td>Roupas, calçados</td>
                                        </tr>
                                        <tr>
                                            <td>G</td>
                                            <td>40</td>
                                            <td>48</td>
                                            <td>18</td>
                                            <td>Compras maiores</td>
                                        </tr>
                                        <tr>
                                            <td>GG</td>
                                            <td>45</td>
                                            <td>52</td>
                                            <td>20</td>
                                            <td>Volumes grandes</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="mt-3"><small class="text-muted">* Medidas personalizadas disponíveis sob consulta</small></p>
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
                        <img src="../imgs/produtos/produto_sacola_plastica.png" class="card-img-top p-3" alt="Sacolas de Plástico">
                        <div class="card-body">
                            <h5 class="card-title">Sacolas de Plástico</h5>
                            <p class="card-text text-muted">Sacolas plásticas personalizadas</p>
                            <a href="./sacolas-plastico.php" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <!-- Related Product 2 -->
                <div class="col-md-3">
                    <div class="card h-100 border-0">
                        <img src="../imgs/produtos/produto_impressos.png" class="card-img-top p-3" alt="Impressos">
                        <div class="card-body">
                            <h5 class="card-title">Impressos</h5>
                            <p class="card-text text-muted">Material gráfico personalizado</p>
                            <a href="./impressos.php" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <!-- Related Product 3