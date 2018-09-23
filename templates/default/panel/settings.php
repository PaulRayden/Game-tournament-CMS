<?php Flight::render('panel/layouts/header', array('title' => $title)); ?>
<body>
    <div class="container">
        <div class="card card-cascade mt-5">
            <div class="view view-cascade gradient-card-header blue-gradient">
                <p class="card-header-subtitle text-right mb-0 ">Общие настройки</p>
            </div>
            <div class="card-body card-body-cascade text-center">
                <form action="" method="post">

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control" placeholder="Описание (Description) сайта">
                        </div>
                        <div class="col-md-6 mb-2">
                            <textarea class="form-control" rows="5" placeholder="Ключевые слова (Keywords) для сайта"></textarea>
                        </div>
                    </div>
                </form>
                <hr>
                <a class="btn btn-primary float-right">Сохранить</a>
            </div>
        </div>
    </div>
</body>
<?php Flight::render('panel/layouts/footer'); ?>
