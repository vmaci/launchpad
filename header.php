 <!-- Getting the page of the name to use as and ID -->
  <?php 
		$filename = explode( "/", $_SERVER[PHP_SELF] );
		$id_name = explode( ".", $filename[2]);
		$id = $id_name[0];
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="assets/ico/griz_favicon.png">
  <title>Launchpad 2014-2015 Beta</title>
  
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  
  <!-- Bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <script type="text/javascript" src="js/collapse.js"></script> 
  
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
      <script src="../assets/js/respond.min.js"></script>
    <![endif]-->
  
  <!-- Custom styles for this template -->
  <link href="css/launchpad.css" rel="stylesheet">
  <link href="css/fonts.css" rel="stylesheet">
  
  <!-- Conditional stylesheets -->
  <?php if($id == "index"){ echo "<link href=\"css/dashboard.css\" rel=\"stylesheet\">"; } ?>
  <?php if($id == "campaigns"){ echo "<link href=\"css/campaigns.css\" rel=\"stylesheet\">"; } ?>
  </head>
  
  <body id="<?php echo $id; ?>">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="row">
          <div id="main-nav" class="col-xs-12 col-md-12 col-lg-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-nav">
              	<span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><img src="assets/dash/lp-logo.png" alt="Grizzard Launchpad Logo" width="280" height="17" border="0" /></a>
            </div>
            
            <div id="top-nav" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="<?php if($id=="index"){ echo "active"; } ?>"><a href="index.php">Dashboard</a></li>
                <li class="<?php if($id=="campaigns"){ echo "active"; } ?>"><a href="campaigns.php">Campaigns</a></li>
                <li class="<?php if($id=="griz-u"){ echo "active"; } ?>"><a href="griz-u.php">Grizzard U</a></li>
              </ul>
            </div>
            
            <div id="navbar-user-info">
              <div class="contact-name">
                <p>Major Chris Flanagan</p><!--Will grab from variable-->
              </div>
              <div class="acct-name">
                <p>Houston, TX</p><!--Will grab from variable-->
              </div>
              <div class="shield">
                <img src="assets/dash/sa-logo.png" alt="Salvation Army Logo" width="32" height="35" border="0" /><!--Will grab from variable-->
              </div>
            </div>
          </div>
        </div>
      </div>
  	</nav>	
    
    <?php if($id == "campaigns"){ ?>
      <nav class="navbar navbar-default" role="navigation">
        <div id="secondary-nav">
        	<div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-12 col-lg-12">
              	<div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#campaigns-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <div id="campaigns-navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li>Change view:</li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">My campaigns <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                      	<li><a href="#">Show my campaigns</a></li>
                      	<li><a href="#">Create catalog</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Seasons <b class="caret"></b></a>
                    </li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Donors <b class="caret"></b></a>
                    </li>
                    <li class="dropdown">
                   		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Media <b class="caret"></b></a>
                    </li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sort <b class="caret"></b></a>
                    </li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Donors <b class="caret"></b></a>
                    </li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="glyphicon glyphicon-search"></b> <b class="caret"></b></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    <?php } ?>