<?php 
if(isset($_POST["add"]))
{
$participant=$_POST['participant'];
$event=$_POST['event'];
$question=$_POST['question'];
$sql ="INSERT INTO questions(participant,event,question)
VALUES('$participant','$event','$question')";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>