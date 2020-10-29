<?php

?><html>
    <head>

    <title>Login Admin</title>
    <link rel="stylesheet" href="css/style.css">

    </head>
    <body>

    <form action="checklogin.php" method="POST">
        <table>
            <tr>
                <td><label for="username">User-Name:</label></td>
                <td><input type="text" name="username" placeholder="Enter User Name Here" required></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" placeholder="Enter PasswordHere" required></td>

            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>    
    </form>

        
    </body>
</html>