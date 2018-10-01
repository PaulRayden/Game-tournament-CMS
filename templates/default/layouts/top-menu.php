<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6 text-right">
                <div class="icons d-inline-block mr-3 mt-1">
                    <i class="fa fa-users mr-1" aria-hidden="true">
                        <span class="menu-request"></span>
                    </i>
                    <i class="fa fa-bell" aria-hidden="true">
                        <span class="menu-notify"></span>
                    </i>
                </div>
                <div class="user-image  d-inline-block mr-1">
                    <img style="border-radius: 90px;" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="avatar" width="30px">
                </div>
                <div class="user-name d-inline-block">
                    <div class="dropdown">
                        <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$session->login?></a>
                        <div class="dropdown-menu dropdown-dark drop-user-menu">
                            <?php
                                if ($session->role == 'admin')
                                {
                                    echo '<a class="dropdown-item text-center" href="/panel">Панель Управления</a>';
                                }
                            ?>
                            <a class="dropdown-item text-center" href="/">Главная</a>
                            <a class="dropdown-item text-center" href="/user/<?=$session->login?>">Профиль</a>
                            <a class="dropdown-item text-center" href="/">Турниры</a>
                            <a class="dropdown-item text-center" href="/">Настройки</a>
                            <a class="dropdown-item text-center" href="/logout">Выйти</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
