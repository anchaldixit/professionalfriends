<!DOCTYPE html>
<html <?php echo (get_post_type() == 'es')? 'lang="es"':'lang="en"'; ?>>
<head>
    <title> 
         <?php wp_title('|',true,'right') ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="ul.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body>
	<?php
		if(has_nav_menu("header")){ //true
		wp_nav_menu(array(
			"theme_location" => "header"
		));
	}
	?>
	<header>
		<div class="header-content" id="header-blog">
			<div class="header-section">
					<div class="header-logo">
						<a href="/professionalfriends/">Professional friends</a></spam>
					</div>
					<div class="header-links" id="myDIV">
						<ul>
							<li><a class="btn active" href="/professionalfriends/">Home</a></li>
							<li><a class="btn" href="/professionalfriends/about/">ABOUT</a></li>
							<li><a class="btn" href="/professionalfriends/services/">SERVICES</a></li>
							<li><a class="btn" href="/professionalfriends/work/">WORKS</a></li>
							<li><a class="btn" href="/professionalfriends/testmonial/">TESTMONIAL</a></li>
							<li><a class="btn" href="/professionalfriends/contact/">CONTACT</a></li>
						</ul>
					</div>
					<i id="burger" class="material-icons" onclick="burger()">menu</i>
					<i id="quit" class="material-icons" onclick="quit()">clear</i>
				    <div id="links">
					   <a href="/professionalfriends/">Home</a>
					   <a href="/professionalfriends/about/">About</a>
					   <a href="/professionalfriends/services/">Services</a>
					   <a href="/professionalfriends/work/">Works</a>
					   <a href="/professionalfriends/testmonial/">Testmonial</a>
					   <a href="/professionalfriends/contact/">Contact</a>
 					</div>

       		</div>	
       	</div>	
 <script>
   function burger(){
  var burger = document.getElementById('burger');
  var links = document.getElementById('links');
  var quit = document.getElementById('quit');
  burger.style.padding = '16px 16px 200vw 200vw';
  links.style.display = 'flex';
  quit.style.display = 'inline';
}

function quit(){
  var burger = document.getElementById('burger');
  var links = document.getElementById('links');
  var quit = document.getElementById('quit');
  burger.style.padding = '16px 16px 32px 32px';
  links.style.display = 'none';
  quit.style.display = 'none';
}
       	</script>
</header>
