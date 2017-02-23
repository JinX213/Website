<?php
  require('functions.php');
  //ftp://wp383.webpack.hosteurope.de/
  //User: ftp12301050-feedback
  //Password: MFzE2017
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="image/x-icon" href="./data/favicon.ico">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Feedback. Mehr Konzept. Mehr Erfolg</title>
    
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap core CSS -->
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet"> <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php
		//Lade die Navigation aus ./pages/navigation.html
		eval ("\$nav = \"".loadPage("navigation")."\";");
		echo $nav;
	?>
	
	<div class="content_wrapper">
		<?php
			//Lade den gewuenschten Inhalt
			if(!isset($_GET['site'])) {
				//Es wurde keine spezielle Seite angefordert, also wird die Startseite zurueckgeliefert
				eval ("\$content = \"".loadPage("home")."\";");
				echo $content;
			} else {
				//Es wurde eine spezielle Seite angefordert, also wird diese auch zurueckgegeben
					//urlencode verhindert, dass ein User externe Seiten angibt, oder Daten vom Server laedt, auf die er nicht zugreifen darf.
				eval ("\$content = \"".loadPage(urlencode($_GET['site']))."\";");
				echo $content;
			}
		?>
	</div>

	<div class="container" id="footer">
      <hr>
      <footer>
        <p><a href="?site=impressum">Impressum</a> | &copy; 2017 EZW, Inc</p>
      </footer>
    </div> 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Core JavaScript -->
    <script src="js/vendor/jquery-3.1.1.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script> 
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/vendor/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
