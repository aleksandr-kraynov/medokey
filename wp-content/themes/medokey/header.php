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
			<?php wp_nav_menu( [
				'theme_location'  => '',
				'menu'            => 'navigation',
				'container'       => 'nav',
				'container_class' => 'header__nav',						
				'menu_class'      => 'header__nav-list',																	
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',						
			] ); ?>
			<div class="header__bottom">
				<div class="header__logo">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.svg'">
				</div>
				<div class="header__phone">+7 (499) 460-07-81</div>
				<button class="header__button">Звонок по России бесплатный</button>
				<input class="header__search" placeholder="Поиск"></input>
			</div>					
		</div>		
	</header>

