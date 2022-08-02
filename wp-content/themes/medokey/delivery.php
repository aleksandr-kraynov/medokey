<? 
/*
Template Name: Доставка
*/
get_header()
?>


<div class="header-page">
    <div class="container container--heading">
        <div class="breadcrumb"></div>
        <div class="page-heading">
            <h1 class="heading">Доставка</h1>
        </div>
    </div>
</div>

<div class="container container--page">            
    <div class="courier__content">
        <div class="courier__picture">
            <img class="courier__image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/courier.png'">
        </div>
        <div class="courier__description">
            Курьерская служба нашей компании готова доставить ваш документ быстро и
            абсолютно бесплатно по указанному при заказе адресу (в пределах МКАД).
        </div>
    </div> 
    <div class="courier-services">            
        <div class="courier-services__item time">            
            <div class="courier-services__body">
                <div class="item-services__title left__title">
                    Курьеры к вашим услугам в режиме:
                </div>
                <div class="item-services__text">
                    <p>ПН-ПТ с 7:00 до 22:00</p>
                    <p>СБ-ВС с 9:00 до 21:00</p>
                </div>
            </div>
        </div>
        <div class="courier-services__item call">           
            <div class="courier-services__body">
                <div class="item-services__title right__title">
                    Оставляйте заявку на сайте или позвоните нам +7 (499) 460-07-81
                </div>
                <div class="item-services__text left__text">
                    <p>Готовую справку вы получите в
                        течение суток</p>
                </div>
            </div>
        </div>
    </div>
    <div class="delivery-location">
        <p>Экономьте время, выбирая удобную доставку.</p>
        <p>Доставим больничные листы в города МО:</p>
        <ul class="delivery-location__list">
            <li class="delivery-location__item">
                <a class="delivery-location__link" href="#">Мытищи</a>
            </li>
            <li class="delivery-location__item">
                <a class="delivery-location__link" href="#">Химки</a>
            </li>
            <li class="delivery-location__item">
                <a class="delivery-location__link" href="#">Балашиха</a>
            </li>
            <li class="delivery-location__item">
                <a class="delivery-location__link" href="#">Королев</a>
            </li>
            <li class="delivery-location__item">
                <a class="delivery-location__link" href="#">Красногорск</a>
            </li>
        </ul>
    </div>    
</div>

<?php get_template_part('location'); ?>
   

</div>

<? get_footer() ?>
