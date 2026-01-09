<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rental List</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #5c6d7c;
    padding: 40px;
    color: #fff;
}

.container {
    background: #4f6070;
    padding: 20px;
    border-radius: 6px;
}

/* Top bar */
.top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.btn-add {
    background: #f07c22;
    border: none;
    padding: 10px 16px;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    border-radius: 3px;
}

.results select {
    margin-left: 8px;
    padding: 4px;
}

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    background: #445564;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #3c4b59;
}

tbody tr:hover {
    background: #55687a;
}

/* Actions */
.actions {
    display: flex;
    gap: 6px;
}

.btn-edit {
    background: #f4b342;
    border: none;
    padding: 6px 10px;
    cursor: pointer;
    border-radius: 3px;
}

.btn-delete {
    background: #e0564a;
    border: none;
    padding: 6px 10px;
    cursor: pointer;
    border-radius: 3px;
    color: #fff;
}

.display {
    font-size: 18px;
    cursor: pointer;
}

/* Pagination */
.pagination {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-top: 20px;
}

.pagination button {
    background: #6b7d8d;
    border: none;
    padding: 6px 10px;
    color: #fff;
    cursor: pointer;
    border-radius: 3px;
}

.pagination .active {
    background: #f07c22;
}

.pagination .info {
    margin-left: auto;
    opacity: 0.8;
}
</style>
<body>

<?php
    include "database.php";
   ?>
   <form action="search.php" method="GET">
   <nav class="navbar navbar-expand-sm d-flex flex-column align-items-center">
   <div class="input-group col-md-6">
    <input type="text" class="form-control" name="e_name">
    <div class="input-group-append">
    <input type="submit" class="btn btn-success" name="search" value="search">
     </div>
  </div>
  </nav>
   </form>
   <br>
   <?php
    if(isset($_GET["search"])){
    $e_name=$_GET['e_name'];
  $sql="select * from events where e_name like '$e_name%'";
  $result=$conn->query($sql);
  if($result->num_rows > 0)
  {
    while($row=$result->fetch_assoc()){
    echo ' 
<div class="container">

    <!-- Top Bar -->
    

    <!-- Table -->
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>type</th>
                <th>place</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$row['e_name'].'</td>
                <td>
                '.$row['e_type'].'
                </td>
                <td>'.$row['e_place'].'</td>
                </tr>
                
                

            
        </tbody>
    </table>

    

</div>
 ';
  }
}
 }
?>
</body>
</html>
