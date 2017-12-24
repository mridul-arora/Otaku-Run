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
    <content id="center_box">
    <form action="/action_page.php">
        First name:<br>
        <input type="text"
               name="firstname">
        <br>
        Last name:<br>
        <input type="text"
               name="lastname">
        <br>
        User name:<br>
        <input type="text"
               name="username">
        <br>
        Contact No.:<br>
        <input type="text"
               name="number">
        <br>
        Email_id:<br>
        <input type="email"
               name="email">
        <br>
        Password:<br>
        <input type="password"
               name="psw">
        <br>
        <br>
        <input type="submit">

    </form>
    </content>
</body>

</html>
