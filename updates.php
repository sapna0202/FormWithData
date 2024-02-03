

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
<body>
     <?php

    $username= 'id21855629_formdata';
    $password = 'FormData09@';
    $server = 'localhost';
    $db = 'id21855629_crudphpmysql';


    $con = mysqli_connect($server,$username,$password,$db);

    $id = $_GET['id'];
    $showquery = "select * from registration where ID = {$id}";
    $showdata = mysqli_query($con,$showquery);
//     if (!$showdata) {
//     die('Error: ' . mysqli_error($con));
// }
    $arrayData = mysqli_fetch_array($showdata);

    if(isset($_POST['submit'])){
        $idUPDATE = $_GET['id'];
        $FirstName = $_POST['Fname'];
        $LastName = $_POST['Lname'];
        $Password = $_POST['Cpassword'];
        $Gender = $_POST['options'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $Postal = $_POST['postalCode'];

        // $insertData = "insert into registration (FirstName, LastName, ConfirmedPassword, Gender, Email, PhoneNumber, Address, PostalCode)
        //     values('$FirstName','$LastName','$Password','$Gender','$email','$phone','$address','$Postal') ";
            
        $updateQuery = "update registration set FirstName='$FirstName',LastName='$LastName',
        ConfirmedPassword='$Password',
        Gender='$Gender',Email='$email',PhoneNumber='$phone',Address='$address',PostalCode='$Postal' 
        where ID = {$idUPDATE}";

       $res =  mysqli_query($con,$updateQuery);
        if($res){
           include 'UpdationDone.php';
         }else{
            echo "Updation Fail";
         }

    }



?> 
 
<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <form class="form" method="POST" >
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" value="<?php echo $arrayData['FirstName'] ?>" name="Fname">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" value="<?php echo $arrayData['LastName'] ?>" name="Lname">
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" value="<?php echo $arrayData['ConfirmedPassword'] ?>" name="password">
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" value="<?php echo $arrayData['ConfirmedPassword'] ?>" class="input" name="Cpassword">
       </div> 
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="options" value="<?php echo $arrayData['Gender'] ?>">
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" value="<?php echo $arrayData['Email'] ?>" name="email">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" value="<?php echo $arrayData['PhoneNumber'] ?>" name="phone">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea"  name="address"><?php echo $arrayData['Address'] ?></textarea>
       </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" class="input" value="<?php echo $arrayData['PostalCode'] ?>" name="postalCode">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Update" class="btn" name="submit">
      </div>
    </form>
    <!--<div class="d-flex align-items-center justify-content-center">-->
    <!--    <a href="display.php" class="btn">Check Filled Forms</a>-->
    <!--  </div>-->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>



