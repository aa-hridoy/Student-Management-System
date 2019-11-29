<?php
session_start();
if(isset($_SESSION["id"])){
    header("Location:pages/teacher-admin-panel.php");
}
if(isset($_SESSION["roll"])){
    header("Location:pages/student-admin-panel.php");
}



require_once "vendor/autoload.php";
use App\classes\Login;

    if (isset($_POST["btn"])) {
        $login =new Login();
        if ($_POST["role"] == "student"){
            $login->studentLogin();
        } else if ($_POST["role"] == "instructor"){
            $login->instructorLogin();
        }

    }


?>





<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Student Management System-Login</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/my-style.css">
    </head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top " style="background: #D7DBDD;">
            <div class="container ">
                <button type="button" class="navbar-toggler ml-auto" data-target="#mainMenu" data-toggle="collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainMenu">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="index.php" class="nav-link">Home</a></li>
                        <li><a href="student-info.php" class="nav-link">Student Info</a></li>
                        <li><a href="result.php" class="nav-link">Result</a></li>
                        <li><a href="login.php" class="nav-link">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    <div class="card-header">
            <div class="text-center">
                <h3>Govt. Graphic Arts Institute</h3>
                <h4>Student Management System</h4>
            </div>
        </div>

    <div class="container">
            <div class="row mt-4">
                    <div class="col-sm-12 mb-5">
                            <h3 class="text-center ">Log in</h3>
                            <h4 class="text-center mt-sm-3">Use your Account</h4>
                    </div>
                    <hr/>
                    <form action="" method="post" class="m-auto">
                        <div class="form-group row">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username/Email" name="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <select class="form-control" name="role" required>
                                    <option value="">Role</option>
                                    <option value="student">Student</option>
                                    <option value="instructor">Instructor</option>
                                    <option value="administrator">Administrator</option>
                                </select>
                            </div>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" required> I agree to the <a href="#">Terms and Conditions</a>
                            </label>
                        </div>

                        <input type="submit" class="btn btn-outline-success btn-block" name="btn" value="Login">

                        <div class="form-group text-center mt-2">
                            <a href="#">Forgot Password</a>&nbsp;|&nbsp;<a href="#">Support</a>
                        </div>

                    </form>
            </div>
        </div>


    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/popper-1.15.0-mini.js"></script>
    <script src="js/bootstrap.js"></script>
    </body>
</html>