
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Bank Of Spark</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style>
        .carousel-inner img {   
            width: 100%;
            
        }

        .carousel-indicators li {
            width: 10px;
            height: 10px;
            border-radius: 100%;
        }
    </style>
</head>
<body>
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
    <section class="section2">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ol>
    
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image1.jpg" alt="Los Angeles" height="500px">
                    
                </div>
                <div class="carousel-item">
                    <img src="image2.jpg" alt="Chicago" height="500px">
                </div>
                <div class="carousel-item">
                    <img src="image3.jpg" alt="Chicago" height="500px">
                </div>
            </div>
    
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>
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
    </section>
</body>
</html>