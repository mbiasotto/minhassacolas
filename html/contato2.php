<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Mareplast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <style>
        /* Mantendo os estilos existentes */
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
        
        /* Estilos específicos para a página de contato */
        .contact-header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        .contact-info-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .contact-info-card:hover {
            transform: translateY(-5px);
        }
        .contact-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(233, 30, 99, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            color: #e91e63;
        }
        .form-control:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 0 0.2rem rgba(74, 144, 226, 0.25);
        }
        .map-container {
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <!-- Navbar (mantido do layout original) -->
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
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Como Comprar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gabarito</a>
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

    <!-- Contact Header -->
    <header class="contact-header text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Nossos canais de<br>Contato</h1>
                    <p class="lead">Vamos construir juntos uma parceria de sucesso!</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-solv1MVCOAaHkJqtQ1RPWMH7dNaofD.png" alt="Atendimento" class="img-fluid rounded-3">
                </div>
            </div>
        </div>
    </header>

    <!-- Contact Information -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <h3 class="h5 mb-3">Telefone</h3>
                        <p class="mb-0">
                            <a href="tel:+551532232417" class="text-decoration-none text-dark">
                                (15) 3223-2417
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <h3 class="h5 mb-3">E-mail</h3>
                        <p class="mb-0">
                            <a href="mailto:contato@mareplast.com.br" class="text-decoration-none text-dark">
                                contato@mareplast.com.br
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h3 class="h5 mb-3">Endereço</h3>
                        <p class="mb-0">
                            R. Henrique Manasses, 305<br>
                            Sorocaba - SP, 18086-610
                        </p>
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
                    <h2 class="h3 mb-4">Preencha o formulário</h2>
                    <p class="text-muted mb-5">
                        Preencha o formulário para que nossos especialistas possam te ajudar a encontrar a solução ideal para o seu negócio.
                    </p>
                    <form id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Nome" required>
                            </div>
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="E-mail Corporativo" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" placeholder="Telefone" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Cargo">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Empresa" required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" placeholder="Nº de Colaboradores">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" rows="5" placeholder="Assunto" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-custom px-5">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="map-container">
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
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (mantido do layout original) -->
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
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Sobre Nós</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Produtos</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Como Comprar</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Gabaritos</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Contato</a></li>
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
</body>
</html>