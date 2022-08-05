<? 
/*
Template Name: Главная
*/
get_header()
?>

<div class="banner banner--one">
    <div class="container container--heading">        
        <h1 class="bannner__title">СПРАВКА О ВРЕМЕННОЙ НЕТРУДОСПОСОБНОСИ УЧАЩЕГОСЯ</h1>
        <p class="banner__description">Тщатепьло подходите к выбору компании, занимающейся оформлением справок? Наш сервис-это доступные цены, подписи реальных врачей и грамотно заполненные документы.</p>
    </div>
</div>

<div class="homepage-cards">
    <div class="container container--heading">
        <div class="list">
            <div class="list__item list__item--popular">            
                <div class="card">
                    <div class="card__picture card__picture--homepage">
                        <img class="card__image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/homepage-rocket.svg" alt="" >
                    </div>
                    <button class="card__button button">Заказать</button>
                    <p class="card__descriprion card__descriprion--homepage">Приобретая справку о болезни, вы получаете скидку 50% на второй документ и 20% на повторную покупку!</p>   
                </div>            
            </div>
            <div class="list__item list__item--popular">            
                <div class="card">
                    <div class="card__picture card__picture--homepage">
                        <img class="card__image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/homepage-driver.svg" alt="" >
                    </div>
                    <button class="card__button button">Заказать</button>
                    <p class="card__descriprion card__descriprion--homepage">Наша курьерская служба доставит необходимый пакет документов по удобному для вас адресу абсолютно бесплатно (в пределах МКАД).</p>   
                </div>            
            </div>
            <div class="list__item list__item--popular">            
                <div class="card">
                    <div class="card__picture card__picture--homepage">
                        <img class="card__image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/homepage-timer.svg" alt="" >
                    </div>
                    <button class="card__button button">Заказать</button>
                    <p class="card__descriprion card__descriprion--homepage">Вы получаете готовый пакет документов в течение суток с момента оформления заказа.</p>   
                </div>            
            </div>
            <div class="list__item list__item--popular">            
                <div class="card">
                    <div class="card__picture card__picture--homepage">
                        <img class="card__image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/homepage-document.svg" alt="" >
                    </div>
                    <button class="card__button button">Заказать</button>
                    <p class="card__descriprion card__descriprion--homepage">Мы оформляем только легальные справки с подписью действующих врачей.</p>   
                </div>            
            </div>
        </div>    
    </div>    
</div>

<div class="banner banner--two">
    <div class="container container--heading">
        <div class="banner__wrapper">
            <div class="banner__content">
                <h1 class="bannner__title">Заполните форму заказа онлайн, и уже сегодня мы  привезем вам необходимый пакет документов</h1>                
            </div>
            <form class="banner__form">
                <label class="form__title">Номер телефона*
                    <input class="form__input" placeholder="Введите номер телефона">                
                </label>
                <label class="form__title">ФИО*
                    <input class="form__input" placeholder="Введите ФИО">
                </label>
                <button class="form__button button">Отправить заказ </button>
            </form>         
        </div>              
    </div>
</div>

<div class="container container--page">
    <div class="example">
        <img >
    </div>
</div>   

<div class="container container--heading">
    <div class="last-articles"> 
        <div class="last-articles__aside">
            <h2 class="last-articles__title">Последние статьи</h2>
            <button class="button">Все статьи</button>
        </div>       
        <div class="list">            
            <div class="list__item" >            
                <div class="last-articles__card card">
                    <div class="card__picture card__picture--last-articles">
                        <img class="card__image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/news-pic.png" alt="" >
                    </div>
                    <div class="card__content">
                        <p class="card__title">Особенности направления на предварительное медицинское обследование</p>
                        <p class="card__descriprion">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit purus auctor et aliquet proin hac fames. </p>   
                        <button class="card__button button">Подробнее</button>
                    </div>                        
                </div>            
            </div>               
            <div class="list__item" >            
                <div class="last-articles__card card">
                    <div class="card__picture card__picture--last-articles">
                        <img class="card__image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/news-pic.png" alt="" >
                    </div>
                    <div class="card__content">
                        <p class="card__title">Особенности направления на предварительное медицинское обследование</p>
                        <p class="card__descriprion">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit purus auctor et aliquet proin hac fames. </p>   
                        <button class="card__button button">Подробнее</button>
                    </div>                        
                </div>            
            </div>               
            <div class="list__item" >            
                <div class="last-articles__card card">
                    <div class="card__picture card__picture--last-articles">
                        <img class="card__image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/news-pic.png" alt="" >
                    </div>
                    <div class="card__content">
                        <p class="card__title">Особенности направления на предварительное медицинское обследование</p>
                        <p class="card__descriprion">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit purus auctor et aliquet proin hac fames. </p>   
                        <button class="card__button button">Подробнее</button>
                    </div>                        
                </div>            
            </div>               
        </div>            
    </div>
</div>

<section class="homepage-slider">
    <div class="homepage-slider__slide">
        <div class="rating">

        </div>
        <div class="homepage-slider__reviews">

        </div>
        <div class="homepage-slider__author">
            <p class="author___name"></p>
            <p class="author___age"></p>
            <div class="author__avatar">
                <img src="">
            </div>
        </div>
    </div>
</section>

<?php get_template_part('location'); ?>

<? get_footer() ?>   