<?php 
    include '../classes/User.php';
    $user = new User;
    
    $user->edit($_POST);
?>