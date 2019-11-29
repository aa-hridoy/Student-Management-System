<?php
session_start();
if (($_SESSION["id"] == null)){
    header("Location:../login.php");
}
if(isset($_SESSION["roll"])){
    header("Location:student-admin-panel.php");
}


require_once "../vendor/autoload.php";
use App\classes\TeacherAdminPanel;
use App\classes\Login;

    if (isset($_POST["btn"])){
        $teacherAdminPanel = new TeacherAdminPanel();
        $teacherAdminPanel->addResult();
    }
    if (isset($_GET["logout"])) {
        $login = new Login();
        $login->logout();
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System-Login</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/my-style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top " style="background: #D7DBDD;">
        <div class="container ">

            <a href="" class="navbar-brand font-weight-bold">Student Management System</a>

            <button type="button" class="navbar-toggler ml-auto" data-target="#mainMenu" data-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ml-auto">
                    <li><a href="" class="nav-link"><?php echo $_SESSION["name"];?></a></li>
                    <li><a href="?logout=true" class="nav-link">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card-header">
        <div class="text-center">
            <h3>Instructor Admin Panel</h3>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-3 mt-4">
                <br>
                <input type="button" class="btn btn-light btn-outline-dark btn-block mb-4" name="result" value="Add Result" data-toggle="modal" data-target="#result"/>
                <br>
                <input type="button" class="btn btn-light btn-outline-dark btn-block mb-4" name="all-subjects" value="All Subjects" data-toggle="modal" data-target="#all-subjects"/>
                <br>
                <input type="button" class="btn btn-light btn-outline-dark btn-block mb-4" name="theory-subjects" value="Theory Subjects"  data-toggle="modal" data-target="#theory-subjects"/>
                <br>
                <input type="button" class="btn btn-light btn-outline-dark btn-block mb-4" name="practical-subjects" value="Practical Subjects" data-toggle="modal" data-target="#practical-subjects"/>
                <br>
                <input type="button" class="btn btn-light btn-outline-dark btn-block mb-4" name="class-routing" value="Class Routine"/>
                <br>
                <input type="button" class="btn btn-light btn-outline-dark btn-block mb-4" name="notice" value="Notice"/>
            </div>


            <div class="col-sm-9">

                <div class="modal fade" id="result">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="m-auto" ">Add Result</h3>
                            </div>

                            <div class="modal-body">

                                <form action="" method="post">

                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3 font-weight-bold">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Full Name" name="name" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3 font-weight-bold">Roll</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="roll" placeholder="Roll Number" type="text" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3 font-weight-bold">Registration</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="registration" placeholder="Registration Number" type="text" required>
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
                                        <label class="col-form-label col-sm-3 font-weight-bold">Exam Year</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="exam_year" required>
                                                <option value="">-Click here Select-</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3 font-weight-bold">CGPA</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="CGPA" name="cgpa" class="form-control" required>
                                        </div>
                                    </div>

                                    <hr>
                                    <br>

                                    <div class="float-right">
                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-light btn-outline-success" name="btn" value="Add Result">
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="all-subjects">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="m-auto" ">All Subjects</h3>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-primary">
                                    <tr>
                                        <th>Subject Code</th>
                                        <th>Name of the Subject</th>
                                        <th>Total Mark</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>66651</td>
                                        <td>Programming in Java</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>66652</td>
                                        <td>Surveillance Security System</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>66653</td>
                                        <td>Web Development Project</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>66654</td>
                                        <td>Sequential Logic System</td>
                                        <td>200</td>
                                    </tr>
                                    <tr>
                                        <td>66655</td>
                                        <td>PCB Design & Circuit Making</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>68541</td>
                                        <td>Operating System Application </td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>65851</td>
                                        <td>Accounting Theory & Practice </td>
                                        <td>150</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="theory-subjects">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="m-auto" ">Theory Subjects</h3>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-primary">
                                    <tr>
                                        <th>Subject Code</th>
                                        <th>Name of the Subject</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>66651</td>
                                        <td>Programming in Java</td>
                                    </tr>
                                    <tr>
                                        <td>66652</td>
                                        <td>Surveillance Security System</td>
                                    </tr
                                    <tr>
                                        <td>66654</td>
                                        <td>Sequential Logic System</td>
                                    </tr>
                                    <tr>
                                        <td>68541</td>
                                        <td>Operating System Application </td>
                                    </tr>
                                    <tr>
                                        <td>65851</td>
                                        <td>Accounting Theory & Practice </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="practical-subjects">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="m-auto">Theory Subjects</h3>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-primary">
                                    <tr>
                                        <th>Subject Code</th>
                                        <th>Name of the Subject</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>66651</td>
                                        <td>Programming in Java</td>
                                    </tr>
                                    <tr>
                                        <td>66653</td>
                                        <td>Web Development Project</td>
                                    </tr>
                                    <tr>
                                        <td>66654</td>
                                        <td>Sequential Logic System</td>
                                    </tr>
                                    <tr>
                                        <td>66655</td>
                                        <td>PCB Design & Circuit Making</td>
                                    </tr>
                                    <tr>
                                        <td>68541</td>
                                        <td>Operating System Application </td>
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



<script src="../js/jquery-3.4.1.js"></script>
<script src="../js/popper-1.15.0-mini.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>




