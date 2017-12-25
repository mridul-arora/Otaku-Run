<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location:../Home/index.php");
?>

<html>
<body>
    <?php include '../Assets/parts/header.php';?>
    <link rel="stylesheet" href="../Assets/css/header.css">
    </body>
</html>
