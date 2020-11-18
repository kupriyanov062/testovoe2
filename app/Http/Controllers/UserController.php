<?php

namespace App\Http\Controllers;

//use http\Env\Request;
use App\Repository\LogerRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Interfaces\SaveData;
use App\Interfaces\CheckData;
use App\Repository\UserRepository;
class UserController extends BaseController
{
    public function __construct()
    {

    }

    public function index(Request $request, UserRepository $userRepository, LogerRepository $logerRepository)
    {
        if ($request->isMethod('post')){
//            $userRepository->save($request);
           $errors = $logerRepository->save($request);
           dump($errors);
        }
        return view('user_form');
    }
}
