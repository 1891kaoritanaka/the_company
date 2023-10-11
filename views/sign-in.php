<?php include 'layouts/header.html' ?>

    <body class="bg-light">
        <div style="height:100vh;">
            <div class="row m-0 h-100">
                <div class="card w-25 my-auto mx-auto">
                    <div class="card-header border-0 bg-white py-3">
                        <h3 class="text-center text-uppercase">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="../actions/sign-in.php" method="post">
                            <div class="mb-3">
                                <input type="text" name="username" id="username" class=" form-control" placeholder="USERNAME">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" id="password" class=" form-control" placeholder="PASSWORD">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 fw-bold">Log in</button>
                            <p class="text-center small mt-2">
                                <a href="../views/sign-up.php">Create Account</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php include 'layouts/footer.html' ?>