<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
</head>
<body>
    <button style="border:none; white-space: nowrap; border-radius:5px;
    padding: 8px 16px;
    font-size: 16px; background-color: #EB984E;"><a href="index.php" style="color:white; text-decoration:none">Home</a></button>
<table>
  <thead>
    <tr>
    <th>ID</th>
      <th>FName</th>
      <th>LName</th>
      <th>ConfirmedPassword</th>
      <th>Gender</th>
      <th>Email</th>
      <th>PhoneNumber</th>
      <th>Address</th>
      <th>PostalCode</th>
      <th colspan="2">Operation</th>
    </tr>
  </thead>
  <tbody>
  <?php

    include 'connect.php';
    $selectquery = "select * from registration ";
    $query = mysqli_query($con,$selectquery);
    $numRows = mysqli_num_rows($query);
    // $res = mysqli_fetch_array($query);
    // echo $res['FirstName'];
    while($res = mysqli_fetch_array($query)){
        ?>
      <tr>
      <td><strong><?php echo $res['ID'] ?></strong></td>
      <td><?php echo $res['FirstName'] ?></td>
      <td><?php echo $res['LastName'] ?></td>
      <td><?php echo $res['ConfirmedPassword'] ?></td>
      <td><?php echo $res['Gender'] ?></td>
      <td><?php echo $res['Email'] ?></td>
      <td><?php echo $res['PhoneNumber'] ?></td>
      <td><?php echo $res['Address'] ?></td>
      <td><?php echo $res['PostalCode'] ?></td>
      <td>
            <a href="updates.php?id=<?php echo $res['ID'] ?>" 
            data-bs-toggle="tooltip" data-bs-placement="top" title="UPDATE" style="cursor:pointer">
              <i class="fa-solid fa-pen-to-square"></i>
            </a>
        </td>
      <td>
          <a href="delete.php?id=<?php echo $res['ID'] ?>" 
          data-bs-toggle="tooltip" data-bs-placement="top" title="DELETE" style="cursor:pointer">
               <i class="fa-solid fa-trash"></i>
            </a>
       </td>
    </tr>
    <?php 
    }
    ?>
  </tbody>
</table>
<script src="https://kit.fontawesome.com/14f405822f.js" crossorigin="anonymous"></script>

</body>
</html>