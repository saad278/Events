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
    
  $e_ad=$_POST['e_ad'];
  $e_blogger=$_POST['e_blogger'];
  $sql ="UPDATE events 
set e_ad='$e_ad',e_blogger='$e_blogger'
where e_id='$id'";
  
      if($conn->query($sql)===TRUE){
          
          echo "data inserted";
         
      }else
      {
      echo "error".$conn->connect_error;
      }
      
  }
  ?>