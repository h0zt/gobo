<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../resources/gobo.png" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" href="../resources/style.css">
    <link rel="stylesheet" href="../resources/ionicons/css/ionicons.css">
</head>
<body>


    <!--all=contents-->
    <main>
        <section id="login_form">
        <div class="back">
            <a href="../index.html"><< back</a>
        </div>
            <form action="login.php" method="post">
                <input type="text" placeholder="usernamer" name="name">
                <input type="password" placeholder="password" name="pwd">
                <button type="submit" name="submit">login</button>

                <div id="login_more">
                    
                    <a href="register.php">register</a>
                        </br>
                    <a href="#">forgot password</a>
                </div>
            </form>
        </section>

    </main>
    
</body>
</html>