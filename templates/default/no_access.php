<?php Flight::render('layouts/header', array('title' => $title)); ?>
<body class="no-access-body">
    <div class="no-access-filter"></div>
    <h1 class="no-access-h1"><?= $title ?></h1>
</body>
<?php Flight::render('layouts/footer'); ?>
