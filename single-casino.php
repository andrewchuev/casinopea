<?php
get_header();
$attributes = get_field( 'attributes', $post );
?>

<section class="casino-details mt-20">

    <div class="w-full" style="background: linear-gradient(0deg, rgba(61, 41, 139, 0.25) 0%, rgba(61, 41, 139, 0.25) 100%), #1C1320;">
        <div class="container mx-auto flex gap-2 px-2 py-6">
            <div class="text-white-65 flex gap-2">
                <a href='/'>Home</a>
                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                </svg>

                <a href="/casino-reviews/">Casino Reviews</a>
            </div>
            <div class="flex gap-2">
                <div>
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                    </svg>
                </div>
                <div><?= get_the_title() ?> Bonus & Review</div>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-8">
        <div class="flex flex-wrap items-start gap-6 px-2">
            <div class="w-full lg:w-1/4 rounded-2xl rounded-t-none bg-gradient-to-b from-[#1C1320] to-[#3D298B] px-2 pb-4">

                <div class="px-2 rounded-b-xl" style="background: url('<?= get_the_post_thumbnail_url( $post ) ?>') no-repeat center / cover; height: 130px"></div>

                <div class="flex justify-between items-center mt-4 px-4">
                    <div class="flex">
                        <img src="<?= get_template_directory_uri() . '/resources/img/icons/star.png' ?>" alt="star">
                        <span class="ms-1 text-yellow"><?= $attributes['rating'] ?? '' ?></span>/<span>10</span>
                    </div>
                    <div class="flex">
                        <img src="<?= get_template_directory_uri() . '/resources/img/icons/checked.png' ?>" alt="checked">
                        <span class="ms-1"><?= ! empty( $attributes['certified'] ) ? 'Certified' : '' ?></span>
                    </div>
                </div>

            </div>
            <div class="casino-content w-full lg:w-2/4 px-2">
				<?php
				the_content();
				?>
            </div>

        </div>
    </div>

    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 mt-16 px-4 gap-5">
        <div class="expert-opinion">
			<?= $attributes['expert_opinion'] ?>
        </div>
        <div class="bg-gray-25 p-4">
            <h1 style="border: none!important;">General Information</h1>
            <div>
                <!-- Tab buttons -->
                <div class="w-full flex justify-between border-b-2 border-accent-100 ">
                    <button class="tab-button w-full px-4 py-4 text-white rounded-t-xl border-0 border-accent-100 border-b-0 " data-tab-target="#tab1">Casino Details</button>
                    <button class="tab-button w-full px-4 py-4 text-white rounded-t-xl border-0 border-accent-100 border-b-0" data-tab-target="#tab2">Support Details</button>
                    <button class="tab-button w-full px-4 py-4 text-white rounded-t-xl border-0 border-accent-100 border-b-0" data-tab-target="#tab3">Payment Details</button>
                </div>

                <!-- Tab content -->
                <div class="tab-content flex flex-col gap-y-2 mt-5" id="tab1">
					<?= get_template_part( '/partials/casino-single/tab-casino-details', null, [ 'attributes' => $attributes ] ) ?>
                </div>
                <div class="tab-content mt-5 hidden" id="tab2">
	                <?= get_template_part( '/partials/casino-single/tab-payment-details', null, [ 'attributes' => $attributes ] ) ?>
                </div>
                <div class="tab-content mt-5 hidden" id="tab3">
	                <?= get_template_part( '/partials/casino-single/tab-payment-details', null, [ 'attributes' => $attributes ] ) ?>
                </div>
            </div>


            <div>
                <h1 class="mt-4">Deposit Methods</h1>
                <div class="flex flex-wrap items-center bg-white mt-4 p-2 rounded-xl">
					<?php
					$terms = get_the_terms( $post->ID, 'payment-method' );
					if ( $terms && ! is_wp_error( $terms ) ) {
						foreach ( $terms as $term ) {
							$atts = get_field( 'attributes', $term );
							?>
                            <img class="w-[55px] p-1" src="<?= $atts['image']['url'] ?? '' ?>" alt="">
							<?php

						}
					}
					?>
                </div>
            </div>

        </div>


    </div>

    <div class="container content mx-auto px-5 lg:px-0 mt-16 lg:w-1/3 ">
        <div>
			<?= $attributes['casino_offers'] ?? '' ?>
        </div>

        <div class="mt-6">
			<?= $attributes['casino_bonuses'] ?? '' ?>

            <div class="bg-gray-25 p-4 flex flex-col gap-y-2 mt-5" id="tab1">
		        <h1>Bonuses Table</h1>
                <?= get_template_part( '/partials/casino-single/tab-casino-details', null, [ 'attributes' => $attributes ] ) ?>
            </div>

        </div>

        <div class="mt-6">
			<?= $attributes['mobile_gaming'] ?? '' ?>
        </div>

        <div class="mt-6">
			<?= $attributes['how_to_register'] ?? '' ?>

            <div class="bg-gray-25 p-4 flex flex-col gap-y-2 mt-5" id="tab1">
                <h1>Payment Options</h1>
		        <?= get_template_part( '/partials/casino-single/tab-payment-details', null, [ 'attributes' => $attributes ] ) ?>
            </div>

        </div>

        <div class="mt-6">
			<?= $attributes['security_and_fairness'] ?? '' ?>
        </div>

        <div class="mt-6">
			<?= $attributes['support'] ?? '' ?>
        </div>

    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabs = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');

        // Активация первого таба при загрузке
        tabs[0].classList.replace('border-0', 'border-2');
        tabContents[0].classList.remove('hidden');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = document.querySelector(tab.dataset.tabTarget);
                tabContents.forEach(tc => {
                    tc.classList.add('hidden');
                });
                target.classList.remove('hidden');
                tabs.forEach(t => {
                    t.classList.replace('border-2', 'border-0');
                });
                tab.classList.replace('border-0', 'border-2');
            });
        });
    });
</script>


<?php


get_footer();
?>


