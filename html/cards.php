<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards Reutilizáveis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <style>
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
        .icon-circle {
            width: 60px;
            height: 60px;
            background-color: rgba(233, 30, 99, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: #e91e63;
        }
        .icon-circle i {
            font-size: 1.5rem;
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
    <!-- Exemplo Original com 3 Cards -->
    <div class="container py-5">
        <h2 class="text-center mb-5">Exemplo com 3 Cards (Versão Original)</h2>
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
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="icon-circle">
                            <i class="bi bi-pencil-square"></i>
                        </div>
                        <h3 class="card-title-custom">2. Prepare sua Arte</h3>
                        <p class="card-text-custom flex-grow-1">
                            Use as guias e marcações do template para posicionar corretamente sua arte dentro da área segura.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="icon-circle">
                            <i class="bi bi-send"></i>
                        </div>
                        <h3 class="card-title-custom">3. Envie o Arquivo</h3>
                        <p class="card-text-custom flex-grow-1">
                            Salve em PDF e envie junto com seu pedido. Nossa equipe fará uma análise técnica gratuita.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Exemplo Original com 4 Cards -->
    <div class="container py-5">
        <h2 class="text-center mb-5">Exemplo com 4 Cards (Versão Original)</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card card-custom">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="icon-circle">
                            <i class="bi bi-rulers"></i>
                        </div>
                        <h3 class="card-title-custom">Sangria</h3>
                        <p class="card-text-custom flex-grow-1">
                            Adicione 3mm de sangria em todos os lados do arquivo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-custom">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="icon-circle">
                            <i class="bi bi-palette"></i>
                        </div>
                        <h3 class="card-title-custom">Cores</h3>
                        <p class="card-text-custom flex-grow-1">
                            Use o modo de cor CMYK para garantir fidelidade na impressão.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-custom">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="icon-circle">
                            <i class="bi bi-image"></i>
                        </div>
                        <h3 class="card-title-custom">Resolução</h3>
                        <p class="card-text-custom flex-grow-1">
                            Imagens com resolução mínima de 300 DPI.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-custom">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="icon-circle">
                            <i class="bi bi-type"></i>
                        </div>
                        <h3 class="card-title-custom">Fontes</h3>
                        <p class="card-text-custom flex-grow-1">
                            Converter todas as fontes em curvas/outlines.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Exemplo com 3 Cards Centralizados sem Ícones -->
    <div class="container py-5">
        <h2 class="text-center mb-5">Exemplo com 3 Cards (Centralizados sem Ícones)</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body card-body-flex">
                        <div class="card-content-center">
                            <h3 class="card-title-custom">Qualidade Premium</h3>
                            <p class="card-text-custom text-center">
                                Nossos produtos são fabricados com os melhores materiais, garantindo durabilidade e acabamento impecável.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body card-body-flex">
                        <div class="card-content-center">
                            <h3 class="card-title-custom">Entrega Rápida</h3>
                            <p class="card-text-custom text-center">
                                Processamos e enviamos seu pedido com agilidade, para que você receba seus produtos o mais rápido possível.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body card-body-flex">
                        <div class="card-content-center">
                            <h3 class="card-title-custom">Suporte Personalizado</h3>
                            <p class="card-text-custom text-center">
                                Nossa equipe está sempre pronta para ajudar, oferecendo suporte técnico e atendimento personalizado.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Exemplo com 4 Cards Mistos (Com e Sem Ícones) -->
    <div class="container py-5">
        <h2 class="text-center mb-5">Exemplo com 4 Cards Mistos (Com e Sem Ícones)</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card card-custom">
                    <div class="card-body card-body-flex">
                        <div class="card-content-center">
                            <div class="icon-circle">
                                <i class="bi bi-truck"></i>
                            </div>
                            <h3 class="card-title-custom">Entrega Garantida</h3>
                            <p class="card-text-custom text-center">
                                Entregamos em todo o Brasil com segurança e pontualidade.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-custom">
                    <div class="card-body card-body-flex">
                        <div class="card-content-center">
                            <h3 class="card-title-custom">Atendimento 24/7</h3>
                            <p class="card-text-custom text-center">
                                Estamos disponíveis a qualquer hora para atender suas necessidades.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-custom">
                    <div class="card-body card-body-flex">
                        <div class="card-content-center">
                            <div class="icon-circle">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h3 class="card-title-custom">Garantia de Qualidade</h3>
                            <p class="card-text-custom text-center">
                                Todos os produtos passam por rigoroso controle de qualidade.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-custom">
                    <div class="card-body card-body-flex">
                        <div class="card-content-center">
                            <h3 class="card-title-custom">Personalização</h3>
                            <p class="card-text-custom text-center">
                                Oferecemos opções de personalização para atender suas necessidades específicas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>