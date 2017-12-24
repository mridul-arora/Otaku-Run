<html>

<head>
    <title>
        Register -Pattern
    </title>
</head>

<body>

    <?php include '../Assets/parts/header.php';?>
    <link rel="stylesheet" href="../Assets/css/header.css">
    <?php include '../Assets/parts/includes.php'; ?>
    <link rel="stylesheet" href="../Assets/css/register.css">
    <div id="reg_wrapper">
        <center>
            <article id="reg_box">
                <form action="register.php" method="post">
                    <article class="reg">
                        <input class="reg_info" type="text" placeholder="First Name" name="firstname" />
                        <input class="reg_info" type="text" placeholder="Last Name" name="lastname" />
                    </article>
                    <article class="reg">
                        <input class="reg_info" type="text" placeholder="User name" name="username" />
                        <input class="reg_info" type="password" placeholder="Password" name="pwd" />
                    </article>
                    <article class="reg">
                        <input class="reg_info" type="email" placeholder="Email_id" name="email" />
                        <input class="reg_info" type="number" placeholder="Contact no." name="number" />
                    </article>
                    <article class="reg">
                    <input class="reg_sub" type="submit" value="Submit" name="submit"/>
                    </article>
                </form>
            </article>
        </center>
    </div>
</body>

</html>
