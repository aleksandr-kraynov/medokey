<!DOCTYPE html>
<html <? language_attributes(); ?>>
<head>
	<meta charset="<? bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <title>Document</title>	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	

	<header class="header">
		<div class="container">		
			<div class="header__nav">
				<?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
			</div>			
			<div class="header__bottom">
				<div class="logo">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.svg'">
				</div>
				<div class="header__phone">
					<a href="tel:+74994600781">+7 (499) 460-07-81</a>
				</div>
				<button class="header__button button">Звонок по России бесплатный</button>
				<button class="header__button--mobile"></button>
				<input class="header__search" placeholder="Поиск"></input>				
			</div>					
		</div>		
	</header>