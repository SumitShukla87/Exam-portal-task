<?php
// Including the config File
include('admin/config.php');

include('header.php');
 $errors = array();
if (isset($_POST['submit'])) {
    $username = isset($_POST['username'])?$_POST['username']:'';
    $password = isset($_POST['password'])?$_POST['password']:'';
    $password2 = isset($_POST['password2'])?$_POST['password2']:'';
    $email = isset($_POST['email'])?$_POST['email']:'';
    // Match the Password between TextBox
    if ($password!=$password2) {
                 $errors[] = array('input'=>'password','msg'=>'Password doesnt match');

    } 
    // Validation to stop duplicacy of username and email
            $sql = "SELECT `name`,`email` from user";
           $result =$conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        if ($row["name"]== $username) {
                  $errors[] = array('input'=>'form','msg'=>'Username already exists');
        } elseif ($row["email"]==$email) {
                $errors[] = array('input'=>'form','msg'=>'Email already exists');
        }
    } 
  
    if (sizeof($errors)==0) {

        // Insert the data into the Table        
                   $sql = "INSERT INTO user (`name`, `password`, `email`) VALUES ('".$username."','".$password."','".$email."')";

        if ($conn->query($sql) === true) {

                       echo "<script>alert('New User Registerd Successfully!!')</script>";
                     
        } else {
                    $errors[] = array('input'=>'form','msg'=>$conn->error);
        }

           
        
   
      
    }
  
    $conn->close();

}

?>
            <div id="signup-form">

                <div id="error">
                    <?php if(sizeof($errors) > 0) : ?>
                        <ul>
                        <?php foreach($errors as $error):?>
                            <li><?php echo $error['msg'];?> </li>
                        <?php endforeach?> 
                        </ul>
                    <?php endif; ?>
                
                </div>
                <table>
                    <tr>
                        <td colspan="2"><h2>Sign Up</h2></td>
                    </tr>
                    <form action="" method="POST">
                
                            <tr>
                                <td><label for="username">Username:</td><td> <input type="text" name="username" required></label></td>
                            </tr>
                            <tr>
                                <td><label for="password">Password:</td><td> <input type="password" name="password" required></label></td>
                            </tr>
                            <tr>
                                <td><label for="password2">Re-Password:</td><td> <input type="password" name="password2" required></label></td>
                            </tr>
                            <tr>
                                <td><label for="email">Email:</td><td> <input type="email" name="email" required></label></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="submit" value="Register"></td>
                                <td><a href="index.php">Log In</a></td>
                            </tr>
                    </form>  
                </table>
            </div>
  <?php include ('footer.php') ?>     