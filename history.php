<?php
include 'conn.php';


if(isset($_GET['newid']) ){
$id=mysqli_real_escape_string($conn,$_GET['newid']);


$result = mysqli_query($conn,"SELECT * FROM create_bk");


/*
UPDATE create_bk SET curr_bal = curr_bal + ( SELECT amount from to_person_detail WHERE create_bk.name=to_person_detail.name)


SELECT curr_bal , amount,curr_bal+amount as curr_bal from create_bk as T1 join to_person_detail as T2 on T1.name = T2.name 

UPDATE create_bk SET curr_bal = curr_bal + curr_bal in ( SELECT amount from to_person_detail WHERE create_bk.name=to_person_detail.name)
*///



//$sql = " UPDATE create_bk SET curr_bal= curr_bal+ (SELECT amount from to_person_detail WHERE id=$id) WHERE id=$id" ;






/*$r=mysqli_query($conn, $sql);



if ($r==true) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

*/

}
else{
echo "string";
}
mysqli_close($conn);




?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
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
      <th scope="col">Transfer Money from</th>
      <th scope="col">Phone Number</th>
            
            <th scope="col">Current Balance </th>
        
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
       <td><?php echo $row["phone"]; ?></td>
       <td><?php echo $row["curr_bal"]; ?></td>
      
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
<!-------------->














 </body>
</html>