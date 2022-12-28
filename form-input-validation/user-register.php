<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <form method="post" action="process-user-registration.php">

    <label for="firstName">First Name</label>
    <input type="text" name="firstName" id="firstName"><br/>
   <!--
    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" id="lastName"><br/> -->

    <label for="Email">Email</label>
    <input type="email" name="email" id="email"><br/>

    <label for="password">Password</label>
    <input type="password" name="password" id="password"><br/>

    <input type="submit" value="Register">


    </form>
    
</body>
</html>