<?php
get_header();
$term = get_queried_object();
$attributes = get_field( 'attributes', $term );
?>

<section class="payment-method mt-24 px-4">
    <div class="mx-auto container flex flex-col lg:flex-row justify-center items-start gap-6">
        <div class="p-4 rounded-2xl bg-gradient-to-b from-[#1C1320] to-[#3D298B]">
            <div class="w-[288px] bg-white rounded-2xl rounded-t-none py-8 px-2">
                <img class="w-full" src="<?= $attributes['image']['url'] ?? '' ?>" alt="">
            </div>
            <div class="flex mt-4 justify-center">
                <img src="<?= get_template_directory_uri() . '/resources/img/icons/star.png' ?>" alt="star">
                <span class="ms-1 text-yellow"><?= $attributes['rating'] ?? '' ?></span>/<span>10</span>
            </div>
        </div>

        <div class="w-full xl:w-1/2">
			<?= $attributes['full_description'] ?? '' ?>
        </div>
    </div>


	<?php


	$casinos = get_casinos_by_payment_method( $term ) ?? [];
	if ( ! empty( $casinos ) ) {
		?>

        <div class="casino-list container mx-auto mt-16">

            <div class="mx-auto max-w-screen-xl flex flex-wrap justify-center gap-6 mt-8">
				<?php

				$index = 1;
				foreach ( $casinos as $post ) {
					get_template_part( 'partials/casino_item', null, [ 'index' => $index, 'width' => 'sm:w-56' ] );
					$index ++;
				}
				?>
            </div>

            <div class="flex justify-center">
                <button class="my-8 py-2 px-10 font-bold bg-gradient-to-r from-[#554E63] to-[#1A181B] rounded-xl border-2 border-accent-100 hover:opacity-50 ease-in-out duration-500">Load More
                </button>
            </div>
        </div>

	<?php } ?>

    <div class="relative container mx-auto mt-4">
        <div class="mx-auto w-full xl:w-1/2">
			<?= $attributes['why_choose'] ?? '' ?>
        </div>
    </div>

</section>
<?php get_footer(); ?>
