<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Mareplast</title>
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
        .contact-card {
            border-radius: 15px;
            transition: transform 0.3s ease;
            height: 100%;
        }
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .contact-icon {
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
        .map-container {
            height: 400px;
            border-radius: 15px;
            overflow: hidden;
        }
        .form-floating > label {
            padding-left: 1.25rem;
        }
        .form-control:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 0 0.25rem rgba(74, 144, 226, 0.25);
        }
        .social-link {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: rgba(233, 30, 99, 0.1);
            color: #e91e63;
            transition: all 0.3s ease;
        }
        .social-link:hover {
            background-color: #e91e63;
            color: white;
            transform: translateY(-3px);
        }
        .contact-method {
            transition: all 0.3s ease;
            text-decoration: none;
            color: inherit;
        }
        .contact-method:hover {
            color: #e91e63;
            transform: translateX(5px);
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
                        <a class="nav-link active" href="contato.html">Contato</a>
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
                    <h1 class="display-4 fw-bold mb-4">Entre em Contato</h1>
                    <p class="lead mb-4">
                        Estamos prontos para atender você e desenvolver a melhor solução para o seu negócio. 
                        Escolha a forma de contato mais conveniente.
                    </p>
                    <button class="btn btn-custom btn-lg">
                        <i class="bi bi-whatsapp me-2"></i>Falar pelo WhatsApp
                    </button>
                </div>
                <div class="col-lg-6">
                    <img src="/placeholder.svg?height=400&width=500" alt="Contato" class="img-fluid rounded-3">
                </div>
            </div>
        </div>
    </header>

    <!-- Contact Methods -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card contact-card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="contact-icon">
                                <i class="bi bi-telephone-fill fs-4"></i>
                            </div>
                            <h3 class="h5 mb-3">Telefone</h3>
                            <a href="tel:+551532232417" class="contact-method d-block">
                                <i class="bi bi-telephone me-2"></i>
                                (15) 3223-2417
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card contact-card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="contact-icon">
                                <i class="bi bi-envelope-fill fs-4"></i>
                            </div>
                            <h3 class="h5 mb-3">E-mail</h3>
                            <a href="mailto:contato@mareplast.com.br" class="contact-method d-block">
                                <i class="bi bi-envelope me-2"></i>
                                contato@mareplast.com.br
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card contact-card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt-fill fs-4"></i>
                            </div>
                            <h3 class="h5 mb-3">Endereço</h3>
                            <a href="https://goo.gl/maps/yourlink" target="_blank" class="contact-method d-block">
                                <i class="bi bi-geo-alt me-2"></i>
                                R. Henrique Manasses, 305<br>
                                Sorocaba - SP, 18086-610
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="h3 mb-4">Envie sua Mensagem</h2>
                    <p class="text-muted mb-5">
                        Preencha o formulário abaixo e nossa equipe entrará em contato o mais breve possível.
                    </p>
                    <form id="contactForm" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Seu Nome" required>
                                    <label for="name">Nome</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="seu@email.com" required>
                                    <label for="email">E-mail</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="phone" placeholder="(15) 99999-9999">
                                    <label for="phone">Telefone</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="company" placeholder="Sua Empresa">
                                    <label for="company">Empresa</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" id="subject" required>
                                        <option value="">Selecione...</option>
                                        <option value="orcamento">Solicitar Orçamento</option>
                                        <option value="duvida">Dúvidas</option>
                                        <option value="suporte">Suporte Técnico</option>
                                        <option value="outro">Outro Assunto</option>
                                    </select>
                                    <label for="subject">Assunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" style="height: 150px" placeholder="Sua mensagem" required></textarea>
                                    <label for="message">Mensagem</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-custom">
                                    <i class="bi bi-send me-2"></i>Enviar Mensagem
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="map-container mb-4">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0297567329547!2d-47.45974822534675!3d-23.498033259180883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58abceb48f063%3A0x3c9a64856a4b2456!2sR.%20Henrique%20Manasses%2C%20305%20-%20Jardim%20do%20Pa%C3%A7o%2C%20Sorocaba%20-%20SP%2C%2018087-100!5e0!3m2!1spt-BR!2sbr!4v1704838095799!5m2!1spt-BR!2sbr" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h3 class="h5 mb-4">Horário de Atendimento</h3>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="bi bi-clock me-2 text-pink"></i>
                                    Segunda a Sexta: 8h às 18h
                                </li>
                                <li>
                                    <i class="bi bi-clock me-2 text-pink"></i>
                                    Sábado: 8h às 12h
                                </li>
                            </ul>
                            <h3 class="h5 mb-4">Redes Sociais</h3>
                            <div class="d-flex gap-2">
                                <a href="#" class="social-link">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
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
                                    Qual o prazo de resposta para orçamentos?
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Respondemos todos os pedidos de orçamento em até 24 horas úteis. Para pedidos urgentes, 
                                    recomendamos entrar em contato via WhatsApp para atendimento prioritário.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Como enviar arquivos grandes?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Para arquivos grandes, você pode usar serviços de transferência como WeTransfer ou Google Drive 
                                    e enviar o link por e-mail ou WhatsApp.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Fazem entrega em outras cidades?
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sim, atendemos todo o Brasil. Para a região de Sorocaba, temos entrega própria sem custo adicional. 
                                    Para outras localidades, trabalhamos com transportadoras parceiras.
                                </div>
                            </div>
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

    <!-- Form Validation Script -->
    <script>
        // Form validation
        (function () {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>