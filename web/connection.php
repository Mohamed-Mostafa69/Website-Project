
<?php 


	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'test');

	// initialize variables
	$name = "";
	$Phone_Number = "";
  $Email = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$Phone_Number = $_POST['Phone_Number'];
    	$Email = $_POST['Email'];
    
		mysqli_query($db, "INSERT INTO test.appointment (Name	, Email , Number) VALUES ('$name', '$Email', '$Phone_Number')"); 
		$_SESSION['message'] = "saved"; 
		header('location: index.php');
	}

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM appointment WHERE id=$id");
		$_SESSION['message'] = "Address deleted!"; 
		header('location: index1.php');
	}
    ?>