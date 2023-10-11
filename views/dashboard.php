<?php 
    include "../views/nav-bar.php";

    $all_users = $user->all_users(); // contains all the users from the database

    include 'layouts/header.html';    
?>

    <body>
        <main class="container mt-5">
            <h3 class="text-center">USER LIST</h3>
            <table class="table table-hover w-50 mx-auto mt-4">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th class="text-capitalize">first name</th>
                        <th class="text-capitalize">last name</th>
                        <th class="text-capitalize">username</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($all_users as $user): ?>
                    <tr>
                        <td><i class="fa-solid fa-user d-block text-secondary mx-auto h3"></i></td>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['first_name'] ?></td>
                        <td><?= $user['last_name'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td>
                            <?php
                                if($user['id'] == $_SESSION['id']){
                                    echo "<a href='../views/edit.php' class='btn btn-outline-warning btn-sm'><i class='fa-solid fa-pen-to-square'></i></a>
                                    <a href='../views/delete.php' class='btn btn-outline-danger btn-sm'><i class='fa-solid fa-trash-can'></i></a>";
                                }
                            ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
        
<?php include 'layouts/footer.html' ?>