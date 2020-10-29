<?php
// Including the config File
include('config.php');
if (isset($_POST['submit'])) {

    $id = isset($_POST['id'])?$_POST['id']:'';
  
    $question = isset($_POST['qname'])?$_POST['qname']:'';
    $ans1 = isset($_POST['ans1'])?$_POST['ans1']:'';
    $ans2 = isset($_POST['ans2'])?$_POST['ans2']:'';
    $ans3 = isset($_POST['ans3'])?$_POST['ans3']:'';
    $ans4 = isset($_POST['ans4'])?$_POST['ans4']:'';
    $trueans = isset($_POST['tans'])?$_POST['tans']:'';
   
    

    //     // Update the data into the Table        
         $sql = "UPDATE  question SET `que_name`='".$question."', `ans1`='".$ans1."', `ans2`='".$ans2."', `ans3`='".$ans3."', `ans4`='".$ans4."' , `true_ans`='".$trueans."' where `que_id`='".$id."'";


    

    if ($conn->query($sql) === true) {

                    header("location:viewquestion.php");
                    
    } else {
             echo $conn->error;
    }

           
        
        
      
  
   
   
}
    
?>