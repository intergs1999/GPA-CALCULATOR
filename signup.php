<!-- Username
    Email
    Password
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="" method="post" id="form">
    <h1>Student GPA Calculator</h1>
        <p>Username
            <input type="text" name="name" id="hello">
        </p>
        <p>Email
            <input type="email" name="email" id="hello">
        </p>
        <p>Password
            <input type="password" name="password" id="hello">
        </p>
        <input type="submit" value="Submit" id="submit">
    </form>
    <?php
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];

        print("<center>$name<br>$email<br>$password<br></center>")
    ?>
</body>
</html>