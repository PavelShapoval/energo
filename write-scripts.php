<?php //страна машин, делал проверку урл чтб не выводить адрес на поддоменах
$st = strpos("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",'strana');
if($st == 8){?>
 
	<div class="tel">+7 (831) 423 65 69</div>
	<div class="txt2">телефон в Нижнем Новгороде</div>
	<div class="address">ул. Мануфактурная, д.14а, оф.207<br>г.Нижний Новгород</div>
<?php 	}


?>


<!-- вхождение строки в uri делал на viva-city более корректная проверка, т.к. нулевое вхождение и есть medicine, слэши обязательны-->

<?php
			$string = strpos($_SERVER['REQUEST_URI'], '/medicine/');
			//var_dump($string);
			if($string === 0): ?> 
<!-- вхождение строки в uri делал на viva-city проверка в которой м.б. ошибка т.к. medicine может быть глубже в УРЛ-->			
<?php
			$string = strpos($_SERVER['REQUEST_URI'], 'medicine');
			//var_dump($string);
			if($string === 1): ?> 
			
				
				<div class="col-md-3">
					<div class="left-page-col">
						<? wp_nav_menu('menu=LeftMenu') ?>
							<div class="shares">
							<div class="shares-title">Акции Viva-City</div>
							<?php $args = new WP_Query( array( 'post_type' => 'share', 'posts_per_page' => -1 , 'order' => 'ASC') ); ?>
							<?php while ( $args->have_posts() ) : $args->the_post(); ?>
							<div class="shares-inner">
								<div class="shares-time"><?php the_field('share-time'); ?></div>
								<div class="shares-text"><?php the_field('share-text'); ?></div>
								<div class="shares-link"><a href="<?php the_field('share-link'); ?>">Подробнее</a></div>
							</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
							</div>
					</div>
				</div>
				
			<?php endif; ?>

			<?php
			$string = strpos($_SERVER['REQUEST_URI'], 'medicine');
			//var_dump($string);
			if($string === 1): 

			echo '<div class="col-md-9">';

			else:

			echo '<div class="col-md-12">';	
			
			endif;
			?>	
<!-- <вхождение строки в uri делал на viva-city-->
