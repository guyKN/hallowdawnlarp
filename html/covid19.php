<?php
$servername = "localhost";
$username = "root";
$password = "mnigkrm19";
$dbname = "coronatracker";
if($_SERVER["REQUEST_METHOD"] === "POST"){
	$key = $_POST["key"];
	try {
		if(base64_decode($key, TRUE) === FALSE){
			echo("The input was not in base64");
			//http_response_code(500);
		}else{
			$conn = new mysqli($servername, $username, $password, $dbname);

			if ($conn->connect_error) {
				//http_response_code(500);
				die("Connection failed: " . $conn->connect_error);
			}

			$stmt = $conn->prepare("INSERT INTO sick_people (signature) VALUES (?)");
			$stmt->bind_param("s", $pk);
			$pk = $key;
			$stmt->execute();
			echo($key);
		}
	}catch(Exception $e){
		echo "Error: " . $e->getMessage();
		//http_response_code(500);
	}
}else{
	try {
		$sql = "SELECT signature, timestamp FROM sick_people";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$result = $conn->query($sql);
		//var_dump($result);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo($row["signature"] . ".". strtotime($row["timestamp"])*1000 . ",");
			}
		}
	}catch(Exception $e){
		echo "Error: " . $e->getMessage();
	}
}



?>
