<!DOCTYPE html>
<html>
<head>
<style>
ul{
    list-style-type:none;
    margin:0;
    padding:0;
    overflow:hidden;
    background-color:#333333;
}


li a{
     display:block;
     color:white;
     text-align:left;
     padding:16px;
     text-decoration:none;
}
li a:hover{
           background-color : #111111;
}
</style>
</head>
<body style="background-image: url('images2.jpg')">
<h2 style='color:white'>Control Panel</h2>

<ul>
   <li style='font-size: 18'><a href='add1.php'>Add</a></li>
   <li><a href='Edit.php'>Edit</a></li>
   <li><a href='delete.php'>Delete</a></li>
   <li><a href='view.php'>View</a></li>
</ul>

</body>
</html>
<?php
echo"<a href='index.php'><h1>Back</h1></a>";

