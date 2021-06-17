<?php 

//check get ewquest
include 'conn.php';

if(isset($_GET['id'])){
$id=mysqli_real_escape_string($conn,$_GET['id']);




$sql="SELECT * from create_bk where id=$id";

$result=mysqli_query($conn,$sql);

$info=mysqli_fetch_assoc($result);

mysqli_free_result($result);
mysqli_close($conn);



}

 ?>


 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

 </head>
 <body>
 <h2 class="well">Details</h2>

<?php if($info): ?>
  <h2>Name: <?php echo htmlspecialchars($info['name']);?></h2>
<h2>Current Balance: <?php echo htmlspecialchars($info['curr_bal']);?></h2>

<div>
<label>Amount Transfer</label>
<input type="amount" name="amount">
<a href="send.php"><button class="btn btn-success">Transfer Money to</button></a>
</div>


<?php else: ?>

  <h5>No such Account exists</h5>
<?php endif ?>



 </body>
 </html>