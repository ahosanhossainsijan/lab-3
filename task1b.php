<!DOCTYPE html>
<html>
<body>
<form action="" method="post"> 
	Name : <input type="text" name="name"><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php 
if(isset($_POST['name']))
{
echo $_POST['name'];
}
 ?>