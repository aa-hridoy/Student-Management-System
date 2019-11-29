<?php
session_start();
if(isset($_SESSION["id"])){
    header("Location:pages/teacher-admin-panel.php");
}
if(isset($_SESSION["roll"])){
    header("Location:pages/student-admin-panel.php");
}




require_once "vendor/autoload.php";
use App\classes\StudentInfo;


if (isset($_POST["btn"])) {
    $studentInfo = new StudentInfo();
    $queryResult=$studentInfo->studentInfo();

    $student = mysqli_fetch_assoc($queryResult);

}





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System-Student Info</title>
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
        <div class="row mt-3">
            <div class="col-sm-12 mb-5">
                <h3 class="text-center mt-sm-3">Student Information</h3>
            </div>
            <hr/>
            <div class="col-sm-5 m-auto">
                <form action="" method="post">

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3 font-weight-bold">Roll</label>
                        <div class="col-md-9">
                            <input class="form-control"  name="roll" placeholder="Roll Number" type="text">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3 font-weight-bold">Registration</label>
                        <div class="col-md-9">
                            <input class="form-control"  name="registration" placeholder="Registration Number" type="text">
                        </div>
                    </div>

                    <div class="form-group row">
                            <label class="col-form-label col-sm-3 font-weight-bold">Semester</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="semester">
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
                        <label class="col-form-label col-sm-3 font-weight-bold">Department</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="department">
                                <option value="">-Select Technology-</option>
                                <option value="Computer Technology">Computer Technology</option>
                                <option value="Graphic Design Technology">Graphic Design Technology</option>
                                <option value="Printing Technology">Printing Technology</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3 font-weight-bold">Session</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="2000/01" name="session" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-light btn-outline-success btn-block" name="btn" data-toggle="modal" data-target="#modal">Submit</button>
                    <button type="button" class="btn btn-light btn-outline-success btn-block" data-toggle="modal" data-target="#modal">View Information</button>

                </form>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="modal fade" id="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="m-auto">Student Information</h3>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered table-hover">

                                    <tr>
                                        <th scope="row">Name</th>
                                        <td scope="col"><?php echo $student["name"]?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Gender</th>
                                        <td scope="col"><?php echo $student["gender"]?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Department</th>
                                        <td scope="col"><?php echo $student["department"]?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Semester</th>
                                        <td scope="col"><?php echo $student["semester"]?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Roll</th>
                                        <td scope="col"><?php echo $student["roll"]?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Registration</th>
                                        <td scope="col"><?php echo $student["registration"]?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Session</th>
                                        <td scope="col"><?php echo $student["session"]?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mobile</th>
                                        <td scope="col"><?php echo $student["mobile"]?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td scope="col"><?php echo $student["email"]?></td>
                                    </tr>

                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper-1.15.0-mini.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>