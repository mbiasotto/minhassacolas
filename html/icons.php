<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ícones Reutilizáveis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <style>
        /* Estilos existentes */
        .card-custom {
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
        }
        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .card-title-custom {
            font-size: 1.25rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 1rem;
        }
        .card-text-custom {
            color: #666;
            line-height: 1.6;
        }
        .card-body-flex {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .card-content-center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
        }

        /* Novo estilo para o ícone reutilizável */
        .icon-circle {
            width: 60px;
            height: 60px;
            background-color: rgba(233, 30, 99, 0.1);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #e91e63;
            margin-bottom: 1rem;
        }
        .icon-circle i {
            font-size: 1.5rem;
        }
        /* Variações de tamanho */
        .icon-circle-sm {
            width: 40px;
            height: 40px;
        }
        .icon-circle-sm i {
            font-size: 1rem;
        }
        .icon-circle-lg {
            width: 80px;
            height: 80px;
        }
        .icon-circle-lg i {
            font-size: 2rem;
        }
        /* Variações de cor */
        .icon-circle-blue {
            background-color: rgba(13, 110, 253, 0.1);
            color: #0d6efd;
        }
        .icon-circle-green {
            background-color: rgba(25, 135, 84, 0.1);
            color: #198754;
        }
        @media (max-width: 767.98px) {
            .icon-circle {
                width: 50px;
                height: 50px;
            }
            .icon-circle i {
                font-size: 1.25rem;
            }
            .card-title-custom {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Exemplo de uso dos ícones fora dos cards -->
    <div class="container py-5">
        <h2 class="text-center mb-5">Ícones Reutilizáveis</h2>
        
        <!-- Ícones em uma linha -->
        <div class="row text-center mb-5">
            <div class="col">
                <div class="icon-circle">
                    <i class="bi bi-star-fill"></i>
                </div>
                <p>Ícone Padrão</p>
            </div>
            <div class="col">
                <div class="icon-circle icon-circle-sm">
                    <i class="bi bi-heart-fill"></i>
                </div>
                <p>Ícone Pequeno</p>
            </div>
            <div class="col">
                <div class="icon-circle icon-circle-lg">
                    <i class="bi bi-lightning-fill"></i>
                </div>
                <p>Ícone Grande</p>
            </div>
            <div class="col">
                <div class="icon-circle icon-circle-blue">
                    <i class="bi bi-cloud-fill"></i>
                </div>
                <p>Ícone Azul</p>
            </div>
            <div class="col">
                <div class="icon-circle icon-circle-green">
                    <i class="bi bi-tree-fill"></i>
                </div>
                <p>Ícone Verde</p>
            </div>
        </div>

        <!-- Uso em uma lista -->
        <div class="row mb-5">
            <div class="col-md-6 offset-md-3">
                <h3 class="mb-4">Nossos Serviços</h3>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle icon-circle-sm me-3">
                                <i class="bi bi-printer"></i>
                            </div>
                            <span>Impressão de alta qualidade</span>
                        </div>
                    </li>
                    <li class="mb-3">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle icon-circle-sm me-3">
                                <i class="bi bi-truck"></i>
                            </div>
                            <span>Entrega rápida e segura</span>
                        </div>
                    </li>
                    <li class="mb-3">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle icon-circle-sm me-3">
                                <i class="bi bi-palette"></i>
                            </div>
                            <span>Design personalizado</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Uso em um cabeçalho de seção -->
        <div class="text-center mb-5">
            <div class="icon-circle icon-circle-lg mb-3">
                <i class="bi bi-graph-up"></i>
            </div>
            <h2>Nossos Resultados</h2>
            <p>Confira o impacto que temos feito no mercado</p>
        </div>

        <!-- Uso em cards (exemplo existente) -->
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="icon-circle">
                            <i class="bi bi-download"></i>
                        </div>
                        <h3 class="card-title-custom">1. Baixe o Template</h3>
                        <p class="card-text-custom flex-grow-1">
                            Escolha o tamanho adequado para seu projeto e faça o download do arquivo em formato AI ou PDF.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Outros cards aqui... -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>