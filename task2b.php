<!DOCTYPE html>
<html>
<body>
<form action="" method="post"> 
	Email : <input type="text" name="email"><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php 
if(isset($_POST['email']))
{
echo $_POST['email'];
}
 ?>