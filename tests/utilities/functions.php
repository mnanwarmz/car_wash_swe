<?php

function loginAs($user, $obj)
{
    $obj->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);
}
