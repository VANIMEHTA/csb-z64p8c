
<?php
  $user=0;
  $success=0;
  ?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  include 'connect.php';
  
  $name1= $_POST['name1'];
    $Phone = $_POST['Phone'];
    $email = $_POST['email'];
     $skills = $_POST['skills'];
    $experience = $_POST['experience'];
    $username=$_POST['username'];
  $Password=$_POST['Password'];
 $sql ="select * from resume where username = '$username'";
  $result=mysqli_query($con,$sql);
  if($result){
    $num =mysqli_num_rows($result);
    if($num > 0){
      $user=1;
  }
  else{
  $sql= "insert into resume (name1,Phone,email,skills,experience,username,Password) values ('$name1','$Phone','$email','$skills','$experience','$username','$Password')";
  $result=mysqli_query($con,$sql);
  if($result){
    $success=1;
  }}}
    else{
      die(mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>
    <link href = "styles.css" rel ="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    
  <symbol id="check-circle-fill" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  </head>
  <body>



<div class="container  mt-5 w-25">
<h1 class="text-center mb-6 " >Resume </h1>
<form action="resume_practice.php" method ="post">

  <div class="mb-3 mt-4">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name" name ="name1" required>
    
  </div>
  <div class="mb-3 mt-4">
    <label for="exampleInputEmail1" class="form-label">Phone number</label>
    <input type="tel" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}"" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="123-4509-678" name ="Phone" required>
    
  </div>
  <div class="mb-3 mt-4">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name ="email" required>
</div>
    <div class="mb-3 mt-4">
    <label for="exampleInputEmail1" class="form-label">Skills</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Skills" name ="skills" required>
    
  </div>
    
  
  <div class="mb-3 mt-4">
    <label for="exampleInputEmail1" class="form-label">Experience</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Experience" name ="experience" required>
    
  </div>
  <div class="mb-3 mt-4">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User name" name ="username" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password" name ="Password" required>
  </div>
   

  
  <button type="submit" class="btn btn-primary w-100">Submit</button>
  
  


<?php
if($user)
  {echo'<div class="alert alert-primary  mt-4 w-10" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill ht- 10 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
    Sorry username already exists!
  </div>
</div>';}
  ?>
  <?php  
  if($success)
  {echo'<div class="alert alert-success mt-4 w-2" role="alert">
    Congrats data saved!
    </div>';}
  ?>
  </form>
</div>

</body>
</html>