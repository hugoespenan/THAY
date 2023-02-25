
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
    <title>Interface Administrateur</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">


<style>
body {
	background-color: #ffffff;
	color: #000;
  font-family: Arial, Helvetica, sans-serif;
}
label {
	display: inline-block;
	width: 100px
}
a {
	color: 
#FFF;
}
form {
	margin: 90px;
	padding: 10px;
	border: 1px solid #CCC;
	box-shadow: #000 3px 3px 30px;
	border-radius: 6px
}
#admin {
	position: absolute;
	right: 0;
	margin: 10px
}
.error {
	background-color: #FFB7AE;
	color: #F00;
	border: #F00;
	border-radius: 6px;
	padding: 6px;
	margin-bottom: 10px
}


.signup-image {
    margin-top: 45px;
}

.signup-image {
    margin: 0 0px;
}

figure {
    margin-bottom: 50px;
    text-align: right;
}
img {
    max-width: 100%;
    height: auto;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 70%;
  opacity: 0.9;
  margin-left: 46px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


.container {
  position: center;
  
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
</style>



  </head>
  
  <body>
  <?php 
  require_once __DIR__ .'/php/utilisateur/admin.php';
  
  echo $sessionAdmin; ?>
  <div style="width: 635px; margin:auto; margin-top:20%; padding :0px 0;">
    <form method="post" class="container" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
      <?php echo $message;
	
  
  
  
  if(!$sessionAdmin){?>
      
      
      
      
      
    
    <label for="email"><b>Login</b></label>
    <input type="text" name="adminuser" required>

    <label for="psw"><b>Mot de passe</b></label>
    <input type="password" name="adminpassword" required>


    <button type="submit" class="btn">Login</button>
  


      
      <?php } else {
		  
		  echo '<a href="login.php?logout">Logout</a>';
		  
	  
    }?>
    
  
  
  </form>
  </div>
  </body>


  
  
</html>