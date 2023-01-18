<?php

class UserController
{

    public function list()
    {
        $user = new User();
        $users = $user->all();
        return $users;
    }
}