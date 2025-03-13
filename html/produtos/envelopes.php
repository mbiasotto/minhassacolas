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
                <div class="col-lg-6 animate animate-left">
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
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-5">

                    <h1 class="h2 mb-4">Envelopes Personalizados para Envio</h1>
                    <p class="text-muted mb-4">
                        Nossos envelopes para envio garantem que seus produtos cheguem com segurança e profissionalismo aos seus clientes. Feitos com materiais de alta qualidade, eles oferecem a proteção ideal para diferentes tipos de itens, assegurando uma entrega eficiente e sem imprevistos.
                    </p>

                    <h3 class="h5 mb-4">Tamanhos</h3>
                    <p class="text-muted mb-4">
                        20x30, 32x40, 40x50, 50x60 e 60x70
                    </p>

                    

                    <!-- Action Buttons -->
                    <div class="d-grid gap-2 animate animate-up">
                        <a href="https://wa.me/5515974020934?text=Olá,%20gostaria%20de%20um%20orçamento%20para%20envelopes%20personalizados." target="_wp" rel="nofollow" class="btn btn-custom btn-lg">
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
                        <p>Os envelopes plásticos invioláveis ​​são produzidos em polietileno, 
                        um material resistente, leve e impermeável, garantindo máxima proteção ao conteúdo enviado.</p>
                        
                        <div class="row mt-5">
                            <!-- Características Column -->
                            <div class="col-md-6 mb-4 mb-md-0 animate animate-up">
                                <div class="feature-box h-100 p-4 border rounded bg-light">
                                    <h3 class="h4 d-flex align-items-center mb-4">
                                        Características
                                    </h3>
                                    <ul class="feature-list">
                                        <li>Fechamento seguro: adesivo de alta aderência que impede a visibilidade.</li>
                                        <li>Opacidade: Garante privacidade ao conteúdo enviado.</li>
                                        <li>Variedade de tamanhos: Opções para diferentes tipos de envio.</li>
                                        <li>Personalização: Impressão com logotipo e informações da empresa.</li>
                                        <li>Padrão Correios: Atende às critérios para transporte seguro.</li>
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
                                        <li>E-commerce: Envio seguro de roupas, acessórios, eletrônicos e outros produtos.</li>
                                        <li>Brindes e amostras: Transporte discreto e seguro para materiais promocionais.</li>
                                        <li>Correios e transportadoras: Embalagem confiável para logística e distribuição.</li>
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