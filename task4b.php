<!DOCTYPE html>
<html>
<body>

<form action="" method="POST">
  
    GENDER<br>
    <input type="radio" name=gender value="Male"checked>Male
    <input type="radio" name=gender value="Female">Female 
    <input type="radio" name=gender value="Other">Other
    <br>
    <input type="submit" value="Submit">
  
</form>

</body>
</html>
<?php 
if(isset($_POST['gender']))
{
echo $_POST['gender'];
}
 ?>