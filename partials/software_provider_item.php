<?php
$item = $args['item'] ?? [];

$attributes = get_field('attributes', $item);
?>

<div class="w-96 flex flex-col justify-center items-center p-6 rounded-xl border-2 bg-gray-65 border-background-100 hover:border-accent-100 ease-in-out duration-500">
    <a href="<?= esc_url( get_term_link( $item ) ) ?>">
        <div class="mb-4 text-center text-light-100">
			<?= esc_html( $item->name ) ?>
        </div>
        <div class="w-full flex justify-center items-center px-8 rounded-xl bg-gray-100">
            <img class="w-full" src="<?= $attributes['image']['url'] ?? '' ?>" alt="">
        </div>
    </a>
</div>