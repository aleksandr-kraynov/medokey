    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer__logo logo">                
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.svg'">
				</div>
                <div class="footer__nav">
                    <ul class="nav__list">
                        <li class="nav__item"><a class="nav__link" href="">Стоимость</a></li>
                        <li class="nav__item"><a class="nav__link" href="">Доставка</a></li>
                        <li class="nav__item"><a class="nav__link" href="">Оплата</a></li>
                        <li class="nav__item"><a class="nav__link" href="">Отзывы</a></li>
                        <li class="nav__item"><a class="nav__link" href="">Статьи</a></li>
                        <li class="nav__item"><a class="nav__link" href="">Оформить заказ</a></li>
                        <li class="nav__item"><a class="nav__link" href="">О нас</a></li>
                    </ul>                      
                    <ul class="nav__list">
                        <li class="nav__item"><a class="nav__link" href="">Справка 095У</a></li>
                        <li class="nav__item"><a class="nav__link" href="">Справка в вуз</a></li>
                        <li class="nav__item"><a class="nav__link" href="">Справка в школу</a></li>
                        <li class="nav__item"><a class="nav__link" href="">Справка о нетрудоспособности</a></li>
                        <li class="nav__item"><a class="nav__link" href="">Справка о болезни</a></li>
                        <li class="nav__item"><a class="nav__link" href="">Справка для гибдд</a></li>
                        <li class="nav__item"><a class="nav__link" href="">Другие справки</a></li>
                    </ul>
                </div>
                <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_2' ) ); ?>
                <div class="footer__info-block">
                    <div class="call-block">
                        <a class="footer__phone" href="tel:+74994600781">+7 (499) 460-07-81</a>
                        <button class="footer__button button">Обратный звонок</button>
                    </div>
                    <div class="footer__time-work"> 
                        <div>
                            <span>Время работы</span></br>                      
                            Пн-Пт с 7:00 до 22:00</br>
                            Сб-Вс с 9:00 до 21:00
                        </div>                                               
                    </div>
                    <div class="footer__location">
                        <div>
                            <span>Адрес магазина</span></br>
                            Москва, Зубовский бульвар, 25</br>
                            (метро Парк Культуры)
                        </div>                        
                    </div>
                </div>                
            </div>            
            <div class="footer-bottom">
                <div class="copyright">Copyright 2022 MED-OK - Медицинские справки, оформление медицинских документов</div>
                <div class="footer-paymets">
                    <ul class="paymet__list">
                        <li class="paymet__item"><img class="paymet__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/mir.svg" alt="mir"></li>
                        <li class="paymet__item"><img class="paymet__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/visa.svg" alt="visa"></li>
                        <li class="paymet__item"><img class="paymet__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/sber.svg" alt="sber"></li>
                        <li class="paymet__item"><img class="paymet__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/mc.svg" alt="mc"></li>
                        <li class="paymet__item"><img class="paymet__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/sber.svg" alt="sber"></li>
                        <li class="paymet__item"><img class="paymet__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/mc.svg" alt="mc"></li>
                        <li class="paymet__item"><img class="paymet__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/visa.svg" alt="visa"></li>
                    </ul>
                </div>                
                <div class="write-me">
                    <a class="write-me__link" href="">Напишите&nbsp;нам, мы&nbsp;онлайн!</a>
                </div>
            </div>

        </div>
        </div>
    </footer>

<? wp_footer(); ?>
</body>

</html>