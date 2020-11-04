<?php 
require('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ridobike</title>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
<!-- Default form contact -->
<div class="container">
	<div class="row justify-content-center align-items-center">
		<div class="col-lg-8">
			
		
<form class="text-center border border-light p-5" action="index.php" method="post" enctype="multipart/form-data">
<?php
if(count($errors) != 0)
{
	echo "<div class='alert alert-warning'>Customer Already Excists!!</div>";
}
?>
    <p class="h4 mb-4">Customer Registration Form</p>
<div class="row">
	<div class="col-md-6">
		  <!-- Name -->
    <input type="text" id="defaultContactFormName" name="fname" class="form-control mb-4" placeholder="First Name">
	</div>
		<div class="col-md-6">
		  <!-- Name -->
    <input type="text" id="defaultContactFormName" name="lname" class="form-control mb-4" placeholder="Last Name">
	</div>
</div>
  <div class="row">
	<div class="col-md-6">
    <!-- Phone -->
    <input type="text" id="defaultContactFormEmail" name="phone" class="form-control mb-4" placeholder="Phone">
</div>
<div class="col-md-6">
    <!-- Adhaar -->
    <input type="text" id="defaultContactFormEmail" name="adhaar" class="form-control mb-4" placeholder="Adhaar Number">
</div>
</div>
    <!-- Address -->
    <div class="form-group">
        <textarea class="form-control rounded-0" name="address" id="exampleFormControlTextarea2" rows="3" placeholder="Address"></textarea>
    </div>
      <div class="row">
	<div class="col-md-6">
    <!-- Adhaar Photo -->
    <label>Front Image</label>
    <input type="file" id="defaultContactFormEmail" name="front" class="form-control mb-4" >
</div>
<div class="col-md-6">
    <!-- Adhaar  Photo-->
    <label>Back Image</label>
    <input type="file" id="defaultContactFormEmail" name="back" class="form-control mb-4">
</div>
</div>
    <!-- Send button -->
    <button class="btn btn-info btn-block" name="reg_cust"  type="submit">Save</button>

</form>
<button class="btn btn-info btn-block"><a href="datarecord.php"> Records</a></button>
</div>
</div>
		
	</div>
<!-- Default form contact -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>