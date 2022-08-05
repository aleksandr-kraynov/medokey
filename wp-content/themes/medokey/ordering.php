<? 
/*
Template Name: Оформить заказ
*/
get_header()
?>
<div class="container">
        <div class="ordering">
            <div class="ordering__info info">
                <div class="info__item">
                    <div class="info__pic">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ord-pic-1.svg'">
                    </div>
                    <div class="wrap">
                        <h3 class="info__subtitle">Доставим</h3>
                        <p class="article__text">документ в любую точку Москвы; в пределах МКАД - бесплатно</p>
                    </div>
                </div>
                <div class="info__item">
                    <div class="info__pic">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ord-pic-2.svg'">
                    </div>
                    <div class="wrap">
                        <h3 class="info__subtitle">Сроки исполнения заказа</h3>
                        <p class="article__text">в течение суток с момента
                            оформления</p>
                    </div>
                </div>
                <div class="info__item">
                    <div class="info__pic">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ord-pic-3.svg'">
                    </div>
                    <div class="wrap">
                        <h3 class="info__subtitle">Только легальные справки</h3>
                        <p class="article__text">с подписью действующих врачей</p>
                    </div>
                </div>
                <div class="info__item">
                    <div class="info__pic">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ord-pic-4.svg'">
                    </div>
                    <div class="wrap">
                        <h3 class="info__subtitle">Система скидок</h3>
                        <p class="article__text">50% на второй документ и 20% на
                            повторную покупку</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_template_part('location'); ?>

<? get_footer(); ?>