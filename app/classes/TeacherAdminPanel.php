<?php
namespace App\classes;
class TeacherAdminPanel
{

    public function addResult (){
        extract($_POST);

        $link = mysqli_connect("localhost","root","","student-management-system");

        $sql = "INSERT INTO results (name, roll, registration, semester, exam_year, cgpa) VALUES ('$name','$roll','$registration','$semester','$exam_year','$cgpa')";

        if(mysqli_query($link,$sql)){
            echo "<script>alert('Success')</script>";
        }else{
            die("Query Problem".mysqli_error($link));
        };

    }



};