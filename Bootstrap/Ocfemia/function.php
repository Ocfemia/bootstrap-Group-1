<?php 
  include 'connection.php';

  if(isset($_POST['submit']))
  {
    $fname = $_POST['firstnamedb'];
    $lname = $_POST['lastnamedb'];
    $address = $_POST['addressdb'];
    $pass = $_POST['passworddb'];
    $email = $_POST['emaildb'];
    $uname = $_POST['usernamedb'];
    $contact = $_POST['contactdb'];
    $conpass = $_POST['confirmpassdb'];
    $gender = $_POST['genderdb'];
  

    $query = "INSERT INTO users_basic_info (First_name, Last_name, Username, Email, Sex) VALUES ('$fname','$lname','$uname','$email','$gender')";

    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $query2 = "INSERT INTO users_add_info (Address, Contact, Password) VALUES ('$address','$contact','$pass')";
        $query_run2 = mysqli_query($con, $query2);
        header("Location: register.php?success");
    }
    else
    {
      echo "Something went wrong!";
    }  
  }

  
?>