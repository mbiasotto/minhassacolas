<!-- Footer -->
<footer class="bg-dark text-light">
    <div class="container">
        <div class="row g-4" data-scroll="stagger">
            <div class="col-lg-3 logo">
                <?php
                // Check if we're in a subdirectory
                $isSubdir = strpos($_SERVER['PHP_SELF'], '/produtos/') !== false;
                $prefix = $isSubdir ? '../' : './';
                ?>
                <img src="<?php echo $prefix; ?>imgs/logo-white.png" alt="Logo">
            </div>
            
            <div class="col-lg-3">
                <h5 class="mb-3">Contato</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="bi bi-geo-alt me-2"></i>
                        Av. Fulvio Claudio Biazzi, 393<br>
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
            
            <div class="col-lg-3 links">
                <h5 class="mb-3">Links Rápidos</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="<?php echo $prefix; ?>quemsomos.php" class="text-light text-decoration-none">Sobre Nós</a></li>
                    <li class="mb-2"><a href="<?php echo $prefix; ?>produtos.php" class="text-light text-decoration-none">Produtos</a></li>
                    <!--<li class="mb-2"><a href="<?php echo $prefix; ?>comprar.php" class="text-light text-decoration-none">Como Comprar</a></li>-->
                    <li class="mb-2"><a href="<?php echo $prefix; ?>contato.php" class="text-light text-decoration-none">Contato</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3">
                <h5 class="mb-3">Redes Sociais</h5>
                <div class="d-flex gap-3 social">
                    <a href="https://www.facebook.com/mareplast/" target="_fb" rel="nofollow" class="text-light"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="https://www.instagram.com/mareplast/" target="_it" rel="nofollow" class="text-light"><i class="bi bi-instagram fs-5"></i></a>
                    <a href="https://www.linkedin.com/company/mareplast/" target="_lk" rel="nofollow" class="text-light"><i class="bi bi-linkedin fs-5"></i></a>
                </div>
            </div>
        </div>
        
        <div class="by">
            Todos os direitos reservados<br>
            <a href="https://letsotto.dev/?utm_source=mareplast&utm_medium=footer&utm_campaign=by" target="by"><img src="<?php echo $prefix; ?>imgs/logo_otto.png" alt="Otto.dev - Automação Inteligente com IA, desenvolvimento de APIs e Apps para empresas que querem crescer"></a>
        </div>
    </div>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/5515974020934?text=Olá,%20gostaria%20de%20um%20orçamento." target="_blank" class="whatsapp-float" data-scroll="fade-in">
        <i class="bi bi-whatsapp"></i>
    </a>
</footer>


<script>
        // FAQ toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    this.classList.toggle('active');
                    const answer = this.nextElementSibling;
                    if (answer.style.display === 'block') {
                        answer.style.display = 'none';
                    } else {
                        answer.style.display = 'block';
                    }
                });
            });
        });
    </script>


<script>
        $(document).ready(function() {
            // Variável para armazenar o timeout
            var dropdownTimeout;

            // Função para mostrar o dropdown
            function showDropdown($dropdown) {
                clearTimeout(dropdownTimeout);
                $('.dropdown-menu').removeClass('show');
                $('.nav-item.dropdown').removeClass('show');
                $dropdown.addClass('show');
                $dropdown.find('.dropdown-menu').addClass('show').slideDown(300); // Animação suave ao abrir
            }

            // Função para esconder o dropdown
            function hideDropdown($dropdown) {
                dropdownTimeout = setTimeout(function() {
                    $dropdown.find('.dropdown-menu').slideUp(300, function() { // Animação suave ao fechar
                        $dropdown.removeClass('show');
                        $dropdown.find('.dropdown-menu').removeClass('show');
                    });
                }, 150); // Pequeno delay antes de esconder
            }

            // Eventos do dropdown
            $('.nav-item.dropdown').hover(
                function() {
                    showDropdown($(this));
                },
                function() {
                    hideDropdown($(this));
                }
            );

            // Prevenir o fechamento ao passar o mouse sobre o menu
            $('.dropdown-menu').hover(
                function() {
                    clearTimeout(dropdownTimeout);
                },
                function() {
                    hideDropdown($(this).closest('.dropdown'));
                }
            );

            // Toggle mobile menu overlay
            $('.navbar-toggler').click(function() {
                $('.mobile-menu-overlay').toggleClass('show');
                $('body').toggleClass('overflow-hidden'); // Previne scroll quando menu está aberto
            });

            // Close mobile menu when clicking overlay or close button
            $('.mobile-menu-overlay, .mobile-menu-close').click(function() {
                $('.navbar-collapse').removeClass('show');
                $('.mobile-menu-overlay').removeClass('show');
                $('.navbar-toggler').addClass('collapsed');
                $('body').removeClass('overflow-hidden');
            });

            // Prevent clicks inside mobile menu from closing it
            $('.navbar-collapse').click(function(event) {
                event.stopPropagation();
            });

            // Handle dropdown clicks on mobile
            if ($(window).width() < 992) {
                $('.dropdown-toggle').click(function(e) {
                    e.preventDefault();
                    $(this).parent().toggleClass('show');
                    $(this).next('.dropdown-menu').slideToggle(300); // Animação suave
                });
            }

            // Manter funcionalidade do navbar fixo
            var $navbar = $('.navbar');
            
            function updateNav() {
                if ($(window).scrollTop() > 0) {
                    $navbar.addClass('fixed-nav');
                } else {
                    $navbar.removeClass('fixed-nav');
                }
            }

            $(window).on('scroll resize', updateNav);
            updateNav(); // Call on page load
        });
    </script>


<script src="<?php echo $prefix; ?>js/scroll-effects.js?12"></script>
