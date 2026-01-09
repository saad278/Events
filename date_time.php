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
  
$e_date=$_POST['e_date'];
$e_time=$_POST['e_time'];
$e_duration=$_POST['e_duration'];
$sql ="UPDATE events 
set e_date='$e_date',e_time='$e_time',e_duration='$e_duration'
where e_id='$id'";
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>   