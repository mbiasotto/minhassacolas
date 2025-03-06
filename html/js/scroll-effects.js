$(document).ready(function() {
    // Função para verificar se o elemento está visível na tela
    function checkVisibility() {
        let windowHeight = $(window).height();
        let windowScrollTop = $(window).scrollTop();
        
        // Processa todos os elementos de uma vez, sem fila de animação
        $('.animate:not(.show)').each(function() {
            // Posição do elemento em relação ao topo da janela
            let elementTop = $(this).offset().top;
            
            // Se o elemento está visível, mostra imediatamente
            if (elementTop < (windowScrollTop + windowHeight - 50)) {
                $(this).addClass('show');
            }
        });
    }
    
    // Verifica visibilidade ao carregar a página
    setTimeout(checkVisibility, 100);
    
    // Usa throttle para limitar a frequência de chamadas durante o scroll
    let scrollTimeout;
    $(window).on('scroll', function() {
        if (!scrollTimeout) {
            scrollTimeout = setTimeout(function() {
                checkVisibility();
                scrollTimeout = null;
            }, 10); // Intervalo curto para resposta rápida
        }
    });
    
    // Também verifica em caso de redimensionamento da janela
    $(window).on('resize', checkVisibility);
});