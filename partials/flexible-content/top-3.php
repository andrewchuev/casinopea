<!--Top-3-->
<section class="bg-gradient-to-r from-[#3D298B] to-[#1C1320] py-8 mt-16">
    <div class="top-3 container px-4 mx-auto" style="background: url(<?= get_template_directory_uri() . '/resources/img/top3-bg.png' ?>) no-repeat center center; background-size: cover">
        <div class="w-full lg:w-1/2 mx-auto">
            <h1 class="text-2xl font-bold pb-4 text-center"><?= $args['title'] ?? '' ?></h1>

            <p><?= $args['description'] ?? '' ?></p>
        </div>

        <div class="mx-auto flex flex-wrap justify-center gap-6 mt-8">
			<?php
			$casinos = $args['items'] ?? [];
			$index = 1;
			foreach ( $casinos as $post ) {
				get_template_part( 'partials/casino_item', null, ['index' => $index, 'width' => 'sm:w-80'] );
                $index++;
			}
			?>
        </div>
    </div>
</section>