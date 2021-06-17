<?php 

include 'conn.php';
$result = mysqli_query($conn,"SELECT * FROM create_bk");
$new= mysqli_query($conn,"SELECT * FROM transfer_money");

?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">	<title></title>
</head>
<body>




<?php
if (mysqli_num_rows($result) > 0 && mysqli_num_rows($new) > 0) {
	?>

<div class="justify-content text-center">
  <table class="table table-hover table table-bordered ">
  <thead>
    <tr>
    
         <th scope="col">Current Balance</th>
    </tr>
  </thead>

 
<?php
$i=0;
while($row = mysqli_fetch_array($result) && $r = mysqli_fetch_array($new)) {

?>
<tbody>
    <tr>
      
      <td><?php echo $row["curr_bal"]+$r["amount"]; ?></td>

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