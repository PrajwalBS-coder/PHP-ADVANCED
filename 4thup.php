<?php
include 'con_db.php';
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
    <!-- CSS only -->

</head>
<body style="background-image: url('h3.jpg');color:tomato;">
    <center>
        <form method="post" action="up2.php">
    <table border="1">
        <tr>
            <th colspan="3" style="text-align: center;"> Update</th>
        </tr>   

        <tr>
            <th>Enter Passport Number</th><th><input type="text" name="passno" required></th>
        </tr>
        <tr>
            <th colspan="3" style="text-align:center"><input type="submit" name="submit" value="Update"></th>
        </tr>
    </table>
</form>
    </center>
</body>
</html>
<?php

if(isset($_POST["submit"]))
{
    $pno  =$_POST['passno'];
    $q =mysqli_query($con, "select * from pass WHERE passno = $pno ");
    $row=mysqli_fetch_array($q);
    if($row<0)
    {

        
    }

}

?>