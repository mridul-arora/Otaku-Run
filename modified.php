<?php

include "connection.php";

if(isset($_POST["Compile & Run"])){
    $code1=$_POST["code1"];
    $text1=str_replace("\n","<br>",$code1);
    $code2=$_POST["code2"];
    $text2=str_replace("\n","<br>",$code2);
    $code3=$_POST["code3"];
    $test3=str_replace("\n","<br>",$code3);
    $code4=$_POST["code4"];
    $text4=str_replace("\n","<br>",$code4);
}
$sql= "insert into accml values ('$text1', '$text2', '$text3', '$text4')";
$result = mysql_query($sql);
?>
<html>
<body>
    <table width = "100%" border = "1" cellspacing= "10" cellpadding = "10">
        <tr>
            <td>pattern</td>
            <td>code_here</td>
        </tr>


</table>
</body>
</html>




<?php
while($row = mysql_fetch_object($result))
{
    ?>
<tr>
    <td>
        <?php echo $row->pattern;?>
    </td>
    <td>
        <?php echo $row->code_here;?>
    </td>
    <td> <a href= "listening.php? id =<?php echo $row->question 1;?>" onclick= "return confirm('Are you sure')">Delete
        </a>| <a href= "code.php? id =<?php echo $row->question 1;?>" onclick= "return confirm('Are you sure')">Edit</a>
    </td>
</tr>
    <? php } ?>
