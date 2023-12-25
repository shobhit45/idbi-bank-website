<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function mean()
{
$sum = 0;
$param_count = func_num_args();
for($i = 0; $i < $param_count; $i++)
$sum += func_get_arg($i);
$mean = $sum / $param_count;
echo "<br> Mean: {$mean}";
}
mean(10,20,30,40);
mean(12.5,34,45.7,78,123,56);

echo "<b>" .add_numbers(3). "</b><br/>";
echo "<b>" .add_numbers(3, 2,5). "</b><br/>";
echo "<b>" .divide(3,2.0). "</b><br/>";
function add_numbers($var1 = 0, $var2 = 0, $var3 = 0)
{

return $var1 + $var2 + $var3;

}
function divide($dividee, $divider)
{

if($divider == 0)
{
//can't divide by 0
return false;
}
$result = $dividee/$divider;
return $result;

}
?>

<?php
$current=time();
echo "The current time is: $current\n"; ?>
<?php
$time1 = time();
sleep(1);
$time2 = time();
$x = $time2 - $time1;
echo "Difference is: “ .$x. “ seconds";
?>
<?php
echo date("d/m/y") . "<br/>";
echo date("d-m-y") . "<br/>";
echo date("h:m:s") . "<br/>";
echo date("l"); ?><?php
echo date("d/m/y") . "<br/>";
echo date("d-m-y") . "<br/>";
echo date("h:m:s") . "<br/>";
echo date("l"); ?><?php
echo(strtotime("now") . "<br>");
echo(strtotime("21 October 2005") . "<br>");
echo(strtotime("+5 hours") . "<br>");
echo(strtotime("+1 week") . "<br>");
echo(strtotime("+1year 1 week 3 days 7 hours 5 seconds") . "<br>");
echo(strtotime("next Monday") . "<br>");
echo(strtotime("last Sunday")); ?>
<?php
$_1=strtotime('1981-12-17');
echo date('Y-m-d,H:i:s',$_1)."<br>";
echo date('l, F jS,Y,H:i:s',$_1)."<br>";
echo date('l, F jS,Y,H:i:s')."<br>";
echo date('c')."<br>";
echo date('r')."<br>";
?>
<?php
$my_DoB=strtotime("2013/06/19 4:23:15");
$DoB_array = getdate($my_DoB);
foreach($DoB_array as $key => $val)
print "$key = $val <br>";

echo "<br>---------------------<br>";
echo "My DoB is :"
.$DoB_array['mday']. "/"
.$DoB_array['mon']. "/"
.$DoB_array['year'];
echo "<br>---------------------<br>";
?>

<center><h3>USING COOKIES</h3></center>
<hr/>
<?php
$cookie_name = "user";
$cookie_value = "PHP Programmer";
if (isset($_COOKIE[$cookie_name]))
echo "<center>Welcome

<b>".$_COOKIE[$cookie_name]."</b>!</center> <br />";
else
{

setcookie($cookie_name,$cookie_value,time()+30);
echo "<center>Cookie has been set !! try next time!!</center>";

} ?>
<center><h2>USING SESSIONS</h2></center>
<center><h5><u>A Pagevisit Counter</u></h5></center>
<hr/>
<?php
session_start();
if(isset($_SESSION['visits']))
{

$_SESSION['visits']=$_SESSION['visits']+1;
if($_SESSION['visits']>20)
{

session_destroy();
exit();

}

}
else

$_SESSION['visits']=1;

echo "<center><h3>Total visits=". $_SESSION['visits']."</h3></center>";
?>

</body>
</html>
