<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Apartment Finder Pro">
    <meta name="author" content="AJARC Software Innovators">
    <link rel="shortcut icon" type="image/x-icon" href="indeximg/ajarc.ico" />
    <link rel="icon" href="indeximg/ajarc.ico" type="image/x-icon">
    <link href="css/css.css" rel="stylesheet">
    <script src="https://www.gstatic.com/firebasejs/3.7.0/firebase.js"></script>
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
    
    <title>Apartment Finder Pro</title>   
    <noscript><meta http-equiv="refresh" content="0; URL=/3490/badbrowser.php"></noscript>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="nbrand" class="navbar-brand" href="#">AJARC</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul id="nbar"class="nav navbar-nav">
                   <li><a id="hl" class="active" href="#home">Home</a></li>
                   <li><a href="libs/about.php">About</a></li>
                   <li><a id="reg"href="libs/login.php">Register/Login</a></li>
                   <li><a href="libs/contact.php">Contact</a></li>
                   <li><a id="btnLogout" class="btn btn-action hide" href="">Logout</a><li>
                </ul>
            </div>
            <script src="js/logout.js"></script>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <h1 class="test">Apartment Finder Pro</h1>

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Apartment Type</p>
                <div class="list-group">
                    <a href="type/studio.php" class="list-group-item">Studio Apartments</a>
                    <a href="type/furnished.php" class="list-group-item">Fully Furnished Units</a>
                    <a href="type/unfurnished.php" class="list-group-item">Unfurnished Units</a>
                </div>

                <p class="lead">Price</p>
                <div class="list-group">
                    <a href="price/range1.php" class="list-group-item">$1500-$2000</a>
                    <a href="price/range2.php" class="list-group-item">$2000-$3000</a>
                    <a href="price/range3.php" class="list-group-item">$3000+</a>
                </div>

                <p class="lead">Proximity To Campus</p>
                <div class="list-group">
                    <a href="proximity/time1.php" class="list-group-item">5 Minutes</a>
                    <a href="proximity/time2.php" class="list-group-item">10 Minutes</a>
                    <a href="proximity/time3.php" class="list-group-item">15+ Minutes</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="carousel/kitc.jpg" alt="Kitchen">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="carousel/livrm.jpg" alt="Living Room">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="carousel/bedrm.jpg" alt="Bedroom">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <?php
                   
                        $con =new mysqli("db4free.net","tcmv41","sqldb4177!","tcmv41");

                        if (mysqli_connect_errno()){
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }

                        // $res2=$con-> query("SELECT * FROM images");
                        //  if ($res2->num_rows > 0) {
                        //     // output data of each row
                        //     while($row = $res2->fetch_array(MYSQLI_ASSOC)) {
                        //         echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['picture'] ).'"/>';
                        //     }
                        //  }

                        $res=$con-> query("SELECT * FROM apartment");

                        if ($res->num_rows > 0) {
                            // output data of each row
                            while($row = $res->fetch_array(MYSQLI_ASSOC)) {
                            $image=$row["img"];
                            $type=$row["name"];
                            $aptid=$row["aptID"];
                            $r=rand ($min=10 ,$max=30);
                            echo"
                            <div class='col-sm-4 col-lg-4 col-md-4'>
                                <div class='thumbnail'>
                                    <img src='indeximg/$image.jpg' alt=''>
                                    <div class='caption'>
                                        <h4 class='pull-right'>"."$". $row["price"].".00"."</h4>
                                        <h4><a href='apartments/$aptid.php'>" . $row["name"]."</a></h4
                                        <p>" . $row["msg"]."</p>    
                                    </div>
                                    <div class='ratings'>
                                        <p class='pull-right'>$r reviews</p>
                                        <p> 
                                            <span class='glyphicon glyphicon-star'></span>
                                            <span class='glyphicon glyphicon-star'></span>
                                            <span class='glyphicon glyphicon-star'></span>
                                            <span class='glyphicon glyphicon-star'></span>
                                            <span class='glyphicon glyphicon-star-empty'></span>
                                        </p>
                                    </div>
                                </div>
                            </div>";
                                }
                            }else {
                                echo "0 results";
                            }


                    ?>

                </div>

            </div>

        </div>
    <!-- /.container -->

    <div class="container">
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Apartment Finder Pro 2017</p>
                </div>
            </div>
        </footer>

    </div>
    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>


</html>
