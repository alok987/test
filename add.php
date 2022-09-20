<?php 
include('connection.php');
if($_POST['add']=='Add')
{

$record=mysqli_query($conn ,"insert into student(name,class) values('".$_POST['name']."','".$_POST['class']."')");



}



?>

<html>
    <form method="post" action="add.php">

    <table>
<tr><td>Name</td><td><input type="text" name="name"></td></tr>
<tr><td>class</td><td><input type="text" name="class"></td></tr>
<input type="submit" name="add" value="Add">

</table>


</form>

</html>