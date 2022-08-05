<?
/*
Template Name: Оплата
*/
get_header()
?>

<div class="header-page header-page--price">
    <div class="container container--heading">
        <div class="breadcrumb"></div>
        <div class="page-heading">
            <h1 class="heading">Оплата</h1>
        </div>
    </div>
</div>

    <div class="order__container">
        <div class="order__title">
            Оформив заказ на нашем сайте, вы имеете возможность выбрать любой способ оплаты услуг. Заполняя онлайн-
            форму или отвечая на вопросы менеджера, укажите, как вы желаете расплатиться:
        </div>

        <div class="order__payment-choice">
            <div class="choice-payment__element">
                <div class="choice-content">
                    <div class="choice-payment__picture">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/money.svg" alt="" class="choice-payment__image">
                    </div>
                    <div class="choice-payment__description">
                        Наличными при получении готового
                        документа (сумма оплаты
                        передается курьеру).
                    </div>
                </div>
            </div>

            <div class="choice-payment__element">
                <div class="choice-content">
                    <div class="choice-payment__picture">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/payment.svg" alt="" class="choice-payment__image">
                    </div>
                    <div class="choice-payment__description">
                        Оплата электронными деньгами
                    </div>
                </div>
            </div>

            <div class="choice-payment__element">
                <div class="choice-content">
                    <div class="choice-payment__picture">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/webmoney.svg" alt="" class="choice-payment__image">
                        <div class="choice-payment__mastercard">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/qiwi.svg" alt="" class="choice-payment__image">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/yandex.svg" alt="" class="choice-payment__image">
                        </div>
                    </div>
                    <div class="choice-payment__description">
                        Перевод с банковской карты-
                        работаем с платежными системами
                        VISA и MasterCard
                    </div>
                </div>
            </div>

        </div>

        <div class="contact__specialist">
        Нужна помощь? Свяжитесь со специалистами по тел: +7 (499) 460-07-81.
        </div>
    </div>

<?php get_template_part('location'); ?>


<? get_footer() ?>