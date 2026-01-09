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
    
  $e_accessoreis=$_POST['e_accessoreis'];
  $e_stuff=$_POST['e_stuff'];
  $sql ="UPDATE events 
set e_accessoreis='$e_accessoreis',e_stuff='$e_stuff'
where e_id='$id'";
  
      if($conn->query($sql)===TRUE){
          
          echo "data inserted";
         
      }else
      {
      echo "error".$conn->connect_error;
      }
      
  }
  ?>