<html lang="en">
<head>

    <style>
        /* nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            --c: goldenrod;
            color: black;
            font-size: 16px;
            border: 0.2em solid black;
            border-radius: 0.5em;
            width: 9em;
            height: 2em;
            text-transform: uppercase;
            font-weight: bold;
            font-family: sans-serif;
            letter-spacing: 0.1em;
            text-align: center;
            line-height: 1.5em;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: 0.5s;
            margin: 1em;
        }

        nav ul li span {
            position: absolute;
            width: 25%;
            height: 100%;
            background-color: black;
            transform: translateY(150%);
            border-radius: 50%;
            left: calc((var(--n) - 1) * 25%);
            transition: 0.5s;
            transition-delay: calc((var(--n) - 1) * 0.1s);
            z-index: -1;
        }

        nav ul li:hover {
            color: white;
        }

        nav ul li:hover span {
            transform: translateY(0) scale(2);
        }

        nav ul li span:nth-child(1) {
            --n: 1;
        }

        nav ul li span:nth-child(2) {
            --n: 2;
        }

        nav ul li span:nth-child(3) {
            --n: 3;
        }

        nav ul li span:nth-child(4) {
            --n: 4;
        } */

        button {
          background-image: white;
          width: 9em;
          height: 2em;
          
          border-color: transparent;
          color: black;
          transition: 0.5s;
            transition-delay: calc((var(--n) - 1) * 0.5s);
            z-index: -1;
          
        }
        button:hover {
          color: white;
          background-color: black;
          font-weight: bold;
          border-radius: 50px;

        }

        .bg-image {
          background-image: url("https://www.pegipegi.com/travel/wp-content/uploads/2020/05/malang.jpg");
          filter: blur(8px);
        }
        
    </style>



  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body style="background-image: url('https://www.pegipegi.com/travel/wp-content/uploads/2020/05/malang.jpg'); background-repeat: no-repeat;
  background-size: cover;"> 


        <?php 
            $session = session();
            $login = $session->getFlashdata('login');
            $username = $session->getFlashdata('username');
            $password = $session->getFlashdata('password');
        ?>
        
        <div class="bg-image"></div>

  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0" >
    <div class="container">
      <div class="card login-card" style="background-color: transparent; border-color: transparent">
        <div class="row no-gutters">
          <div class="col-md-5">
            <br>
            <img src="/img/login.jpg" alt="login" class="login-card-img" style="padding-right: 20px;">

          </div >

          <div class="col-md-7" style="padding-left: 50px;"> 
            <div class="card-body">

              <div class="brand-wrapper" style="font-weight: bold">
                <img src="/img/html.png" alt="Hotel" class="logo" style="width:50px; height:50px; margin-bottom: 20px; margin-right: 10px"> Selamat Datang User
              </div>
              
              <p class="login-card-description">Sign into your account</p>

              <?php if($username){ ?>
                  <p style="color:red"><?php echo $username?></p>
              <?php } ?>
              
              <?php if($password){ ?>
                  <p style="color:red"><?php echo $password?></p>
              <?php } ?>
              
              <?php if($login){ ?>
                  <p style="color:green"><?php echo $login?></p>
              <?php } ?>
              
              <form method="post" action="/auth/valid_login">
                  <div class="form-group">
                    <label for="username" class="sr-only">Username</label>
                    <input style="border: 0.2em solid black" type="text" name="username"  id="username" class="form-control" placeholder="Username">
                  </div>

                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input style="border: 0.2em solid black" type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>

                  <button type="submit" name="login">
                  Login
                  </button>

                  <!-- <nav>
                    <center>
                    <ul>
                        <li>
                        Login
                        <span></span><span></span><span></span><span></span>
                        </li>
                    </ul>
                    </center>
                  </nav> -->

                </form>

                <p style="font-weight: bold" class="login-card-footer-text">
                Don't have an account? 
                <a href="/auth/register" class="text-reset">Register here
                </a></p>

            </div>
          </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body></html>