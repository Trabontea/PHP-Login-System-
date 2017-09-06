<?php 

	// // Allow the config
	// define('__CONFIG__', true);
	// // Require the config
	// require_once "inc/config.php"; 

?>
<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Page Title</title>

    <base href="/" />
    
   <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />

    <link rel="stylesheet" href="css/style.css" />


  </head>

  <body>
    <div class="uk-section uk-container">
      <div class="uk-grid uk-child-width-1-3@s uk-child-with-1-1" uk-grid>

      <form class="uk-form-stacked">
        <fieldset class="uk-fieldset">

            <legend class="uk-legend">Login</legend>

            <div class="uk-margin">
                <input class="uk-input" type="email"  required="requiered" placeholder="Email">
            </div>

            <div class="uk-margin">
                <input class="uk-input" type="password"  required="requiered" placeholder="Your Password">
            </div>

            <div class="uk-margin">
              <button class="uk-button uk-button-default" type="submit">Login</button>
            <div>
        </fieldset>
      </form>
    </div>
  </div>









  	<!-- <div class="uk-section uk-container">
  		<?php 
  			echo "Hello world. Today is: ";
  			echo date("Y m d");
  		?> 
  		<p>
  			<a href="/login.php">Login</a>
  			<a href="/register.php">Register</a>
  		</p>
  	</div>
 -->
  	<?php require_once "inc/footer.php"; ?> 

    <!-- jQuery is required -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit-icons.min.js"></script>
  </body>
</html>
