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
			

<h1>Customer Records</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$i=1;
  	$sql="select * from customer";
  	$res=mysqli_query($con,$sql);
  	 	$res2=mysqli_query($con,$sql);
  	 while($row=mysqli_fetch_assoc($res)){
echo "<tr>
      <th scope='row'>".$i."</th>
      <td>".$row['Name']."</td>
      <td>".$row['Phone']."</td>
      <td>".$row['Address']."</td>
      <td><button type='button' class='btn-primary' data-toggle='modal' data-target='.c".$row['Id']."'>Detail</button>
    </tr>";
$i++;
  	 }
  	?>
  </tbody>
</table>

			</div>
</div>
		
	</div>
	<!-- Large modal -->

<?php
while($row2=mysqli_fetch_assoc($res2)){?>
<?php echo "<div class='modal fade c".$row2['Id']."'tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>";?>
  <div class="modal-dialog modal-lg">
     <div class="modal-content">
     <?php // echo $row2['Name'];?>
 <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Customer Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
      	<h5 style="font-weight: 400;">Name: <span style="font-weight: 500;text-transform: capitalize;"><?php echo $row2['Name'];?></span>  </h5>
      </div>
      <div class="col-md-4 ml-auto">	<h5 style="font-weight: 400;">Phone: <span style="font-weight: 500;text-transform: capitalize;"><?php echo $row2['Phone'];?></span>  </h5></div>
    </div>
      <div class="row">
      <div class="col-md-8">
      	<h5 style="font-weight: 400;">Adhaar: <span style="font-weight: 500;text-transform: capitalize;"><?php echo $row2['Adhaar'];?></span>  </h5>
      </div>
      <div class="col-md-4 ml-auto">	<h5 style="font-weight: 400;">Address: <span style="font-weight: 500;text-transform: capitalize;"><?php echo $row2['Address'];?></span>  </h5></div>
    </div>
<div class="row">
<div class="col-md-6">
<?php echo "<img src='images/".$row2['Front_image']."' style='width:350px'>";?>
</div>
<div class="col-md-6 ">
	<?php echo "<img src='images/".$row2['Back_image']."'style='width:350px'>";?>
</div>
</div>
  </div>
</div>
  </div>
</div>
  </div>
<?php } ?>

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