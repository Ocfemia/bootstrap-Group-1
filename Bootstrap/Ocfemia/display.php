<?php 
  include "connection.php";
?>

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    body 
    {
        background-image: url(bg1.jpg);
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    nav
    {
        background: rgba(0, 0, 0, 0.5);
    }

  

    
  </style>
  </head>
  <body class="bg-secondary">
  
  <nav class="navbar">
      <div class="container justify-content-center">
          <div class="nav-title">
            <a href="index.php" class="h4 text-decoration-none text-light text-uppercase">
              Cubit
              <img src="ice-cube.png" alt="Cubit" width="30" height="30" class="d-inline-block align-text-top">
            </a>
          </div>        
      </div>
  </nav>

  <div class="container mt-5">
        <div class="col-11 mx-auto bg-dark py-5 border border-light rounded shadow">
        <div class="users text-light text-center text-uppercase">
            <h3>Administrators Information</h3>
         </div>
         <table class="table table-border text-light">
            <thead>
              <tr>
                      <th>FirstName</th>
                      <th>LastName</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Address</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Modify</th>
              </tr>
            </thead>
            <tbody>
              <!--Select Data-->
             <?php

             $display = "SELECT First_name, Last_name, Username, Email, Sex, Address, Contact, Password 
             FROM users_basic_info 
             JOIN users_add_info 
             ON users_basic_info.User_id = users_add_info.User_id_fk";

          
              $run = mysqli_query($con, $display);
                 while($row = mysqli_fetch_assoc($run))
             {
             ?>
              
              <tr>
                    <td><?php   echo $row['First_name'] ?></td>
                    <td><?php   echo $row['Last_name'] ?></td>
                    <td><?php   echo $row['Email'] ?></td>
                    <td><?php   echo $row['Contact'] ?></td>
                    <td><?php   echo $row['Address'] ?></td>
                    <td><?php   echo $row['Username'] ?></td>
                    <td><?php   echo $row['Password'] ?></td>
                    <td><a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a></td>
                </tr> 
              <?php
             }
             ?>
            </tbody>
        </table>   
        </div> 
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>