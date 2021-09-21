
<?php 
include 'includes/session.php';
if (isset($_POST['add']))
{
$election_id=$_POST ['election_id'];
$title=$_POST ['title'];
$max_voter=$_POST ['max_voter'];
$sql = "INSERT INTO election (election_id,title,max_voter) values ('$election_id','$title','$max_voter')";
$query = $conn->query($sql);

if($conn->query($sql))
{
  $_SESSION['success'] = 'Election added successfully';
}
else{
  $_SESSION['error'] = $conn->error;
}
}

header('location: election.php');




?>