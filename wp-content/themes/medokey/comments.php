<? 
/*
Template Name: Отзывы

*/
get_header()
?>

<div class="header-page">
    <div class="container container--heading">
        <div class="breadcrumb"></div>
        <div class="page-heading">
            <h1 class="heading">Отзывы</h1>
        </div>
    </div>
</div>

<div class="container container--page">
    <div class="comments">
        <div class="comment">
            <div class="inner">            
                <div class="wrap">
                    <div class="comment__avatar">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/avatar-gerl.png'">
                    </div>
                    <div class="comment__author author">
                        <span class="author__name">Анна сергеевна</span>
                        <span class="author__age">41 год</span>
                    </div>
                </div>
                <div class="comment__text">
                    Отучилась на курсах вождения легковым автомобилем. Но оказалось, что для сдачи в районном ГИБДД нужна медицинская справка о том, что противопоказания для управления
                    автомобилем отсутствуют А у меня на работе отчетная пора и времени не хватает катастрофически. Поэтому оставила заказ через сайт. Ожидание затянулось… В остальном
                    нареканий нет - привезли быстро. В ГИБДД проблем не возникло.
                </div>
            </div>
            <div class="comment__data">
                <span>17.03.2022</span>
            </div>
        </div>
    </div>
</div>

<div class="comments-cf7">
    <h2 class="comments-cf7__title">Пожалуйста, оставьте отзыв</h2>
    <?php echo do_shortcode( '[contact-form-7 id="25" title="Пожалуйста, оставьте отзыв"]' ); ?>
</div>

<?php get_template_part('location'); ?>

<? get_footer()
?>