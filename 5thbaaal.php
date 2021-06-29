<?php
include 'con_db.php';
if($_POST)
    {
        $acno  =$_POST['acno'];
        $q =mysqli_query($con, "select * from cust WHERE acno = $acno ");
        $row=mysqli_fetch_array($q);
        if($row==0){
            echo '<script>alert("Enter the valid account Number ");window.location="p5withdraw.php"</script>';
        }

    }
?>

<html>
<head>
    <title>Random</title>
    <style type="text/css">
        p {
color:white;
font-size:50px;
position: absolute;
top: 20%;
left: 40%;
transform: translate(-50%, -50%);
}
    </style>
   
</head>
<body style="background-image: url('h3.jpg');color:tomato;">
    <center>
        <form method="post" action="depo.php">
    <table border="1" style="text-align:left;">
        <tr>
            <th colspan="2" style="text-align:center;"> Deposit</th>
        </tr>
        <tr>
            <th>Acccount Number</th><th><input type="number" name="acno" readonly="" value="<?php echo $acno?>"></th>
        </tr>
        <tr>
            <th>Balance</th><th><input type="number" name="amt" readonly="" value="<?php echo $row['bal']?>"></th>
        </tr> 
        <tr>
            <th colspan="3" style="text-align:center"><a href="p5.php" class="btn btn-dark">Back</a></th>
        </tr> 
    </table>
</form>
    </center>
</body>
</html>
