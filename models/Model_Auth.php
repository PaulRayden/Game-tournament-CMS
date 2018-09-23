<?php

namespace Models;

use \RedBeanPHP\R as R;
use \RedBeanPHP\SimpleModel as Model;

class Model_Auth extends Model
{

  // Создание аккаунта пользователя
  public static function createAccount($name,$email,$password)
  {
      $user = R::dispense('users');
      $user->name = $name;
      $user->email = $email;
      $user->password = $password;
      $user->role = 'user';
      R::store($user);
  }


  //Поиск пользователя по имени в таблице users
  public static function FindName($name)
  {
      return R::findOne('users','name = ?',array($name));
  }


  //Поиск пользователя по почте в таблице users
  public static function FindEmail($email)
  {
      return R::findOne('users','email = ?',array($email));
  }
}
