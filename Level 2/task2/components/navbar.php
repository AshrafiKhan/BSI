<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">BSI Login System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>

                <?php
                if (isset($_SESSION['auth'])) {
                ?>
                    <li class="nav-item">
                        <Welcome, class="nav-link" href="#">Welcome, <?= $_SESSION['name'] ?> </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="components/logout.php">Logout</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</a>
                    </li>
                <?php
                }
                ?>

                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<?php
include_once("login.php");
include_once("signup.php");

?>