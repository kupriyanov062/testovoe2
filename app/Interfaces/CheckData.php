<?php
namespace App\Interfaces;
use http\Env\Request;


Interface CheckData{
public static function check(Request $request);
}
