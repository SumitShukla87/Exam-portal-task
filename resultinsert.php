<?php
    session_start();
    if ($_SESSION['user']== "") {
        header("location:index.php");
    }
    include('admin/config.php');
    include('header.php');
     
?>


<?php
if (isset($_POST['finalsubmit'])) {

    $total_question = isset($_POST['tque'])?$_POST['tque']:'';
    $name = isset($_POST['username'])?$_POST['username']:'';

    $user_attempt = isset($_POST['user_attempt'])?$_POST['user_attempt']:''; 
    $right_attempt = isset($_POST['right'])?$_POST['right']:''; 
    
    echo $total_question , $name , $user_attempt , $right_attempt;
  
 // Insert the data into the Table        
    $sql = "INSERT INTO result (`username`, `attempt`, `right_attemp`, `total_que`) VALUES ('".$name."','".$user_attempt."','".$right_attempt."','".$total_question."')";

    if ($conn->query($sql) === true) {

                    header("location:result.php");
                
    } else {
            echo $conn->error;
    }
}
      
?>        
            
    
     