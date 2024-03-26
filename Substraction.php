<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Results</title>
</head>
<body>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$firstname=$_POST['firstname'];
		$secondname=$_POST['lastname'];
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$spece= "";
		$add=$num1-$num2;
		$fullname =$firstname."".$secondname;
  echo  "<p> Hello $fullname</p>";
		echo  "<p> The  Addition of $num1 and $num2 is : $add</p>";
	}

?>
</body>
</html>