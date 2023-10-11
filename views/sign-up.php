<?php include 'layouts/header.html' ?>

    <body class="bg-light">
        <div style="height:100vh;">
            <div class="row m-0 h-100">
                <div class="card w-25 my-auto mx-auto">
                    <div class="card-header border-0 bg-white py-3">
                        <h3 class="text-center">Register</h3>
                    </div>
                    <div class="card-body">
                        <form action="../actions/sign-up.php" method="post">
                            <div class="mb-3">
                                <label for="first-name" class="form-label">Firstname</label>
                                <input type="text" name="first_name" id="first-name" class=" form-control">
                            </div>
                            <div class="mb-3">
                                <label for="last-name" class="form-label">Lastname</label>
                                <input type="text" name="last_name" id="last-name" class=" form-control">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label fw-bold">Username</label>
                                <input type="text" name="username" id="username" class=" form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Password</label>
                                <input type="password" name="password" id="password" class=" form-control">
                                <div class="form-text">Password should be a minimum of 8 characters</div>
                            </div>
                            <button type="submit" class="btn btn-success w-100 fw-bold">Register</button>
                            <p class="text-center small">
                                Already have an account? <a href="../views/sign-in.php">Login here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php include 'layouts/footer.html' ?>