<?php Flight::render('layouts/header', array('title' => $title)); ?>
<body class="body-login">
  <div class="container">
    <div class="card auth-panel" >
      <div class="card-body px-lg-5 pt-0">
        <form id="login_panel-form" method="post" class="text-center">

          <input type="email" class="form-control form-control-lg mb-4 mt-4 " name="email" placeholder="E-mail">

          <input type="password" class="form-control form-control-lg mb-4" name="password" placeholder="Пароль">

          <a id="login_panel-button" class="btn btn-elegant w-100" href="#">Войти через steam</a>
          <a id="login_panel-button" class="btn btn-primary w-100" href="#">Войти</a>
          <a class="btn btn-primary w-100" href="/register">Регистрация</a>


        </form>
      </div>
    </div>
  </div>
</body>
<?php Flight::render('layouts/footer'); ?>