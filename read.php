<?php 
	include('conn.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Read Data</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
</head>
<body>
	<h3 class="text-center" style="text-decoration: underline;">Contact  Us Information</h3>
	<div class="container">
		<?php 
			$sql="SELECT * FROM tp";
			$count=1;
			$result = mysqli_query($conn, $sql);
			// print_r($result);exit;
	        if(mysqli_num_rows($result) > 0)//Calculate no of rows
	         {
		 ?>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Sr.no</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone number</th>
				<th>Feedback</th>
			</tr>
		</thead>
		<tbody>
				<?php 
				// $row = mysqli_fetch_assoc($result);
				// echo "<pre>";
				// print_r($row);exit();
				while($row = mysqli_fetch_assoc($result)){
				 ?>
			<tr>
				<td><?php echo $count; ?></td>
				<td><?php echo $row['Name']; ?></td>
				<td><?php echo $row['Email']; ?></td>
				<td><?php echo $row['Phone']; ?></td>
				<td><?php echo $row['Feed']; ?></td>
			</tr>
		</tbody>
		<?php 
				$count++;}
			}
			else{
				echo"Data Not Found";
			}
			?>
	</table>
			
	</div>
	<?php mysqli_close($conn); ?>
</body>
</html>