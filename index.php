<?php
session_start();
if(isset($_SESSION["id"])){
    header("Location:pages/teacher-admin-panel.php");
}
if(isset($_SESSION["roll"])){
    header("Location:pages/student-admin-panel.php");
}




require_once "vendor/autoload.php";

use App\classes\Registration;

    if (isset($_POST["btn"])) {
        $regform = new Registration();
        $return = $regform->registrationForm();

    };
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Student Management System-Home</title>
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
        <div class="row">
            <div class="col-lg-7 m-auto">
                <img src="images/student-management-system-500x500.png" alt="">
            </div>

            <div class="col-lg-5">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="text-center mt-sm-3">Student Registration Form</h4>
                    </div>
                </div>
                <hr/>
                <form action="" method="post">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3 font-weight-bold">Name</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Full Name" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="radio-label col-sm-3 font-weight-bold">Gender</label>
                        <div class="form-radio-item col-sm-9">
                            <input type="radio" name="gender" id="male" value="Male" checked>
                            <label for="male">Male</label>
                            <input type="radio" name="gender" id="female" value="Female">
                            <label for="female">Female</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3 font-weight-bold">Department</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="department" required>
                                <option value="">-Select Technology-</option>
                                <option value="Computer Technology">Computer Technology</option>
                                <option value="Graphic Design Technology">Graphic Design Technology</option>
                                <option value="Printing Technology">Printing Technology</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3 font-weight-bold">Semester</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="semester" required>
                                <option value="">-Select-</option>
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>
                                <option value="3rd">3rd</option>
                                <option value="4th">4th</option>
                                <option value="5th">5th</option>
                                <option value="6th">6th</option>
                                <option value="7th">7th</option>
                                <option value="8th">8th</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3 font-weight-bold">Roll</label>
                        <div class="col-md-9">
                            <input class="form-control" name="roll" placeholder="Roll Number" type="text" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3 font-weight-bold">Registration</label>
                        <div class="col-md-9">
                            <input class="form-control" name="registration" placeholder="Registration Number" type="text" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3 font-weight-bold">Session</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="2000/01" name="session" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3 font-weight-bold">Address</label>
                        <div class="col-md-9">
                            <textarea  class="form-control" placeholder="Your Address type hare!" name="address" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3 font-weight-bold">Email</label>
                        <div class="col-sm-9">
                            <input type="email" placeholder="Email Address" name="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3 font-weight-bold">Mobile</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="+8801234567890" name="mobile" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3 font-weight-bold">Password</label>
                        <div class="col-sm-9">
                            <input type="password" placeholder="Enter your new password " name="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-sm-6 ml-auto">
                            <input type="submit" class="btn btn-light btn-outline-success btn-block" id="register" name="btn" value="Submit""/>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/popper-1.15.0-mini.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/sweetalert2@9.js"></script>

    <?php if (isset($return)) {?>
        <script>
           $(function () {
                 Swal.fire({
                     icon: 'success',
                    text: 'Your information has been Submitted',
                 })
           });
        </script>
    <?php };?>

    </body>
</html>