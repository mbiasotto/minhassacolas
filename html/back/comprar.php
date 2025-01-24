<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como Comprar - Mareplast</title>

    <?php include './includes/head.php'; ?>

    <style>
        .step-card {
    border-radius: 15px;
    transition: transform 0.3s ease;
    position: relative;
    z-index: 1;
}
.step-card:hover {
    transform: translateY(-5px);
}
.step-number {
    position: absolute;
    top: -20px;
    left: 20px;
    width: 40px;
    height: 40px;
    background: var(--pink);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.2rem;
}
.feature-icon {
    width: 60px;
    height: 60px;
    background-color: rgba(233, 30, 99, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
    color: var(--pink);
}
.timeline-connector {
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background-color: #e9ecef;
    z-index: 0;
}
@media (max-width: 768px) {
    .timeline-connector {
        left: 20px;
    }
}
    </style>

</head>
<body>
    
    <?php include './includes/nav.php'; ?>

    <!-- Header -->
    <header class="bg-custom text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Como Comprar</h1>
                    <p class="lead mb-4">Descubra como é fácil fazer seu pedido na Mareplast. Siga o passo a passo e tenha uma experiência de compra tranquila e eficiente.</p>
                    <button class="btn btn-custom btn-lg">
                        <i class="bi bi-whatsapp me-2"></i>Solicitar Orçamento Agora
                    </button>
                </div>
                <div class="col-lg-6">
                    <img src="/placeholder.svg?height=400&width=500" alt="Como Comprar" class="img-fluid rounded-3">
                </div>
            </div>
        </div>
    </header>

    <!-- Steps Section -->
    <section class="py-5 position-relative">
        <div class="timeline-connector d-none d-md-block"></div>
        <div class="container">
            <!-- Step 1 -->
            <div class="row mb-5 justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm step-card">
                        <div class="step-number">1</div>
                        <div class="card-body p-4">
                            <div class="feature-icon">
                                <i class="bi bi-search fs-4"></i>
                            </div>
                            <h3 class="h4 mb-3">Escolha seu Produto</h3>
                            <p class="text-muted mb-0">
                                Navegue por nosso catálogo e encontre o produto ideal para seu negócio. 
                                Clique em "Ver Detalhes" para obter mais informações sobre especificações, 
                                opções de personalização e quantidades disponíveis.
                            </p>
                            <div class="mt-4">
                                <a href="produtos.html" class="btn btn-outline-primary">
                                    Ver Catálogo Completo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="row mb-5 justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm step-card">
                        <div class="step-number">2</div>
                        <div class="card-body p-4">
                            <div class="feature-icon">
                                <i class="bi bi-rulers fs-4"></i>
                            </div>
                            <h3 class="h4 mb-3">Defina as Especificações</h3>
                            <p class="text-muted mb-0">
                                Escolha o tamanho, cores, quantidade e acabamentos desejados. 
                                Cada produto tem suas próprias opções de personalização. 
                                Se precisar de ajuda, nossa equipe está pronta para orientar você.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="row mb-5 justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm step-card">
                        <div class="step-number">3</div>
                        <div class="card-body p-4">
                            <div class="feature-icon">
                                <i class="bi bi-chat-dots fs-4"></i>
                            </div>
                            <h3 class="h4 mb-3">Solicite um Orçamento</h3>
                            <p class="text-muted mb-0">
                                Entre em contato conosco através do WhatsApp, telefone ou formulário de contato. 
                                Nossa equipe irá preparar um orçamento personalizado para você em até 24 horas úteis.
                            </p>
                            <div class="mt-4">
                                <button class="btn btn-custom me-2">
                                    <i class="bi bi-whatsapp me-2"></i>WhatsApp
                                </button>
                                <a href="contato.html" class="btn btn-outline-primary">
                                    Formulário de Contato
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="row mb-5 justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm step-card">
                        <div class="step-number">4</div>
                        <div class="card-body p-4">
                            <div class="feature-icon">
                                <i class="bi bi-file-earmark-check fs-4"></i>
                            </div>
                            <h3 class="h4 mb-3">Aprove seu Pedido</h3>
                            <p class="text-muted mb-0">
                                Após receber e aprovar o orçamento, envie sua arte final conforme as especificações técnicas. 
                                Nossa equipe fará uma análise técnica gratuita antes da produção.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm step-card">
                        <div class="step-number">5</div>
                        <div class="card-body p-4">
                            <div class="feature-icon">
                                <i class="bi bi-truck fs-4"></i>
                            </div>
                            <h3 class="h4 mb-3">Receba seu Pedido</h3>
                            <p class="text-muted mb-0">
                                Acompanhe a produção do seu pedido e receba no prazo combinado. 
                                Para a região de Sorocaba, oferecemos entrega própria sem custo adicional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Local Service Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="/placeholder.svg?height=400&width=500" alt="Atendimento Local" class="img-fluid rounded-3">
                </div>
                <div class="col-lg-6">
                    <h2 class="h3 mb-4">Atendimento Personalizado na Região de Sorocaba</h2>
                    <p class="text-muted mb-4">
                        Para clientes da região de Sorocaba, oferecemos um diferencial especial: a visita de um de nossos 
                        consultores especializados. Eles podem ir até sua empresa para:
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-pink me-2"></i>
                            Apresentar amostras físicas dos produtos
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-pink me-2"></i>
                            Avaliar suas necessidades específicas
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-pink me-2"></i>
                            Sugerir as melhores soluções para seu negócio
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-pink me-2"></i>
                            Fazer o orçamento na hora
                        </li>
                    </ul>
                    <button class="btn btn-custom">
                        <i class="bi bi-calendar-check me-2"></i>Agendar Visita
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Dúvidas Frequentes</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Qual o prazo de entrega dos pedidos?
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    O prazo varia de acordo com o produto e a quantidade solicitada. Em geral, 
                                    nossos prazos variam de 5 a 15 dias úteis após a aprovação da arte final.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Quais são as formas de pagamento aceitas?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Aceitamos pagamento via boleto bancário, transferência bancária e cartão de crédito. 
                                    Para clientes cadastrados, oferecemos condições especiais de pagamento.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Como devo enviar a arte final?
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Aceitamos arquivos nos formatos AI, PDF, EPS e CDR. Todas as fontes devem estar 
                                    convertidas em curvas e as imagens em CMYK com resolução mínima de 300 DPI.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-custom text-white text-center">
        <div class="container">
            <h2 class="mb-4">Pronto para fazer seu pedido?</h2>
            <p class="lead mb-4">
                Nossa equipe está pronta para atender você e criar a melhor solução para seu negócio.
            </p>
            <button class="btn btn-custom btn-lg">
                <i class="bi bi-whatsapp me-2"></i>Solicitar Orçamento
            </button>
        </div>
    </section>

    <?php include './includes/footer.php'; ?>

</body>
</html>