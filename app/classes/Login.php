<?php

namespace App\classes;

class Login
{
    public function studentLogin(){
        extract($_POST);

        $link = mysqli_connect("localhost","root","","student-management-system");
        $sql = "SELECT * FROM `students-reg` WHERE email ='$email' && password = '$password'";

        if ($queryResult=mysqli_query($link,$sql)){
            $studentUser =mysqli_fetch_assoc($queryResult);
            if ($studentUser){
                session_start();
//                $_SESSION["id"] = $studentUser["id"];
                $_SESSION["name"] = $studentUser["name"];
                $_SESSION["roll"] = $studentUser["roll"];

                header("Location:pages/student-admin-panel.php");
            }else{
                header("Location:login.php");
            }

        } else {
            die('Query Problem'.mysqli_error($link));
        };
    }

    public function instructorLogin(){
        extract($_POST);

        $link = mysqli_connect("localhost","root","","student-management-system");
        $sql = "SELECT * FROM techers WHERE username ='$email' && password = '$password'";

        if ($queryResult=mysqli_query($link,$sql)){
            $instructorUser =mysqli_fetch_assoc($queryResult);
            if ($instructorUser){
                session_start();
                $_SESSION["id"] = $instructorUser["id"];
                $_SESSION["name"] = $instructorUser["name"];

                header("Location:pages/teacher-admin-panel.php");
            }else{
                header("Location:login.php");
            }


        } else {
            die('Query Problem'.mysqli_error($link));
        };
    }


    public function logout(){
        unset($_SESSION["id"]);
        unset($_SESSION["name"]);
        unset($_SESSION["roll"]);

        header("Location:../login.php");
    }










}