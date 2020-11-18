<?php


namespace App\Repository;


use App\Interfaces\CheckData;
use App\Interfaces\SaveData;

class UserRepository implements CheckData,SaveData
{
    public function check($user, $email, $password){
        // проверка для авторизации
    }
    public static function save($request){
        //Сохранение в БД
    }

}
