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
	  	<style type="text/css">
	  	.modal {
    		display: none; /* Hidden by default */
    		position: fixed; /* Stay in place */
    		z-index: 1; /* Sit on top */
    		padding-top: 100px; /* Location of the box */
    		left: 0;
    		top: 0;
    		width: 100%; /* Full width */
    		height: 100%; /* Full height */
    		overflow: auto; /* Enable scroll if needed */
    		background-color: rgb(0,0,0); /* Fallback color */
    		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
    		background-color: #fefefe;
    		margin: auto;
    		padding: 20px;
    		border: 1px solid #888;
    		width: 80%;
		}

		/* The Close Button */
		.close {
    		color: #aaaaaa;
    		float: right;
    		font-size: 28px;
    		font-weight: bold;
		}

		.close:hover,
		.close:focus {
		    color: #000;
   		 text-decoration: none;
   		 cursor: pointer;
		}
	  </style>
	  
	  <script type="text/javascript" src="js/jquery2.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

	  
	  <style>
	  </style>
    </head>

    <body style="background:cyan;">
	
		<div class="container">
	
			<button id="myBtn" >Modal</button>
	
			<div id="myModal" class="modal">
				<div class="modal-content">
				<span class="close">&times;</span>
					<p>Berhasil buka modal</p>
				</div>
			</div>
		</div>

	<script type="text/javascript">
		//get Modal variable
		var modal = document.getElementById('myModal');
		var btn = document.getElementById('myBtn');
		var span = document.getElementsByClassName("close")[0];

		//fungsi ketika btn di click
		btn.onclick = function() {
    		modal.style.display = "block";
			}
		//fungsi ketika span di click
		span.onclick = function() {
    		modal.style.display = "none";
			}
		//ketika click di luar modal 
		window.onclick = function(event) {
    	if (event.target == modal) {
        	modal.style.display = "none";
    			}
			}
	  </script>
    </body>
  </html>
