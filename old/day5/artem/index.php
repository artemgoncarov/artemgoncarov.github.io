<?php $v = time(); ?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <title>ЛШЮП маркет</title>
    <link rel="stylesheet" href="./public/css/atomic.css?v=<?php echo $v; ?>" />
    <link rel="stylesheet" href="./public/css/elements.css?v=<?php echo $v; ?>" />
    <script src="./public/js/api.js?v=<?php echo $v; ?>"></script>
    <script src="./public/js/storage.js?v=<?php echo $v; ?>"></script>
    <script src="./public/js/cart_storage.js?v=<?php echo $v; ?>"></script>
    <script src="./public/js/component.js?v=<?php echo $v; ?>"></script>
    <script src="./public/js/products_component.js?v=<?php echo $v; ?>"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <template id="js-products">
        <div class="js-products"></div>
    </template>
    

    <template id="js-product-card">
        <div>
            <div class="js-name"></div>
            <img class="js-img" src="" alt="">
            <div class="js-price"></div>
            <div class="js-btn">Купить</div>
        </div>
    </template>
    
    <script>
    
    </script>
</body>

</html>