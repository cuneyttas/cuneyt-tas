<?php

get_header();

if (have_posts()) :

	while (have_posts()) : the_post();
?>

		<div class="sutun-6">

			<h2><?php the_title(); ?> Sayfası</h2>
			<?php the_post_thumbnail( 'ana-resim', ['class' => 'anaResim'] ); ?>
			<?php the_content(); ?>

		</div> <!-- iceriğin sol tarafının sonu -->

		<div class="sutun-6 son-gonderiler">

			<h2>Son Gönderiler</h2>
			<?php

				$sonGonderiler = new WP_Query("posts_per_page=2");

				if ($sonGonderiler -> have_posts()) :

					while ($sonGonderiler -> have_posts()) :  $sonGonderiler -> the_post();
			?>

					<div class="son-gonderi">
						<a href="<?php the_permalink(); ?>" class="son-gonderiler-resim"><?php the_post_thumbnail('medium'); ?></a>
						<a href="<?php the_permalink(); ?>" class="son-gonderiler-baslik"><h3><?php the_title(); ?></h3></a>
						<?php the_excerpt(); ?>
					</div>
			<?php


					endwhile;

				else :

					echo "Gönderisi yayınlanacak post bulunamadı.";

				endif;
				wp_reset_postdata(); // Bu fonksiyon yazılmazsa aşağıdaki kod satırlarına da etki ediyor.

			?>

		</div> <!-- iceriğin sağ tarafının sonu -->


<?php

	endwhile;

else :

	echo "<p>İçerik bulunamadı.</p>";

endif;

get_footer();

?>
