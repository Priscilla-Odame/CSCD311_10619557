<?php
include("newlogin.php");
    $st_id=$_GET['st_id'];
    $f_name=$_GET['f_name'];
    $l_name=$_GET['l_name'];
    $dob=$_GET['dob'];
    $gender=$_GET['gender'];
    $program=$_GET['program'];
    $course=$_GET['course'];
    $hall_of_residence=$_GET['hall_of_residence'];
    $year_of_enrollment=$_GET['year_of_enrollment'];
    $year_of_completion=$_GET['year_of_completion'];
    $student_status=$_GET['student_status'];
    $address=$_GET['address'];
    $email=$_GET['email'];
    $guardian_name=$_GET['guardian_name'];
    $guardian_contact=$_GET['guardian_contact'];
    $nationality=$_GET['nationality'];
    $postal_address=$_GET['postal_address'];
    $contact=$_GET['contact'];

$result=myssqli_query($mysqli,"DELETE FROM tb_student WHERE password=$password");

header("Location:index.php");


