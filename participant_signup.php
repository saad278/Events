<?php 
if(isset($_POST["add"]))
{
  
$u_email=$_POST['u_email'];
$u_password=$_POST['u_password'];
$sql ="INSERT INTO users(u_email,u_password)
VALUES('$u_email','$u_password')";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>