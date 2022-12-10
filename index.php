<?php
require_once('config.php');
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $fullname   =$_POST['fullname'];
  $nic        =$_POST['nic'];
  $mnumber    =$_POST['mobilenumber'];
  $email      =$_POST['email'];
  $address    =$_POST['address'];
  $districts  =$_POST['districts'];
  $description=$_POST['description'];
  $type       =$_POST['type'];
  $proofs     =$_POST['myfile'];
  $uname      =$_POST['username'];
  $pword      =$_POST['password'];
  $sql = "INSERT INTO users (fullname,nic ,mnumber,email,address,districts,description,type,proofs ,uname,pword) values ('$fullname ',' $nic ',' $mnumber','$email ','$address ','$districts ','$description','$type ','$proofs ',' $uname  ','$pword  ')";
  if (mysqli_query($con, $sql))
  {
     echo '<script type="text/javascript"> alert("Congragulations. your account was created.")</script>';
 } else {
     echo '<script type="text/javascript"> alert("Congragulations. your account was created.")</script>';
         
 }


 mysqli_close($con);
}
  
   

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/signup2.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

	
<body>
  <script type="text/javascript">
        var nic = document.getElementById("nic");
        nic.addEventListener('input',()=>
        {
            nic.setCustomValidity('');
            nic.checkValidity();
        });
       
   
    nic.addEventListener('invalid',()=>{
        if (nic.value ==''){
            nic.setCustomValidity('Enter  NIC');
        }
        else{
            nic.setCustomValidity('Enter NIC in123456789V or 200256789123 format')
        }
    });
    
    </script>
<div class="content">
    <form action="index.php" method="post">
        <h2>Sign Up</h2>
        
<div class="user-details">
<div class="input-box">
<span class="details">Full Name</span>
<input type="text" name="fullname" placeholder="Enter your name" required>
</div>
<div class="input-box">
<span class="details">NIC</span>
<input type="text" name="nic" placeholder="Enter your NIC number" required>
</div>
<div class="input-box">
<span class="details">Mobile Number*</span>
<input type="text" name="mobilenumber"  placeholder="Enter your Mobile Number" required>
</div>
<div class="input-box">
<span class="details">Email Address*</span>
<input type="email" name="email" placeholder="Enter your E-mail Address" required>
</div>
<div class="input-box">
<span class="details">Address</span>
<input type="text" name="address"  placeholder="Enter your Address" required>
</div>
<div class="input-box">
    <span class="details">Districts</span>
<div class="box">

<select name='districts'>
  <option value="Colombo">Colombo</option>
  <option value="Gampaha">Gampaha</option>
  <option value="Kalutara">Kalutara</option>
  <option value="Kandy">Kandy</option>
  <option value="Matale">Matale</option>
  <option value="NuwaraEliya">Nuwara Eliya</option>
  <option value="Galle">Galle</option>
  <option value="Matara">Matara</option>
  <option value="Hambantota">Hambantota</option>
  <option value="Jaffna">Jaffna</option>
  <option value="Kilinochchi">Kilinochchi</option>
  <option value="Mannar">Mannar</option>
  <option value="Vavuniya">Vavuniya</option>
  <option value="Mullaitivu">Mullaitivu</option>
  <option value="Batticaloa">Batticaloa</option>
  <option value="Ampara">Ampara</option>
  <option value="Trincomalee">Trincomalee</option>
  <option value="Kurunegala">Kurunegala</option>
  <option value="Puttalam">Puttalam</option>
  <option value="Anuradhapura">Anuradhapura</option>
  <option value="Polonnaruwa">Polonnaruwa</option>
  <option value="Badulla">Badulla</option>
  <option value="Moneragala">Moneragala</option>
  <option value="Ratnapura">Ratnapura</option>
  <option value="Kegalle">Kegalle</option>
</select>
</div>
</div>
</div>
<div class="user-details"> 
<div class ="input-box">
    <span class="details">Description</span>
    <br><br>
    <textarea name="description" id="" cols="66" rows="10" placeholder="Enter Some details about your self"></textarea>
  </div>
  
  <div class ="input-box" >
    <div style=margin-top:280px;margin-left:-290px>
    <span class="details">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Service Type you providing </span></div>
  
  </div>
  <div>
    <label class="container">Pet sitter 
        <input type="radio" checked="checked" name="type" value="petsitter">
        <span class="checkmark"></span>
      </label>
      <label class="container">Pet boarding 
        <input type="radio" name="type" value="petboarding">
        <span class="checkmark"></span>
      </label>
      <label class="container">Veterinarian  
        <input type="radio" name="type"value="veterinarian ">
        <span class="checkmark"></span>
      </label>
      <label class="container">Pet grooming
        <input type="radio" name="type" value="petgrooming">
        <span class="checkmark"></span>
      </label>
      <br><br>
<div class="user-details">       
      <div class="input-box">
      <span class="details">&nbsp;
      Any verification proofs<br></span>
      <form action="">
    <input type="file" id="myfile" name="myfile"><br><br>
      </div>        
      



      <div class="input-box">
        <span class="details">User name</span>
        <input type="text" name="username"placeholder="Enter your email" required>
        </div>
</div>
<div class="user-details"> 
        <div class="input-box">
        <span class="details">Password*</span>
        <input type="password" name="password" placeholder="Enter your number" required>
        </div>
        <div class="input-box">
        <span class="details">Confirm password</span>
        <input type="password"name="password" placeholder="Enter your password" required>
        </div>
        
        <input type="submit" class="button" value="Register"name="submit">

           
        </div>
        <p><br>Already have an account? Sign in</p>
    </div>
</div>


</div>

<div class="footerr" style=" z-index: -1; width: 100%;">
    <p> Telephone No: +94 11 233 5632&nbsp;&nbsp;&nbsp;&nbsp;
        Fax: +94 11 233 5632 &nbsp;&nbsp;&nbsp;&nbsp;Email: petAssure@hotmail.com​</p>
</div>
</body>
</html>
