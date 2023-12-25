<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> IDBI bank</title>
    <link rel="stylesheet" href="lab1ass1.css">
</head>
<body>
    <div class="intro" style="display: flex;" >
        <div >
            <a herf="ass1.html" class="logo"><img src="idbi logo.png"></a> 
        </div>
      <div class="heading"> 
          <div>  <h1> IDBI BANK </h1>
          </div>
          
        </div>
       
    </div> 
   
    <nav class="navbar">
        <ul>
        <li>  <a href="ass1.html" vlink = green> Home </a> </li>
            <li><a href="#">About</a></li>
            <li>  <a href="loginbank.html" vlink = green> login </a></li>
                <li> <a href="dashboard.php" vlink = green> dashboard  </a>   </li>
                <li> <a href="signup.php" vlink = green> create account </a>   </li>
            <div class="search">
                <input type="text" name="search" id="search" placeholder="Search this website">
            </div>
        </ul>
    </nav>
    <?php
       
       if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        include('conn.php');
        $sql= "INSERT INTO `customer` (`customer_name`, `customer_street`, `customer_city`) VALUES ('$name', '$address', '$city')";
        $res=mysqli_query($conn,$sql);
       if($res)
         {   
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>';
    }}
    ?>
    </body>
</html>