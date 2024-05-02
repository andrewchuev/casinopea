<!-- Payment Methods List -->
<section class="payment-method-list mt-24 px-2">
	<?php

	$parent_terms = get_terms( [
		'taxonomy'   => 'payment-method',
		'parent'     => 0,
		'hide_empty' => false
	] );

	if ( ! empty( $parent_terms ) ) {
		foreach ( $parent_terms as $parent ) {
			?>
            <div class="text-center font-bold my-8">
				<?= esc_html( $parent->name ) ?>
            </div>
			<?php


			$child_terms = get_terms( [
				'taxonomy'   => 'payment-method',
				'parent'     => $parent->term_id,
				'hide_empty' => false
			] );

			if ( ! empty( $child_terms ) ) {
				?>
                <div class="container mx-auto grid grid-col-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
					<?php
					foreach ( $child_terms as $child ) {
						get_template_part( 'partials/payment_method_item', null, ['child' => $child] );
                        //echo '<a href="' . esc_url( get_term_link( $child ) ) . '">' . esc_html( $child->name ) . '</a>';
					}
					?>
                </div>
				<?php

			}
		}
	} else {
		echo '<p>No payment methods found.</p>';
	}
	?>


</section>
