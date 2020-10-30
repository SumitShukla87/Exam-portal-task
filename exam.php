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
   
    $id = $_REQUEST['id'];
    echo $id;
    ?>