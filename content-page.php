<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
global $post;

$titleColor    = get_post_meta( $post->ID, '_2015_cmb2_page_title_color',    true );
$subtitle      = get_post_meta( $post->ID, '_2015_cmb2_page_subtitle',       true );
$subtitleColor = get_post_meta( $post->ID, '_2015_cmb2_page_subtitle_color', true );

// The pre-defined possible color values - a whitelist.
$colors = array( 'black', 'white', 'blue', 'darkblue', 'green', 'darkgrey', 'lightgrey', 'purple' );

// Establish custom classes for the content wrapper.
$classes = array();

// If valid colors are selected, add custom classes to the page container element.
// If value is invalid, no custom color will be applied, and fall back to stylesheet color.

if ( in_array( $titleColor, $colors, true ) ) : // Checking page title color selection
	$classes[] = sprintf( 'custom-title-color-%s', $titleColor );
endif;

if ( in_array( $subtitleColor, $colors, true ) ) : // Checking page subtitle color selection
	$classes[] = sprintf( 'custom-subtitle-color-%s', $subtitleColor );
endif;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php if ( ! empty( $subtitle ) ) : // Ensure there is a value before adding markup. ?>
			<p class="entry-subtitle"><?php echo esc_html( $subtitle ); ?></p>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->
