<?php include('partials/db_connect.php'); ?>

<?php
	if(isset($_POST['rentalSubmit'])){
		$roomType=$_POST['roomType'];
		$houseRent=$_POST['houseRent'];

		$homeAddress=$_POST['homeAddress'];
		$ownerName=$_POST['ownerName'];
		$phoneNo=$_POST['phoneNo'];
		$vacancyFrom=$_POST['vacancyFrom'];
		$advRent=$_POST['advRent'];
		$gasBill=$_POST['gasBill'];
		$electricityBill=$_POST['electricityBill'];
		$securityFacility=$_POST['securityFacility'];
		$cctvCamera=$_POST['cctvCamera'];
		$liftAvail=$_POST['liftAvail'];
		$generatorAvail=$_POST['generatorAvail'];

		echo $vacancyFrom;
		

        
		

        // $query="INSERT INTO homerent(roomType,houseRent,homeAddress,ownerName,phoneNo,vacancyFrom,advRent,gasBill,electricityBill,securityFacility,cctvCamera,liftAvail,generatorAvail)
		// VALUES('{$roomType}', '{$houseRent}', '{$homeAddress}', '{$ownerName}', '{$phoneNo}','{$vacancyFrom}', '{$advRent}','{$gasBill}','{$electricityBill}' ,'{$securityFacility}', '{$cctvCamera}', '{$liftAvail}', '{$generatorAvail}')";
	
		// $performQuery=mysqli_query($connection, $query);

		// if(!$performQuery)
		// 	echo 'Query unsuccessful';

		// $insertedId=mysqli_insert_id($connection);
//header('Location:criminal_data_entry.php');
// header('Location: Rental Receipt.php?ccId='.$insertedId);
// 		exit();
// 	}
?>

<?php include('partials/db_close.php'); ?>