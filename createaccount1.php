<?php
$errors = [];
include('connection.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['create']))
{
  	$f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $city = $_POST['city'];
    $address=$_POST['address'];
    $telephone = $_POST['tel'];
    $telephone1 = $_POST['prefix_tel_code'];
    $num = preg_replace('/^(?:\+?27|0)?/', $telephone1, $telephone);
    
  	$email = $_POST['email'];
    
    $sql = "SELECT email FROM registration WHERE email='$email'";
    $result1 = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result1) > 0){
      echo "Email that you have entered is already exist!";
      $errors['email']="Email that you have entered is already exist!";
  } else {
      $password = $_POST['password'];
      $checkbox=$_POST['check']; 
  
    $image = $_FILES['profile_img']['name'];
	  $image_tmp = $_FILES['profile_img']['tmp_name'];
  	move_uploaded_file($image_tmp,"images/$image");

	  $query = "insert into registration (f_name, l_name, city, address, telephone, email, password1, usertype, image, dateofregis) 
    values ('$f_name','$l_name','$city','$address','$num','$email','$password','$checkbox', '$image', now())";
    
	  $result = mysqli_query($con, $query);

    if($result==1)
	  {       
		echo"<script>alert('تمت العملية بنجاح')</script>";
		header('location:signup-success.html');
	  }
	  else {       
  	echo "فشلت العملية";
		 }
  }
}}
?>