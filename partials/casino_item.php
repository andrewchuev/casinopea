<?php
$attributes = get_field( 'attributes' );
$width      = $args['width'] ?? 'sm:w-56';
//ep($args['width']);
$borderColor = empty( $args['width'] ) ? 'border-[#2d1e56]' : 'border-background-100';
//$borderColor = 'border-transparent';
?>

<div class="flex flex-col w-full <?= $width ?>">
    <div class="text-center text-accent-100 mb-8"><?= $args['index'] ?></div>
    <div class="w-full mx-auto p-4 rounded-2xl bg-gradient-to-b from-[#1C1320] to-[#3D298B] <?= $borderColor ?> border-2 hover:border-accent-100 ease-in-out duration-200">

        <div class="relative rounded-xl shadow-2xl shadow-gray-500 -mt-8" style="background: url('<?= get_the_post_thumbnail_url( $post ) ?>') no-repeat center / cover; height: 130px"></div>

        <div class="flex justify-between items-center mt-4">
            <div class="flex">
                <img src="<?= get_template_directory_uri() . '/resources/img/icons/star.png' ?>" alt="star">
                <span class="ms-1 text-yellow"><?= $attributes['rating'] ?? '' ?></span>/<span>10</span>
            </div>
            <div class="flex">
                <img src="<?= get_template_directory_uri() . '/resources/img/icons/checked.png' ?>" alt="checked">
                <span class="ms-1"><?= ! empty( $attributes['certified'] ) ? 'Certified' : '' ?></span>
            </div>
        </div>
        <hr class="mt-2 border-white-25">
        <div class="mt-2 text-center text-white opacity-60">Bonus</div>
        <div class="text-lg text-center font-bold">
			<?= $attributes['bonus']['percentage'] ?? '' ?>% + <?= $attributes['bonus']['fs'] ?? '' ?> FS
        </div>

        <hr class="mt-2 border-white-25">

        <div class="accordion max-w-md mx-auto">
            <div class="accordion-header flex justify-center gap-2 items-center text-accent-100 px-5 py-3 cursor-pointer">
                <span>Deposit Methods</span>
                <svg class="w-3 h-3 shrink-0 transform transition-transform duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l4 4 4-4"></path>
                </svg>
            </div>
            <div class="panel hidden flex flex-wrap justify-between items-center bg-white mt-4 p-2 rounded-md">
				<?php
				$terms = get_the_terms( $post->ID, 'payment-method' );
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

        <div class="w-full flex justify-between items-center mt-6 gap-3">
            <a class="w-full" href="<?= get_permalink( $post ) ?>">
                <button class="w-full py-2 px-4  font-bold bg-gradient-to-r from-[#3D298B] to-[#1A181B] rounded-xl border-2 border-accent-100 hover:opacity-50 ease-in-out duration-500">Review</button>
            </a>
            <a class="w-full" href="<?= $attributes['general_information']['website'] ?? '' ?>">
                <button class="w-full py-2 px-6  font-bold bg-accent-100 text-background-100 rounded-xl border-2 border-accent-100 hover:opacity-50 ease-in-out duration-500">Play</button>
            </a>
        </div>
        <div class="text-center text-yellow my-4">T&C Apply</div>
    </div>
</div>