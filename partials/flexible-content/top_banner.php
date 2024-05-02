<?php
$casino     = $args['casino'] ?? [];
$attributes = get_field( 'attributes', $casino->ID );
//ep($args);
?>
<!--Top banner-->
<section class="mt-16 xl:mt-[83px]">
    <div class="top-banner container w-full mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center flex-wrap px-2 lg:px-20 py-4 bg-opacity-20" style="background: <?= $args['background_color'] ?? '' ?>">
            <div class="flex  items-center gap-8">

                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/img/icons/fire.svg' ?>" alt="fire">
                </div>

                <div>
                    <img class="max-w-[75px] rounded-xl" src="<?= get_the_post_thumbnail_url( $casino ) ?? '' ?>" alt="">
                </div>

                <div class="flex flex-col">
                    <div class="text-xs sm:text-base font-bold">
						<?= $casino->post_title ?>
                    </div>
                    <div class="flex">
                        <img src="<?= get_template_directory_uri() . '/resources/img/icons/star.png' ?>" alt="star">
                        <span class="ms-1 text-yellow"><?= $attributes['rating'] ?? '' ?></span>/<span>10</span>
                    </div>
                </div>

                <div class="flex flex-col justify-between items-start ">
                    <div class="text-xs md:text-2xl font-bold">100% ON 1ST DEPOSIT</div>
                    <div class="text-xs md:text-xl font-medium opacity-50">Welcome Bonus</div>
                </div>

            </div>

            <div class="w-full md:w-auto flex items-center justify-between gap-4 mt-4 md:mt-0">
                <button class="w-full py-2 px-6 font-bold bg-accent-100 text-background-100 rounded-xl border-2 border-accent-100 hover:opacity-50 ease-in-out duration-500">Get Bonus</button>
            </div>
        </div>
    </div>
</section>
