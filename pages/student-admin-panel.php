<?php
session_start();
if (($_SESSION["roll"] == null)){
    header("Location:../login.php");
}
if(isset($_SESSION["id"])){
    header("Location:teacher-admin-panel.php");
}

require_once "../vendor/autoload.php";
use App\classes\Login;

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
            <h3>Student Admin Panel</h3>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-4">
                <br>
                <input type="button" class="btn btn-light btn-outline-dark btn-block mb-4" name="all-subjects" value="All Subjects" data-toggle="modal" data-target="#all-subjects"/>
                <br>
                <input type="button" class="btn btn-light btn-outline-dark btn-block mb-4" name="theory-subjects" value="Theory Subjects"  data-toggle="modal" data-target="#theory-subjects"/>
                <br>
                <input type="button" class="btn btn-light btn-outline-dark btn-block mb-4" name="practical-subjects" value="Practical Subjects" data-toggle="modal" data-target="#practical-subjects"/>
                <br>
                <input type="button" class="btn btn-light btn-outline-dark btn-block mb-4" name="teachers" value="Teachers"/>
                <br>
                <input type="button" class="btn btn-light btn-outline-dark btn-block mb-4" name="class-routing" value="Class Routine"/>
                <br>
                <input type="button" class="btn btn-light btn-outline-dark btn-block mb-4" name="notice" value="Notice"/>
            </div>


            <div class="col-sm-9">

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



