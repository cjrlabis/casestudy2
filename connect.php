<?php
    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $mobile_no = $_POST['mobile_no'];
    $body_temp = $_POST['body_temp'];
    $covid_diagnosed = $_POST['covid_diagnosed'];
    $covid_encounter = $_POST['covid_encounter'];
    $vaccinated = $_POST['vaccinated'];
    $nationality = $_POST['nationality'];


    //DB connection
    $conn = new mysqli('localhost','root','','covid');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into details(full_name, gender, age, mobile_no, body_temp, covid_diagnosed, covid_encounter, vaccinated, nationality) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssss", $full_name, $gender, $age, $mobile_no, $body_temp, $covid_diagnosed, $covid_encounter, $vaccinated, $nationality);
		$execval = $stmt->execute();

		echo "
			<!DOCTYPE html>
			<script>
			function redir()
			{
			alert('Data Successfully Added!');
			window.location.assign('index.php');
			}
			</script>
			<body onload='redir();'></body>";
		// echo $execval;
		// echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>