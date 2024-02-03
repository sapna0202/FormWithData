<?php

$username= 'id21855629_formdata';
    $password = 'FormData09@';
    $server = 'localhost';
    $db = 'id21855629_crudphpmysql';


    $con = mysqli_connect($server,$username,$password,$db);

    

    // if(isset($_POST['submit'])){
    //     $FirstName = $_POST['Fname'];
    //     $LastName = $_POST['Lname'];
    //     $Password = $_POST['Cpassword'];
    //     $Gender = $_POST['options'];
    //     $email = $_POST['email'];
    //     $phone = $_POST['phone'];
    //     $address = $_POST['address'];
    //     $Postal = $_POST['postalCode'];

    //     $insertData = "insert into registration (FirstName, LastName, ConfirmedPassword, Gender, Email, PhoneNumber, Address, PostalCode)
    //                 values('$FirstName','$LastName','$Password','$Gender','$email','$phone','$address','$Postal') ";
    //   $res =  mysqli_query($con,$insertData);
       

    // }

    $id = $_GET['id'];
    $deleteQuery = "delete from registration where id= $id";
    $query=  mysqli_query($con,$deleteQuery);
    
    header('location:display.php')

?>