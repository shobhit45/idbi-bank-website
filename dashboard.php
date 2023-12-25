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
    <div class="center" >
    <?php
       include('conn.php');
       
       $sql="select customer_name, depositor.account_number, balance from
       depositor inner join account on depositor.account_number = account.account_number 
        " ;
       $res=mysqli_query($conn,$sql);
       $num = mysqli_num_rows($res);
    
       echo("<br/>");
       echo("<h1>List of depositors</h1>");
       $table = "<table class='list' border='1'>";
       $table .= "<tr>";
       $table .= "<th>Name</th>";
       $table .= "<th>Account No.</th>";
       $table .= "<th>Balance</th>";
       $table .= "</tr>";
       $table .= "<tr>";
       echo $table;
       while($result=mysqli_fetch_assoc($res))
       {
       echo '<tr><th>'. $result['customer_name'] . '</th><th>'.
       $result['account_number'] . '</th><th>' . $result['balance'] . '</th><th><a
         href="account_detail.php?uid='. $result['customer_name'] . ' ">View Details</a></td></tr>   </br>';
       }
       echo '</table>';
       echo '</div>';
       echo'<div class="center" >';
       $sqlq=" select  borrower.customer_name,loan.amount,branch_name  from
       borrower inner join loan on borrower.loan_number=loan.loan_number" ;
       $rest=mysqli_query($conn,$sqlq);
       
       echo("<br/>");
      
       echo("<h1>List of borrowers</h1>");
       $table ="<table class='list' border='1'>";
       $table .= "<tr>";
       $table .= "<th>Name</th>";
       $table .= "<th>loan amount</th>";
       $table .= "<th>Branch Name</th>";
       $table .= "</tr>";
       $table .= "<tr>";
       echo $table;
       while($result2=mysqli_fetch_assoc($rest))
       {
       echo '<tr><th>'. $result2['customer_name'] . '</th><th>'.
       $result2['amount'] . '</th>
       <th>' . $result2['branch_name'] . '</th>
       <th><a href="depositor_detail.php? uname='. $result2['customer_name'] .'">View Details</a></td></tr>   </br>';
       }
       echo '</table>';
       echo '</div>'; 
       ?>
       

</body>
</html>