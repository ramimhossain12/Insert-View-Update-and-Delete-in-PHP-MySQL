
<?php
include("connection.php");
error_reporting(0);
 ?>
  

<html>
<head>
<body>
<form action="" method= "GET">

Roll No <input type ="text" name="rollno" value=""/><br><br>
Name    <input type ="text" name="studentname" value=""/><br><br>
Class   <input type ="text" name="class" value=""/><br><br>
<input type ="submit" name ="submit" value = "Submit"/>
</form>

 

<?php
 $rn= $_GET['rollno'];
$sn=  $_GET['studentname'];
  $cl =$_GET['class'];


  $query = "INSERT INTO STUDENT VALUES('$rn','$sn',' $cl')";
  $data = mysqli_query($conn, $query);
  
  if($data){
      echo "Data inserted into database";
  }

?>




</body>
</head>

</html>