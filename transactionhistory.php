<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
        
body{
	background: linear-gradient(45deg,#3aeaf0, #c0f0fc, #98ddf1, #96e1fc , #63dbff, #18c5fa);
	animation: gradient 16s linear infinite;
    animation-direction: alternate;
	background-repeat: no-repeat;
	height: 700px;
    text-align:center;
}
@keyframes gradient {
    0% {background-position: 0%}
    100% {background-position: 100%}
}
    </style>
</head>

<body style="background-color : #ffb3b3;">

<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4" style="color : black;"><b>Transaction History</b></h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-sm table-condensed">
        <tr>
            <thead style="color : black;">
            <tr style="border-color:black">
            <th scope="col" style="border-color:black" class="text-center py-2">Sl No</th>
            <th scope="col" style="border-color:black" class="text-center py-2">Sender</th>
            <th scope="col" style="border-color:black" class="text-center py-2">Receive</th>
            <th scope="col" style="border-color:black" class="text-center py-2">Amount</th>
            <th scope="col" style="border-color:black" class="text-center py-2">Date & Time</th>
            </thead>
        </tr>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2" style="border-color:black"><?php echo $rows['sno']; ?></td>
            <td class="py-2" style="border-color:black"><?php echo $rows['sender']; ?></td>
            <td class="py-2" style="border-color:black"><?php echo $rows['receiver']; ?></td>
            <td class="py-2" style="border-color:black"><?php echo $rows['balance']; ?> </td>
            <td class="py-2" style="border-color:black"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>