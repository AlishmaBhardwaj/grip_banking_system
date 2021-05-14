<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
    body{
	background: linear-gradient(45deg,#3aeaf0, #c0f0fc, #98ddf1, #96e1fc , #63dbff, #18c5fa);
	animation: gradient 16s linear infinite;
    animation-direction: alternate;
	background-repeat: no-repeat;
	height: 700px;
    text-align: center;
    }
    @keyframes gradient {
        0% {background-position: 0%}
        100% {background-position: 100%}
    }
      button{
        background:white;
      }
      
    .text-center{
	    padding: 10px;
	    text-align: center;
    }
    @media only screen and (orientation: portrait){
	*{
		letter-spacing: 1px;
	}
    }
    button:hover{
        background-color:#616C6F;
        color: grey;
      }
    </style>
</head>

<body>
<?php
  include 'navbar.php';
?>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<div class="container">
        <h2 class="text-center pt-4"><b>TRANSFER MONEY</b></h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-sm">
                        <thead style="color : black;">
                            <tr style="border-color:black">
                            <th scope="col" style="border-color:black" class="text-center py-2">Id</th>
                            <th scope="col" style="border-color:black" class="text-center py-2">Name</th>
                            <th scope="col" style="border-color:black" class="text-center py-2">E-Mail</th>
                            <th scope="col" style="border-color:black" class="text-center py-2">Balance</th>
                            <th scope="col" style="border-color:black" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;border-color:black">
                        <td class="py-2" style="border-color:black"><?php echo $rows['id'] ?></td>
                        <td class="py-2" style="border-color:black"><?php echo $rows['name']?></td>
                        <td class="py-2" style="border-color:black"><?php echo $rows['email']?></td>
                        <td class="py-2" style="border-color:black"><?php echo $rows['balance']?></td>
                        <td style="border-color:black" ><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : white; border:grey">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
</body>
</html>