<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x321.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x161.png">
    <link rel="manifest" href="assets/site.webmanifest">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Sparks Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        #lock {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 20;
            background: rgb(15, 238, 231) center no-repeat;
            text-align: center;
        }

        @media screen (orientation:landscape) {
            #lock {
                display: none;
            }

            #container {
                display: block;
            }
        }

        @media screen and (orientation:portrait) {
            #lock {
                display: block;
            }

            #container {
                display: none;
            }
        }

        /* Navbar */
        .navbar {
            background-color: #0FEEE7;
            color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 18px;
            font-weight: bold;
        }

        .navbar-brand img {
            height: 80px;
            margin-left: 25px;
            margin-top: 10px;
        }

        .navbar-nav .nav-link {
            margin-left: 15px;
        }

        .navbar-nav .nav-link:hover {
            text-decoration: underline;
            color: #0FEEB5;
        }

        /* Container Large */
        .container-large {
            background-color: #009EFF;
            color: #fff;
            padding: 60px 20px;
            border-radius: 15px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Button */
        .mybtn {
            margin-bottom: 10px;
            border-radius: 30px;
            font-weight: bold;
            color: #fff;
            background-color: #7E2553;
            border-color: #BB8493;
        }

        .mybtn:hover {
            background-color: #BB8493;
            border-color: #BB8493;
        }

        .mybtn:active {
            background-color: #0FEEB5;
            border-color: #0FEEB5;
        }
    </style>
</head>

<body style="background-color: #704264">

    <div id="container">
        <!-- PHP include -->
        <?php include 'spin.php'; ?>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #49243E;">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand">
            <img src="assets/lo4.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav ">
                    <li class="nav-item nav-links">
                        <a class="nav-link active text-nowrap" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="all_cust.php">View All Customers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="send_money.php">Send Money</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="contact_us.php">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="about_us.php">About Us</a>
                    </li>
                </ul>
            </b>
        </div>
    </div>
</nav>




        <!-- Script and closing tags -->
        <img src="assets/abstbg3.png" alt="" style="width:100%; position:absolute; z-index:-1">
        <center style="margin:60px 0px 20px 0px;">
            <div class="container"
                style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
                <h1 style="text-shadow:2px 2px 2px gray; color:white;"><b>Welcome! Choose a service.</b></h1>
                <div class="container" style="margin:30px 0px 20px 0px;">
                    <div class="row">
                        <div class="col-lg">
                            <div
                                style="background-color:#8F5B81; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                                <i class="fas fa-users fa-7x"></i><br><br>
                                <a href="all_cust.php"><button type="button" class="btn btn-outline-light mybtn">View
                                        Customers</button></a><br>
                                <h6>Here, you can watch every customer of the bank.</h6>
                            </div>
                        </div>

                        <div class="col-lg">
                            <div
                                style="background-color:#8F5B81; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                                <i class="fas fa-comments-dollar fa-7x"></i><br><br>
                                <a href="send_money.php"><button type="button"
                                        class="btn btn-outline-light mybtn">Transfer
                                        Money</button></a><br>
                                <h6>Here, you can send money from your account.</h6>
                            </div>
                        </div>

                        <div class="col-lg">
                            <div
                                style="background-color:#8F5B81; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                                <i class="fas fa-coins fa-7x"></i><br><br>
                                <a href="check_blc.php"><button type="button"
                                        class="btn btn-outline-light mybtn">Check
                                        Balance</button></a><br>
                                <h6>Here, you can check the remaining balance in your account.</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </center>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous">
        </script>
        <script>
            $(document).ready(function () {
                $(".zoomin").animate({
                    width: '400px'
                }, '5000', 'linear');
                $(".zoomfont").animate({
                    fontSize: '71px'
                }, '5000', 'linear');
            });
        </script>

    </div>
</body>

</html>
