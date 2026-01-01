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
  
$e_comp_type=$_POST['e_comp_type'];
$e_comp_diff=$_POST['e_comp_diff'];
$e_comp_prize=$_POST['e_comp_prize'];
$sql ="UPDATE events 
set e_comp_type='$e_comp_type',e_comp_diff='$e_comp_diff',e_comp_prize='$e_comp_prize'
where e_id='$id'";
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>   