<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="dashboard2.css">
</head>

<body>
    <div class="bgimg">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand font-weight-bold mx-auto" href="#">Hey, <?php echo $_SESSION['email']; ?>!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblenavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="collapsiblenavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a class="nav-link text-white" href="updateprofile.php">Update Profile</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link text-white" href="take_feedback.php">Feedback</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link text-white" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <section>
            <div class="posts text-center">
                <h1>ONLINE MATRIMONIAL PORTAL</h1>
            </div>
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top" src="https://st.depositphotos.com/1432405/4024/v/950/depositphotos_40241967-stock-illustration-blue-profile-icon.jpg" alt="Error 4O4">
                    <div class="card-body">
                        <h4 class="card-title">View Profile</h4>
                        <p class="card-text"> View your profile details
                        </p>
                        <a class="class-link" href="viewprofile.php"> Click here </a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="data:image/png;base64,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" alt="Error 4O4">
                    <div class="card-body">
                        <h4 class="card-title">Set Preferences</h4>
                        <p class="card-text">Set choices that you're looking for in your partner.
                        </p>
                        <a class="class-link" href="setpreference.php"> Click here </a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://d2c5clk9k73hzl.cloudfront.net/public/classified/0b/32/d880e0fe2994b33cacfdfa464d8249f9.png" alt="Error 4O4">
                    <div class="card-body">
                        <h4 class="card-title">View Suggested Profiles</h4>
                        <p class="card-text">View people and details that you may like.
                        </p>
                        <a class="class-link" href="suggestprofile.php"> Click here to get </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-center text-lg-start">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-white">
                        <h5 class="text-uppercase">About Us!</h5>

                        <p>
                            
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-white">Webpages</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white"></a>
                            </li>
                            <li>
                                <a href="#!" class="text-white"></a>
                            </li>
                            <li>
                                <a href="#!" class="text-white"></a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-0 text-white">Social</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="text-white">Instagram</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Facebook</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Twitter</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Youtube</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3 text-white" style="background-color: rgba(0, 0, 0, 0.2)">
                <a class="text-white" href="#/"></a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
</body>

</html>