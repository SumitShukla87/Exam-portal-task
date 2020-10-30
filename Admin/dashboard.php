<?php 
    include('header.php');
    session_start();
if ($_SESSION['admin']== "") {
    header("location:index.php");
}

?>

        <?php include('nav.php'); ?>
    <div id="adminbg">    
        <div class="main">
            <form action="" method="POST">
              <marquee>  <h2 id="wel">Welcome" <?php echo$_SESSION['admin'];?> "to Admin Panel</h2></marquee>
                <!-- <input type="Submit" name="submit" value="Logout"> -->
            </form>
        </div> 
    <div>    
     <?php include('footer.php') ?>   

