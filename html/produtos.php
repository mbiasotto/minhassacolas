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

    <!-- Header -->
    <header class="banner-interno">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 animate animate-left">
                    <h1>Nossos Produtos</h1>
                    <p class="lead mb-4">
                        Descubra nossa ampla gama de soluções de impressão para o seu negócio
                    </p>
                </div>
                <div class="col-lg-6">
                    
                </div>
            </div>
        </div>
    </header>


    <!-- Products Section -->
    <section class="py-5">
        <div class="container">
            
            <?php include './includes/produtos.php'; ?>

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