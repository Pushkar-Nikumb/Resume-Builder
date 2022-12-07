<html>
	<body>	
		<form action="index.php" method="post">
			Name: <input type="text" name="sname"/>
			Class: <input type="text" name="sclass"/>
			<button type="submit">Submit</button>
		</form>
	</body>
</html>

<?php
	if(isset($_POST["sname"])){

		$dbname = "DATABASE_STUD";
		$servername = "localhost";
		$username = "root";
		$password = "";

		$sname = $_POST["sname"];
		$sclass = $_POST["sclass"];

		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
			echo "Error";
		}
		else
		{
			$sql = "INSERT INTO `student` VALUES ('$sname','$sclass')";
			if(mysqli_query($conn,$sql)==TRUE){
				echo "Inserted Successfully";
			}
			else{
				echo "Failed";
			}
		}
		//$conn->close;
	}
?>