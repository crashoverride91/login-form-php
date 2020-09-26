<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <h2>ACCESS</h2>
        <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error'];?></p>
            <?php
        }?>

        <label for="">Username</label>
        <input type="text" name="username" placeholder="username"><br>

        <label for="">Password</label>
        <input type="password" name="password" placeholder="password"><br>

        <button type="submit">LOGIN</button>
    </form>
</body>
</html>





