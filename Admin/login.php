<?php 
    include('header.php');
    session_start();
if ($_SESSION['admin']== "") {
    header("location:index.php");
}

?>

        <?php include('nav.php'); ?>
    <div id="adminbg">    
        <div id="mainform">
            <form action="" method="POST">
                <h2 id="wel">Welcome" <?php echo$_SESSION['admin'];?> "to Admin Panel</h2>
                <!-- <input type="Submit" name="submit" value="Logout"> -->
                <a href="logout.php" >Logout</a>
            </form>
        </div> 
    <div>    
     <?php include('footer.php') ?>   

