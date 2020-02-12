<!DOCTYPE html>
<html>
<body>

<form action="" method="POST">
    BLOOD GROUP<br>
  <select name="bloodgroup">
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
  </select>
  <br>
    <input type="submit" value="Submit">
  
</form>

</body>
</html>
<?php
if(isset($_POST["bloodgroup"])){
    
    $selected_val = $_POST["bloodgroup"];
  echo $selected_val;
  }
  
?>