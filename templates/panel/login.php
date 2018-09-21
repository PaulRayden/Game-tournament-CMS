<?php Flight::render('panel/layouts/header', array('title' => $title)); ?>
<body>
  <div class="container">
    <div class="card auth-panel" >
      <h5 class="card-header info-color white-text text-center py-4">
        <strong>Панель администратора</strong>
      </h5>
      <div class="card-body px-lg-5 pt-0">
        <form id="login_panel-form" method="post" class="text-center">

          <input type="email" class="form-control mb-4 mt-4" name="email" placeholder="E-mail">

          <input type="password" class="form-control mb-4" name="password" placeholder="Пароль">

          <a id="login_panel-button" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" href="#">Войти</a>

        </form>
      </div>
    </div>
  </div>
</body>
<?php Flight::render('panel/layouts/footer'); ?>
