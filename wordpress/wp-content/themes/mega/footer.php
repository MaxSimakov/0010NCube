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
global $get_template_directory_uri;
//		 ob_start();
		 $email = get_field('email', 'option'); 
		 $logo = get_field('лого', 'option');
		 $logoText = get_field('лого_текст', 'option');
		 $link = get_field('узнать_больше_ссылка', 'option'); 
?>
    <!-- end sWhy-->
			<footer class="footer">
				<div class="footer__container container">
					<div class="footer__row row">
						<div class="col-sm col-lg-auto"><a class="footer__logo" href="/"><img loading="lazy" src="<?php echo $logo ?>" alt=""/></a>
							<div class="footer__txt mt-3 d-lg-none"><?php echo $logoText ?></div>
						</div>
						<div class="col-auto d-none d-lg-block">
							<div class="footer__txt"><?php echo $logoText ?></div>
						</div>
						<div class="col">
							<?php wp_nav_menu(); ?>
						</div>
						<div class="col-auto d-none d-lg-block"><a class="footer__mail" href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
						</div>
						<div class="col-sm-auto"><a class="footer__btn" href="<?php echo $link ?>">LEARN MORE</a><a class="footer__mail mt-3 d-block d-lg-none" href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!--  start modals-->
		<div class="modal-win" id="modal-call" style="display: none">
			<div class="form-wrap">
				<form>
					<div class="text-center">
						<div class="form-wrap__title form-data h3 ttu">Обратный звонок
						</div>
						<p class="after-headline">Заполните заявку и&nbsp;мы&nbsp;с&nbsp;Вами свяжемся в&nbsp;течение 15&nbsp;минут</p>
					</div>
					<div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" name="text" type="text" placeholder="Ваше Имя" required="required"/> 
					</div>
					<!-- +e.input-wrap-->
					<button class="form-wrap__btn btn" type="submit"> 
					</button>
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
