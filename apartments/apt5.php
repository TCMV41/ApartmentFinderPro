<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Apartment Finder Pro">
    <meta name="author" content="AJARC Software Innovators">
    <link rel="shortcut icon" type="image/x-icon" href="../indeximg/ajarc.ico" />
    <link rel="icon" href="../indeximg/ajarc.ico" type="image/x-icon">
    <link href="../css/css.css" rel="stylesheet">
    <link href="../css/apt.css" rel="stylesheet">
    <script src="https://www.gstatic.com/firebasejs/3.7.0/firebase.js"></script>
    <script src="../js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="../js/sweetalert.css">


    <title>Unurnished Apartments</title>
    <noscript><meta http-equiv="refresh" content="0; URL=/3490/badbrowser.php"></noscript>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/shop-homepage.css" rel="stylesheet">

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
                   <li><a href="../index.php">Home</a></li>
                   <li><a href="../libs/about.php">About</a></li>
                   <li><a id="reg" href="../libs/login.php">Register/Login</a></li>
                   <li><a href="../libs/contact.php">Contact</a></li>
                   <li><a id="btnLogout" class="btn btn-action hide" href="">Logout</a><li>
                </ul>
            </div>
            <script src="../js/logout.js"></script>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <h1 class="test">Apartment Finder Pro</h1>

        <div class="row">

            <div class="col-md-3">
                <br>
                <p class="lead">Apartment Type</p>
                <div class="list-group">
                    <a href="../type/studio.php" class="list-group-item">Studio Apartments</a>
                    <a href="../type/furnished.php" class="list-group-item">Fully Furnished Units</a>
                    <a href="../type/unfurnished.php" class="list-group-item active">Unfurnished Units</a>
                </div>

                <p class="lead">Price</p>
                <div class="list-group">
                    <a href="../price/range1.php" class="list-group-item">$1500-$2000</a>
                    <a href="../price/range2.php" class="list-group-item active">$2000-$3000</a>
                    <a href="../price/range3.php" class="list-group-item">$3000+</a>
                </div>

                 <p class="lead">Proximity To Campus</p>
                <div class="list-group">
                    <a href="../proximity/time1.php" class="list-group-item active">5 Minutes</a>
                    <a href="../proximity/time2.php" class="list-group-item">10 Minutes</a>
                    <a href="../proximity/time3.php" class="list-group-item">15+ Minutes</a>
                </div>
            </div>


            <!-- <div class="gallery"> -->
            <div class="col-lg-9" align="center">
                 <div class="thumbnails">
                    <br>
                    <img onmouseover="preview.src=img1.src" name="img1" src="../indeximg/compressjpeg/apartment5/apt5.jpg" alt=""/>
                    <img onmouseover="preview.src=img2.src" name="img2" src="../indeximg/compressjpeg/apartment5/commonroom.jpg" alt=""/>
                    <img onmouseover="preview.src=img3.src" name="img3" src="../indeximg/compressjpeg/apartment5/kitchen.jpg" alt=""/>
                    <img onmouseover="preview.src=img4.src" name="img4" src="../indeximg/compressjpeg/apartment5/bedroom.jpg" alt=""/>    
                </div>
                <div class="preview" align="center">
                    <img name="preview" src="../indeximg/ajarc.jpg" alt=""/>
                </div>
                    <br><br><br><br>
                </div>
            </div>
                       

                        
           <?php
           
                $con =new mysqli("localhost","project","3490","project");

                $res=$con-> query("SELECT * FROM apartment WHERE aptID='apt5'");

                if ($res->num_rows > 0) {
                    // output data of each row
                    while($row = $res->fetch_array(MYSQLI_ASSOC)) {
                        $folder=$row["fldr"];
                        $image=$row["img"];
                        $apt=$row["aptID"];
                        $price=$row["price"];
                        echo"
                            ";
                        }
                    }else {
                        echo "0 results";
                }   

                if (mysqli_connect_errno()){
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                     
                $res1=$con-> query("SELECT * FROM landlord WHERE landlordID='5'");

                if ($res1->num_rows > 0) {
                    // output data of each row
                        while($row1 = $res1->fetch_array(MYSQLI_ASSOC)) {
                              
                        echo"
                        <div class='overview'>
                            <h4>Landlord Name: ". $row1["landlordName"]."</h4> 
                            <h4>Address: ". $row1["address"]."<h4>
                            <h4>Telephone: ". $row1["telephone"]." </h4>
                            <h4>Email: ". $row1["email"]."</h4>
                            <h4>Price: "."$". $price.".00"."</h4>
                            <iframe class='map'
                                width='400'
                                height='300'
                                frameborder='0' style='border:0'
                                src='https://www.google.com/maps/embed/v1/search?key=AIzaSyDJzTd1_Q6qX-Z2dizhXutNzOs7T__tWsk&q=Sankar+street+st+augustine'>
                            </iframe>
                        </div>";
                        }
                    }else{
                        echo "0 results";
                }   

            ?>
                </div>
                

            </div>

        </div>
         <div class="bbtn" onclick="goBack()" >
            <img src='../indeximg/back.png'>
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

    
    <script>
        function goBack() {
            window.history.back()
        }
    </script>
    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>


</html>