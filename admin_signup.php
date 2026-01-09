<?php 
if(isset($_POST["add"]))
{
  
$a_email=$_POST['a_email'];
$a_password=$_POST['a_password'];
$sql ="INSERT INTO admins(a_email,a_password)
VALUES('$a_email','$a_password')";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>