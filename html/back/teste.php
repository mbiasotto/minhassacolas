<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatec</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .header {
            background-color: #0033A0;
            color: white;
            padding: 10px 0;
        }
        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .welcome {
            font-size: 12px;
        }
        .header .contact {
            font-size: 12px;
        }
        .navbar {
            background-color: #F8F9FA;
        }
        .navbar-brand img {
            height: 40px;
        }
        .hero {
            background-color: white;
            padding: 60px 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 3em;
            color: #0033A0;
        }
        .hero p {
            color: #6C757D;
        }
        .hero .btn {
            background-color: #007BFF;
            color: white;
            border: none;
            margin-top: 20px;
        }
        .hero .image-container {
            position: relative;
            margin-top: 20px;
        }
        .hero .image-container img {
            width: 200px;
            border-radius: 10px;
        }
        .hero .image-container .icon {
            position: absolute;
            width: 50px;
            height: 50px;
            background-color: #007BFF;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .icon-magnify { top: -25px; right: -25px; }
        .icon-clock { bottom: -25px; left: -25px; }
        .icon-gear { bottom: -25px; right: -25px; }
        .footer {
            background-color: white;
            padding: 20px 0;
            text-align: center;
        }
        .footer h2 {
            color: #0033A0;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="welcome">SEJA BEM-VINDO À INFORMATEC SERVIÇOS EM RH | PIONEIRA EM TERCEIRIZAÇÃO DA FOLHA DE PAGAMENTO</div>
            <div class="contact">15 3023-7070 | comercial@informatecservicos.com.br</div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="logo.png" alt="Informatec"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">QUEM SOMOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SOLUÇÕES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CLIENTES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LGPD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TRABALHE CONOSCO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTATO</a>
                    </li>
                </ul>
                <div class="ml-3">
                    <a href="#" class="btn btn-link text-dark">in</a>
                    <a href="#" class="btn btn-primary">FALE COM UM ESPECIALISTA</a>
                </div>
            </div>
        </div>
    </nav>
    <section class="hero">
        <div class="container">
            <h1>Ganhe tempo e cuide do estratégico.</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris convallis et libero in rhoncus.</p>
            <button class="btn btn-primary">SAIBA MAIS</button>
            <div class="image-container">
                <img src="person.jpg" alt="Person">
                <div class="icon icon-magnify"><i class="fas fa-search"></i></div>
                <div class="icon icon-clock"><i class="far fa-clock"></i></div>
                <div class="icon icon-gear"><i class="fas fa-cog"></i></div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <p>ESPECIALISTAS EM TERCEIRIZAÇÃO</p>
            <h2>Terceirize e descomplique a Folha de Pagamento de seus colaboradores!</h2>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>