
<?php
$servername = "<Enter your details>";
$username = "<Enter your details>";
$password = "<Enter your details>";
$dbname = "<Enter your details>";

$conn = new mysqli($servername, $username, $password, $dbname);

	if($_SERVER['REQUEST_METHOD']=='POST'){
		/*
		Getting password as a String is not a good practise.
		Instead compute the Hash of the password and use that for comparing.
		*/
		$username=$_POST['username'];
		$password=$_POST['password'];

	$sql = "SELECT name FROM user WHERE username = '$username' and password = '$password'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

 	while($row = $result->fetch_assoc()) {
    echo $row["name"];
}
} else {
echo "-1";
}
						
}	
		

