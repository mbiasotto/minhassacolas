<!-- Footer -->
<footer class="bg-dark text-light py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 logo">
                <img src="./imgs/logo.png" alt="Logo" class="mb-3">
                <p class="text-muted">Soluções completas em impressão digital para seu negócio.</p>
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
            
            <div class="col-lg-3">
                <h5 class="mb-3">Links Rápidos</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="./quemsomos.php" class="text-light text-decoration-none">Sobre Nós</a></li>
                    <li class="mb-2"><a href="./produtos.php" class="text-light text-decoration-none">Produtos</a></li>
                    <li class="mb-2"><a href="./comprar.php" class="text-light text-decoration-none">Como Comprar</a></li>
                    <li class="mb-2"><a href="./gabarito.php" class="text-light text-decoration-none">Gabarito</a></li>
                    <li class="mb-2"><a href="./contato.php" class="text-light text-decoration-none">Contato</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3">
                <h5 class="mb-3">Redes Sociais</h5>
                <div class="d-flex gap-3">
                    <a href="https://www.facebook.com/mareplast/" target="_fb" rel="nofollow" class="text-light"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="https://www.instagram.com/mareplast/" target="_it" rel="nofollow" class="text-light"><i class="bi bi-instagram fs-5"></i></a>
                </div>
            </div>
        </div>
        
        <div class="border-top border-secondary mt-4 pt-4 text-center">
            <small class="text-muted">© 2024 Maraplast. Todos os direitos reservados.</small>
        </div>
    </div>
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