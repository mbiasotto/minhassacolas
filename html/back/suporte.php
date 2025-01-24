<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte Técnico - Mareplast</title>
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
        .support-card {
            border-radius: 15px;
            transition: transform 0.3s ease;
            height: 100%;
        }
        .support-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .support-icon {
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
        .faq-item {
            border-bottom: 1px solid #e9ecef;
            padding: 1rem 0;
        }
        .faq-item:last-child {
            border-bottom: none;
        }
        .faq-question {
            cursor: pointer;
            padding-right: 30px;
            position: relative;
        }
        .faq-question::after {
            content: '\F282';
            font-family: 'Bootstrap-icons';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            transition: transform 0.3s ease;
        }
        .faq-question.active::after {
            transform: translateY(-50%) rotate(180deg);
        }
        .faq-answer {
            display: none;
            padding-top: 1rem;
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
                        <a class="nav-link" href="quem-somos.html">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produtos.html">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="como-comprar.html">Como Comprar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gabaritos.html">Gabarito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.html">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="suporte-tecnico.html">Suporte Técnico</a>
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
                    <h1 class="display-4 fw-bold mb-4">Suporte Técnico</h1>
                    <p class="lead mb-4">
                        Estamos aqui para ajudar você com qualquer dúvida técnica sobre nossos produtos e serviços. 
                        Escolha a opção que melhor atende às suas necessidades.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="/placeholder.svg?height=300&width=500" alt="Suporte Técnico" class="img-fluid rounded-3">
                </div>
            </div>
        </div>
    </header>

    <!-- Support Options -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Como Podemos Ajudar?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card support-card h-100">
                        <div class="card-body text-center">
                            <div class="support-icon">
                                <i class="bi bi-chat-dots-fill fs-4"></i>
                            </div>
                            <h3 class="h5 mb-3">Chat Online</h3>
                            <p class="text-muted mb-4">
                                Converse em tempo real com um de nossos especialistas técnicos.
                            </p>
                            <button class="btn btn-outline-primary">
                                Iniciar Chat
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card support-card h-100">
                        <div class="card-body text-center">
                            <div class="support-icon">
                                <i class="bi bi-telephone-fill fs-4"></i>
                            </div>
                            <h3 class="h5 mb-3">Suporte por Telefone</h3>
                            <p class="text-muted mb-4">
                                Ligue para nossa equipe de suporte técnico para assistência imediata.
                            </p>
                            <a href="tel:+551532232417" class="btn btn-outline-primary">
                                (15) 3223-2417
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card support-card h-100">
                        <div class="card-body text-center">
                            <div class="support-icon">
                                <i class="bi bi-envelope-fill fs-4"></i>
                            </div>
                            <h3 class="h5 mb-3">E-mail de Suporte</h3>
                            <p class="text-muted mb-4">
                                Envie sua dúvida por e-mail e responderemos em até 24 horas úteis.
                            </p>
                            <a href="mailto:suporte@mareplast.com.br" class="btn btn-outline-primary">
                                Enviar E-mail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Perguntas Frequentes</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="faq-list">
                        <div class="faq-item">
                            <h3 class="h6 faq-question">Como posso preparar meus arquivos para impressão?</h3>
                            <div class="faq-answer">
                                <p>Para preparar seus arquivos corretamente:</p>
                                <ul>
                                    <li>Use nossos gabaritos disponíveis na seção de downloads</li>
                                    <li>Certifique-se de que as imagens estejam em 300 DPI</li>
                                    <li>Use o modo de cor CMYK</li>
                                    <li>Adicione 3mm de sangria em todos os lados</li>
                                    <li>Converta todas as fontes em curvas</li>
                                </ul>
                            </div>
                        </div>
                        <div class="faq-item">
                            <h3 class="h6 faq-question">Qual é o prazo de produção para pedidos personalizados?</h3>
                            <div class="faq-answer">
                                <p>O prazo de produção varia de acordo com o produto e a quantidade solicitada. Em geral, nossos prazos são:</p>
                                <ul>
                                    <li>Sacolas personalizadas: 7 a 10 dias úteis</li>
                                    <li>Cartões de visita: 3 a 5 dias úteis</li>
                                    <li>Banners e faixas: 2 a 4 dias úteis</li>
                                </ul>
                                <p>Para prazos específicos, entre em contato com nossa equipe de vendas.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <h3 class="h6 faq-question">Como posso acompanhar o status do meu pedido?</h3>
                            <div class="faq-answer">
                                <p>Você pode acompanhar o status do seu pedido de duas formas:</p>
                                <ol>
                                    <li>Através do número de pedido fornecido no momento da compra, acessando nossa área de rastreamento no site</li>
                                    <li>Entrando em contato com nosso serviço de atendimento ao cliente por telefone ou e-mail</li>
                                </ol>
                                <p>Atualizamos o status do pedido em tempo real, desde a confirmação até a entrega.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <h3 class="h6 faq-question">Quais são as opções de entrega disponíveis?</h3>
                            <div class="faq-answer">
                                <p>Oferecemos as seguintes opções de entrega:</p>
                                <ul>
                                    <li>Retirada na loja: Gratuita</li>
                                    <li>Entrega local (Sorocaba e região): Taxa fixa ou gratuita, dependendo do valor do pedido</li>
                                    <li>Entrega para todo o Brasil: Via transportadora, com prazo e valor calculados no checkout</li>
                                </ul>
                                <p>Para pedidos de grande volume, oferecemos condições especiais de frete. Consulte-nos para mais informações.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <h3 class="h6 faq-question">Como solicitar uma amostra de produto?</h3>
                            <div class="faq-answer">
                                <p>Para solicitar uma amostra de produto:</p>
                                <ol>
                                    <li>Entre em contato com nossa equipe de vendas</li>
                                    <li>Informe o produto específico que você gostaria de ver</li>
                                    <li>Forneça seus dados de contato e endereço para envio</li>
                                </ol>
                                <p>Algumas amostras podem ter um custo associado, que será informado no momento da solicitação. Este valor geralmente é deduzido do seu primeiro pedido.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Recursos Úteis</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5 mb-3">Guias e Tutoriais</h3>
                            <p class="text-muted mb-4">
                                Acesse nossos guias passo a passo e tutoriais em vídeo para ajudar na preparação de arquivos e uso de nossos produtos.
                            </p>
                            <a href="#" class="btn btn-outline-primary">Ver Guias</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5 mb-3">Downloads</h3>
                            <p class="text-muted mb-4">
                                Baixe gabaritos, catálogos de produtos e outros recursos úteis para seus projetos de impressão.
                            </p>
                            <a href="gabaritos.html" class="btn btn-outline-primary">Área de Downloads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5 mb-3">Blog Técnico</h3>
                            <p class="text-muted mb-4">
                                Leia nossos artigos sobre tendências de impressão, dicas técnicas e melhores práticas do setor.
                            </p>
                            <a href="#" class="btn btn-outline-primary">Visitar Blog</a>
                        </div>
                    </div>
                </div>
            </div>
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
                        <li class="mb-2"><a href="quem-somos.html" class="text-light text-decoration-none">Sobre Nós</a></li>
                        <li class="mb-2"><a href="produtos.html" class="text-light text-decoration-none">Produtos</a></li>
                        <li class="mb-2"><a href="como-comprar.html" class="text-light text-decoration-none">Como Comprar</a></li>
                        <li class="mb-2"><a href="gabaritos.html" class="text-light text-decoration-none">Gabaritos</a></li>
                        <li class="mb-2"><a href="contato.html" class="text-light text-decoration-none">Contato</a></li>
                        <li class="mb-2"><a href="suporte-tecnico.html" class="text-light text-decoration-none">Suporte Técnico</a></li>
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
        // FAQ toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    this.classList.toggle('active');
                    const answer = this.nextElementSibling;
                    if (answer.style.display === 'block') {
                        answer.style.display = 'none';
                    } else {
                        answer.style.display = 'block';
                    }
                });
            });
        });
    </script>
</body>
</html>