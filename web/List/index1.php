<?php  include('../connection.php'); ?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Txt</title>
</head>
<body>

	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>


	<?php $results = mysqli_query($db, "SELECT * FROM appointment"); ?>

	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>E-mail</th>
				<th>Phone Number</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		
		<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
				<td><?php echo $row['Name']; ?></td>
				<td><?php echo $row['Email']; ?></td>
				<td><?php echo $row['Number']; ?></td>
				
				<td>
					<a href="index1.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
				</td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>