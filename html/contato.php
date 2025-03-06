<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Mareplast</title>
        
    <?php include './includes/head.php'; ?>

</head>
<body>
    
    <?php include './includes/nav.php'; ?>

    <!-- Header -->
    <header class="banner-interno">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 animate animate-left">
                    <h1>Entre em Contato</h1>
                    <p class="lead mb-4">
                        Estamos prontos para atender você e desenvolver a melhor solução para o seu negócio. 
                        Escolha a forma de contato mais conveniente.
                    </p>
                    <a href="https://wa.me/5515974020934" target="_wp" rel="nofollow" class="btn btn-custom btn-lg">
                        <i class="bi bi-whatsapp me-2"></i>Falar pelo WhatsApp
                    </a>
                </div>
                <div class="col-lg-6">
                    
                </div>
            </div>
        </div>
    </header>

    <!-- Contact Methods -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4" data-scroll="stagger">
                <div class="col-md-4 animate animate-up">
                    <div class="card card-custom shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-circle">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <h3 class="h5 mb-3">Telefone</h3>
                            <a href="tel:+551532232417" class="contact-method d-block">
                                <i class="bi bi-telephone me-2"></i>
                                (15) 3223-2417
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate animate-up">
                    <div class="card card-custom shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-circle">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <h3 class="h5 mb-3">E-mail</h3>
                            <a href="mailto:contato@mareplast.com.br" class="contact-method d-block">
                                <i class="bi bi-envelope me-2"></i>
                                contato@mareplast.com.br
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate animate-up">
                    <div class="card card-custom shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-circle">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <h3 class="h5 mb-3">Endereço</h3>
                            <a href="https://maps.app.goo.gl/aEn93bJM22FNerKD9" target="_blank" class="contact-method d-block">
                                <i class="bi bi-geo-alt me-2"></i>
                                Av. Fulvio Claudio Biazzi, 393<br>
                                Sorocaba - SP, 18071-440

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0" data-scroll="fade-right">
                    <h2>Envie sua Mensagem</h2>
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
                                <button type="submit" class="btn btn-custom btn-lg">
                                    </i>Enviar Mensagem
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6" data-scroll="fade-left">
                    
                    <div class="card border-0">
                        <div class="card-body">
                            <h3 class="h5 mb-4">Horário de Atendimento</h3>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="bi bi-clock me-2 text-pink"></i>
                                    Segunda a quinta feira: 07:30h até as 17:30h
                                </li>
                                <li>
                                    <i class="bi bi-clock me-2 text-pink"></i>
                                    Sexta: 07:30h até as 16:30h
                                </li>
                            </ul>
                            <h3 class="h5 mb-4">Redes Sociais</h3>
                            <div class="d-flex gap-2">
                                <a href="https://www.facebook.com/mareplast/" target="_fb" rel="nofollow" class="social-link">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/mareplast/" target="_it" rel="nofollow" class="social-link">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/mareplast/" target="_lk" rel="nofollow" class="social-link">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="map-container mt-4 animate animate-up">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0297567329547!2d-47.45974822534675!3d-23.498033259180883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58abceb48f063%3A0x3c9a64856a4b2456!2sAv.%20Fulvio%20Claudio%20Biazzi%2C%20393%20-%20Sorocaba%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1704838095799!5m2!1spt-BR!2sbr" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                </div>
                
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center animate animate-up">Dúvidas Frequentes</h2>
            <div class="row justify-content-center animate animate-up">
                <div class="col-lg-8">
                    <div class="faq-list" data-scroll="stagger">
                        <div class="faq-item">
                            <h3 class="h6 faq-question">Qual o prazo de resposta para orçamentos?</h3>
                            <div class="faq-answer">
                                Respondemos todos os pedidos de orçamento em até 24 horas úteis. Para pedidos urgentes, 
                                recomendamos entrar em contato via WhatsApp para atendimento prioritário.
                            </div>
                        </div>
                        <div class="faq-item">
                            <h3 class="h6 faq-question">Como enviar arquivos grandes?</h3>
                            <div class="faq-answer">
                                Para arquivos grandes, você pode usar serviços de transferência como WeTransfer ou Google Drive 
                                e enviar o link por e-mail ou WhatsApp.
                            </div>
                        </div>
                        <!--
                        <div class="faq-item">  
                            <h3 class="h6 faq-question">Fazem entrega em outras cidades?</h3>
                            <div class="faq-answer">
                                Sim, atendemos todo o Brasil. Para a região de Sorocaba, temos entrega própria sem custo adicional. 
                                Para outras localidades, trabalhamos com transportadoras parceiras.
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include './includes/footer.php'; ?>

</body>
</html>