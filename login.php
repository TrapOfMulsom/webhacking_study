<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN</title>
</head>
<body>
    <form class="login_wrapper" method='post' action='./loginProcess.php'>
        <fieldset>
            <h1>Sign In</h1>
            <span>
                <p id="id"> ID <input name='id' type='text'> </p>
                <p id="pw"> Password <input name='pw' type='password'> </p>
            </span>
            <a href="home.php"><input id="btn_login" type='submit' value='LOGIN'></a>
            <a id="join" href='join.php'>Sign Up</a>
            <a id="userpw" href='pw_ck.php'>Forgot Password?</a>
        </fieldset>
    </form>
</body>
</html>
