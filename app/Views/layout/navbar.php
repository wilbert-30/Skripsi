<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light " style="padding:20px; margin-bottom:20px; background-image: linear-gradient(to right, #D500F9, #FFD54F);">
        <div class="container">

            <?php $session = session()?>
            <h4 style="background-color: black; padding: 10px 10px 10px 10px; border-radius: 50px">
            Welcome 
            <?php echo $session->get('username')?></h4>

            <a class="navbar-brand" href="/komik" style="font-weight: bold; margin-left: 40px">NAMA HOTEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="font-weight: bold">
                <li class="nav-item active">
                    <a class="nav-link" href="/pages/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/komik">Hotel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orang">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/auth/logout">Logout</a>
                </li>
                </ul>
                
                <!-- <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>

            <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" style="font-weight: bold">
                    <a class="nav-link" href="/pages/about">About</a>
                    <a class="nav-link" href="/pages/contact">Contact Us</a>
                    <a class="nav-link" href="/komik">Komik</a>
                    <a class="nav-link" href="/orang">Orang</a> -->

                    <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
                </div>
            </div>
        </div>
    </nav>