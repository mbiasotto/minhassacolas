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