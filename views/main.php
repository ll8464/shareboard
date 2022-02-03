
<!DOCTYPE html>
<html>
<head>
	<title>Shareboard</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<!--<link rel="stylesheet" href="assets/css/style.css"> -->
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default">
  <div class="container-fluid container">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div id="navbar" class="collapse navbar-collapse">
    <a class="navbar-brand" href="#">Shareboard</a> 
          
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL; ?>">Home</a></li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL; ?>users/login">Login</a>            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
      
      
    </div>
  </div>
</nav>

    <div class="container">

     <div class="row">
     	<?php require($view); ?>
     </div>

    </div><!-- /.container -->
</body>
</html>