<?php
    $con = mysqli_connect("localhost", "root", "", "bank");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Detail</title>
    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <!-- style sheet-->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index1.css">

    <link rel="icon" height="50px" href="./images/icon.png">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
.btn-default{
    background-color: #1C3EE3;
    border:4px solid #FF0000;
    color:yellow;
    font-weight: 800;
  }

  .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {
    border: 2px solid #1C3EE3;
    color: blue;
    background-color: transparent;
    font-weight: 800;
    -ms-transform: scale(1.2); 
    transform: scale(1.1);
  }

</style>
<body style="background-color: ##1C3EE3" onload="loader()">

<!--Navbar starts-->
<section class="section1  bg-dark">
        <div class="container">
            <div class="row p-4">
                <div class="col-md-3">
                    <a class="text-decoration-none" href="Arpit.html"><h4 class="text-white">The Bank Of <span class="text-warning">Spark</span></h4></a>
                </div>
                <div class="col-md-8">
                    <div class="navigation">
                        <ul class="list-unstyled d-flex  ml-5 pl-5">
                            <li><a class="text-decoration-none text-warning" href=".\index.php">Home</a></li>
                            <li><a class="text-decoration-none ml-5 text-warning" href=".\transferrecords.php">Transaction</a></li>
                            <li><a class="text-decoration-none ml-5 text-warning" href=".\viewcustomers.php">Customer Details</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1">

                </div>
            </div>
        </div>
    </section>
<!--my navbar-->


 
 <!-- table starts-->
<div class="usertable">

    <h3 class="font-weight-bold" style="text-align:center; color:Red; font-family: 'ui-monospace', sans-serif; font-size:2.2em; padding:2%; letter-spacing: 4px;">Customer Details</h3>
    <table class="table table-hover">
    <thead>
        <tr style="border:3px solid pink;">
            <th scope="col" style="border:3px solid #36363b;">Customer ID</th>
            <th scope="col"style="border:3px solid #36363b;">Name</th>
            <th scope="col"style="border:3px solid #36363b;">Email</th>
            <th scope="col"style="border:3px solid #36363b;">Current Balance</th>
            <th scope="col"style="border:3px solid #36363b;">&nbsp</th>
        </tr>
    </thead>

          <?php
        $sql = "SELECT * FROM `customers`";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<form method ='post' action = 'customer.php'>";
            echo "<td style='background-color: #aaaeaf4d;border-color: #36363b;'>". $row['customer_id'] . "</td>
            <td style='background-color: #aaaeaf4d;border-color: #36363b;'>". $row['name'] . "</td>
            <td style='background-color: #aaaeaf4d;border-color: #36363b;'>". $row['email'] . "</td>
            <td style='background-color: #aaaeaf4d;border-color: #36363b;'>". $row['current_balance'] . "</td>";
           echo "<td style='background-color: #aaaeaf4d;border-color: #36363b;'> <a href='customer.php'><button type='submit'style='background-color:#36363b; border-color:#36363b  ;' class='btn btn-default' name='user'  id='users1' value= '{$row['name']}' >View Customer</button></a></td>";
            echo "</form>";
           echo  "</tr>";
        }
        ?>
          
    </table>
    
</div>
<br><br>

<!-- table ends-->

</body>

<!--footer starts-->
<section class="section3">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-4">
                    <p class="font-weight-bolder">Useful Links</p>
                    <ul class="list-unstyled d-inline-block">
                        <li>
                            <a class="text-decoration-none href="#">About</a><br>
                            <a class="text-decoration-none href="#">Team Member</a><br>
                            <a class="text-decoration-none href="#">Carrer Oppurnities</a><br>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p><b>Social Link</b></p>
                    <a href="#"><i class="fab fa-facebook fa-2x text-dark"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in fa-2x text-dark"></i></a>
                    <a href="#"></a>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </section><!--footer ends-->


<script>
setTimeout(function(){$('#loading').hide();}, 3000); 
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>


</html>