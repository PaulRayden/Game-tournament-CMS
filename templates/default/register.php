<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/mb.css">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&subset=cyrillic">
</head>
<body class="body-register">
  <div class="container">
    <div class="card auth-panel" >
      <div class="card-body px-lg-5 pt-0">
        <form id="register_panel-form" method="post" class="text-center">

            <input type="text" class="form-control form-control-lg mb-4 mt-4" name="login" placeholder="Ваш логин">
            <input type="email" class="form-control form-control-lg mb-4 mt-4" name="email" placeholder="E-mail">

            <input type="password" class="form-control form-control-lg mb-4" name="password" placeholder="Пароль">
            <input type="password" class="form-control form-control-lg mb-4" name="password_verify" placeholder="Повторите пароль">
    
            <a id="register_panel-button" class="btn btn-primary w-100">Регистрация</a>
            <a class="btn btn-primary w-100" href="/"><i class="fa fa-arrow-left font-weight-bold" aria-hidden="true"></i> Авторизация</a>

        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>
  <script type="text/javascript" src="/js/mb.js"></script>

</body>
</html>

