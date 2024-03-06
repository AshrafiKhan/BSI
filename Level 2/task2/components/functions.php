<?php
require_once('../db/db_conn.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    // Sign Up Code
    if (isset($_POST['signup'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $role = "customer";
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        // INSERT INTO `users`(`id`, `name`, `email`, `password`, `contact`, `address`, `role`, `date`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')

        // Check if the Password and cPassword are same
        if ($password == $cpassword) {

            // Check Whether the Email id exists in database or not
            $chk_sql = "SELECT * FROM `users` WHERE `email`='$email'";
            $chk_sql_run = mysqli_query($connect, $chk_sql);
            if (mysqli_num_rows($chk_sql_run) > 0) {
                /* Email exists */

                $_SESSION['error'] = "Email already taken by Customer";
                header("Location: ../index.php");
            } else {
            /* Email doesn't exist */

            // Convert simple password to encrypted form
            $hash = password_hash($password, PASSWORD_DEFAULT);

            // SQL query to insert customer data in DB
            $sql = "INSERT INTO `users`(`name`, `email`, `password`, `role`) VALUES ('$name', '$email', '$hash', '$role')";
            $sql_run = mysqli_query($connect, $sql);
            if ($sql_run) {
                // $_SESSION['auth'] = true;
                // $_SESSION['email'] = $email;
                // $_SESSION['name'] = $name;
                // $_SESSION['id'] = mysqli_insert_id($connect);
                $_SESSION['success'] = "Account created successfully";
                header("Location: ../index.php");
            } else {
                $_SESSION['error'] = "Account Not Created";
                header("Location: ../index.php");
            }
            }
        } else {
            $_SESSION['error'] = "Password Doesn't Match";
            header("Location: ../index.php");
        }
    }

    // Check Whether the Email id exists in database or not
    if (isset($_POST['check_email'])) {

        $email = $_POST['email'];
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $sql_run = mysqli_query($connect, $sql);

        if ($sql_run->num_rows > 0) {
            // json_encode(['exists'=>true]);
            echo "1";
        } else {
            // json_encode(['exists'=>false]);
            echo "0";
        }
       
    }


    // Login Code
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // SQL query to list the emails from DB 
        $login_sql = "SELECT * FROM `users` WHERE email='$email'";
        $login_sql_run = mysqli_query($connect, $login_sql);
        // get total number of rows
        $num = mysqli_num_rows($login_sql_run);

        // check whether the email exists in the DB 
        if ($num == 1) {
            while ($row = mysqli_fetch_assoc($login_sql_run)) {
                // Verifying password from the database
                if (password_verify($password, $row['password'])) {
                    $_SESSION['auth'] = true;
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['success'] = "Logged in Successfully";
                    header("Location: ../secure.php");
                } else {
                    $_SESSION['error'] = "Invalid Credentials";
                    header("Location: ../index.php");
                }
            }
        } else {
            $_SESSION['error'] = "Invalid Credentials";
            header("Location: ../index.php");
        }
    }
}
