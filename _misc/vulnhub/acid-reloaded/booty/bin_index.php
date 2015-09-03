<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Acid-Reloaded</title>
    
    
    <link rel="stylesheet" href="crack/css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
   <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="crack/css/style.css">
    <script type="text/JavaScript" src="js/sha512.js"></script> 
     <script type="text/JavaScript" src="js/forms.js"></script>     
  </head>
  <body>   
<!-- Form Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Be Logical Here</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
  <div class="form">
    <h2>Login to your account</h2>

		<form  action="includes/validation.php" method="post" name="login_form"> 			
            	Email: <input type="text" placeholder="Email Address" name="email" maxlength="20" />
            	Password: <input type="password" placeholder="Password" name="password" id="password"/>
            	<input type="submit" value="Login" onclick="formhash(this.form, this.form.password);" /> 
        	</form>
 		    
    </form>
   </div>      
	
        <script src="crack/js/index.js"></script>

    
    
  </body>
</html>
