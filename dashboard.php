<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ovni Basement | Accueil</title>
    <link rel="stylesheet" href="./styledash.css">
    <link rel="stylesheet" href="./background.css">
    <link rel="shortcut icon" type="image/png" href="./favicon.png"/>
</head>
<body><div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="./dashboard.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Accueil
                        </span>
                    </a>
                <li class="has-subnav">
                    <a href="docs.php">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Dossiers
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="forms.php">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Formulaires
                        </span>
                    </a>
                    
                </li>
                <li>
                    <a href="i.php">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            En savoir plus !
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="logout.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Déconnection
                        </span>
                    </a>
                </li>  
            </ul>
            
        </nav>
        <script src="https://www.google.com/recaptcha/api.js?render=6Lcu8R4gAAAAALOaKi9CDounHn3Pg2kgC7fKvGjG"></script>
    <script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6Lcu8R4gAAAAALOaKi9CDounHn3Pg2kgC7fKvGjG', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
      }
  </script>
  </body>
</html>