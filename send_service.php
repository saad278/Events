<?php 
if(isset($_POST["add"]))
{
$service=$_POST['service'];
$sql ="INSERT INTO services(service)
VALUES('$service')";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>