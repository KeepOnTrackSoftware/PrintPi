<html lang="en"><head>
    <title>Fixed Top Navbar Example for Bootstrap</title>
    <link rel="import" href="bootstrap.php">
  </head>
  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PrintPi</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#contact">Camera & Controls</a></li>
            <?php
            if ($signedin != true) {
                echo '<li><a href="#">Sign In</a></li>';
            }else
            echo'
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome '.$username.'<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Shutdown</a></li>
                <li><a href="#">SSH</a></li>
                <li><a href="#">User Account Control</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Timelapses</a></li>
              </ul>
            </li>';
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </body></html>
