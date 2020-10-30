<?php
include ('header.php');

?>
        <div class="main">
            <form action="checklogin.php" method="POST">

                <marquee><h1 id="admin-marquee"> Admin Login<h1></marquee>
                <table id="admin-index-table">
                    <tr>
                        <td><label for="username">User-Name:</label></td>
                        <td><input type="text" name="username" placeholder="Enter User Name Here" required></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td><input type="password" name="password" placeholder="Enter Password Here" required></td>

                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>    
            </form>
        </div>
     