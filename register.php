<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Poppins&display=swap" rel="stylesheet">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <h2>Register with us Now</h2>
        <form action="connect.php" method="post">
        <div class="inputs">
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="email" name="emailid" id="emailid" placeholder="Email" required>
            <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" placeholder="Mobile Number" required>
            <input type="text" name="username" id="username" placeholder="Username" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </div>
        </form>
    </div>
<script src="./main.js"></script>
</body>
</html>
