<?php 

//check get ewquest
include 'conn.php';










if(isset($_GET['id']) ){
$id=mysqli_real_escape_string($conn,$_GET['id']);





$sql="SELECT * from create_bk where id=$id";

$result=mysqli_query($conn,$sql);

$info=mysqli_fetch_assoc($result);

mysqli_free_result($result);

if(isset($_POST['submit']) ){

$From_person=$info['name'];
$amount=$_POST['amount'];





$q=" INSERT INTO  transfer_money (`From_person`,`amount`) VALUES ('$From_person','$amount')";


$query=mysqli_query($conn,$q);



}

mysqli_close($conn);




}
else{
  echo "string";
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
 <style type="text/css">
 .div button{
    display: block;
    margin-left: 120px;
    align-items: center;
    width: 70%;
  }

  section {
    margin-top: 40px;
  margin-left:  110px;
  margin-right: 110px;
  align-items: center;
}
 </style>
 <body>









 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Basic Banking System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#bank">About Baking System</a>
      </li>
      
    
  </div>
</nav>

<section class="div">

 <h2 class="well bg-light">Details</h2>





  <h3 class="well bg-light">Name: <?php echo htmlspecialchars($info['name']);?></h3>
<h3 class="well bg-light">Current Balance: <?php echo htmlspecialchars($info['curr_bal']);?></h3>

<div>
  <form method="post" action="">
<h2>Amount Transfer</h2>
<input class="input-group btn-lg" type="amount" id="amount" name="amount">


<br>
<a ><button class="btn btn-success btn-lg" type="submit" id="submit" name="submit"  >Submit</button></a>
<br>
</div>
</form>

<?php if($info): ?>




<?php 



if(isset($_POST['submit']))
{
  
 if($info['curr_bal']<$_POST['amount']){


 ?>

<div  class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p>Your Account have not enough money. Please check the above details!!</p>
  </div>

 <?php  

}
else if($info['curr_bal']>$_POST['amount']){






 ?>

<a href="send.php?from_id=<?php echo $_GET['id']?>&amount=<?php echo $_POST['amount']?>"><button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-transfer"></span> Transfer to</button></a>

<?php } 
} ?>
<?php else: ?>

  <h5>No such Account exists</h5>
<?php endif ?>
</div></section>


 </body>
 </html>