<?php session_start(); ?>

<?php
if(isset($_SESSION['valid'])){
    header('Location:index.php');
}

?>
  <?php
        
      $host='localhost';
      $username='root';
      $password='';
      $db='myschool';
      $conn= mysqli_connect($host,$username,$password,$db);
      if(mysqli_connect_errno()){
      echo"failed to connect".mysqli_connect_errno();
}

$result=mysqli_query($mysqli,"SELECT * from tb_student WHERE st_id=".$SESSION['st_id']);       
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View Records</title>
    </head>
    
    <body>
        <a href="stLog.php">Home</a><br>
        <a href="add1.php">Add New Data</a><br>
        <a href="logout.php">Logout</a><br><br>
        <table border=0 width="80%">
            
            <tr>
                
               <td>Student Id</td> 
               <td>First Name</td> 
               <td>Last Name</td> 
               <td>Date of Birth</td> 
               <td>Gender</td> 
               <td>Contact</td>                
               <td>Program</td> 
               <td>Course</td>  
               <td>Email</td>
               <td>Address</td> 
               <td>Nationality</td>
               <td>Student Status</td>
              <td>Guardian of Name</td> 
               <td>Guardian Contact</td> 
              <td>Hall of Residence</td> 
              <td>Year of Enrollment</td> 
               <td>Year of Completion</td> 
            </tr>
            <?php
            while($res = mysqli_fetch_array($result)){
               echo "<tr>";
               echo "<td>".res['st_id']."</td>";
               echo "<td>".res['f_name']."</td>";
               echo "<td>".res['l_name']."</td>";
               echo "<td>".res['dob']."</td>";
               echo "<td>".res['gender']."</td>";
               echo "<td>".res['contact']."</td>";
               echo "<td>".res['program']."</td>";
               echo "<td>".res['course']."</td>";
               echo "<td>".res['email']."</td>";
               echo "<td>".res['nationality']."</td>";
               echo "<td>".res['stu_status']."</td>";
               echo "<td>".res['nationality']."</td>";
               echo "<td>".res['guardian_name']."</td>";
               echo "<td>".res['guardian_contact']."</td>";
               echo "<td>".res['hall_of_residence']."</td>";
               echo "<td>".res['year_of_enrollment']."</td>";
               echo "<td>".res['year_of_completion']."</td>";
               echo "<td><a href=\'edit.php?st_id=$res[st_id]\">Edit</a> | <a href=\"delete.php?id=$res[st_id]\" onclick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            }
            ?>
        </table>
        
    </body>
</html>