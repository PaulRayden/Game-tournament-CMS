<?php Flight::render('layouts/header', array('title' => $title)); ?>
<body class="text-center" style="background:#F6F6F6;">
    <img style="margin-top: 10vh;" src="img/no-access-kitti.jpg" alt="kitti" width="225px">
    <h1><?= $title ?></h1>
</body>
<?php Flight::render('layouts/footer'); ?>
