<?php
/**
 * Template name: Flexible content
 */



get_header();
?>
    <div id="flexible" class="mt-[72px]"></div>
<?php
$flexible_content = get_field('sections');

if ( ! empty( $flexible_content ) ) {
	foreach ( $flexible_content as $item ) {

		get_template_part( 'partials/flexible-content/' . $item['acf_fc_layout'], '', $item );
	}
}

get_footer();