<?php

namespace Core;

use Core\Config;
use TexLab\MyDB\DB;
use TexLab\MyDB\DbEntity;
use TexLab\MyDB\QueryBuilderTrait;

class Login
{
    private $table;

    public function __construct()
    {
        $this->table = new DbEntity(
            Config::MYSQL_TABLE,
            DB::Link([
                'host' => Config::MYSQL_HOST,
                'username' => Config::MYSQL_USER_NAME,
                'password' => Config::MYSQL_PASSWORD,
                'dbname' => Config::MYSQL_DATABASE
            ])
        );
    }

    public function userCheck(string $login, string $password): bool
    {
        return !empty($this->table->runSQL(
            'SELECT*FROM form WHERE login="' . $login . '" AND password="' . $password . '"'
        ));
    }

    public function userCheck(string $login, string $password): bool
    {
        return !empty($this->table->runSQL(
            'SELECT*FROM form WHERE login="' . $login . '" AND password="' . $password . '"'
        ));
    }

//    public function check()
//    {
//        if (!empty($_REQUEST['password']) and !empty($_REQUEST['login'])) {
//            $login = $_REQUEST['login'];
//            $password = $_REQUEST['password'];
//
////    $query = new DbEntity(Config::MYSQL_TABLE,QueryBuilderTrait::setSelect('*')::setFrom('form'));
////    $query->setSelect('*')->setFrom('form')->setWhere('login="' . $login . '" AND password="' . $password . '"'));
//            $query = 'SELECT*FROM form WHERE login="' . $login . '" AND password="' . $password . '"';
//            $result = mysqli_query(DB::Link(['host' => Config::MYSQL_HOST,
//                'username' => Config::MYSQL_USER_NAME,
//                'password' => Config::MYSQL_PASSWORD,
//                'dbname' => Config::MYSQL_DATABASE]), $query);
//            $user = mysqli_fetch_assoc($result);
//
//            if (!empty($user)) {
//                echo "Добро пожаловать!";
//            } else {
//                echo "Вы неверно ввели логин или пароль";
//            }
//        }
//    }

}