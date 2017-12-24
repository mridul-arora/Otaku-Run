<html>

<head>
    <title>
        Login -Pattern
    </title>
</head>

<body>
    <?php include '../Assets/parts/header.php';?>
    <link rel="stylesheet" href="../Assets/css/header.css">
    <?php include '../Assets/parts/includes.php'; ?>
    <link rel="stylesheet" href="../Assets/css/login.css">
    <div id="login_wrapper">
        <center>
            <article id="login_box">
                <form action="login.php" method="get">
                    <article class="log">
                        <input class="log_info" type="text" placeholder="User name" name="username" />
                    </article>
                     <article class="log">
                        <input class="log_info" type="password" placeholder="Password" name="psw" />
                    </article>
                     <article class="log">
                        <input class="log_sub" type="submit" value="Submit" name="psw" />
                    </article>
                </form>
            </article>
        </center>
    </div>
</body>

</html>
