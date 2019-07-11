<html>
    <head>
        <title>
            LogIn Page
        </title>
    </head>
    <body>
        <table align="center" border="2">
            <form method="post" action="Include/login.inc.php">
            <th colspan="2">
                Login
            </th>
            <tr>
                <td>LogIn Id :-</td>
                <td><input type="text" name="emailId" required></td>
            </tr>
            <tr>
                <td>Password :-</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" name="submitLogin" value="Submit"></td>
                <td align="center"><a href="registrationForm.php"><input type="button" name="register" value="Register"></a></td>
            </tr>
            </form>
        </table>
    </body>
</html>