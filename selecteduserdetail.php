<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAKE TRANSACTION</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/transfer.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
	    button:hover{
			transform: scale(1.1);
			color:white;
		}

    </style>
</head>

<body>
 <center>
<?php
  include 'navbar.php';
?>

	<div class="container">
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
           
        <div class="background">
        <div class="container1">
      <div class="screen">
      <div class="screen-body" style="background:#f0f0f0; box-shadow: 3px 3px 3px rgba(0, 0, 0, .25);border-radius:20px;">
        <div class="screen-body-item left">
          <img class="img-fluid" src="img/user_1.png" style="width:90%;height:100%;border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item" >
        <div class="app-form-group" style="margin-top:30px;">
            <b style="font-size:18px;">User details</b>
            </div>
            <div class="app-form-group">
            <?php echo $rows['name'] ?>
            </div>
            <div class="app-form-group">
            <?php echo $rows['email'] ?>
            </div>
            <div class="app-form-group">
            <?php echo $rows['balance'] ?>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
    </div>

                <!--Transfering Card-->
                <form method="post" name="tcredit" class="tabletext" ><br>
    <div class="background">
        <div class="container2">
      <div class="screen">
      <div class="screen-body" style="background:#f0f0f0; box-shadow: 3px 3px 3px rgba(0, 0, 0, .25);border-radius:20px;padding:5px">
        <div class="screen-body-item" style="padding:15px">
        <div class="app-form-group" style="margin-top:10px;">
            <center><b style="font-size:18px; align-self: center;">Tansfer Money</b></center>
            </div>
            <div class="app-form-group">
                <label style="color : black;">Transfer To:</label>
                 <select name="to" class="form-control" required>
                    <option value="" disabled selected>Choose</option>
                        <?php
                            include 'config.php';
                            $sid=$_GET['id'];
                            $sql = "SELECT * FROM users where id!=$sid";
                            $result=mysqli_query($conn,$sql);
                            if(!$result)
                            {
                                echo "Error ".$sql."<br>".mysqli_error($conn);
                            }
                            while($rows = mysqli_fetch_assoc($result)) {
                            ?>
                            <option class="table" value="<?php echo $rows['id'];?>" >
                
                                <?php echo $rows['name'] ;?> (Balance: 
                                <?php echo $rows['balance'] ;?> ) 
               
                        </option>
                         <?php 
                            } 
                        ?>
                    <div>
                    </select>
                    </div>
            <div class="app-form-group">
                    <label style="color : black;">Amount:</label>
                    <input type="number" class="form-control" style="font: weight 100px;" name="amount" required>   
            </div>
            <div class="app-form-group">
                <div class="text-center" >
                    <button class="btn mt-3 app-form-button" name="submit" type="submit" id="myBtn" >Transfer</button>
                </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>
    </div>
    </div>
    </form>  
    </div>
</center>
</body>
</html>