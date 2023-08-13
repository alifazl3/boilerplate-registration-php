<?php

require_once '../core/Router.php';
require_once '../app/controller/UserController.php';

$router = new Router();
$userController = new UserController();


$router->home('home', function () use ($userController) {
    if (isset($_SESSION["username"])){
        include "../views/home.php";
    }else{
        include "../views/home_not_login.php";
    }
});
$router->register('signup', function () use ($userController) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userController->signup($_POST['username'], $_POST['password']);
    } else {
            include "../views/signup.php";

    }
});


$router->register('signin', function () use ($userController) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userController->signin($_POST['username'], $_POST['password']);
    } else {
        include "../views/signin.php";
    }
});

// Register a route for the logout action
$router->register('signout', function () use ($userController) {
    $userController->signout();
    header("Location: /home");
});

// ... You can add more routes as needed ...

