<?php get_header(); ?>

<?php
$lang = substr(get_bloginfo ( 'language' ), 0, 2);

$translations = array(
	'en' => array(
		'downloads' => 'VARIOUS STUDIES',
	),
	'es' => array(
		'downloads' => 'ESTUDIOS VARIOS',
	)
);
?>

<div id="background-image" style="background-image: url('<?php bloginfo("template_url")?>/img/home.jpg');">
	<h1>&nbsp;</h1>
</div>

<div class="container" id="inner-content">

	<div class="row">
		<div class="col-lg-12">

			<h1><?php echo $translations[$lang]['downloads']; ?></h1>

			<?php $count = 0 ?>

			<div class="row">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<div class="col-xs-3 col-sm-3">

				<?php
				$count++;

				if(i % 4 == 0) {
					echo '<div class="row">';
				}
				?>

				<!-- article -->
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post title -->
					<h2>
						<?php the_title(); ?>
					</h2>
					<!-- /post title -->

					<?php
					$args = array(
						'post_type'   => 'attachment',
						'numberposts' => -1,
						'post_status' => 'any',
						'post_parent' => $post->ID,
						'exclude'     => get_post_thumbnail_id(),
					);

					$attachments = get_posts( $args );

					if ( $attachments ) {
						foreach ( $attachments as $attachment ) {


							$pdf_id = $attachment->ID;
							$thumbnail_id = get_post_meta( $pdf_id, '_thumbnail_id', true );
							if ($thumbnail_id) {
								$thumb_src = wp_get_attachment_image_src ( $thumbnail_id, 'medium' );
								echo '<a class="pdf-link image-link" href="'.wp_get_attachment_url( $pdf_id ).'" title="'.esc_attr( get_the_title( $pdf_id ) ).'" target="_blank"><img src="'. $thumb_src[0] .'" width="'. $thumb_src[1] .'" height="'. $thumb_src[2] .'"/></a>'."\n";
							}
						}
					}
					?>

					<?php
					$count++;

					if(i % 4 == 0) {
						echo '</div>';
					}
					?>

					<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="details"><?php echo $translations[$lang]['back']; ?> &gt;</a></p>

				</div>

				</div>
				<!-- /article -->

			<?php endwhile; ?>

			<?php endif; ?>

			</div>

		</div>
	</div>

</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#home-menu').parent('a').attr("href", "/");
	});
</script>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
