<?php 
    session_start();

    // variable declaration
 $errors = array(); 
    // connect to database
$con=mysqli_connect("localhost","root","","ridobiko");

 if (isset($_POST['reg_cust'])) {
        // receive all input values from the form
        $fname = $_POST['fname'];
        $lname=$_POST['lname'];
        $name=$fname.' '.$lname;
        $address = $_POST['address'];
          $phone = $_POST['phone'];
      	$adhaar= $_POST['adhaar'];
      	$front = $_FILES['front']['name'];
      		if(!empty($front)){
				$ext = pathinfo($front, PATHINFO_EXTENSION);
				$new_front = $adhaar.'_Front.'.$ext;
				move_uploaded_file($_FILES['front']['tmp_name'], 'images/'.$new_front);	
			}
			else{
				$new_front = '';
			}

      	$back = $_FILES['back']['name'];
      	if(!empty($back)){
				$ext = pathinfo($back, PATHINFO_EXTENSION);
				$new_back = $adhaar.'_Back.'.$ext;
				move_uploaded_file($_FILES['back']['tmp_name'], 'images/'.$new_back);	
			}
			else{
				$new_back = '';
			}
     
        if (count($errors) == 0) {
             $sql="select * from customer where Adhaar='$adhaar'";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count>0){
     array_push($errors, "Customer Already Excists!!");
    }else{
            $query = "insert into customer (Name,Phone,Adhaar,Address,Front_image,Back_image)values('$name','$phone','$adhaar', '$address','$new_front','$new_back')";
            mysqli_query($con, $query);
            header('location: index.php');
        }
        }

    }