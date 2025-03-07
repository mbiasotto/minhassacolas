<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressos Gráficos Personalizados - Mareplast</title>
        
    <?php include '../includes/head.php'; ?>

</head>
<body>
    
    <?php include '../includes/nav.php'; ?>

    <!-- Header -->
    <header class="banner-interno">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 animate animate-left">
                    <h1>Impressos Gráficos Personalizados</h1>
                    <p class="lead mb-4">
                        Material gráfico de alta qualidade para sua empresa. Desde cartões de visita até folders e catálogos,
                        oferecemos uma linha completa de impressos gráficos com acabamento profissional.
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
                                    <img src="../imgs/produtos/produto_impressos.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="../imgs/produtos/produto_impressos_02.jpg" class="d-block w-100">
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
                            <img src="../imgs/produtos/produto_impressos_02.jpg" class="thumbnail-preview" alt="Thumbnail 2" onclick="$('#productCarousel').carousel(1)">
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-5">

                    <h1 class="h2 mb-4">Impressos Gráficos Personalizados</h1>
                    <p class="text-muted mb-4">
                        Os impressos gráficos personalizados são uma excelente maneira de comunicar a essência da sua marca com profissionalismo e impacto. Seja para cartões de visita, folhetos, panfletos ou qualquer outro material, garantimos alta qualidade na impressão e acabamentos impecáveis, sempre pensando nas suas necessidades.
                    </p>
                    <p class="text-muted mb-4">
                    Com designs exclusivos e materiais de primeira linha, nossos impressos ajudam a fortalecer o vínculo com seus clientes e aumentar a visibilidade da sua empresa de forma autêntica e eficaz.
                    </p>

                    <!-- Action Buttons -->
                    <div class="d-grid gap-2 animate animate-up">
                        <a href="https://wa.me/5515974020934?text=Olá,%20gostaria%20de%20um%20orçamento%20para%20impressos%gráficos." target="_wp" rel="nofollow" class="btn btn-custom btn-lg">
                            <i class="bi bi-whatsapp me-2"></i>Solicitar Orçamento
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Description -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="product-details p-4 border rounded">
                        <h2 class="section-title text-center mb-4">Detalhes do Produto</h2>
                        <p>Nossos impressos gráficos são produzidos com tecnologia de ponta e materiais de alta qualidade, 
                        garantindo resultados profissionais para sua empresa. Oferecemos uma ampla variedade de opções 
                        para atender às necessidades específicas do seu negócio, desde cartões de visita até catálogos completos.</p>
                        
                        <div class="row mt-5">
                            <!-- Características Column -->
                            <div class="col-md-6 mb-4 mb-md-0 animate animate-up">
                                <div class="feature-box h-100 p-4 border rounded bg-light">
                                    <h3 class="h4 d-flex align-items-center mb-4">
                                        Características
                                    </h3>
                                    <ul class="feature-list">
                                        <li>Impressão digital de alta definição</li>
                                        <li>Papéis de alta qualidade</li>
                                        <li>Acabamentos especiais disponíveis</li>
                                        <li>Cores fiéis e vibrantes</li>
                                        <li>Diversos formatos disponíveis</li>
                                        <li>Personalização completa</li>
                                        <li>Opções de acabamento diferenciado</li>
                                        <li>Entrega rápida</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Aplicações Column -->
                            <div class="col-md-6 animate animate-up">
                                <div class="feature-box h-100 p-4 border rounded bg-light">
                                    <h3 class="h4 d-flex align-items-center mb-4">
                                        Aplicações
                                    </h3>
                                    <ul class="feature-list">
                                        <li>Cartões de visita</li>
                                        <li>Folders e flyers</li>
                                        <li>Catálogos de produtos</li>
                                        <li>Materiais para eventos</li>
                                        <li>Papelaria corporativa</li>
                                        <li>Materiais promocionais</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../includes/produtos_relacionados.php'; ?>

    <?php include '../includes/footer.php'; ?>

    <script>
        $(document).ready(function() {
            // Initialize carousel
            $('.carousel').carousel();
        });
    </script>
</body>
</html>