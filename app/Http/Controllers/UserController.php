<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Interfaces\SaveData;
use App\Interfaces\CheckData;
class UserController extends BaseController
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('user_form');
    }
}
