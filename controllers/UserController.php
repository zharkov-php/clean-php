<?php

/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 29.08.2017
 * Time: 18:11
 */

class UserController
{
    public function actionRegister()
    {
        $name = '';
        $password = '';
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

           // if (!User::checkEmail($email)) {
          //      $errors[] = 'Неправильный email';
          //  }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

         //   if (User::checkEmailExists($email)) {
         //       $errors[] = 'Такой email уже используется';
         //   }

            if ($errors == false) {
                $result = User::register($name, $password);
            }

        }


        require_once(ROOT . '/views/user/register.php');

        return true;
    }
}

