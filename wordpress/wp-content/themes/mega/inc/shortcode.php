<?php 


	/*
	* *****************************************************
	*/
	add_shortcode('header', 'header_func');
	function header_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
        $image = get_field('изображение_01');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
		 ?>
        <!-- start headerBlock-->
        <div class="headerBlock" id="headerBlock">
            <div class="headerBlock__container container-fluid">
                <div class="headerBlock__row row">
                    <div class="col-lg-6">
                        <div class="headerBlock__box">
                            <div class="headerBlock__box-bg">
                            <img loading="lazy" src="<?php echo $get_template_directory_uri?>/public/img/@2x/world-map.png" alt=""/>
                            </div>
                            <?php echo the_field('текст_01'); ?>
                            <div class="headerBlock__vantages">
                                <?php $rows = get_field('список_01' );  if($rows ):    while ( have_rows('список_01') ) : the_row();
                                $index = array_rand( $rows );
                                ?>
                                    <div class="headerBlock__v-item">
                                        <div class="headerBlock__v-row row align-items-center">
                                            <div class="col-auto">
                                                <div class="headerBlock__v-icon"><img loading="lazy" src=""<?php echo the_sub_field('иконка'); ?>" alt=""/>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="headerBlock__v-txt">"<?php echo the_sub_field('текст'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php  endwhile;  else :  endif;    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="headerBlock__img">
                            <?php 
                                    
                                    if( $image ) {
                                        echo wp_get_attachment_image( $image, $size );
                                    }   ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end headerBlock-->
			<?php
    return ob_get_clean();

}
	/*
	* *****************************************************
	*/
	add_shortcode('catalog', 'catalog_func');
	function catalog_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
	 
		 ?>
        <!-- start sMaps-->
			<section class="sMaps section" id="sMaps">
				<div class="sMaps__container container">
					<div class="section-title text-center"><?php echo the_sub_field('заголовок_02'); ?></div>
					<div class="sMaps__items">
                        <?php $rows = get_field('список' );  if($rows ):    while ( have_rows('список') ) : the_row();
                                $index = array_rand( $rows );
                                ?>
                            <div class="sMaps__item">
                                <div class="sMaps__i-row row">
                                    <div class="sMaps__img-col col-lg">
                                        <?php 
                                            $images = get_sub_field('изображения');
                                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                            if( $images ): ?>
                                            <?php foreach( $images as $image_id ): ?>
                                                <div class="sMaps__g-img"><?php echo wp_get_attachment_image( $image_id, $size ); ?></div> 
                                        <?php endforeach; ?><?php endif; ?>
                                    </div>
                                    <div class="sMaps__box-col col-lg-auto">
                                        <div class="sMaps__box">
                                            <div class="sMaps__title"><?php echo the_sub_field('название'); ?></div>
                                            <div class="sMaps__descr"><?php echo the_sub_field('описание'); ?></div>
                                            <div class="sMaps__price">Price:
                                            </div>
                                            <div class="sMaps__size-items">
                                                <?php $rows = get_sub_field('цены' );  if($rows ):    while ( have_rows('цены') ) : the_row();
                                                    $index = array_rand( $rows );
                                                    ?>
                                                <div class="sMaps__size"><span><?php echo the_sub_field('размер'); ?>...........</span><b><?php echo the_sub_field('цена'); ?>€</b>
                                                </div>
                                                <?php  endwhile;  else :  endif;    ?>
                                            </div><a class="sMaps__buy-btn" href="#">BUY</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php  endwhile;  else :  endif;    ?>
					</div>
				</div>
			</section>
			<!-- end sMaps-->
   <?php return ob_get_clean();

}

/*
	* *****************************************************
	*/
	add_shortcode('swhy', 'swhy_func');
	function swhy_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();

		 ?>
        <!-- start sWhy-->
			<section class="sWhy section" id="sWhy">
				<div class="sWhy__container container">
					<div class="section-title text-center">
						<h2><?php echo the_field('заголовок_03'); ?></h2>
					</div>
					<div class="sWhy__row row">
                        <?php $rows = get_field('список_03' );  if($rows ):    while ( have_rows('список_03') ) : the_row();
                                $index = array_rand( $rows );
                                ?>
                            <div class="col-6 col-lg-3">
                                <div class="sWhy__item text-center">
                                    <div class="sWhy__ball">
                                        <div class="sWhy__icon"><img loading="lazy" src="<?php echo the_sub_field('иконка'); ?>" alt=""/>
                                        </div>
                                    </div>
                                    <div class="sWhy__txt">T<?php echo the_sub_field('текст'); ?></div>
                                </div>
                            </div>
                        <?php  endwhile;  else :  endif;    ?>
					</div>
				</div>
			</section>
			<!-- end sWhy-->
   <?php return ob_get_clean();

}
/*
	* *****************************************************
	*/
	add_shortcode('video', 'video_func');
	function video_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();

		 ?>
        <!-- start sVideo-->
        <section class="sVideo section" id="sVideo">
            <div class="container">
                <div class="section-title text-center">
                    <?php echo the_field('заголовок_05'); ?>
                </div>
                <div class="sVideo__box">
                    <div class="sVideo__bg-img d-none d-xl-block"><img loading="lazy" src="<?php echo $get_template_directory_uri ?>/public/img/@2x/sVideo-cat.png" alt=""/>
                    </div><a class="sVideo__video-box" href="<?php echo the_field('видео_05'); ?>" data-fancybox="video"><span class="sVideo__v-img"><img loading="lazy" src="<?php echo $get_template_directory_uri ?>/public/img/@2x/sVideo-bg.jpg" alt=""/></span></a>
                </div>
                <div class="text-center"><a class="sVideo__btn  link-modal-js" data-fancybox="dialog" data-src="#modal-call" href="#">Подобрать свой идеальный шкаф</a>
                </div>
            </div>
        </section>
        <!-- end sVideo-->
   <?php return ob_get_clean();

}
/*
	* *****************************************************
	*/
	add_shortcode('form', 'form_func');
	function form_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();

		 ?>
        <!-- start sForm-->
        <section class="sForm section" id="sForm">
            <div class="container">
                <div class="section-title d-sm-none text-center">
                    <h2><?php echo the_field('заголовок_06'); ?></h2>
                </div>
                <div class="sForm__row row">
                    <div class="col-lg-6 d-none d-sm-block">
                        <div class="sForm__gray-box">
                            <div class="sForm__g-row row">
                                <div class="col-auto align-self-end">
                                    <div class="sForm__img"><img loading="lazy" src="<?php echo $get_template_directory_uri ?>/public/img/@2x/sForm-man.png" alt=""/>
                                    </div>
                                </div>
                                <div class="col">
                                    <h2 class="sForm__title"><?php echo the_field('заголовок_формы'); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sForm__blue-box text-center">
                            <div class="sForm__white-title">Оставьте свои данные и мы отправим Вам  файл "6 главных советов по выбору шкафа"
                            </div>
                                <div class="sForm__inputs">
                                    <?php  echo do_shortcode( '[contact-form-7 id="118" title="Форма"]' );?>
                                </div>
                            <div class="sForm__policy">
                                Нажимая на кнопку, вы даете согласие на обработку своих персональных данных и соглашаетесь с
                                <a href="<?php echo the_field('ссылка_на_соглашение'); ?>">Пользовательским соглашением.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end sForm-->
   <?php return ob_get_clean();

}
/*
	* *****************************************************
	*/
	add_shortcode('Conditions', 'Conditions_func');
	function Conditions_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();

		 ?>
        <!-- start sConditions-->
        <section class="sConditions section" id="sConditions">
            <div class="container">
                <div class="section-title text-center">
                    <h2><?php echo the_field('заголовок_07'); ?></h2>
                </div>
                <div class="sConditions__box">
                    <div class="sConditions__row row">
                        <div class="col-md-auto">
                            <div class="sConditions__img"><img loading="lazy" src="<?php echo the_field('изображение_07'); ?>" alt=""/>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="sConditions__items">
                                <?php echo the_field('текст_07'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end sConditions-->
   <?php return ob_get_clean();

}

/*
	* *****************************************************
	*/
	add_shortcode('FeedBack', 'FeedBack_func');
	function FeedBack_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();

		 ?>
        <!-- start sFeedBack-->
        <section class="sFeedBack section" id="sFeedBack">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Отзывы</h2>
                    <p>Мы получили уже более ... отзывов, вот некоторые из них.</p>
                </div>
                <div class="sFeedBack__slider-wrap">
                    <div class="swiper-container sFeedBack-slider-js">
                        <div class="swiper-wrapper">
                            <?php
                            $images = get_field('отзывы');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            $sizeLG = 'large'; // (thumbnail, medium, large, full or custom size)
                            ?>
                            <?php foreach( $images as $image_id ): ?>
                                <div class="swiper-slide">
                                    <a class="sFeedBack__img" href="<?php echo esc_url($image_id['url']); ?>" data-fancybox="headerBlockGalery">
                                        <img loading="lazy" src="<?php echo esc_url($image_id['sizes']['large']); ?>" alt="<?php echo esc_attr($image_id['alt']); ?>" />
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-prev">
                            <svg class="icon icon-arrow-circle-l ">
                                <use xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#arrow-circle-l"></use>
                            </svg>
                        </div>
                        <div class="swiper-next">
                            <svg class="icon icon-arrow-circle-r ">
                                <use xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#arrow-circle-r"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="text-center"><a class="sFeedBack__btn link-modal-js" data-fancybox="dialog" data-src="#modal-call" href="#">Хочу так же</a>
                </div>
            </div>
        </section>
        <!-- end sFeedBack-->
   <?php return ob_get_clean();

}


