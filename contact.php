<?php
  
      $name = $_POST['name2']; 
      $email = $_POST['email2'];
      $phone = $_POST['phone2'];
      $subject = $_POST['subject2'];  
      $message = $_POST['message2'];
    

    //Database Connection
    $servername = "localhost";
    $database = "contactus";
    $username = "root";
    $password = "";

      $conn = mysqli_connect($servername, $username, $password, $database);

      // Check connection

      if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      }
 
      $sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `subject`,`message`) VALUES ('{$name}', '{$email}', '{$phone}', '{$subject}','{$message}')";
      $result = mysqli_query($conn,$sql) or die("query error");
      echo "Message Sent Successfully. Please Go Back to Continue.";

  
      
     
      
      $conn->close();
  

?>
