<!-- Why Choose Us Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <p class="text-pink h5">Por que escolher a</p>
                <h2 class="display-5">Mareplast?</h2>
                
                <div class="mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-award text-pink fs-1 me-3"></i>
                        <div>
                            <h3 class="h5 mb-1">Qualidade Premium</h3>
                            <p class="mb-0 text-muted">Utilizamos equipamentos de última geração e materiais de alta qualidade.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-clock text-pink fs-1 me-3"></i>
                        <div>
                            <h3 class="h5 mb-1">Entrega Rápida</h3>
                            <p class="mb-0 text-muted">Cumprimos prazos rigorosamente, com agilidade e eficiência.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-currency-dollar text-pink fs-1 me-3"></i>
                        <div>
                            <h3 class="h5 mb-1">Preços Competitivos</h3>
                            <p class="mb-0 text-muted">Oferecemos o melhor custo-benefício do mercado.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-headset text-pink fs-1 me-3"></i>
                        <div>
                            <h3 class="h5 mb-1">Suporte Personalizado</h3>
                            <p class="mb-0 text-muted">Atendimento dedicado em todas as etapas do seu projeto.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="./imgs/fachada-02.jpg" alt="Nossa Fábrica" class="img-fluid photo">
            </div>
        </div>

        <!-- Statistics -->
        <div class="row mt-5 pt-5 text-center">
            <div class="col-6 col-md-4 mb-4">
                <div class="icon-circle">
                    <i class="bi bi-emoji-smile"></i>
                </div>
                <h3 class="h2 mb-2 stat-count" data-count="270">0</h3>
                <p class="text-muted">Clientes Satisfeitos</p>
            </div>
            <div class="col-6 col-md-4 mb-4">
                <div class="icon-circle">
                    <i class="bi bi-printer"></i>
                </div>
                <h3 class="h2 mb-2 stat-count" data-count="1320">0</h3>
                <p class="text-muted">Projetos Concluídos</p>
            </div>
            <div class="col-6 col-md-4 mb-4">
                <div class="icon-circle">
                    <i class="bi bi-trophy"></i>
                </div>
                <?php
                    $startDate = new DateTime('1987-05-25');
                    $today = new DateTime();
                    $years = $today->diff($startDate)->y;
                ?>
                <h3 class="h2 mb-2 stat-count" data-count="<?php echo $years; ?>">0</h3>
                <p class="text-muted">Anos de Experiência</p>
            </div>
        </div>
    </div>
</section>










<script>
    $(document).ready(function () {
        // Função para animar a contagem
        function animateCount(element) {
            let count = 0;
            const target = +$(element).data('count');
            const increment = Math.ceil(target / 100);
            const duration = 2000; // Duração total da animação em ms
            const stepTime = duration / (target / increment); // Tempo entre os incrementos

            const interval = setInterval(() => {
                count += increment;
                if (count >= target) {
                    $(element).text(target);
                    clearInterval(interval);
                } else {
                    $(element).text(count);
                }
            }, stepTime);
        }

        // Função para verificar visibilidade e iniciar a contagem
        function checkStatsVisibility() {
            $('.stat-count').each(function () {
                const elementTop = $(this).offset().top;
                const viewportBottom = $(window).scrollTop() + $(window).height();

                if (!$(this).hasClass('counted') && viewportBottom >= elementTop) {
                    $(this).addClass('counted');
                    animateCount(this);
                }
            });
        }

        // Chamar a função ao carregar a página e ao rolar
        $(window).on('scroll', checkStatsVisibility);
        $(window).on('load', checkStatsVisibility); // Certificar que a função será chamada após o carregamento completo
    });

</script>