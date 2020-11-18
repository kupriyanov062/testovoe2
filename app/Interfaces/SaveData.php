<?php
namespace App\Interfaces;
use http\Env\Request;


Interface SaveData{
public static function save(Request $request);
}
