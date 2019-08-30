<?php
/**
 * Template part for displaying portfolio item
 *
 * @package Leanex Lite
 */
?>
<div class="portfolio-item">
	<div class="hover-bg">
		<div class="hover-text">
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>                           
<?php
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'leanex-lite-small' );
	$alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);

	// get term for filter class
	$terms =  get_the_terms( $post->ID, 'portfolio_category' );
	$term_list = null;
		if( is_array($terms) ) {
			foreach( $terms as $term ) {
				$term_list .=  '<a href="'. esc_url( get_term_link( (int)$term->term_id, $term->taxonomy ) ) .'">'. esc_html( $term->name ) .'</a>';
				$term_list .= '  ';
			}
		}
	printf( '<small>%s</small>', $term_list );
	?>	
			<div class="clearfix"></div>
		</div><!-- .hover-text -->
	<img src="<?php echo esc_url( $thumbnail[0] ); ?>" class="img-responsive" alt="<?php echo esc_attr( $alt ); ?>">
	</div><!-- .hover-bg -->
</div><!-- .portfolio-item -->