<?php
// Start Session
session_start();
// Including the Config File
include('config.php');

if (isset($_POST['submit'])) {
    $username = isset($_POST['username'])?$_POST['username']:'';
    $password = isset($_POST['password'])?$_POST['password']:''; 
    
  
  
        // Fetch the Value from Database
        $sql = "SELECT * from admin WHERE `name`='".$username."' AND `password`='".$password."'";
        $result =$conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION['admin'] = $row['name'];
            header('location:dashboard.php');
        } 
    } else {
        echo "Login failed!!!!!!!!!!!";
    }
            
            
    
        
   
    // close connection
    $conn->close();

}
?>
