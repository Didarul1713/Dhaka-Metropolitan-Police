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
	
	<div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crime Information</div>
                    <div class="panel-body">
                        <form action="crime.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
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
    <!--ANOTHER-->
                                    <div class="form-group">
                                            <label for="criminalName">Criminal Name: <span style="color: red">*</span></label>
                                            <input type="text" name="criminalName" class="form-control" id="criminalName" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="dob">Date Of Birth: <span style="color: red">*</span></label>
                                            <input type="text" name="dob" class="form-control" id="dob" required>
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
                                            <label for="presentAddress">Present address:</label>
                                            <textarea name="presentAddress" id="presentAddress" class="form-control" cols="30" rows="2"></textarea>
                                        </div>
        
                                        <div class="form-group">
                                            <label for="permanentAddress">Permanent address:</label>
                                            <textarea name="permanentAddress" id="permanentAddress" class="form-control" cols="30" rows="2"></textarea>
        
                                        
                                    
                                        <hr>
                                        <div class="form-group">
                                            <label for="criminalType">Criminal Type: <span style="color: red">*</span></label>
                                            <input type="text" name="criminalType" class="form-control" id="criminalType" required>
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