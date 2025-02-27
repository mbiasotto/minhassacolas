<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos Produtos - Mareplast</title>
        
    <?php include './includes/head.php'; ?>

</head>
<body>
    
    <?php include './includes/nav.php'; ?>

    <!-- Products Header -->
    <header class="banner-interno">
        <div class="container">
            <h1>Nossos Produtos</h1>
            <p class="lead">Descubra nossa ampla gama de soluções de impressão para o seu negócio</p>
        </div>
    </header>

    <!-- Products Section -->
    <section class="py-5">
        <div class="container">
            <!-- Category Filters -->
            <div class="mb-4">
                <h2 class="h4 mb-3">Filtrar por Categoria</h2>
                <div class="d-flex flex-wrap gap-2">
                    <span class="category-filter active" data-category="all">Todos</span>
                    <span class="category-filter" data-category="sacolas-plasticas">Sacolas Plásticas</span>
                    <span class="category-filter" data-category="sacolas-papel">Sacolas de Papel</span>
                    <span class="category-filter" data-category="impressos">Impressos</span>
                    <span class="category-filter" data-category="envelopes">Envelopes para Envio</span>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="row g-4" id="productsGrid">
                <!-- Product 1 -->
                <div class="col-md-6 col-lg-4" data-category="sacolas-papel">
                    <div class="card h-100 border-0 product-card">
                        <img src="./imgs/produto-01.png" class="card-img-top p-4" alt="Sacolas de Papel">
                        <div class="card-body">
                            <h3 class="h5 card-title">Sacolas de Papel</h3>
                            <p class="card-text text-muted">Sacolas personalizadas em papel kraft ou couchê</p>
                            <a href="./produto.php" class="btn btn-clean">Ver Detalhes</a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-6 col-lg-4" data-category="sacolas-plasticas">
                    <div class="card h-100 border-0 product-card">
                        <img src="./imgs/produto-02.png" class="card-img-top p-4" alt="Sacolas de Plástico">
                        <div class="card-body">
                            <h3 class="h5 card-title">Sacolas de Plástico</h3>
                            <p class="card-text text-muted">Sacolas em plástico resistente com sua marca</p>
                            <a href="./produto.php" class="btn btn-clean">Ver Detalhes</a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-6 col-lg-4" data-category="impressos">
                    <div class="card h-100 border-0 product-card">
                        <img src="./imgs/produto-04.png" class="card-img-top p-4" alt="Impressos Comerciais">
                        <div class="card-body">
                            <h3 class="h5 card-title">Impressos Comerciais</h3>
                            <p class="card-text text-muted">Material gráfico personalizado para sua empresa</p>
                            <a href="./produto.php" class="btn btn-clean">Ver Detalhes</a>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-md-6 col-lg-4" data-category="envelopes">
                    <div class="card h-100 border-0 product-card">
                        <img src="./imgs/produto-07.png" class="card-img-top p-4" alt="Envelopes para Envio">
                        <div class="card-body">
                            <h3 class="h5 card-title">Envelopes para Envio</h3>
                            <p class="card-text text-muted">Envelopes personalizados para suas remessas</p>
                            <a href="./produto.php" class="btn btn-clean">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Próxima</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <?php include './includes/footer.php'; ?>
    
    <script>
        $(document).ready(function() {
            // Category filter functionality
            $('.category-filter').click(function() {
                $('.category-filter').removeClass('active');
                $(this).addClass('active');
                
                var category = $(this).data('category');
                if(category === 'all') {
                    $('.product-card').parent().show();
                } else {
                    $('.product-card').parent().hide();
                    $('[data-category="' + category + '"]').show();
                }
            });

            // Sort functionality
            $('#sortSelect').change(function() {
                var sortOption = $(this).val();
                var $products = $('#productsGrid').children();
                
                $products.sort(function(a, b) {
                    var an = $(a).find('.card-title').text();
                    var bn = $(b).find('.card-title').text();
                    
                    if(sortOption === 'name-asc') {
                        return an.localeCompare(bn);
                    } else if(sortOption === 'name-desc') {
                        return bn.localeCompare(an);
                    }
                    // Add more sorting options here if needed
                });
                
                $products.detach().appendTo('#productsGrid');
            });
        });
    </script>
</body>
</html>