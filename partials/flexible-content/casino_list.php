<!-- Casino List -->
<section>
    <div class="casino-list container mx-auto mt-16 px-4">
        <div class="w-full px-4 lg:w-1/2 mx-auto">
            <h1><?= $args['title'] ?? '' ?></h1>
            <p><?= $args['description'] ?? '' ?></p>
        </div>

        <div class="mx-auto max-w-screen-xl flex flex-wrap justify-center gap-6 mt-8">
			<?php
			$casinos = $args['items'] ?? [];
            $index = 1;
			foreach ( $casinos as $post ) {
				/*if ($index > 1) {
                    break;
                }*/
                get_template_part( 'partials/casino_item', null, ['index' => $index, 'width' => 'sm:w-56'] );
                $index++;
			}
			?>
        </div>

        <div class="flex justify-center">
            <button class="my-8 py-2 px-10 font-bold bg-gradient-to-r from-[#3D298B] to-[#1A181B] rounded-xl border-2 border-accent-100 hover:opacity-50 ease-in-out duration-500">Load More</button>
        </div>
    </div>
</section>