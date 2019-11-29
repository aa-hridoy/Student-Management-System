<?php

namespace App\classes;

class Registration
{
    function registrationForm (){
        extract($_POST);
        $link = mysqli_connect("localhost","root","","student-management-system");
        $sql = "INSERT INTO `students-reg`(`name`, `gender`, `department`, `semester`, `roll`, `registration`, `session`, `address`, `email`, `mobile`, `password`) VALUES ('$name','$gender','$department','$semester','$roll','$registration','$session','$address','$email','$mobile','$password')";

        if(mysqli_query($link,$sql)){
            return " ";
        }else{
           die("Query Problem".mysqli_error($link));
        };

    }




}