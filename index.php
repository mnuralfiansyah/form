 <?php
SESSION_START();
require_once 'koneksi.php';
 ?>
 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="css/css1.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
	  <script type="text/javascript">
		$(document).ready(function (){
			$('.modal-trigger').leanModal();
				});
	  </script>
	  <script type="text/javascript" src="js/jquery2.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

	  
	  <style>
	  </style>
    </head>

    <body style="background:cyan;">
	
	<div class="container">
	
	<a class="modal-trigger btn" href="#modal_box">buka modal </a>
	
	<div id="modal_box" class="modal">
	Berhasil buka modal
	</div>
	</div>
	
	   <script>
				
	  </script>


	
    </body>
  </html>