<?php
	if(isset($_GET['ccId'])){
?>

<?php include('partials/db_connect.php'); ?>

<!DOCTYPE html> <!-- Html contains two parts - head(meta, css, js) and body(contents, js) -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>


	<div class="container">
		<div class="col-md-18">
			<div class="panel panel-default">
				
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
                            <th>#</th>
								<th>Crime Id</th>
								<th>Crime Type</th>
								<th>Crime Place</th>
								<th>Crime Date</th>
								<th>Crime Time</th>
								<th>Criminal Id</th>
								<th>Criminal Name</th>
								<th>Date Of Birth</th>
								<th>Gender</th>
								<th>Father Name</th>
                                <th>Mother Name</th>
                                <th>Present address</th>
                                <th>Permanent address</th>
                                <th>Witness Id</th>
                                <th>Witness Name</th>
                                <th>Witness Address</th>
								<th>Contact No</th>
							</tr>
						</thead>

						<tbody>
							<?php
								$id=$_GET['ccId'];

								$query="SELECT * FROM crime2 WHERE id='{$id}' ORDER BY id DESC";
								$performQuery=mysqli_query($connection, $query);

								if(!$performQuery)
									echo 'Query unsuccessful!';
								else{
									if(mysqli_num_rows($performQuery)>0){
										while($row=mysqli_fetch_array($performQuery)){
										?>
											<tr>
                                            <td><?php echo $row['id']; ?></td>
												<td><?php echo $row['cID']; ?></td>
												<td><?php echo $row['crimeType']; ?></td>
												<td><?php echo $row['crimePlace']; ?></td>
												<td><?php echo $row['crimeDate']; ?></td>
												<td><?php echo $row['crimeTime']; ?></td>
                                                
                                                <td><?php echo $row['criminalID']; ?></td>
												<td><?php echo $row['criminalName']; ?></td>
												<td><?php echo $row['dob']; ?></td>
												<td><?php echo $row['gender']; ?></td>
												<td><?php echo $row['fatherName']; ?></td>
												<td><?php echo $row['motherName']; ?></td>
                                                <td><?php echo $row['presentAddress']; ?></td>
                                                <td><?php echo $row['permanentAddress']; ?></td>
                                                
                                                <td><?php echo $row['witnessId']; ?></td>
												<td><?php echo $row['witnessName']; ?></td>
												<td><?php echo $row['witnessAddress']; ?></td>
												<td><?php echo $row['phoneNo']; ?></td>
											</tr>
										<?php
										}
									}
									else{ ?>
										<tr><td class="text-center" style="color: red" colspan="18">No data found!</td></tr>
									<?php
									}
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php include('partials/db_close.php'); ?>

<?php
	}
?>