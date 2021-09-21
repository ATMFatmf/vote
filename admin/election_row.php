<?php 
	include 'includes/session.php';

	if(isset($_POST['election_id'])){
		$election_id = $_POST['election_id'];
		$sql = "SELECT * FROM election WHERE election_id = '$election_id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>