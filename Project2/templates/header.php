<?php
if(!session_id()) session_start();
//NULL coalescing

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>Internship Portal</title>
</head>
<body>

  <div class="navbar-fixed">
    <nav class="nav-wrapper indigo">
      <div class="container">
        <a href="#" class="brand-logo">Internship Portal</a>
        <a href="#" class="sidenav-trigger" data-target="mobile-links">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href=""class="btn white indigo-text">Home</a></li>
    
          <li><a href="" class="btn white indigo-text">Login</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <ul class="sidenav" id="mobile-links">
    <li><a href="home.php">Home</a></li>
    <li><a href="index.php">Login</a></li>
    
  </ul>
  
  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.sidenav').sidenav();
    });
  </script>
</body>
</html>