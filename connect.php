
<?php
$connect=mysqli_connect("localhost","root","","as1") or die("Connection Failed");
 // localhost - servername // root - username // "" - password // 
 $query="insert into student(name,marks) values('John', 100)";
 if(mysqli_query($connect,$query))
 {
  echo "Record Inserted";
 }
 else
 {
  echo "Record Not Inserted";
 }
 ?>