<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sacolas de Plástico Personalizadas - Mareplast</title>
        
    <?php include '../includes/head.php'; ?>

</head>
<body>
    
    <?php include '../includes/nav.php'; ?>

    <!-- Header -->
    <header class="banner-interno">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>Sacolas de Plástico</h1>
                    <p class="lead mb-4">
                        Sacolas plásticas personalizadas de alta resistência, ideais para uso comercial e promocional.
                        Produzidas com materiais de qualidade e impressão durável.
                    </p>
                    <a href="https://wa.me/5515974020934?text=Olá,%20gostaria%20de%20um%20orçamento%20para%20sacolas%20plásticas%20personalizadas." target="_wp" rel="nofollow" class="btn btn-custom btn-lg">
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
                                    <img src="../imgs/produtos/produto_sacola_plastica.png" class="d-block w-100" alt="Sacola de Plástico - Vista Frontal">
                                </div>
                                <div class="carousel-item">
                                    <img src="../imgs/produto-02.png" class="d-block w-100" alt="Sacola de Plástico - Vista Lateral">
                                </div>
                                <div class="carousel-item">
                                    <img src="../imgs/produto-04.png" class="d-block w-100" alt="Sacola de Plástico - Detalhes">
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
                            <img src="../imgs/produtos/produto_sacola_plastica.png" class="thumbnail-preview" alt="Thumbnail 1" onclick="$('#productCarousel').carousel(0)">
                            <img src="../imgs/produto-02.png" class="thumbnail-preview" alt="Thumbnail 2" onclick="$('#productCarousel').carousel(1)">
                            <img src="../imgs/produto-04.png" class="thumbnail-preview" alt="Thumbnail 3" onclick="$('#productCarousel').carousel(2)">
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../produtos.php" class="text-decoration-none">Produtos</a></li>
                            <li class="breadcrumb-item"><a href="../produtos.php" class="text-decoration-none">Sacolas</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sacolas de Plástico</li>
                        </ol>
                    </nav>

                    <h1 class="h2 mb-4">Sacolas de Plástico Personalizadas</h1>
                    <p class="text-muted mb-4">
                        Sacolas plásticas personalizadas de alta resistência, ideais para uso comercial e promocional. 
                        Produzidas com materiais de qualidade e impressão durável, nossas sacolas plásticas são 
                        perfeitas para diversos segmentos do mercado.
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
                                <p class="mb-0">Até 8 cores</p>
                            </div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <div>
                                <strong>Material</strong>
                                <p class="mb-0">PEBD/PEAD de alta resistência</p>
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
                        <a href="https://wa.me/5515974020934?text=Olá,%20gostaria%20de%20um%20orçamento%20para%20sacolas%20plásticas%20personalizadas." target="_wp" rel="nofollow" class="btn btn-custom btn-lg">
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
                            <p>Nossas sacolas plásticas personalizadas são desenvolvidas com tecnologia avançada para garantir 
                            máxima resistência e durabilidade. Ideais para uso comercial, promocional e varejo em geral, 
                            oferecemos opções versáteis que atendem às necessidades específicas de cada cliente.</p>
                            
                            <h5 class="mt-4">Características</h5>
                            <ul>
                                <li>Alta resistência e durabilidade</li>
                                <li>Impressão de alta definição</li>
                                <li>Material reciclável</li>
                                <li>Acabamento reforçado</li>
                                <li>Diversos tamanhos disponíveis</li>
                                <li>Personalização completa</li>
                                <li>Opções de acabamento diferenciado</li>
                                <li>Proteção UV opcional</li>
                            </ul>

                            <h5 class="mt-4">Aplicações</h5>
                            <ul>
                                <li>Comércio em geral</li>
                                <li>Supermercados</li>
                                <li>Lojas de departamento</li>
                                <li>Eventos e feiras</li>
                                <li>Ações promocionais</li>
                                <li>Delivery</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="specs" role="tabpanel">
                            <h4>Especificações Técnicas Detalhadas</h4>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Material Base</th>
                                        <td>PEBD/PEAD (Polietileno de Alta e Baixa Densidade)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Impressão</th>
                                        <td>Flexografia até 8 cores</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Acabamentos Disponíveis</th>
                                        <td>Alça fita, alça vazada, zip lock</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Acabamentos Especiais</th>
                                        <td>Proteção UV, acabamento fosco, brilho</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Quantidade Mínima</th>
                                        <td>1.000 unidades</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Prazo de Produção</th>
                                        <td>5 a 7 dias úteis após aprovação da arte</td>
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
                                            <th>Sanfona (cm)</th>
                                            <th>Uso Recomendado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PP</td>
                                            <td>20</td>
                                            <td>30</td>
                                            <td>5</td>
                                            <td>Pequenos itens</td>
                                        </tr>
                                        <tr>
                                            <td>P</td>
                                            <td>25</td>
                                            <td>35</td>
                                            <td>6</td>
                                            <td>Itens médios</td>
                                        </tr>
                                        <tr>
                                            <td>M</td>
                                            <td>30</td>
                                            <td>40</td>
                                            <td>8</td>
                                            <td>Uso geral</td>
                                        </tr>
                                        <tr>
                                            <td>G</td>
                                            <td>40</td>
                                            <td>50</td>
                                            <td>10</td>
                                            <td>Volumes maiores</td>
                                        </tr>
                                        <tr>
                                            <td>GG</td>
                                            <td>50</td>
                                            <td>60</td>
                                            <td>12</td>
                                            <td>Grandes volumes</td>
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

    <!-- Specifications Modal -->
    <div class="modal fade" id="especificacoesModal" tabindex="-1" aria-labelledby="especificacoesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="especificacoesModalLabel">Especificações Técnicas - Sacolas de Plástico</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Materiais Disponíveis</h6>
                            <ul>
                                <li>PEBD (Polietileno de Baixa Densidade)</li>
                                <li>PEAD (Polietileno de Alta Densidade)</li>
                                <li>Espessuras: 0,06mm a 0,15mm</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Impressão</h6>
                            <ul>
                                <li>Flexografia até 8 cores</li>
                                <li>Alta definição</li>
                                <li>Cores Pantone</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h6>Acabamentos Disponíveis</h6>
                            <ul>
                                <li>Alça fita</li>
                                <li>Alça vazada</li>
                                <li>Zip lock</li>
                                <li>Furo europeu</li>
                                <li>Solda lateral reforçada</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Informações Adicionais</h6>
                            <ul>
                                <li>Pedido mínimo: 1.000 unidades</li>
                                <li>Prazo de produção: 5-7 dias úteis</li>
                                <li>Envio para todo Brasil</li>
                                <li>Garantia de qualidade</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <a href="#" class="btn btn-primary" download><i class="bi bi-download me-2"></i>Download PDF</a>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>

    <!-- Related Products -->
    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="mb-4">Produtos Relacionados</h3>
            <div class="row g-4">
                <!-- Related Product 1 -->
                <div class="col-md-3">
                    <div class="card h-100 border-0">
                        <img src="../imgs/produtos/produto_sacola_papel.png" class="card-img-top p-3" alt="Sacolas de Papel">
                        <div class="card-body">
                            <h5 class="card-title">Sacolas de Papel</h5>
                            <p class="card-text text-muted">Sacolas em papel personalizado</p>
                            <a href="./sacolas-papel.php" class="stretched-link"></a>
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