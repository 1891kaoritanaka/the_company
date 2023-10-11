<?php
    include '../classes/User.php';
    $user = new User;

    $user->signUp($_POST);

    // $_POST['first_name'];
?>