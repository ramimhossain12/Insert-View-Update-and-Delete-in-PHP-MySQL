<?php
include("connection.php");
$query = "INSERT INTO STUDENT VALUES('4','Rakib khan','BBA')";
$data = mysqli_query($conn, $query);

if($data){
    echo "Data inserted into database";
}
?>
