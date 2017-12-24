<html>

<head>
    <title>
        Register -Pattern
    </title>
</head>

<body>
   <!-- /*<?php //include '../Assets/parts/header.php';?>
    <link rel="stylesheet" href="../Assets/css/header.css">-->
    <?php include '../Assets/parts/includes.php'; ?>
    <div id="reg_wrapper">
        <form action="/action_page.php">
            <article class="reg">
                <input class="reg_info" type="text" placeholder="First Name" name="firstname" />
                <input class="reg_info" type="text" placeholder="Last Name" name="lastname" />
            </article>
            Username:<br>
            <input type="text" name="username">
            <br> Contact No.:<br>
            <input type="text" name="number">
            <br> Email_id:
            <br>
            <input type="email" name="email">
            <br> Password:
            <br>
            <input type="password" name="psw">
            <br>
            <br>
            <input type="submit">

        </form>
    </div>
</body>

</html>
