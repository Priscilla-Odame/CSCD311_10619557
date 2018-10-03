<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'newlogin.php';
$username="";
$password="";

if(isset($_POST["btnlogin"])){
     $username= strip_tags($_POST['username']);
     $password= strip_tags($_POST['password']); 
     $query=mysqli_query($conn,"SELECT * FROM student_login WHERE st_name='$username' AND st_password='$password'" );
                $check_query = mysqli_num_rows($query);
                if($check_query===1)
               {             
                  header("LOCATION:stLog.php");    
               }
                else
               {
                   echo "<script>alert('Login not Successful! Please Try Again.')</script>";      
               }
               
              }
               
    


 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body style="background-image:url('index2.jpg')">
        <br>
        <form action="index.php" method="POST">
            <table class="table table-bordered" align="center" style="width:35%">
                <tr>
                    <th colspan="4"><h2 style="color:blue">LOGIN!</h2></th>
                </tr>
                <tr>
                    <th>UserName:</th>
                    <td><input type="text" name="username"  placeholder="enter username" class="form-control" required></td>
                </tr>
                 <tr>
                    <th>Password:</th>
                    <td><input type="password" name="password"  placeholder="enter password" class="form-control" required></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" value="Login" name="btnlogin" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
