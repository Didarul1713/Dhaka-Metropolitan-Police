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

	<title> <b>Crime Information</b></title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
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
        <a class="navbar-brand" href="DMP LOGO.png" style="font-family:Oswald">Dhaka Metropolitan Police</a>

    </nav>
   
	<div class="container" style="margin-top :30px">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                        <div class="panel-heading" style="text-align:center ;font-family: 'Times New Roman' , Times, serif;font-weight: bold; line-height=10px; font-size:40px;  ">Crime Information</div>  
                    <div class="panel-body">
                        <form action="criminal_data_submit.php" method="POST">
                            <div class="row">
                                <div class="col-md-12" >
                                    <div class="form-group">
                                        <label for="cID">Crime Id: <span style="color: red">*</span></label>
                                        <input type="text" name="cID" class="form-control" id="cID" required>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="crimeType">Crime Type: <span style="color: red">*</span></label>
                                        <input type="text" name="crimeType" class="form-control" id="crimeType" required>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="crimePlace">Crime Place: <span style="color: red">*</span></label>
                                        <input type="text" name="crimePlace" class="form-control" id="crimePlace" required>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="crimeDate">Crime Date: <span style="color: red">*</span></label>
                                        <input type="text" name="crimeDate" class="form-control" id="crimeDate" required>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="crimeTime">Crime Time: <span style="color: red">*</span></label>
                                        <input type="text" name="crimeTime" class="form-control" id="CrimeTime" required>
                                    </div>

                                    <!--Criminal Information-->
                                    <div class="panel-heading"style="text-align:center ;font-family: 'Times New Roman' , Times, serif;font-weight: bold; line-height=10px; font-size:40px;  " >Criminal Information</div>  
                                    
                                    <div class="form-group">
                                    <label for="criminalID">Criminal Id: <span style="color: red">*</span></label>
                                        <input type="text" name="criminalID" class="form-control" id="criminalID" required>
                                    </div>
    

                                    <div class="form-group">
                                        
                                        <label for="criminalName">Criminal Name: <span style="color: red">*</span></label>
                                        <input type="text" name="criminalName" class="form-control" id="criminalName" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="dob">Date Of Birth: <span style="color: red">*</span></label>
                                        <input type="date" name="dob" class="form-control" id="dob" required>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label for="gender">Gender: <span style="color: red">*</span></label>
                                        <div id="choice">
                                            <input type="radio" name="gender" value="Male" required> Male &nbsp;&nbsp;
                                            <input type="radio" name="gender" value="Female" required> Female <br>
                                        </div>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="fatherName">Father Name: <span style="color: red">*</span></label>
                                        <input type="text" name="fatherName" class="form-control" id="fatherName" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="motherName">Mother Name: <span style="color: red">*</span></label>
                                        <input type="text" name="motherName" class="form-control" id="motherName" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="presentAddress">Present address:</label>
                                        <textarea name="presentAddress" id="presentAddress" class="form-control" cols="30" rows="2"></textarea>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="permanentAddress">Permanent address:</label>
                                        <textarea name="permanentAddress" id="permanentAddress" class="form-control" cols="30" rows="2"></textarea>


                                    <!--Witness Info-->
                                    <div class="panel-heading"style="text-align:center ;font-family: 'Times New Roman' , Times, serif;font-weight: bold; line-height=10px; font-size:40px;  " >Witness Information</div>  
        
                                    <div class="form-group">
                                            <label for="witnessId">Witness Id: <span style="color: red">*</span></label>
                                            <input type="text" name="witnessId" class="form-control" id="witnessId" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="witnessName">Witness Name: <span style="color: red">*</span></label>
                                            <input type="text" name="witnessName" class="form-control" id="witnessName" required>
                                        </div>
        
                                        <div class="form-group">
                                            <label for="witnessAddress">Witness Address: <span style="color: red">*</span></label>
                                            <input type="text" name="witnessAddress" class="form-control" id="witnessAddress" required>
                                        </div>
        
                                        <div class="form-group">
                                            <label for="phoneNo">Contact No: <span style="color: red">*</span></label>
                                            <input type="text" name="phoneNo" class="form-control" id="phoneNo" required>
                                        </div>
        
    
                                    
        
                                
                                <div class="col-md-12">
                                    <button type="submit" name="crimeSubmit" class="btn btn-info btn-block">Submit</button>
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