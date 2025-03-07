<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4JW34RCHC4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4JW34RCHC4');
</script>

<link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@600&family=Poppins:wght@300;400;500;600&family=Roboto:wght@300;400;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
<?php
// Check if we're in a subdirectory
$isSubdir = strpos($_SERVER['PHP_SELF'], '/produtos/') !== false;
$prefix = $isSubdir ? '../' : './';
?>
<link rel="stylesheet" href="<?php echo $prefix; ?>css/style.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $prefix; ?>js/dropdown-hover.js"></script>

<link rel="icon" href="<?php echo $prefix; ?>imgs/favicon.png" type="image/x-icon">