<?php
if(isset($_POST["login"]))
{
  

$a_email=$_POST['a_email'];
$a_password=$_POST['a_password'];


$sql ="select * from admins where a_email='$a_email' and a_password='$a_password' ";

$result= $conn->query($sql);
if($result->num_rows > 0){
    header("location:admin_page.php");
}
else{
    echo "error";
}
}
 ?>