<?php
$name =$_POST["S_Name"];
$lastname= $_POST["S_LastName"];
$address= $_POST["S_Address"];
$SunjectName= $_POST["S_SunjectName"];

include('connection.php');

//สร้างคำสั่ง sql
$sql = "INSERT INTO tbl_product (S_Name,S_LastName,S_Address,S_SunjectName) VALUES ('$name','$lastname','$address','$SunjectName')";
if ($conn->query($sql)) {
    
 echo "New record created successfully";
 header('location:index.php'); //กลับไปยังหน้าตาราง
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>