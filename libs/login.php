<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Apartment Finder Pro">
    <meta name="author" content="AJARC Software Innovators">
    <link rel="shortcut icon" type="image/x-icon" href="ajarc.ico" />
    <link rel="icon" href="ajarc.ico" type="image/x-icon">
    <link href="../css/css.css" rel="stylesheet">
    <link href="../js/sweetalert.css" rel="stylesheet">
    <script src="../js/sweetalert-dev.js"></script>
    
    <title>Firebase Web Login</title>
    <noscript><meta http-equiv="refresh" content="0; URL=/3490/badbrowser.php"></noscript>
    <script src="https://www.gstatic.com/firebasejs/3.7.0/firebase.js"></script>

    <link href="../css/style.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/shop-homepage.css" rel="stylesheet">
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
                <ul id="nbar" class="nav navbar-nav">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a id="hl" class="active" href="#login">Register/Login</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <div class="frm">
        <!--<form>-->
            <h1 class="words">Enter Your Login Information!</h1>

            <label for="txtEmail">E-Mail: </label>
            <input id="txtEmail" type="email" placeholder="E-Mail">

            <label for="txtPassword">Password: </label>
            <input id="txtPassword" type="password" placeholder="Password">

            <button id="btnLogin" class="btn btn-action">Login</button>

            <a id="signupRedirect"class="btn" href="register.php">Sign Up</a>

            <button id="btnSignUp" class="btn btn-secondary hide">Sign Up</button>

            <button id="btnLogout" class="btn btn-action hide">Log Out</button>
            
            <button id="googleLogin"><img src="googlesignin.png"></button>

            <button id="fbLogin"><img src="fbsignin.png"></button>
        <!--</form>      -->
    </div>


    <script src="../js/app.js"></script>

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

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>