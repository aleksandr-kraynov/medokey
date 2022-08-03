<?
/*
Template Name: Оплата
*/
get_header()
?>
<link rel="stylesheet" href="style.css">

<div class="header-page">
    <div class="breadcrumb"></div>
    <div class="page-heading">
        <h2 class="heading">Оплата</h2>
    </div>
</div>

<div class="wrapper">
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


    <div class="container__gelocation">
            <div class="gelocation">
                <!--  Геолокация -->
                <div class="contact__items">
                    <div class="contact__item">
                        <div class="contact__title">
                            Свяжитесь с нами:
                        </div>
                        <div class="contact__address">
                            Москва, Зубовский бульвар, 25
                            (метро Парк Культуры)
                        </div>
                        <div class="contact__iphone">
                            <a href="tel:84994600781" class="iphone-contact">+7 (499) 460-07-81</a>
                        </div>
                        <div class="contact__work">
                            <p>Время работы: с 07:00 до 22:00, Пн - Пт</p>
                            <p>Время работы: с 09:00 до 21:00, Сб - Вс</p>
                        </div>
                    </div>
                </div>

                <div class="gelocation__items">
                    <div class="gelocation__item">
                        <div style="position:relative;overflow:hidden;"><a
                                href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps"
                                style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a
                                href="https://yandex.ru/maps/213/moscow/house/zubovskiy_bulvar_25/Z04Ycw9pQE0CQFtvfXtyd3hrZw==/?ll=37.589985%2C55.736483&utm_medium=mapframe&utm_source=maps&z=17.09"
                                style="color:#eee;font-size:12px;position:absolute;top:14px;">Зубовский бульвар, 25 —
                                Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCURUYU3pB" width="100%"
                                height="654px" frameborder="1" allowfullscreen="true"
                                style="position:relative;"></iframe></div>
                    </div>
                </div>
            </div> <!-- Конец блока Геолокация -->
        </div>
</div>

<? get_footer() ?>