<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efeitos de Animação Sequenciais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Classes base para animações */
        .animate {
            opacity: 0;
            transition: all 0.7s cubic-bezier(0.18, 0.89, 0.32, 1.28);
            position: relative;
            backface-visibility: hidden;
            will-change: transform, opacity;
        }
        
        /* Animação da esquerda */
        .animate-left {
            transform: translateX(-80px);
        }
        
        /* Animação da direita */
        .animate-right {
            transform: translateX(80px);
        }
        
        /* Animação de baixo para cima */
        .animate-up {
            transform: translateY(60px);
        }
        
        /* Classe aplicada quando o elemento se torna visível */
        .animate.show {
            opacity: 1;
            transform: translate(0, 0);
        }
        
        /* Estilos para demonstração */
        .demo-box {
            height: 200px;
            margin: 150px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            color: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Demonstração de Animações Sequenciais</h1>
        
        <!-- Exemplo de elemento com animação da esquerda -->
        <div class="row">
            <div class="col-12">
                <div class="demo-box bg-primary animate animate-left">
                    Animação da Esquerda
                </div>
            </div>
        </div>
        
        <!-- Exemplo de elemento com animação da direita -->
        <div class="row">
            <div class="col-12">
                <div class="demo-box bg-success animate animate-right">
                    Animação da Direita
                </div>
            </div>
        </div>
        
        <!-- Exemplo de elemento com animação de baixo para cima -->
        <div class="row">
            <div class="col-12">
                <div class="demo-box bg-danger animate animate-up">
                    Animação de Baixo para Cima
                </div>
            </div>
        </div>
        
        <!-- Mais exemplos para o scroll -->
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="demo-box bg-info animate animate-left">
                    Coluna 1
                </div>
            </div>
            <div class="col-md-4">
                <div class="demo-box bg-warning animate animate-up">
                    Coluna 2
                </div>
            </div>
            <div class="col-md-4">
                <div class="demo-box bg-dark animate animate-right">
                    Coluna 3
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Array para armazenar elementos a serem animados
            let animationQueue = [];
            let isAnimating = false;
            let lastScrollTop = 0;
            
            // Função para verificar se o elemento está visível na tela
            function checkVisibility() {
                let windowHeight = $(window).height();
                let windowScrollTop = $(window).scrollTop();
                
                // Limpa a fila e adiciona apenas elementos visíveis que ainda não estão animados
                animationQueue = [];
                
                $('.animate:not(.show)').each(function() {
                    // Posição do elemento em relação ao topo da janela
                    let elementTop = $(this).offset().top;
                    
                    // Se o elemento está visível e ainda não está na lista de animação
                    if (elementTop < (windowScrollTop + windowHeight - 50)) {
                        animationQueue.push($(this));
                    }
                });
                
                // Inicia a animação sequencial se não estiver animando atualmente
                if (!isAnimating && animationQueue.length > 0) {
                    animateNext();
                }
            }
            
            // Função para animar o próximo elemento da fila
            function animateNext() {
                if (animationQueue.length === 0) {
                    isAnimating = false;
                    return;
                }
                
                isAnimating = true;
                
                // Pega o primeiro elemento da fila
                let element = animationQueue.shift();
                
                // Adiciona a classe show para animar
                element.addClass('show');
                
                // Aguarda um tempo antes de animar o próximo elemento
                // O tempo varia aleatoriamente entre 100ms e 250ms para um efeito mais natural
                let delay = Math.floor(Math.random() * 150) + 100;
                setTimeout(animateNext, delay);
            }
            
            // Verifica visibilidade ao carregar a página
            setTimeout(checkVisibility, 300);
            
            // Verifica visibilidade ao fazer scroll
            $(window).on('scroll', function() {
                // Detecta a direção do scroll para priorização
                let st = $(this).scrollTop();
                
                // Ordena a fila com base na direção do scroll
                // Ao rolar para baixo, animamos de cima para baixo
                // Ao rolar para cima, animamos de baixo para cima
                if (st > lastScrollTop) {
                    // Scroll para baixo
                    animationQueue.sort((a, b) => a.offset().top - b.offset().top);
                } else {
                    // Scroll para cima
                    animationQueue.sort((a, b) => b.offset().top - a.offset().top);
                }
                
                lastScrollTop = st;
                checkVisibility();
            });
            
            // Também verifica em caso de redimensionamento da janela
            $(window).on('resize', checkVisibility);
        });
    </script>
</body>
</html>