<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid" style="align:center;">
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>GRIP BANKING SYSTEM</h1>
                </div>
              </div>   
            </div>

      <center>
            <div class="row activity text-center" style="align-self:center;">
            
              <div class="card left">
                <img src="img/info.png" alt="info" style="width:100%">
                <div class="cont">
                <a href="about.php"><button style="background-color : #0044cc;">ABOUT US</button></a>
                </div>
              </div>

              <div class="card center">
                <img src="img/user.png" alt="User" style="width:100%">
                <div class="cont">
                <a href="createuser.php"><button style="background-color : #0044cc;">CREATE A USER</button></a>
                </div>
              </div>

              <div class="card center">
                <img src="img/transfer.png" alt="Make transaction" style="width:100%">
                <div class="cont">
                <a href="transfermoney.php"><button style="background-color : #0044cc;">TRANSACTION</button></a>
                </div>
              </div>

              <div class="card right">
                <img src="img/history.png" alt="Transaction" style="width:100%">
                <div class="cont">
                <a href="transactionhistory.php"><button style="background-color : #0044cc;">TRANSACTION HISTORY</button></a>
                </div>
              </div>
              </div>
 </body>
</html>