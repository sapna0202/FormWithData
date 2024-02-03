<?php

    $username= 'id21855629_formdata';
    $password = 'FormData09@';
    $server = 'localhost';
    $db = 'id21855629_crudphpmysql';


    $con = mysqli_connect($server,$username,$password,$db);

    

    if(isset($_POST['submit'])){
        $FirstName = $_POST['Fname'];
        $LastName = $_POST['Lname'];
        $Password = $_POST['Cpassword'];
        $Gender = $_POST['options'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $Postal = $_POST['postalCode'];

        $insertData = "insert into registration (FirstName, LastName, ConfirmedPassword, Gender, Email, PhoneNumber, Address, PostalCode)
                    values('$FirstName','$LastName','$Password','$Gender','$email','$phone','$address','$Postal') ";


       $res =  mysqli_query($con,$insertData);
        if($res){
               ?>
   
       <div style="display:flex; align-items:center; justify-content:center; height:95vh;"> 
           <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2), inset 5px 5px 10px rgba(0, 0, 0, 0.2);border-radius:6px; width:50%; padding:2rem">
                <h1 style="color:#EB984E; ">Successfully Submitted</h1>  
           <div class="d-flex gap-2 align-items-center justify-content-center">
                 <button style="border:none; white-space: nowrap; border-radius:5px;
    padding: 8px 16px;
    font-size: 16px; background-color:#EB984E;"><a href="display.php" style="color:white; text-decoration:none">Check</a></button>
    <button style="border:none; white-space: nowrap; border-radius:5px;
    padding: 8px 16px;
    font-size: 16px; background-color:#EB984E;"><a href="index.php" style="color:white; text-decoration:none">Home</a></button>
            </div>
           </div>
       </div>

        <?php
    }else{
        echo "connection fail";
    }

    }



?>