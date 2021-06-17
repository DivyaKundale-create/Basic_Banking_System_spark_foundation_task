<?php 

//check get ewquest
include 'conn.php';





if(isset($_GET['id'])) {
    if(isset($_GET['amount'])){


$from_id=mysqli_real_escape_string($conn,$_GET['from_id']);



$id=mysqli_real_escape_string($conn,$_GET['id']);

$amount=mysqli_real_escape_string($conn,$_GET['amount']);







$q="UPDATE create_bk SET curr_bal=curr_bal+$amount WHERE id=$id"; 


$q1="UPDATE create_bk SET curr_bal=curr_bal-$amount WHERE id=$from_id"; 


//UPDATE to_person_detail SET amount=amount+(SELECT sum(amount) FROM to_person_detail  WHERE name='sunil pawar') ";//INSERT INTO  to_person_detail (`name`,`phone`,`amount`) VALUES ('$name','$phone','$amount')";

$query=mysqli_query($conn,$q);



   

$query1=mysqli_query($conn,$q1);


   $f="SELECT name from create_bk where id=$from_id";


$ff=mysqli_query($conn,$f);

$from=mysqli_fetch_assoc($ff);


$sql="SELECT * from create_bk where id=$id ";


$result=mysqli_query($conn,$sql);

$info=mysqli_fetch_assoc($result);


/*
if($query==true){

$q1=" UPDATE create_bk SET curr_bal = curr_bal + (SELECT amount from to_person_detail WHERE id=$id) WHERE id=$id";

$r=mysqli_query($conn, $q1);





if ($r==true) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}


}else{
    echo "string";
}


*/



}else{
    echo "no11";
}


}else{
    echo "no1";
}

mysqli_close($conn);
 ?>


 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


 </head>
 <style>
	.bs-example{
    	//margin: 20px;
    	padding: 50px;

    }

    .bs-example div{
    	//padding:20px;
    }
.moneytransfer img {
  width: 50%;
    height: 250px;
margin-left: 300px;
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
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      
    <span class="navbar-text">
     
    </span>
  </div>
</nav>


<?php if($info): ?>
<div class="bs-example"> 
    <div  class="moneytransfer">
    <img class="text-center" src="moneytransfer.gif">

    <!-- Success Alert -->
    <div class="alert alert-success alert-dismissible fade show">
        <strong>Transaction Succesful !</strong>
<br>
        <em> <?php  echo  $from['name']; ?> Transfered Rs.<?php  

echo $_GET['amount'];

 ?> to <?php echo $info['name'] ?> Succefully</p>
</em>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
</div>


<div class="text-center"><a href="history.php?newid=<?php echo $info['id'] ?>"><button class="btn btn-success btn-lg">See the History</button></a></div>

</div>
<?php else: ?>

 
<?php endif ?>




 </body>
 </html>