<?php

function getRandomPassword($value)
{
    $random_password = '';
    $characters_list = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_-:.;,@#*+?=%$£!';

    for ($i = 0; $i < $value; $i++) {
        $random_index = rand(0, strlen($characters_list) - 1);
        $random_password .= $characters_list[$random_index];
    };

    return  $random_password;
};
