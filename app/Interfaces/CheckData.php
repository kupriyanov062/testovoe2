<?php
namespace App\Interfaces;
use http\Env\Request;


Interface CheckData{
public  function check($user, $email, $password);
}
