<?php Flight::render('layouts/header', array('title' => $title)); ?>
<body class="body-register">
  <div class="container">
    <div class="card auth-panel" >
      <div class="card-body px-lg-5 pt-0">
        <form id="register_panel-form" method="post" class="text-center">
            <input type="text" class="form-control form-control-lg mb-4 mt-4" name="name" placeholder="Ваше имя">
            <input type="email" class="form-control form-control-lg mb-4 mt-4" name="email" placeholder="E-mail">

            <input type="password" class="form-control form-control-lg mb-4" name="password" placeholder="Пароль">
            <input type="password" class="form-control form-control-lg mb-4" name="password_verify" placeholder="Повторите пароль">
    
            <a id="register_panel-button" class="btn btn-primary w-100" href="">Регистрация</a>
            <a class="btn btn-primary w-100" href="/">Войти</a>

        </form>
      </div>
    </div>
  </div>
</body>
<?php Flight::render('layouts/footer'); ?>
