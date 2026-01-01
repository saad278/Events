<?php 
if(isset($_POST["add"]))
{
$participant=$_POST['participant'];
$event=$_POST['event'];
$problem=$_POST['problem'];
$sql ="INSERT INTO problems(participant,event,problem)
VALUES('$participant','$event','$problem')";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>