<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body>
    <div class="LoginDiv">
        <?php include("logo.php");?>
        <!-- 
            div para hacer el registro
        -->
        <div class="LoginIzq">
            <form action="welcome.php" method="post">
                Name: <input type="text" name="name"><br>
                E-mail: <input type="text" name="email"><br>
                <input type="submit">
            </form>
        </div>
        <!-- 
            div para hacer el Login
        -->
        <div class="LoginDer">
             <form action="welcome.php" method="post">
                Name: <input type="text" name="name"><br>
                E-mail: <input type="text" name="email"><br>
                <input type="submit">
            </form>
        </div>
    </div>
</body>
</html>