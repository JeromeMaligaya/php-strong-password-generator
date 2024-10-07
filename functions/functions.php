<?php

function getRandomPassword($value, $type)
{
    $random_password = '';
    if ($type === 'all') {
        $characters_list = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"#$%&\'()*+,-./:;=?@[\]^_{|}~';
    } elseif ($type === 'numbers') {
        $characters_list = '0123456789';
    } elseif ($type === 'letters') {
        $characters_list = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

    for ($i = 0; $i < $value; $i++) {
        $random_index = rand(0, strlen($characters_list) - 1);
        $random_password .= $characters_list[$random_index];
    };

    return  $random_password;
};
