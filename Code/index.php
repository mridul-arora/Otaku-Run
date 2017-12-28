<html>

<head>
    <title>
        Code -Pattern...
    </title>
</head>

<body>
    <?php include '../Assets/parts/header.php';?>
    <link rel="stylesheet" href="../Assets/css/header.css" />
    <link rel="stylesheet" href="../Assets/css/code.css" />

    <center>
        <article id="code_box">
            <div id="qtbar">
                <div id="ques">Question.1.</div>
                <div id="div"> Time left =
                    <span id="timer"></span>
                </div>
            </div>
            <div id="ques_box">
                <article id="ques">
                    <pre>
*
* *
* * *
* * * *
* * * * *
* * * *
* * *
* *
*
                    </pre>
                </article>
            </div>
            <form action="code.php" method="post">
                <article class="code">
                    <textarea name="writecode" id="code_here" placeholder="WRITE CODE HERE."></textarea>
                    <input class="code_sub" type="submit" value="Compile & Run" name="submit" />
                </article>
            </form>
        </article>
    </center>
    <script src="../Assets/javascript/timer.js"></script>
</body>

</html>
