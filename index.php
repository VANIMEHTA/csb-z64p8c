
<?php 
$HOSTNAME ='localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'resume_db';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if(!$con){
     die(mysqli_error($con));
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Resume Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&family=Quicksand&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">

<style>
    
body{ 
 background: #0F2027;  /* fallback for old browsers */
 background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
 background: linear-gradient(to right, #2C5364, #203A43, #0F2027); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
   }
h1
{color: whitesmoke;
    font-family: 'M PLUS Rounded 1c', sans-serif;
    text-align: center;
    margin-top: 50px;
    font-size: 100px;
}
.container{
     
    height: 200px;
    display: flex;
    margin-right: 30px;
    justify-content: center;
    align-items: center;
    
}
.buttonn{
    margin-top: 100px;
    margin-right: 50px;
    height: 100px;
    width:150px;
}
</style>

</head>
<body>
    <h1> HOME </h1>
    <div class ="container">
    <a href="resume_practice.php">
    <button type="button" class="btn btn-light buttonn">User</button>
    </a>
    <a href="admin2.php">
    <button type="button" class="btn btn-light buttonn">Admin</button>
    </a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
