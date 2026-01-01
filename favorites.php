<?php 
if(isset($_POST["add"]))
{
$participant=$_POST['participant'];
$event=$_POST['event'];
$sql ="INSERT INTO reviews(event,participant)
VALUES('$event','$participant')";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>