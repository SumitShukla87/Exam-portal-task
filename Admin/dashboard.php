<?php 
    include('header.php');
    session_start();
if ($_SESSION['admin']== "") {
    header("location:index.php");
}

?>

        <?php include('nav.php'); ?>
        
    <div class="main">
        <div id="admin-bg">
            <form action="" method="POST">
              <marquee>  <h2 id="wel">Welcome" <?php echo$_SESSION['admin'];?> "to Admin Panel</h2></marquee>
            </form>
        </div> 
    <div>    
     <?php include('footer.php') ?>   

