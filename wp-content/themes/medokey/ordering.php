<? 
/*
Template Name: Оформить заказ
*/
get_header()
?>
<div class="container container--heading">
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
            <div class="inner">
            <?php echo do_shortcode( '[contact-form-7 id="70" title="Заказать справку"]' ); ?>
                <!-- <form class="ordering__form form">
                    <label class="form__title form__title--ordering">ФИО*
                        <input class="form__input form__input--ordering" type="text" name="username" placeholder="Введите ФИО" required>
                    </label>
                    <label class="form__title form__title--ordering">Номер телефона*
                        <input class="form__input form__input--ordering" type="tel" name="tel" placeholder="Введите номер телефона" required>
                    </label>
                    <label class="form__title form__title--ordering">Справка*
                        <input class="form__input form__input--ordering" type="text" name="text" placeholder="Какая нужна справка" required>
                    </label> 
                    <button class="ordering__button button">Заказать справку</button>
                </form> -->
                <div class="block-img">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/woomen-laptop.png'">
                </div>
            </div>
        </div>
    </div>

<?php get_template_part('location'); ?>

<? get_footer(); ?>