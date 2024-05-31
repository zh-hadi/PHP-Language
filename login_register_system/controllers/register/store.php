<?php

use Core\Database;

$inputs = [];
$errors = [];
//grap data
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$inputs['email'] = $email;
if(!$email){
    $errors['email'] = "Please insert valid email";
}

$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$inputs['password'] = $password;
if(!$password){
    $errors['password'] = "Please insert  password";
}

$config = include basePath('config');
$db = new Database($config['database'], 'root', '');

$sql = "select * from users where email = :email";
$db->query($sql, [":email" => $email]);
$user = $db->find();
if($user){
    header('location: /');
    exit();
}
$sql = "insert into users (email, password) values(:email, :password)";
$db->query($sql, [
    ':email' => $email,
    ':password' => $password
]);
$_SESSION['user'] = [
    'email' => $email
];
header("location: /");
exit();
// store data
    // check data alredy store or not
    // redirect page
    // 
// redirct page
