<?php 
    include "../views/nav-bar.php";

    include 'layouts/header.html';
?>

    <body>
        <main class="container">
            <form action="../actions/edit.php" method="post">
                <div class="text-center w-50 mx-auto mt-5">
                    <h3 class="text-uppercase">edit user</h3>
                    <i class="fa-solid fa-user text-secondary display-1 my-2"></i>
                    <input type="file" name="file" id="file" class="form-control w-50 mx-auto">
                </div>
                <div class="w-75 mx-auto">
                    <div class="mb-2">
                        <label for="first-name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first-name" class="form-control" value="<?= $getUser['first_name']?>">
                    </div>
                    <div class="mb-2">
                        <label for="last-name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" id="last-name" class="form-control" value="<?= $getUser['last_name']?>">
                    </div>
                    <div class="mb-2">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?= $getUser['username']?>">
                    </div>
                    <div class="text-end">
                        <a href="../views/dashboard.php" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-warning w-25">Save</button>
                    </div>
                </div>
            </form>
            </div>
        </main>
        
<?php include 'layouts/footer.html' ?>