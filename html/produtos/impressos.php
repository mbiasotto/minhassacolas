<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressos Comerciais - Mareplast</title>
        
    <?php include '../includes/head.php'; ?>

</head>
<body>
    
    <?php include '../includes/nav.php'; ?>

    <!-- Header -->
    <header class="banner-interno">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>Impressos Comerciais</h1>
                    <p class="lead mb-4">
                        Material gráfico de alta qualidade para sua empresa. Desde cartões de visita até folders e catálogos,
                        oferecemos uma linha completa de impressos comerciais com acabamento profissional.
                    </p>
                    <a href="https://wa.me/5515974020934?text=Olá,%20gostaria%20de%20um%20orçamento%20para%20impressos%20comerciais." target="_wp" rel="nofollow" class="btn btn-custom btn-lg">
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
                                    <img src="../imgs/produtos/produto_impressos.png" class="d-block w-100" alt="Impressos Comerciais - Vista Principal">
                                </div>
                                <div class="carousel-item">
                                    <img src="../imgs/produto-02.png" class="d-block w-100" alt="Impressos Comerciais - Exemplo 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="../imgs/produto-04.png" class="d-block w-100" alt="Impressos Comerciais - Exemplo 2">
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
                            <img src="../imgs/produtos/produto_impressos.png" class="thumbnail-preview" alt="Thumbnail 1" onclick="$('#productCarousel').carousel(0)">
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
                            <li class="breadcrumb-item"><a href="../produtos.php" class="text-decoration-none">Impressos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Impressos Comerciais</li>
                        </ol>
                    </nav>

                    <h1 class="h2 mb-4">Impressos Comerciais Personalizados</h1>
                    <p class="text-muted mb-4">
                        Material gráfico de alta qualidade para sua empresa. Desde cartões de visita até folders e catálogos,
                        oferecemos uma linha completa de impressos comerciais com acabamento profissional e impressão de
                        alta definição para destacar sua marca no mercado.
                    </p>

                    <!-- Product Specifications -->
                    <div class="product-specs mb-4">
                        <h3 class="h5 mb-3">Especificações</h3>
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="bi bi-file-earmark"></i>
                            </div>
                            <div>
                                <strong>Tipos de Impressos</strong>
                                <p class="mb-0">Cartões, Folders, Catálogos, Panfletos</p>
                            </div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="bi bi-palette"></i>
                            </div>
                            <div>
                                <strong>Cores de Impressão</strong>
                                <p class="mb-0">4x0, 4x4 cores</p>
                            </div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="bi bi-layers"></i>
                            </div>
                            <div>
                                <strong>Papéis Disponíveis</strong>
                                <p class="mb-0">Couché, Offset, Reciclado</p>
                            </div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="bi bi-stack"></i>
                            </div>
                            <div>
                                <strong>Pedido Mínimo</strong>
                                <p class="mb-0">500 unidades</p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-grid gap-2">
                        <a href="https://wa.me/5515974020934?text=Olá,%20gostaria%20de%20um%20orçamento%20para%20impressos%20comerciais." target="_wp" rel="nofollow" class="btn btn-custom btn-lg">
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
                            <button class="nav-link" id="products-tab" data-bs-toggle="tab" data-bs-target="#products" type="button" role="tab">
                                Tipos de Impressos
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content p-4 border border-top-0 rounded-bottom" id="productTabsContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <h4>Sobre os Impressos</h4>
                            <p>Nossa linha de impressos comerciais oferece soluções completas para a comunicação visual da sua empresa.
                            Com tecnologia de impressão de última geração e papéis de alta qualidade, garantimos resultados
                            profissionais que valorizam sua marca e mensagem.</p>
                            
                            <h5 class="mt-4">Características</h5>
                            <ul>
                                <li>Impressão offset de alta qualidade</li>
                                <li>Acabamentos especiais disponíveis</li>
                                <li>Diversos tipos de papel</li>
                                <li>Formatos personalizados</li>
                                <li>Prova digital disponível</li>
                                <li>Consultoria especializada</li>
                                <li>Entrega em todo Brasil</li>
                            </ul>

                            <h5 class="mt-4">Aplicações</h5>
                            <ul>
                                <li>Marketing e divulgação</li>
                                <li>Identidade visual</li>
                                <li>Materiais promocionais</li>
                                <li>Comunicação corporativa</li>
                                <li>Eventos e feiras</li>
                                <li>Campanhas publicitárias</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="specs" role="tabpanel">
                            <h4>Especificações Técnicas Detalhadas</h4>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Processos de Impressão</th>
                                        <td>Offset digital e tradicional</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Cores</th>
                                        <td>CMYK, Pantone, cores especiais</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Acabamentos Disponíveis</th>
                                        <td>Verniz, laminação, hot stamping, relevo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Papéis</th>
                                        <td>Couché (90g a 300g), Offset (75g a 240g), Reciclado</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Quantidade Mínima</th>
                                        <td>500 unidades (varia conforme o produto)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Prazo de Produção</th>
                                        <td>5 a 7 dias úteis após aprovação da arte</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="products" role="tabpanel">
                            <h4>Tipos de Impressos Disponíveis</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Produto</th>
                                            <th>Formato Padrão</th>
                                            <th>Papel Recomendado</th>
                                            <th>Acabamentos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cartão de Visita</td>
                                            <td>9x5 cm</td>
                                            <td>Couché 300g</td>
                                            <td>Verniz UV, Laminação</td>
                                        </tr>
                                        <tr>
                                            <td>Folder</td>
                                            <td>A4 (21x29,7 cm)</td>
                                            <td>Couché 150g</td>
                                            <td>Dobra, Verniz</td>
                                        </tr>
                                        <tr>
                                            <td>Panfleto</td>
                                            <td>15x21 cm</td>
                                            <td>Couché 90g</td>
                                            <td>Refile</td>
                                        </tr>
                                        <tr>
                                            <td>Catálogo</td>
                                            <td>21x21 cm</td>
                                            <td>Couché 150g</td>
                                            <td>Grampo, Cola</td>
                                        </tr>
                                        <tr>
                                            <td>Envelope</td>
                                            <td>23x11,5 cm</td>
                                            <td>Offset 90g</td>
                                            <td>Faca especial</td>
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
                        <img src="../imgs/produtos/produto_sacola_papel.png" class="card-img-top p-3" alt="Sacolas de Papel">
                        <div class="card-body">
                            <h5 class="card-title">Sacolas de Papel</h5>
                            <p class="card-text text-muted">Sacolas personalizadas em papel</p>
                            <a href="./sacolas-papel.php" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <!-- Related Product 2 -->
                <div class="col-md-3">
                    <div class="card h-100 border-0">
                        <img src="../imgs/produtos/produto_envelope.png" class="card-img-top p-3" alt="Envelopes">
                        <div class="card-body">
                            <h5 class="card-title">Envelopes</h5>
                            <p class="card-text text-muted">Envelopes personalizados</p>
                            <a href="./envelopes.php" class="stretched-link"></a>
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
                    <h5 class="modal-title" id="especificacoesModalLabel">Especificações Técnicas - Impressos Comerciais</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Materiais Disponíveis</h6>
                            <ul>
                                <li>Couché Brilho/Fosco (90g a 300g)</li>
                                <li>Offset (75g a 240g)</li>
                                <li>Papel Reciclado</li>
                                <li>Papéis Especiais (sob consulta)</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Impressão</h6>
                            <ul>
                                <li>Offset Digital e Tradicional</li>
                                <li>4x0 cores (frente colorida)</li>
                                <li>4x4 cores (frente e verso coloridos)</li>
                                <li>Cores Pantone disponíveis</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h6>Acabamentos Disponíveis</h6>
                            <ul>
                                <li>Verniz Total ou Localizado</li>
                                <li>Laminação Brilho ou Fosca</li>
                                <li>Hot Stamping</li>
                                <li>Relevo Seco</li>
                                <li>Corte e Vinco</li>
                                <li>Dobras</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Preparação de Arquivos</h6>
                            <ul>
                                <li>Formatos: PDF, AI, CDR, PSD</li>
                                <li>Resolução mínima: 300 DPI</li>
                                <li>Cores em CMYK</li>
                                <li>Fontes convertidas em curvas</li>
                                <li>Sangria de 3mm</li>
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
    
    
</body>
</html></html>