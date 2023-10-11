<?php 
    include '../classes/User.php';
    $user = new User;
    $getUser = $user->getUser();
?>

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <a href="../views/dashboard.php" class="navbar-brand">
            <h1 class="h4 mb-0">The Company</h1>
        </a>
        <ul class="navbar-nav text-light">
            <li class="nav-item"><a href="../views/edit.php" class="nav-link me-2"><?= $getUser['first_name'] ." ". $getUser['last_name']?></a></li>
            <li class="nav-item"><a href="../views/sign-in.php" class="nav-link text-danger">Log out</a></li>
        </ul>
    </div>
</nav>