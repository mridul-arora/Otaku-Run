<?php

include "connection.php";

if(isset($_GET['id'])){
    $sql="delete from first code where id= '".$_GET['question 1']." ' ";
    $result= mysql_query($sql);
}
$sql= "select * from first code";
$result = mysql_query($sql);
?>
<html>
<body>
    <table width = "100%" border = "1" cellspacing= "1" cellpadding = "1">
        <tr>
            <td>question 1</td>
            <td>write_code_here</td>
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
        <?php echo $row->question 1;?>
    </td>
    <td>
        <?php echo $row->write_code_here;?>
    </td>
    <td> <a href= "listening.php? id =<?php echo $row->question 1;?>" onclick= "return confirm('Are you sure')">Delete
        </a>| <a href= "code.php? id =<?php echo $row->question 1;?>" onclick= "return confirm('Are you sure')">Edit</a>
    </td>
<tr>
    <? php } ?>
