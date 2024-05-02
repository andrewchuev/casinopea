<?php
$item = $args['child'];

$attributes = get_field('attributes', $item);
?>
<div class="w-full bg-gray-65 flex flex-col justify-center items-center p-6 rounded-xl border-2 border-background-100 hover:border-accent-100 ease-in-out duration-500">
    <a href="<?= esc_url( get_term_link( $item ) ) ?>">
        <div class="mb-4 text-center">
			<?= esc_html( $item->name ) ?>
        </div>
        <div class="w-full flex justify-center items-center bg-white p-8 rounded-xl">
            <img class="w-[75px]" src="<?= $attributes['image']['url'] ?? '' ?>" alt="">
        </div>
        <div class="w-full my-4 text-left">
			<?= $attributes['subtitle'] ?? '' ?>
        </div>
        <div class="text-white-65">
			<?= esc_html( $item->description ) ?? '' ?>
        </div>
        <div class="mt-4 w-full">
            <button class="w-full py-2 px-4 font-bold bg-gradient-to-r from-[#554E63] to-[#1A181B] rounded-xl border-2 border-accent-100 hover:opacity-50 ease-in-out duration-500">
                See All <?= esc_html( $item->name ) ?> Casinos
            </button>
        </div>
    </a>
</div>