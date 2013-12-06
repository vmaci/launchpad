<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="assets/ico/griz_favicon.png">
  <title>Launchpad 2014-2015 Beta</title>
  
   <!-- Getting the page of the name to use as and ID -->
  <?php 
		$filename = explode( ".", basename($_SERVER['PHP_SELF']) );
		$id = $filename[0];
	?>
  
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  
  <!-- Bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
      <script src="../assets/js/respond.min.js"></script>
    <![endif]-->
  
  <!-- Custom styles for this template -->
  <link href="css/launchpad.css" rel="stylesheet">
  <link href="css/fonts.css" rel="stylesheet">
  
  <!-- Conditional stylesheets -->
  <?php if($id="index"){ ?> <link href="css/dashboard.css" rel="stylesheet"> <?php } ?>
  </head>
  
  <body id="<?php echo $id; ?>">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="index.html"><img src="assets/dash/lp-logo.png" alt="Grizzard Launchpad Logo" width="280" height="17" border="0" /></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Dashboard</a></li>
                <li><a href="campaigns.php">Campaigns</a></li>
                <li><a href="griz-u.php">Grizzard U</a></li>
              </ul>
            </div>
            <div id="navbar-user-info">
              <div class="contact-name"><!--Will grab from variable-->
                <p>Major Chris Flanagan</p>
              </div>
              <div class="acct-name"><!--Will grab from variable-->
                <p>Houston, TX</p>
              </div>
              <div class="shield"><!--Will grab from variable-->
                <img src="assets/dash/sa-logo.png" alt="Salvation Army Logo" width="32" height="35" border="0" />
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>