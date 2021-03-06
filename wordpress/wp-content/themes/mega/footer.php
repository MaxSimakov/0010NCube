<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mega
 */
global $get_template_directory_uri,
                $adr_global,
                $time_work_global,
                $email_global1,
                $email_global2,
                $phone_global1,
                $phone_global2,
                $phone_global3,
		        $phone_link_global1,
                $phone_link_global2,
                $phone_link_global3;
//		 ob_start();
		 $link11 = get_field('политика_конфиденциальности', 'option');

?>
<footer class="footer animate__fadeIn animate__animated wow">
    <div class="container">
        <div class="row">
            <div class="col">
	            <?php wp_nav_menu( [
		            'theme_location'  => 'menu-footer'
	            ] ); ?>
            </div>
            <div class="footer__col col-lg-3 d-flex flex-column">
                <div class="footer__title order-lg-0 order-1">Офис:
                </div>
                <div class="footer__caption order-lg-1 order-2"><?= $adr_global; ?></div>
                <a class="footer__policy order-lg-2 order-0" href="<?= $link11 ; ?>">Политика конфиденциальности
                </a>
            </div>
            <div class="col-lg-2">
                <div class="footer__title">Режим работы:
                </div>
                <div class="footer__caption"><?= $time_work_global; ?></div>
            </div>
            <div class="col-auto">
                <a class="footer__tel" href="tel:<?= $phone_link_global1?>"><?= $phone_global1?>
                </a><br/>
                <a class="footer__tel" href="tel:<?= $phone_link_global2?>"><?= $phone_global2?>
                </a>
            </div>
        </div>
    </div>
</footer>
<div class="modal-cookies" id="modal-cookies" style="display: none">
    <div class="modal-cookies__caption">Этот сайт использует файлы cookie для хранения данных. Продолжая использовать сайт, вы&nbsp;даете свое согласие на&nbsp;работу с&nbsp;этими файлами.
    </div>
    <button class="modal-cookies__btn modal-close-js btn-cookie" type="button">ПРИНИМАЮ
    </button>
    <!-- picture-->
    <picture>
        <source type="image/webp" srcset="<?php echo $get_template_directory_uri?>/public/img/@2x/webp/modal-thanks.webp" media="(min-width:576px)"/>
        <source type="image/webp" srcset="<?php echo $get_template_directory_uri?>/public/img/@1x/webp/modal-thanks.webp"/>
        <source type="image/jpg" srcset="<?php echo $get_template_directory_uri?>/public/img/@2x/modal-thanks.jpg" media="(min-width:576px)"/>
        <img class="object-fit-js" src="<?php echo $get_template_directory_uri?>/public/img/@2x/modal-thanks.jpg" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
    <div class="bg-text">Cookie</div>
</div>
</div>
<div class="modal-cookies modal-cookies--thanks" id="modal-thanks" style="display: none">
    <div class="modal-cookies__caption">
        <div class="h4">Мы получили вашу заявку</div>
        <br>
        Мы свяжемся с вами <br> в скором времени
        <br>
        <br>
        <br>
    </div
    <!-- picture-->
    <picture>
        <source type="image/webp" srcset="<?php echo $get_template_directory_uri?>/public/img/@2x/webp/modal-cookie.webp" media="(min-width:576px)"/>
        <source type="image/webp" srcset="<?php echo $get_template_directory_uri?>/public/img/@1x/webp/modal-cookie.webp"/>
        <source type="image/jpg" srcset="<?php echo $get_template_directory_uri?>/public/img/@2x/modal-cookie.jpg" media="(min-width:576px)"/>
        <source type="image/jpg" srcset="<?php echo $get_template_directory_uri?>/public/img/@1x/modal-cookie.jpg"/>
        <img class="object-fit-js" src="<?php echo $get_template_directory_uri?>/public/img/@2x/modal-cookie.jpg" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
    <div class="bg-text">Thank you</div>
</div>
</div>

<!--  start modals-->
<div class="modal-win" id="modal-call" style="display: none">
    <div class="form-wrap">
        <div class="before animate__heartBeat animate__animated wow" data-wow-delay="1s"></div>
        <form>
            <div class="text-center">
                <div class="form-wrap__title form-data h3 ttu">Обратный звонок
                </div>
                <p class="after-headline">Заполните заявку и&nbsp;мы&nbsp;с&nbsp;Вами свяжемся в&nbsp;течение 15&nbsp;минут</p>
            </div>
            <div class="form-wrap__input-wrap form-group">
                <input class="form-wrap__input form-control" name="text" type="text" placeholder="Ваше Имя" required="required"/>
            </div>
            <!-- +e.input-wrap-->
            <button class="form-wrap__btn btn" type="submit">
            </button>
            <div class="p-5"></div>
            <div class="p-5"></div>
            <div class="p-5"></div>
            <div class="p-5"></div>
            <div class="p-5"></div>
            <div class="form-wrap__policy">
                <label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox" type="checkbox" checked="checked"/><small class="custom-input__text text-secondary">Согласен на обработку и хранение моих персональных данных в соответствии с условиями</small>
                </label>
            </div>
        </form>
    </div>
</div>
<!-- #modal-call-->
<!-- end modals-->

<?php wp_footer(); ?>
 
</body>
</html>
