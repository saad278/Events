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
  
$e_product=$_POST['e_product'];
$e_num_shops=$_POST['e_num_shops'];
$sql ="UPDATE events 
set e_product='$e_product',e_num_shops='$e_num_shops'
where e_id='$id'";

    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
      echo "error".$conn->connect_error;
    }
    
}
?>