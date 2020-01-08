<?php include('partials/db_connect.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css\Bootstrap.css">
    <link rel="stylesheet" href="css\Footer.css">
    <link rel="stylesheet" href="css\shake.css">
    <link rel="stylesheet" href="css\Dropdown.css">
    <script src="js\javascript1.js"></script>
    <script src="js\javascript2.js"></script>
    <script src="js\javascript3.js"></script>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title> <b>Rental Data Information</b></title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    </style>
</head>
<body>
	<div class="container" style="margin-top :30px">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                        <div class="panel-heading" style="text-align:center ;font-family: 'Times New Roman' , Times, serif;font-weight: bold; line-height=10px; font-size:40px;  ">Room Information</div>  
                    <div class="panel-body">
                        <form action="rental Data submit.php" method="POST">
                            <div class="row">
                                <div class="col-md-12" >
                                <div class="form-group">
                                        <label for="roomType">Room Type: <span style="color: red">*</span></label>
                                        <select name="roomType" class="form-control" id="roomType" required>
                                            <option value="">Select Room...</option>
                                            <option value="Single Room">Single Room</option>
                                            <option value="Double Room">Double Room</option>
                                            <option value="Flat">Flat</option>
                                            <option value="Roommate">Roommate</option>  
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="houseRent">House Rent: <span style="color: red">*</span></label>
                                        <input type="text" name="houseRent" class="form-control" id="houseRent" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="homeAddress">Address: <span style="color: red">*</span></label>
                                        <input type="text" name="homeAddress" class="form-control" id="homeAddress" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="ownerName">Owner Name: <span style="color: red">*</span></label>
                                        <input type="text" name="ownerName" class="form-control" id="ownerName" required>
                                    </div>
    
                                    <div class="form-group">
                                            <label for="phoneNo">Contact No: <span style="color: red">*</span></label>
                                            <input type="text" name="phoneNo" class="form-control" id="phoneNo" required>
                                        </div>

                                        <div class="form-group">
                                        <label for="vacancyFrom">Vacancy From: <span style="color: red">*</span></label>
                                        <input type="text" name="vacancyFrom" class="form-control" id="vacancyFrom" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="advRent">Advance Rent: <span style="color: red">*</span></label>
                                        <input type="text" name="advRent" class="form-control" id="advRent" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="gasBill">Gas Bill: <span style="color: red">*</span></label>
                                        <select name="gasBill" class="form-control" id="gasBill" required>
                                            <option value="">Select Yes/No </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option> 
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="electricityBill">Electricity Bill: <span style="color: red">*</span></label>
                                        <select name="electricityBill" class="form-control" id="electricityBill" required>
                                            <option value="">Select Yes/No </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option> 
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="securityFacility">Security: <span style="color: red">*</span></label>
                                        <select name="securityFacility" class="form-control" id="securityFacility" required>
                                            <option value="">Select Yes/No </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option> 
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="cctvCamera">CCTV Camera: <span style="color: red">*</span></label>
                                        <select name="cctvCamera" class="form-control" id="cctvCamera" required>
                                            <option value="">Select Yes/No </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option> 
                                        </select>
                                    </div>
                                    
                                    
                                   
                                    <div class="form-group">
                                        <label for="liftAvail">Lift: <span style="color: red">*</span></label>
                                        <select name="liftAvail" class="form-control" id="liftAvail" required>
                                            <option value="">Select Yes/No </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option> 
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="generatorAvail">Generator: <span style="color: red">*</span></label>
                                        <select name="generatorAvail" class="form-control" id="generatorAvail" required>
                                            <option value="">Select Yes/No </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option> 
                                        </select>
                                    </div>

                                <div class="col-md-12">
                                    <button type="submit" name="rentalSubmit" class="btn btn-info btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>

<?php include('partials/db_close.php'); ?>