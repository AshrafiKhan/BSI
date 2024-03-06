<!-- SignUp Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Create Account in BSI Login System</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="components/functions.php" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="signup-name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="signup_name">
                    </div>
                    <div class="mb-3">
                        <label for="signup-email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="signup_email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>

                    </div>
                    <div class="mb-3">
                        <label for="signup-password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signup_password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="signup-cpassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="signup_cpassword" name="cpassword" aria-describedby="passHelp">
                        <div id="passHelp" class="form-text"></div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" id="login-mdl" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                    <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> -->
                    <button type="submit" name="signup" id="signup" class="btn btn-warning">SignUp</button>
                </div>
            </form>
        </div>
    </div>
</div>