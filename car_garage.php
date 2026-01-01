<?php 



if(isset($_GET['id'])){
$id=$_GET['id'];}
$query = "select * from events where 'e_id' = '$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
?>
<?php 
if(isset($_POST["add"]))
{
  
$e_garage_type=$_POST['e_garage_type'];
$e_garage_service=$_POST['e_garage_service'];
$e_garage_fee=$_POST['e_garage_fee'];
$sql ="UPDATE events 
set e_garage_type='$e_garage_type',e_garage_service='$e_garage_service',e_garage_fee='$e_garage_fee'
where e_id='$id'";
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>   