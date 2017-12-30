<html>
    <head>
        <title>
            Connection to a database
        </title>
    </head>
    <body>
        <?php
        $con=mysqli_connect('localhost','root','');
        $db=mysqli_select_db($con,'Prodigy');

        if($con){
            echo 'Successfully connnected to the database.';
        }
        else{
            die('Error.');
        }
         if($db){
            echo 'Successfully found the database.';
        }
        else{
            die('Error. database not found');
        }
        ?>
        <br>
        <br>

<!--
<head>
    <title>
        Code -Pattern...
    </title>
</head>
-->

    <?php include '../Assets/parts/header.php';?>
    <link rel="stylesheet" href="../Assets/css/header.css" />
    <link rel="stylesheet" href="../Assets/css/addques.css" />

    <center>
        <article id="code_box">

           <!-- <div id="ques_box">
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
            </div>-->

            <form action="code.php" method="post">
                <article class="code">
                    <textarea name="ques" id="ques" placeholder="WRITE QUESTION here."></textarea>
                     <textarea name="output" id="output" placeholder="WRITE OUTPUT here."></textarea>
                    <input class="add" type="submit" value="Save Question" name="submit" />
                </article>
            </form>
        </article>
    </center>

<?php
// Escape user inputs for security
$question = mysqli_real_escape_string($con, $_REQUEST['ques']);
$code = mysqli_real_escape_string($con, $_REQUEST['code']);


// attempt insert query execution
if(mysqli_query($con, "INSERT INTO code (ques,code) VALUES ('$question', '$code')")){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute " . mysqli_error($con);
}

// close connection
mysqli_close($con);
?>
<br>
<br>
 <?php
        $query=mysqli_query($con,"SELECT * FROM code");
        while($row=mysqli_fetch_array($query)){
            $snum=$row['s.no.'];
            $question=$row['ques'];
            $code=$row['code'];

            echo $snum.':'.$question.'<br>'.$code;
        }
        ?>
</body>

</html>
