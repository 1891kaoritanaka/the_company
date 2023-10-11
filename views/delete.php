<?php 
    include 'layouts/header.html';
    
    include "../views/nav-bar.php";
?>

    <body>
        <main class="container">
            <div class="my-5 mx-auto text-center">
                <i class="fa-solid fa-triangle-exclamation text-warning h1"></i>
                <h3 class="text-uppercase text-danger">delete account</h3>
            </div>
            <div class="mx-auto text-center">
                <p class="fw-bold">Are you sure you want to delete your account?</p>
                <form action="../actions/delete.php" method="post">
                    <a href="../views/dashboard.php" class="btn btn-secondary w-25 fw-bold">Cancel</a>
                    <button type="submit" class="btn btn-outline-danger w-25 fw-bold">Delete</button>
                </form>
            </div>
        </main>
        
<?php include 'layouts/footer.html' ?>