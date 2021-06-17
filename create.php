<?php 




include 'conn.php';

if(isset($_POST['submit'])){


$name=$_POST['name'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];

$password=$_POST['password'];
$city=$_POST['city'];
$curr_bal=$_POST['curr_bal'];

$q=" INSERT INTO  create_bk (`name`,`phone`,`mail`,`password`,`city`,`curr_bal`) VALUES ('$name','$phone','$mail','$password','$city','$curr_bal')";



$query=mysqli_query($conn,$q);


if($query==true){
  echo "thank";
}else{
  echo "no";
}
  /*echo '<div class="alert alert-success" role="alert">
             Thank You for your feedback, will get back to you shortly!
           </div>'; */

          

      
  
   }



 ?>



<!DOCTYPE html>
<html>
  <head>
    <title>Bank Account registration form</title>
   
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- jQuery library -->


<!-- Latest compiled JavaScript -->

<link rel="stylesheet" type="text/css" href="style.css">
    <style>
      html, body {
      //min-height: 100%;
      }
      .main-block { 
      width: 910px;
      height: 100%;
     float: right;
     //margin-left: 300px;
      }
      h1 {
        text-align: center;
      margin: 0;
      //font-weight: 400;
      }
      h3 {
      margin: 12px 0;

      //color: #8ebf42;
      }
      .main-block {
      display: flex;
      justify-content: center;
      align-items: center;
      background: #fff;
      }
      form {
      width: 100%;
      padding: 20px;
      }
      fieldset {
      border: none;
      border-top: 1px solid #8ebf42;
      }
      .account-details, .personal-details {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .account-details >div, .personal-details >div >div {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
      }
      .account-details >div, .personal-details >div, input, label {
      width: 100%;
      }
      label {
      padding: 0 5px;
      text-align: right;
      vertical-align: middle;
      }
      input {
      padding: 5px;
      vertical-align: middle;
      }
      .checkbox {
      margin-bottom: 10px;
      }
      select, .children, .gender, .bdate-block {
      width: calc(100% + 26px);
      padding: 5px 0;
      }
      select {
      background: transparent;
      }
      .gender input {
      width: auto;
      } 
      .gender label {
      padding: 0 5px 0 0;
      } 
      .bdate-block {
      display: flex;
      justify-content: space-between;
      }
      .birthdate select.day {
      width: 35px;
      }
      .birthdate select.mounth {
      width: calc(100% - 94px);
      }
      .birthdate input {
      width: 38px;
      vertical-align: unset;
      }
      .checkbox input, .children input {
      width: auto;
      margin: -2px 10px 0 0;
      }
      .checkbox a {
      color: #8ebf42;
      }
      .checkbox a:hover {
      color: #82b534;
      }
      button {
      width: 100%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #8ebf42; 
     // font-size: 14px;
      //font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #82b534;
      }
      @media (min-width: 568px) {
      .account-details >div, .personal-details >div {
      width: 50%;
      }
      label {
      width: 40%;
      }
      input {
      width: 60%;
      }
      select, .children, .gender, .bdate-block {
      width: calc(60% + 16px);
      }
      }

.gif img{
  width: 430px;
  height: 400px;
  float: left;

}

    </style>
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


<section>

<div class="gif">
  <img src="account.gif">

</div>

    <div class="main-block">
      <form action="" method="post">
        <h1>Create a Bank Account</h1>
      <fieldset>
        <legend>
          <h5>Account Details</h5>
        </legend>
      <div  class="account-details">
          <div><label>Full Name</label><input type="text" id="name" name="name" ></div>
          <div><label>Phone Number</label><input type="phone"id="phone" name="phone" ></div>
          <div><label>Email</label><input type="mail" name="mail" id="mail" ></div>
          <div><label>Password</label><input type="password" id="password" name="password" ></div>
               
            <div><label>City</label><input type="text" id="city" name="city" ></div>
             <div><label>Deposit amount</label><input type="bal" id="curr_bal" name="curr_bal" ></div>

            <div>
              <label>Gender*</label>
              <div class="gender">
                <input type="radio" value="none" id="male" name="gender" />
                <label for="male" class="radio">Male</label>
                <input type="radio" value="none" id="female" name="gender" />
                <label for="female" class="radio">Female</label>
              </div>
            </div>
          


        </div>
      </fieldset>
     
     
        
        <div  class="terms-mailing">
          <div class="checkbox">
            <input type="checkbox" name="checkbox"><span>I accept the Privacy Policy</a></span>
          </div></div>
    
      <button  type="submit" value="submit" name="submit"href="">Submit</button>
    </form>
     </div></section>
  </body>
</html>