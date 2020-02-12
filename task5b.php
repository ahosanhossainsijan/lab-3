<!DOCTYPE html>
<html>
<body>

<form action="" method="POST">
  
    DEGREE<br>
    <input type="checkbox" name=degree1 value="ssc">SSC
    <input type="checkbox" name=degree2 value="hsc">HSC 
    <input type="checkbox" name=degree3 value="bsc">BSc
    <input type="checkbox" name=degree4 value="msc">MSc
    <br>
    <input type="submit" value="Submit">
  
</form>

</body>
</html>
<?php
	if(isset($_POST["degree1"])){
		echo "SSC"."</br>";
	}
	if(isset($_POST["degree2"])){
		echo "HSC"."</br>";
	}
	if(isset($_POST["degree3"])){
		echo "BSc"."</br>";
	}
	if(isset($_POST["degree4"])){
		echo "MSc"."</br>";
	}
?>