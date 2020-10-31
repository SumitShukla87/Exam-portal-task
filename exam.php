<?php 
    session_start();
if ($_SESSION['user']== "") {
    header("location:index.php");
}

?>
<?php include('header.php');
    include('admin/config.php');
    global $user_answer;
    global $all_page;
    

?>
<?php 
    $limit = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];


} else {
    $page = 1;
}

// echo $page;

// if ($page > $all_page) {
//  header("location:result.php");

// }
$id = $_REQUEST['id'];


    $offset = ($page-1) * $limit;

     $sql1 = "SELECT * FROM question WHERE `test_id`='".$id."'";
            $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
        
            $all_records =$result1->num_rows;

            $all_page = ceil($all_records / $limit);
            echo'<ul>';
            if ($page>1) {
                echo'<li><a href="exam.php?page='.($page-1).'&id='.($id).'">Back</a></li>';

            }
            echo'</ul>';
            
         
        }  
        if ($page>$all_page){
            header("location:result.php");

        }  

        

   
    $sql = "SELECT * FROM question WHERE `test_id`='".$id."' limit $offset , $limit";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {?>
<div class="main">

        <form action="exam.php?page=<?php echo $page+1;?>&id=<?php echo $id; ?> " method="POST">
                    <div id="question">
                        <h2> Question <?php echo $page;?>: <?php echo $row['que_name'];?></h2>
                        <input type="hidden" value="<?php echo $row['que_name'];?>" name="question">
                        <input type="hidden" value="<?php echo $row['test_id'];?>" name="test_id">
                        <input type="hidden" value="<?php echo $_SESSION['session_id'];?>" name="session_id">
                    </div>
                    <div id="radio">

                    <?php
                
                        $sql2 = "SELECT * FROM answer WHERE `session_id`='".$_SESSION['session_id']."'&& `q_name`='".$row['que_name']."'";
                        $result2 = $conn->query($sql2);

                        if ($result2->num_rows > 0) {
                            // output data of each row
                            while ($row2 = $result2->fetch_assoc()) {
                                
                                $user_answer = $row2['given_ans'];
                                $que = $row2['q_name'];
                                
                            }
                        } else {

                            echo $conn->error;
                        }
                
                    ?>
                        
                            <input type="radio" name="option"  value="1" <?php if ($user_answer==1) :?> checked
                        <?php endif ?>><?php echo $row['ans1']; ?><br>
                        
                            <input type="hidden" value="<?php echo $row['ans1'] ?>" name="ans1">
                    
                            <input type="radio" name="option"  value="2" <?php if ($user_answer==2) :?> checked
                        <?php endif ?>> <?php echo $row['ans2']; ?> <br>
                    
                            <input type="hidden" value="<?php echo $row['ans2']; ?>" name="ans2">
                    
                            <input type="radio" name="option"  value="3" <?php if ($user_answer==3) :?> checked
                        <?php endif ?>><?php echo $row['ans3']; ?><br>

                            <input type="hidden" value="<?php echo $row['ans3'] ?>" name="ans3">
                    
                            <input type="radio" name="option"  value="4" <?php if ($user_answer==4) :?> checked
                        <?php endif ?>><?php echo $row['ans4'] ?><br>
                    
                            <input type="hidden" value="<?php echo $row['ans4'] ?>" name="ans4">
                            <input type="hidden" value="<?php echo $row['true_ans'] ?>" name="true_ans">
                        <?php if ($page>=1 && $page!=$all_page) :?>
                            <input type="submit" name="ans" value="Next">
                        <?php endif ;?>

                        <?php if ($page == $all_page) :?>
                        <input type="submit" name="ans" value="Submit Answer">
                        <?php endif ;?>
                        
            
                                    </div>
                </form>
                <?php
                }
            }?>
            
</div>
<?php include 'footer.php'?>
<?php

if (isset($_POST['ans'])) {
    $session_id = isset($_POST['session_id'])?$_POST['session_id']:'';
    $question = isset($_POST['question'])?$_POST['question']:'';
    $test_id = isset($_POST['test_id'])?$_POST['test_id']:'';
    $option = isset($_POST['option'])?$_POST['option']:'';
    $ans1 = isset($_POST['ans1'])?$_POST['ans1']:'';
    $ans2 = isset($_POST['ans2'])?$_POST['ans2']:'';
    $ans3 = isset($_POST['ans3'])?$_POST['ans3']:'';
    $ans4 = isset($_POST['ans4'])?$_POST['ans4']:'';
    $true_ans = isset($_POST['true_ans'])?$_POST['true_ans']:'';


    $sql3 = "INSERT INTO answer (`session_id`, `test_id`, `q_name`,`ans1`, `ans2`, `ans3`,`ans4`, `true_ans`, `given_ans`) VALUES ('".$session_id."','".$test_id."','".$question."','".$ans1."','".$ans2."','".$ans3."','".$ans4."','".$true_ans."','".$option."')";

    if ($conn->query($sql3) === true) {

                   // echo "<script>alert('Answer Submitted Successfully!!')</script>";
                   
                    
    } else {
                echo $conn->error;
    }




}




?>
    
