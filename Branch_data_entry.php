<?php include('partials/db_connect_branch.php'); ?>

<!DOCTYPE html> <!-- Html contains two parts - head(meta, css, js) and body(contents, js) -->
<html lang="en">
<head>
	<!--<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.min.css">-->
	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\Database.css">
    <link rel="stylesheet" href="css\Bootstrap.css">
    <link rel="stylesheet" href="css\shake.css">
    <script src="js\javascript1.js"></script>
    <script src="js\javascript2.js"></script>
    <script src="js\javascript3.js"></script>
    <style>
    </style>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #02a89e;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img src="DMP LOGO.png" class="shake" style="width:50px ;margin-right:10px;">
        <!--important means overlapping on other things-->
        <a class="navbar-brand" href="DMP LOGO.png"  ; style="font-family:Oswald" ;font-size: 25px">Dhaka Metropolitan Police</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>

        </div>
 
    </nav>

				<div class="panel-body">
					<form action="Branch_data_entry_submit.php" method="POST">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
								<h2 align="center" style="font-family: Oswald ;margin-top:10px">New Branch Form</h2>
									<label for="bname">Branch Name: <span style="color: red">*</span></label>
									<input type="text" name="bname" class="form-control" id="bname" placeholder="Enter Branch name.." required>
								</div>

								
                                    <div class="form-group">
                                        <label for="barea">Branch Area: <span style="color: red">*</span></label>
                                        <select name="barea" class="form-control" id="barea" required>
                                            <option value="">Select Area...</option>
                                            <option value="Mohammadpur">Mohammadpur</option>
                                            <option value="Adabor">Adabor</option>
                                            <option value="Bashundhora">Bashundhora</option>
                                            <option value="Tejgaon">Tejgaon</option>
                                            <option value="Mohakhali">Mohakhali</option>
                                            <option value="Uttora">Uttora</option>
                                        </select>
                                    </div>

								<div class="form-group">
									<label for="mobile">Branch Mobile No: <span style="color: red">*</span></label>
									<input type="text" name="mobile" class="form-control" id="mobile" required>
								</div>
                                <div class="form-group">
									<label for="iname">Branch Inspector Incharge: <span style="color: red">*</span></label>
									<input type="text" name="iname" class="form-control" id="iname" required>
								</div>
								<p><b><span style="color: red">*</span>Fields are required!</b></p>
							</div>
							
							<div class="col-md-12">
								<button type="submit" name="FormSubmit" class="btn btn-info btn-block">Submit Form</button>
							</div>
						</div>
					</form>
				</div>
			
		
	
</body>
</html>

<?php include('partials/db_close_branch.php'); ?>