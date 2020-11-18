<?php


namespace App\Repository;


use App\Interfaces\CheckData;
use App\Interfaces\SaveData;
use Illuminate\Support\Facades\Storage;

class LogerRepository implements CheckData, SaveData
{
    public $login, $email, $password;
    public function __construct()
    {
        $this->login = ['max' =>10, 'min'=>4];
        $this->email = ['max' =>14, 'min'=>3, 'isset'=>'@'];
        $this->password = ['max' =>15, 'min'=>5];

    }
    public function check($login, $email, $password){
        $error = [];
        !((strlen($login)) > ($this->login['max']))?:array_push($error,'Maкс. значение логина');
        !((strlen($login)) < ($this->login['min']))?:array_push($error,'Мин. значение логина');
        (stristr($email,'@'))?:array_push($error,'Не корректная почта');
        return $error;
    //проверка для логирования
    }

    //сохраниение в файл
    public static function save($request){
        $obj = new self;
        $eroors = $obj->check($request->login, $request->email, $request->password);
        $list = $request->login . $request->email . $request->password;
        Storage::prepend('log.txt', $list);
        return $eroors;
    }


}
