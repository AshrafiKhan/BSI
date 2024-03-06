<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalabel">Login to BSI Login System</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="components/functions.php" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="login-email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="login_email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="login-password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="login_password" name="password">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <!-- Button trigger modal -->
                    <button id="signup-mdl" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#signupModal">
                        Create Account
                    </button>
                    <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> -->
                    <button type="submit" name="login" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>