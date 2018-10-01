<?php Flight::render('panel/layouts/header', array('title' => $title)); ?>
<body>
    <div class="container site-container">


        <?php Flight::render('panel/part/site'); ?>

        <?php Flight::render('panel/part/themes'); ?>

        <?php Flight::render('panel/part/steam'); ?>

        <?php Flight::render('panel/part/captcha'); ?>


    </div>
</body>
<?php Flight::render('panel/layouts/footer'); ?>
