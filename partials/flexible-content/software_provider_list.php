<!-- Software Provide List -->
<section class="software-provider-list mt-28 px-2">
	<div class="container mx-auto flex flex-wrap justify-between items-center gap-6">
    <?php

	$items = get_terms( [
		'taxonomy'   => 'software-provider',
		'parent'     => 0,
		'hide_empty' => false
	] );

	if ( ! empty( $items ) ) {
		foreach ( $items as $item ) {
			get_template_part( 'partials/software_provider_item', null, [ 'item' => $item ] );
		}
	}
	?>

    </div>
</section>
