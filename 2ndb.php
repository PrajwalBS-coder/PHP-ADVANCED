  
<?php
    if($_POST)
    {
        $name = $_POST['name'];
        $seat = $_POST['seat'];
        $meal = $_POST['meal'];
    }
?>

<html>
<head>
    <title>Cookies</title>
</head>
<body style="background-image: url('h3.jpg');color:tomato";>

<div id="second"  style="text-align:left">
   <center> <h1>------AMIN'S FLIGHTS------</h1>
    <BR>
    Thankyou for choosing our Flights<br>
    The cookie values are<br>
    <?php
        
echo "Name: ".$_COOKIE['name'];
echo '<br>';
echo "Seat: ".$_COOKIE['seat'];
echo '<br>';
echo "Food: ".$_COOKIE['food'];
?>
 </center> 
</div>
</body>
</html>