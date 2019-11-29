<?php

namespace App\classes;

class StudentInfo
{
    public function studentInfo(){

        extract($_POST);

        $link = mysqli_connect("localhost","root","","student-management-system");
        $sql = "SELECT * FROM `students-reg` WHERE roll='$roll' && registration='$registration' && semester='$semester'&&department='$department'&&session='$session'";

        if ($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        } else {
            header("Location:student-info.php");
        };
    }


}