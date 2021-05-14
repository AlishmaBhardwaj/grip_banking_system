<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>About Us</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
        <div class="container about">
            <h2 style="font-family: 'Lato', sans-serif;">ABOUT THE PROJECT</h2>
            <br>
            <ul style="list-style-type:square; font-size:18px">
<li>Start with creating a dummy data in database for upto 10 customers. </li>
<li>Database options: Mysql, Mongo, Postgres, etc. </li>
<li>Customers table will have basic fields such as name, email, current balance etc. Transfers table will record all transfers happened.</li>
<li>Flow: Home Page > View all Customers > Select and View one Customer > Transfer Money > Select customer to transfer to > View all Customers . </li>
<li>No Login Page. No User Creation. Only transfer of money between multiple users. </li>
<li>Host the website at 000webhost, github.io, heroku app or any other free hosting provider. Check in code in gitlab.</li></ul>
        </div>
      </div>

      <footer class="text-center mt-5 py-2">
        <p>Made by <i><b>Alishma Bhardwaj</b></i> &copy May 2021 </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>