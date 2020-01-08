<?php include('partials/db_connect_branch.php'); ?>

<?php
	if(isset($_POST['FormSubmit'])){
		$bname=$_POST['bname'];
		$barea=$_POST['barea'];
		$mobile=$_POST['mobile'];
		$iname=$_POST['iname'];

		$query="INSERT INTO branch(bname,barea,mobile,iname) VALUES('{$bname}', '{$barea}', '{$mobile}', '{$iname}')";
		$performQuery=mysqli_query($connection, $query);

		if(!$performQuery)
			echo 'Query unsuccessful';

		$insertedId=mysqli_insert_id($connection);
		header('Location: Branch_data_entry.php');
		exit();
	}
?>

<?php include('partials/db_close_branch.php'); ?>