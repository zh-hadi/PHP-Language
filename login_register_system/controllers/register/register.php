<?php

if($_SESSION['user'] ?? false){
    header("location: /");
    exit();
}


include view('register.view');