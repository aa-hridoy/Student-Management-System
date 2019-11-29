<?php


namespace App\classes;


class Result
{
    public function studentResult() {

        extract($_POST);

        $link = mysqli_connect("localhost","root","","student-management-system");
        $sql = "SELECT * FROM results WHERE roll='$roll' && registration='$registration' && semester='$semester' && exam_year ='$exam_year'";

        if ($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        } else {
            die ("Query Problem".mysqli_error($link));
        };

    }
}