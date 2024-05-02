<!--Features-->
<section class="bg-gray-25 py-8 mt-16">
    <div class="top-3 container px-4 lg:mx-auto" style="background: url(<?= get_template_directory_uri() . '/resources/img/top3-bg.png' ?>) no-repeat center center; background-size: cover">

        <div class="flex flex-col flex-wrap md:flex-row items-center md:items-start justify-center gap-6 mt-8">
			<?php
			$items = $args['items'] ?? [];
			foreach ( $items as $item ) {
				?>
                <div class="p-4 w-[300px] rounded-2xl bg-gray-25 border-2 border-transparent hover:border-accent-100 ease-in-out duration-500">
                    <div class="mb-4 font-bold text-center text-light-100"><?= $item['title'] ?? '' ?></div>
                    <img class="w-full rounded-2xl" src="<?= $item['image']['url'] ?? '' ?>" alt="">
                    <div class="mt-2 text-white-65"><?= $item['description'] ?? '' ?></div>
                </div>
				<?php
			}
			?>
        </div>
    </div>
</section>