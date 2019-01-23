<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Buchs Enrico">

    <title><?php echo $this->title; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/display.css">

    <!-- CSS for Logos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
      integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
      crossorigin="anonymous"></script>

    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/datepicker-de.js"></script>

  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php?page=index">WISSForum</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php?page=forum">Forum <span class="sr-only">(current)</span></a>
            </li>




            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Shop
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="index.php?page=shop">Shop <span class="sr-only">(current)</span></a>
              <a class="dropdown-item" href="index.php?page=warenkorb">Warenkorb <i class="fas fa-shopping-cart"></i></a>
            </div>
            </li>



            <li class="nav-item">
              <a class="nav-link" href="index.php?page=kontakt">Kontakt</a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>-->
          </ul>

          <?php

          use wiss\helper\Session;

          if(Session::has('auth')){
            $username = Session::get('auth')->username;
            echo <<<EOF
              <div style="padding-right:1%;">
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Willkommen {$username}
                </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="index.php?page=auth&action=edit">Profil bearbeiten</a>
                    <a class="dropdown-item" href="index.php?page=auth&action=private">Privatsphäre</a>
                    <a class="dropdown-item" href="index.php?page=auth&action=logout">Logout</a>
                  </div>
                </div>

                <!--<a href="index.php?page=auth&action=logout">Logout</a>-->
              </div>
EOF;
          }
           ?>

          <form class="form-inline mt-2 mt-md-0" action="" method="get">
            <input type="hidden" name="page" value="search">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>
    <!-- Begin page content -->
    <main role="main" class="container">
      <?php echo $content; ?>
    </main>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">&copy; 2018 - WISS Modul 307</span>
      </div>
    </footer>


  </body>
</html>
