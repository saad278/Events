<?php
if(isset($_POST["login"]))
{
  

$p_email=$_POST['p_email'];
$p_password=$_POST['p_password'];


$sql ="select * from provider where p_email='$p_email' and p_password='$p_password' ";

$result= $conn->query($sql);
if($result->num_rows > 0){
    header("location:provider_page.php");
}
else{
    echo "error";
}
}
 ?>