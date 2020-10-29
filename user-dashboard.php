<?php 
    session_start();
    if ($_SESSION['user']== "") {
        header("location:index.php");
    }

?>
<?php include('header.php');?>

    <div id="dashboard">    
        <marquee><h3>Welcome  <?php echo $_SESSION['user']?> to User Dash Board</h3></marquee>


        <form action="" method="POST">
               
        </form>
    </div>    
<?php include ('footer.php'); ?>