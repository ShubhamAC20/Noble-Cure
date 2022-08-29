<?php
  
      $name1 = $_POST['name']; 
      $email1 = $_POST['email'];
      $phone1 = $_POST['phone'];
      $date1 = $_POST['date'];
      $service1 = $_POST['service'];
      $state1 = $_POST['state'];  
      $message1 = $_POST['message'];
    

    //Database Connection
    $servername = "localhost";
    $database = "appointment";
    $username = "root";
    $password = "";

      $conn = mysqli_connect($servername, $username, $password, $database);

      // Check connection

      if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      }
 
      $sql = "INSERT INTO `appointments` (`name`, `email`, `phone`, `date`,`service`,`state`,`message`) VALUES ('{$name1}', '{$email1}', '{$phone1}', '{$date1}','{$service1}','{$state1}','{$message1}')";
      $result = mysqli_query($conn,$sql) or die("query error");
      echo "Message Sent Successfully. We will contact you once we have an appointment date. Please Go back to continue";

  
      
     
      
      $conn->close();
  

?>