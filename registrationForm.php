<html>
    <head>
        <title>
            Registration Page
        </title>
    </head>
    <body>
        <table align="center" border="2">
            <form method="post" action="Include/registerData.inc.php">
            <th colspan="2">
                Registration
            </th>
            <tr>
                <td>Name :-</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Email :-</td>
                <td><input type="email" name="emailId" required></td>
            </tr>
            <tr>
                <td>Roll No :-</td>
                <td><input type="number" name="rollNo" min="1" required></td>
            </tr>
            <!-- <tr>
                <td>English :-</td>
                <td><input type="number" name="english" min="0" max="100" required></td>
            </tr>
            <tr>
                <td>Science :-</td>
                <td><input type="number" name="science" min="0" max="100" required></td>
            </tr> -->
            <tr>
                <td>Password :-</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td align="center"><a href="index.php"><input type="button" name="submitLogin" value="LogIn Page"></a></td>
                <td align="center"><input type="submit" name="submit" value="Register"></td>
            </tr>
            </form>
        </table>
    </body>
</html>