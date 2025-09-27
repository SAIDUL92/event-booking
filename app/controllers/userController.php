<?php

require_once __DIR__ . '/../models/user.php';



class UserController
{
    public function index()
    {
        $userModel = new User();
        $users = $userModel->all();

        require __DIR__ . "/../views/users.php";
    }
}
