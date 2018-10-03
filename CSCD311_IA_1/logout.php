<?php
session_start();
session_destroy();
header("LOCATION:index.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$st_id=$_POST['st_id'];
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $program=$_POST['program'];
    $course=$_POST['course'];
    $hall_of_residence=$_POST['hall_of_residence'];
    $year_of_enrollment=$_POST['year_of_enrollment'];
    $year_of_completion=$_POST['year_of_completion'];
    $student_status=$_POST['student_status'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $guardian_name=$_POST['guardian_name'];
    $guardian_contact=$_POST['guardian_contact'];
    $nationality=$_POST['nationality'];
    $contact=$_POST['contact'];