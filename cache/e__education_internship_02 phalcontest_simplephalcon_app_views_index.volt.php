<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>
    <script src="js/app.js" defer></script>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="img/short-home.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <?= $this->assets->outputCss() ?>
</head>

<body>
    <header>
        <div class="grid-contain-header">
            <div></div>
            <div>
                <div><img id="star-icon" src="img/icon-star.png" alt=""></div>
                <div class="header-title">Homestay</div>
                <div class="header-desc">Book your stay</div>
            </div>

            <ul class="navbar-nav ml-auto">

                <div class="d-flex login-sys">
                    <div class="nav-item p-2 login-txt">
                        <a class="nav-link" href="#">Login</a>
                    </div>
                    <div class="nav-item p-2 regis-txt">
                        <a class="nav-link" href="#">Register</a>
                    </div>
                </div>

                <div class="d-flex login-sys">
                    <div class="nav-item dropdown pt-3 username-login">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right drop-txt-size" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="/manage">Homestay management</a>
                            <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">

                            </a>


                            <form id="logout-form" action="#" method="POST" style="display: none;">
                            </form>
                        </div>
                    </div>

                </div>
            </ul>

        </div>
    </header>
    <nav>
        <div class="contain-nav">
            <div class="nav-menu"><a id="menu-home" href="/">Home</a></div>
            <div class="nav-menu"><a href="#">About</a></div>
            <div class="nav-menu"><a href="#">Contact</a></div>
        </div>
    </nav>


    <?= $this->getContent() ?>


    <footer>
        <div class="grid-contain-footer">
            <div>
                <div><img id="star-icon" src="img/icon-star.png" alt=""></div>
                <div class="footer-title">Homestay</div>
                <div class="footer-desc">Book your stay</div>
            </div>
            <div>
                <div class="footer-info">Subscribe</div>
                <form action="">
                    <div class="sub-zone"><input id="sub-email" type="email" placeholder="Enter your email"></div>
                    <input id="sub-submit" type="submit">
                </form>
            </div>
            <div>
                <div class="footer-info push-up">Contact</div>
                <div class="footer-info-contact mb-5">
                    <img src="img/icon-email.png" alt="">
                    <img src="img/icon-facebook.png" alt="">
                    <img src="img/icon-twitter.png" alt="">
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery first, then Popper.js, and then Bootstrap's JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>