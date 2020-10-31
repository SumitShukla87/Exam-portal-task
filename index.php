<?php
// Start Session
session_start();
// Including the Config File
include('admin/config.php');

include('header.php');
 $errors = array();
if (isset($_POST['submit'])) {
    $username = isset($_POST['username'])?$_POST['username']:'';
    $password = isset($_POST['password'])?$_POST['password']:''; 
    
  
    if (sizeof($errors)==0) {
        // Fetch the Value from Database
        $sql = "SELECT * from user WHERE `name`='".$username."' AND `password`='".$password."'";
        $result =$conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['user'] = $row['name'];
                $_SESSION['session_id'] = uniqid();
                header('location:user-dashboard.php');
            } 
        } else {
                $errors[] = array('input'=>'form','msg'=>'Invalid Login Details');
        }
            
            
    
        
    }
    // close connection
    $conn->close();

}
?>

            <div id="login-form">
                <div id="error">
                    <?php if(sizeof($errors) > 0) : ?>
                    
                        <?php foreach($errors as $error):?>
                            <?php echo'<script>alert("'.$error['msg'].'")</script>'?>
                        <?php endforeach?> 
                        
                    <?php endif; ?>
                
                </div>


                <table class="user-index-table">


                    <form action="" method="POST" name="userindex" onSubmit="return checklogin();">

                        <tr>
                            <td colspan="2"><h2>Login Form</h2></td>
                        </tr>
                    
                        <tr>
                            <td><label for="username">Username:</td> <td><input type="text" name="username"></label></td>
                        </tr>
                        <tr>
                            <td> <label for="password">Password: </td><td><input type="password" name="password"></label></td>
                        </tr>
                        <tr>
                        <td><a href="register.php">New User? Register Here</a></td>
                            <td><input type="submit" name="submit" value="Login"></td>
                           
                        </tr>
                    </form>          
                </table>                
            </div>
        </div>
    </body>    
</html>