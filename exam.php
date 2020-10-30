<?php 
    session_start();
if ($_SESSION['user']== "") {
    header("location:index.php");
}

?>
<?php include('header.php');
    include('admin/config.php');
    

?>
<?php 
    $limit = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];

} else {
    $page =1;
}


    $offset = ($page-1) * $limit;

    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM question WHERE `test_id`='".$id."' limit $offset , $limit";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {?>

    <div id="question">
       <h2> Question <?php echo $page;?>: <?php echo $row['que_name'];?></h2>
    </div>
    <div id="options">
        <form action="" method="POST">
            <input type="radio" name="option" value="1"><?php echo $row['ans1'] ?><br>
            <input type="radio" name="option" value="2"><?php echo $row['ans2'] ?><br>
            <input type="radio" name="option" value="3"><?php echo $row['ans3'] ?><br>
            <input type="radio" name="option" value="4"><?php echo $row['ans4'] ?><br>
            <input type="submit" name="ans" value="Submit Answer">

        </form>   

    </div>

        <?php
    }
}?>

<?php $sql1 = "SELECT * FROM question WHERE `test_id`='".$id."'";
    $result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
 
    $all_records =$result1->num_rows;

    $all_page = ceil($all_records / $limit);
    echo'<ul>';
    if ($page>1) {
        echo'<li><a href="exam.php?page='.($page-1).'&id='.($id).'">Back</a></li>';

    } 
    if ($all_page > $page) {  
        echo'<li><a href="exam.php?page='.($page+1).'&id='.($id).'">Next Question</a></li>';

    }
    echo'</ul>';
}    

?>
    
