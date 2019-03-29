<!DOCTYPE html>
<html>
<head>
  <title>Registration Form </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

 <div class="modal-dailog text-center">
    <div class="col-sm-4 main-section">
<div class="modal-content">
    <div class="col-12">
    <h1>Registration Form</h1>
    
    </div>
    <br>
        <form class="col-12"  method="post" action="index.php" enctype="multipart/form-data" >
    
    <div class="form-group">
    
    <input type="name" class="form-control" id="Name" aria-describedby="nameHelp" required="true" placeholder="Enter UserName" name="name">
    
  </div>
            
    <div class="form-group">
   
    <input type="number" class="form-control" id="mobile" aria-describedby="mobileHelp" required="true" placeholder="Enter Mobile No" name="mob">
   
  </div>
  <div class="form-group">
    
    <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" required="true" placeholder="Enter Email" name="email">
   
  </div>
  <div class="form-group">
   
    <input type="password" class="form-control" id="Password1"  placeholder="Password" name="pass">
  </div>
            <div class="form-group">
   
    <input type="password" class="form-control" id="confirmpassword"  placeholder="Confirm Password" name="cpass">
  </div>
 
  <button type="submit" class="btn btn-primary" onclick="return Validate()" name="register">Sumbit</button><br>
          <br>
          
    </form>
        
        </div>        
    
    </div>  
      
    </div>

<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("Password1").value;
        var confirmPassword = document.getElementById("confirmpassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
</body>
</html>


<?php 

$con = mysqli_connect("localhost","root","","scripting");
if(isset($_REQUEST['register'])){
    $name = $_POST['name'];
    $mob = $_POST['mob'];
    $email = $_POST['email'];
    $pass = md5(($_POST['pass']));
    $cpass = md5($_POST['cpass']);
    
    if($pass == $cpass){
        $insert = "INSERT INTO registration (user_name,mobile_no,email_id,pass) VALUES ('$name','$mob','$email ','$cpass')";
        $run = mysqli_query($con,$insert);
        if($run){
            echo"<script>alert('You have registered successfully')</script>";
        }
    }
    else{
        echo"<script>alert('password doesn't match)</script>";
    }
        
    
}
else{
    echo"<script>alert('error')</script>";
}



?>
















