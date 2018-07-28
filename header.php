<!DOCTYPE html>
<html>
<head>
	<title>Tema Personalizado</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

</head>
<body>
</div>

<header>
</header>


<?php $defaults = array(
    'menu'            => 'primary',
    'container'       => 'nav',
    'menu_class'      => 'menu-principal'
);


?>
 <nav class="menu">
 	<div class="container">
		<?php wp_nav_menu( $defaults ); ?>

	</div>
</nav>

<div class="container">








