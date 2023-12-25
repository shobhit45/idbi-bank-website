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
            <div class="search">
                <input type="text" name="search" id="search" placeholder="Search this website">
            </div>
        </ul>
    </nav>

<?php
include('conn.php');
$uname =$_GET['uname'];
$sql="SELECT customer_name,customer_street,customer_city FROM customer  where
customer_name='". $uname. "'";
$res=mysqli_query($conn,$sql);
$cust_name='';
$addr='';
$city='';
if($result=mysqli_fetch_assoc($res))
{$cust_name=$result['customer_name'];
$addr=$result['customer_street'];
$city=$result['customer_city'];} 
?>
<div class='center'>
<table>
<tr>
<td>Customer Name:</td>
<td><?php echo $cust_name; ?> </td>
<td>Address:</td>
<td><?php echo $addr; ?> </td>
<td>City:</td>
<td><?php echo $city; ?> </td>
</tr>
</table>
</div>
</body>
</html>