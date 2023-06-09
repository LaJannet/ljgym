<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer..org/themes/basics/template-hierarchy/
 *
 * @package 
 * @subpackage Kit
 * @since Kit 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$kit_unique_id = kit_unique_id( 'search-form-' );

$kit_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
// Backward compatibility, in case a child theme template uses a `label` argument.
if ( empty( $kit_aria_label ) && ! empty( $args['label'] ) ) {
	$kit_aria_label = 'aria-label="' . esc_attr( $args['label'] ) . '"';
}
?>
<form role="search" <?php echo $kit_aria_label; // phpcs:ignore .Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $kit_unique_id ); ?>">
		<span class="screen-reader-text">
			<?php
			/* translators: Hidden accessibility text. */
			_e( 'Search for:', 'kit' ); // phpcs:ignore: .Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations
			?>
		</span>
		<input type="search" id="<?php echo esc_attr( $kit_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'kit' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'kit' ); ?>" />
</form>
