<?php 



if(isset($_GET['id'])){
$id=$_GET['id'];}
$query = "select * from services where 's_id' = '$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
?>
<?php 
if(isset($_POST["add"]))
{
  
$reply=$_POST['reply'];
$reason=$_POST['reason'];
$sql ="UPDATE services 
set reply='$reply',reason='$reason'
where e_id='$id'";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>