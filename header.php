<?php ob_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
							<title><?php 
							
							 // Print the page title.
							 if (defined('TITLE')) { // Is the title defined?
							 print TITLE;
							 } else 
							 { // The title is not defined.
							 print 'My Site of Quotes';
							 }
							 ?>
							 </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	
    


    
  </head>
  <body>
  <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
   
			<?php include(MAINDIR . 'nav.php'); ?> <!-- For navigation bar-->


  <div class="container">
  <!-- BEGIN EDITABLE CONTENT.-->
     <h1>Hello, world!</h1>
     <br/>
     