<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envelopes Personalizados - Mareplast</title>
        
    <?php include '../includes/head.php'; ?>

</head>
<body>
    
    <?php include '../includes/nav.php'; ?>

    <!-- Header -->
    <header class="banner-interno">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>Envelopes Personalizados</h1>
                    <p class="lead mb-4">
                        Envelopes personalizados de alta qualidade para correspondências, documentos e materiais promocionais.
                        Produzidos com papéis selecionados e impressão profissional para sua comunicação corporativa.
                    </p>
                    <a href="https://wa.me/5515974020934?text=Olá,%20gostaria%20de%20um%20orçamento%20para%20envelopes%20personalizados." target="_wp" rel="nofollow" class="btn btn-custom btn-lg">
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
                                    <img src="../imgs/produtos/produto_envelope.png" class="d-block w-100" alt="Envelopes Personalizados - Vista Principal">
                                </div>
                                <div class="carousel-item">
                                    <img src="../imgs/produto-06.png" class="d-block w-100" alt="Envelopes Personalizados - Exemplo 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="../imgs/produto-08.png" class="d-block w-100" alt="Envelopes Personalizados - Exemplo 2">
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
                            <img src="../imgs/produtos/produto_envelope.png" class="thumbnail-preview" alt="Thumbnail 1" onclick="$('#productCarousel').carousel(0)">
                            <img src="../imgs/produto-06.png" class="thumbnail-preview" alt="Thumbnail 2" onclick="$('#productCarousel').carousel(1)">
                            <img src="../imgs/produto-08.png" class="thumbnail-preview" alt="Thumbnail 3" onclick="$('#productCarousel').carousel(2)">
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../produtos.php" class="text-decoration-none">Produtos</a></li>
                            <li class="breadcrumb-item"><a href="../produtos.php" class="text-decoration-none">Envelopes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Envelopes Personalizados</li>
                        </ol>
                    </nav>

                    <h1 class="h2 mb-4">Envelopes Personalizados para Envio</h1>
                    <p class="text-muted mb-4">
                        Envelopes personalizados de alta qualidade para correspondências, documentos e materiais promocionais.
                        Produzidos com papéis selecionados e impressão profissional, nossos envelopes garantem a melhor
                        apresentação para sua comunicação corporativa.
                    </p>

                    <!-- Product Specifications -->
                    <div class="product-specs mb-4">
                        <h3 class="h5 mb-3">Especificações</h3>
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div>
                                <strong>Tipos de Envelopes</strong>
                                <p class="mb-0">Saco, Carta, Ofício, Documentos</p>
                            </div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="bi bi-palette"></i>
                            </div>
                            <div>
                                <strong>Cores de Impressão</strong>
                                <p class="mb-0">1 a 4 cores</p>
                            </div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="bi bi-layers"></i>
                            </div>
                            <div>
                                <strong>Material</strong>
                                <p class="mb-0">Offset 90g a 120g</p>
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
                        <a href="https://wa.me/5515974020934?text=Olá,%20gostaria%20de%20um%20orçamento%20para%20envelopes%20personalizados." target="_wp" rel="nofollow" class="btn btn-custom btn-lg">
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
                                Formatos Disponíveis
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content p-4 border border-top-0 rounded-bottom" id="productTabsContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <h4>Sobre os Envelopes</h4>
                            <p>Nossa linha de envelopes personalizados oferece soluções profissionais para sua correspondência
                            corporativa. Com diversos formatos e opções de personalização, garantimos a qualidade e apresentação
                            que sua empresa merece.</p>
                            
                            <h5 class="mt-4">Características</h5>
                            <ul>
                                <li>Alta qualidade de impressão</li>
                                <li>Papel offset premium</li>
                                <li>Diversos formatos disponíveis</li>
                                <li>Fechamento com cola</li>
                                <li>Personalização completa</li>
                                <li>Acabamento profissional</li>
                                <li>Resistência e durabilidade</li>
                            </ul>

                            <h5 class="mt-4">Aplicações</h5>
                            <ul>
                                <li>Correspondência corporativa</li>
                                <li>Documentos importantes</li>
                                <li>Materiais promocionais</li>
                                <li>Convites e cartões</li>
                                <li>Certificados</li>
                                <li>Propostas comerciais</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="specs" role="tabpanel">
                            <h4>Especificações Técnicas Detalhadas</h4>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Material Base</th>
                                        <td>Papel Offset 90g/m² a 120g/m²</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Impressão</th>
                                        <td>Offset 1 a 4 cores</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Acabamentos</th>
                                        <td>Cola, faca especial, janela</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Personalização</th>
                                        <td>Frente e verso disponível</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Quantidade Mínima</th>
                                        <td>1.000 unidades por modelo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Prazo de Produção</th>
                                        <td>5 a 7 dias úteis após aprovação</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="sizes" role="tabpanel">
                            <h4>Formatos Padrão Disponíveis</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Modelo</th>
                                            <th>Dimensões (mm)</th>
                                            <th>Uso Recomendado</th>
                                            <th>Características</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Carta</td>
                                            <td>114 x 162</td>
                                            <td>Correspondências</td>
                                            <td>Com ou sem janela</td>
                                        </tr>
                                        <tr>
                                            <td>Ofício</td>
                                            <td>240 x 340</td>
                                            <td>Documentos A4</td>
                                            <td>Aba reta ou redonda</td>
                                        </tr>
                                        <tr>
                                            <td>Saco</td>
                                            <td>200 x 280</td>
                                            <td>Catálogos</td>
                                            <td>Fechamento lateral</td>
                                        </tr>
                                        <tr>
                                            <td>Documentos</td>
                                            <td>260 x 360</td>
                                            <td>Documentos grandes</td>
                                            <td>Reforço interno</td>
                                        </tr>
                                        <tr>
                                            <td>Convite</td>
                                            <td>160 x 235</td>
                                            <td>Convites especiais</td>
                                            <td>Papel premium</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="mt-3"><small class="text-muted">* Formatos personalizados disponíveis sob consulta</small></p>
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
                        <img src="../imgs/produtos/produto_impressos.png" class="card-img-top p-3" alt="Impressos Comerciais">
                        <div class="card-body">
                            <h5 class="card-title">Impressos Comerciais</h5>
                            <p class="card-text text-muted">Material gráfico personalizado</p>
                            <a href="./impressos.php" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <!-- Related Product 2 -->
                <div class="col-md-3">
                    <div class="card h-100 border-0">
                        <img src="../imgs/produtos/produto_sacola_papel.png" class="card-img-top p-3" alt="Sacolas de Papel">
                        <div class="card-body">
                            <h5 class="card-title">Sacolas de Papel</h5>
                            <p class="card-text text-muted">Sacolas personalizadas em papel</p>
                            <a href="./sacolas-papel.php" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>
    
</body>
</html>