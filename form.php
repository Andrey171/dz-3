<?php
function valid (array $post) : array
{
    $validate = [];
    $qr = [
        'login' => 8,
        'password' => 6,
    ];


    if ((preg_match("/[\d]+/", $post['name'], $match)) === 0) {
        array_push($validate,"Ваше имя: {$post['name']}");
    }
    else{
        array_push($validate,'Имя не должна содержать цифры');
    }
    if ((preg_match("/[\d]+/", $post['surname'], $match)) === 0) {
        array_push($validate,"Ваша фамилия: {$post['surname']}");
    }
    else{
        array_push($validate,'Фамилия не должна содержать цифры');
    }
    if(strlen($post['login'])>=$qr['login']){
        array_push($validate,"Ваш логин: {$post['login']}");
    }
    else{
        array_push($validate,"Логин должен содержать больше {$qr['login']} символов");
    }
    if(strlen($post['password'])>=$qr['password']) {
        array_push($validate,"Ваш пароль: {$post['password']}");
    }
    else{
        array_push($validate,"Пароль должен содержать больше {$qr['password']} символов");
    }
    return $validate;
}
