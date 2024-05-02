<?php
$casino     = $args['casino'] ?? [];
$attributes = get_field( 'attributes', $casino->ID );
//ep($attributes);
?>
<!--Best Bonus Banner-->
<div class="container mx-auto my-8 px-3">
    <div class="flex flex-col sm:flex-row justify-between items-center gap-3 rounded-lg w-full xl:w-1/2 mx-auto p-4 my-2 xl:my-0" style="background-color: <?= $args['background_color'] ?? '' ?>">

        <div class="w-full">
            <img class="w-full" src="<?= get_the_post_thumbnail_url( $casino ) ?? '' ?>" alt="">
        </div>

        <div class="w-full flex flex-col items-center">
            <div class="text-sm text-white-65">Best Bonus</div>
            <h3 class="font-bold text-2xl"><?= $attributes['bonus']['percentage'] ?? '' ?>% UP TO $<?= $attributes['bonus']['amount'] ?? '' ?></h3>

            <hr class="w-full mt-2 border-white-25 border-t-2">


            <div class="accordion max-w-md mx-auto">
                <div class="accordion-header flex justify-center gap-2 items-center text-accent-100 px-5 py-3 cursor-pointer">
                    <span>Deposit Methods</span>
                    <svg class="w-3 h-3 shrink-0 transform transition-transform duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l4 4 4-4"></path>
                    </svg>
                </div>
                <div class="panel hidden flex flex-wrap justify-between items-center bg-white mt-4 p-2 rounded-md">
					<?php

					$terms = get_the_terms( $casino->ID, 'payment-method' );
					if ( $terms && ! is_wp_error( $terms ) ) {
						foreach ( $terms as $term ) {
							$atts = get_field( 'attributes', $term );
							?>
                            <img class="w-[50px] p-1" src="<?= $atts['image']['url'] ?? '' ?>" alt="">
							<?php

						}
					}
					?>
                </div>
            </div>


        </div>
        <div class="w-full flex flex-col gap-4 text-center">
            <a href="<?= $attributes['general_information']['website'] ?? '' ?>" class="py-3 font-bold bg-accent-100 text-background-100 rounded-xl border-2 border-accent-100 hover:opacity-50 ease-in-out duration-500">
                Get Bonus
            </a>
            <a href="<?= get_permalink( $casino ) ?>" class="py-3 font-bold bg-gradient-to-r from-[#3D298B] to-[#1A181B] rounded-xl border-2 border-accent-100 hover:opacity-50 ease-in-out duration-500">Review</a>
        </div>
    </div>
</div>
