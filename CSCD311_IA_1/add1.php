<!DOCTYPE html>
<html>
    <head>
        <title>Add Data</title>
    </head>
    <body>
<?php
$host='localhost';
$username='root';
$password='';
$db='myschool';
$conn= mysqli_connect($host,$username,$password,$db);
if(mysqli_connect_errno()){
    echo"failed to connect".mysqli_connect_errno();
}
if(isset($_POST['update']))
{
    $st_id=mysqli_real_escape_string($db,$_POST['st_id']);
    $f_name=mysqli_real_escape_string($db,$_POST['f_name']);
    $l_name=mysqli_real_escape_string($db,$_POST['l_name']);
    $dob=mysqli_real_escape_string($db,$_POST['dob']);
    $gender=mysqli_real_escape_string($db,$_POST['gender']);
    $contact=mysqli_real_escape_string($db,$_POST['contact']);
    $program=mysqli_real_escape_string($db,$_POST['program']);
    $course=mysqli_real_escape_string($db,$_POST['course']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $address=mysqli_real_escape_string($db,$_POST['address']);
    $nationality=mysqli_real_escape_string($db,$_POST['nationality']);
    $guardian_name=mysqli_real_escape_string($db,$_POST['guardian_name']);
    $guardian_contact=mysqli_real_escape_string($db,$_POST['guardian_contact']);
    $hall_of_residence=mysqli_real_escape_string($db,$_POST['hall_of_residence']);
    $year_of_enrollment=mysqli_real_escape_string($db,$_POST['year_of_enrollment']);
    $year_of_completion=mysqli_real_escape_string($db,$_POST['year_of_completion']);
    $stu_status=mysqli_real_escape_string($db,$_POST['student_status']);
    
        
if(empty($st_id) || empty($f_name) || empty($l_name) || empty($dob) || empty($gender) || empty($program) ||empty($course) || empty($hall_of_residence) || empty($year_of_enrollment) 	|| empty($year_of_completion) || empty($stu_status) || empty($address) || empty($email) || empty($gaurdian_name) || empty($guardian_contact) || empty($nationality) || empty($contact))
{
    if(empty($st_id)){
        echo "<font color='red'>Id field is empty.</font><br>";
        	
    }
    if(empty($f_name)){
        echo "<font color='red'>First Name field is empty.</font><br>";
        	
    }
    if(empty(l_name)){
        echo "<font color='red'>Last Name field is empty.</font><br>";
        	
    }
    if(empty($dob)){
        echo "<font color='red'>Date of birth field is empty.</font><br>";
        	
    }
    if(empty($gender)){
        	echo "<font color='red'>Gender field is empty.</font><br>";
    }
     if(empty($contact)){
        	echo "<font color='red'>Contact field is empty.</font><br>";
    }
    echo "<br><a href='javascript:self.history.back();'>Go Back</a>";
    }
    if(empty($program)){
        	echo "<font color='red'>Program field is empty.</font><br>";
    }
    if(empty($course)){
        	echo "<font color='red'>Course field is empty.</font><br>";
    }
    if(empty($email)){
        	echo "<font color='red'>Email field is empty.</font><br>";
    }
     if(empty($address)){
        	echo "<font color='red'>Address field is empty.</font><br>";
    }
    if(empty($nationality)){
        	echo "<font color='red'>Nationality field is empty.</font><br>";
    }
     if(empty($stu_status)){
        	echo "<font color='red'>Student status field is empty.</font><br>";
    }
    if(empty($gaurdian_name)){
        	echo "<font color='red'>Gaurdian Name field is empty.</font><br>";
    }
    if(empty($guardian_contact)){
        	echo "<font color='red'>Gaurdian contact field is empty.</font><br>";
    }
    if(empty($hall_of_residence)){
        echo "<font color='red'>Hall of residence field is empty.</font><br>";
        	
    }
    if(empty($year_of_enrollment)){
        	echo "<font color='red'>Year of enrollment field is empty.</font><br>";
    }
    if(empty($year_of_completion)){
        echo "<font color='red'>Year of completion field is empty.</font><br>";
        	
    }   
else{
    $result = mysqli_query($mysqli,"INSERT INTO tb_student(st_id,f_name	l_name,dob,gender,contact,program,course,email,address,nationality,stu_status,guardian_name,guardian_contact,hall_of_residence,year_of_admission,year_of_completion) VALUES($st_id,$f_name,$l_name,$dob,$gender,$contact,$program,$course,$email,$address,$nationality,$stu_status,$guardian_name,$guardian_contact,$hall_of_residence,$year_of_admission,$year_of_completion)");
    echo "<font color='yellow'>Data added successfully.";
    echo "<br><a href='index.php'>View Result</a>";
     
}       
}
?>
         <a href="stLog.php">Home</a><br><br>
        
        <form name="form1" method="post" action="add1.php">
            <table width=30% border="0">
                <tr>
                    <td>Student Id</td>
                    <td><input type="text" name="st_id"></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="f_name"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="l_name"></td>
                </tr>
                <tr>
                    <td>Date Of Birth</td>
                    <td><input type="date" name="dob"></td>
                </tr>
                 <tr>
                    <td>Gender</td>
                    <td><input type="text" name="gender"></td>
                </tr>
                <tr>
                    <td>Program</td>
                    <td><input type="text" name="program"></td>
                </tr>
                <tr>
                    <td>Course</td>
                    <td><input type="text" name="course"></td>
                </tr>
                <tr>
                    <td>Hall of Residence</td>
                    <td><input type="text" name="hall_of_residence"></td>
                </tr>
                <tr>
                    <td>Year of Enrollment</td>
                    <td><input type="text" name="year_of_enrollment"></td>
                </tr>
                <tr>
                    <td>Year of Completion</td>
                    <td><input type="text" name="year_of_completion"></td>
                </tr>
                <tr>
                    <td>Student Status</td>
                    <td><input type="text" name="st_status"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Guardian Name</td>
                    <td><input type="text" name="guardian_name"></td>
                </tr>
                <tr>
                    <td>Guardian Contact</td>
                    <td><input type="text" name="guardian_contact"></td>
                </tr>
                 <tr>
                    <td>Nationality</td>
                    <td><input type="text" name="nationality"></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input type="text" name="contact"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
            
        </form>
        
        
</body>
</html>