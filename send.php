<?php
include 'conn.php';

$amount=$_GET['amount'];



$result = mysqli_query($conn,"SELECT * FROM create_bk");



?>
<!DOCTYPE html>
<html>
 <head>
 <title> Send Money</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



 <style type="text/css">
   .b {
  
    
   background-image: url("b.jpg");
   background-repeat: no-repeat;
  background-size: 100% 100%;
  padding: 200px;
   
   
  }
  h1{
  
    border-radius: 4px;
  }

  .bank{
    align-items: center;
    text-align: center;


  }
  .logo,img{
    height: 100%;
    width: 100%;
  }

 </style>
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Basic Banking System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
     
     
      
    <span class="navbar-text">
     
    </span>
  </div>
</nav>
<?php
if (mysqli_num_rows($result) > 0) {
?>

<div class="justify-content text-center">
  <table class="table table-hover table table-bordered ">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
            <th scope="col">City</th>
        <th scope="col">Phone number</th>
         <th scope="col">Current Balance</th>
    </tr>
  </thead>

 
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {




?>
<tbody>
    <tr>
      <th scope="row"><?php echo $row["id"]; ?></th>
      <td><?php echo $row["name"]; ?></td>
       <td><?php echo $row["mail"]; ?></td>
    <td><?php echo $row["city"]; ?></td>
    <td><?php echo $row["phone"]; ?></td>
    <td><?php echo $row["curr_bal"]; ?></td>
      <td><a href="correct.php?from_id=<?php echo $_GET['from_id']?>&id=<?php echo $row['id']?>&amount=<?php echo $_GET['amount']?>"><button class="btn btn-success" >Transfer Money</button></a></td>
    </tr>


<?php
$i++;
}
?>
 </tbody>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>