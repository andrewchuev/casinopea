<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package casinopea
 */
global $options;
?>

<footer class="bg-gradient-to-r from-[#3D298B] to-[#1C1320] mt-16">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 py-8 px-4">
        <div>
            <div class="py-1">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="<?= $options['header']['logo']['url'] ?? '' ?>" class="h-8" alt="Casinopea Logo">
                </a>
                <hr class="mt-2 border-white-25 border-t-2">
            </div>
            <div class="footer__description text-white-65 mt-4">
                <?= $options['footer']['description'] ?>
            </div>
        </div>

        <div class="flex flex-col">
            <div>
                <h3>Sitemap</h3>
                <hr class="mt-2 border-white-25 border-t-2">
            </div>
            <div class="flex flex-col gap-8 font-bold text-lg mt-6">
				<?php
				$items       = get_menu_items( 'Top menu' );
				$current_url = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

				foreach ( $items as $item ) {
					if ( empty( $item['children'] ) ) {
						$is_current = rtrim( $item['item']->url, '/' ) == rtrim( $current_url, '/' );
						$item_class = $is_current ? 'text-yellow' : 'text-white';

						?>
                        <li class="flex items-center gap-6 <?= $item_class; ?>">
                            <a href="<?= $item['item']->url ?>"
                               class="inline-block py-2 px-3 hover:text-accent-65 md:p-0">
								<?= $item['item']->title ?>
                            </a>
                        </li>
						<?php
					}
				}
				?>
            </div>

        </div>

        <div>
            <h3>
                18+ Only
            </h3>
            <hr class="mt-2 border-white-25 border-t-2">
            <div class="flex flex-col gap-6 mt-4">
				<?php
				$sponsors = $options['footer']['sponsors'] ?? [];
				foreach ( $sponsors as $sponsor ) {
					?>
                    <div>
                        <a href="<?= $sponsor['url'] ?? '' ?>">
                        <img src="<?= $sponsor['image']['url'] ?? '' ?>">
                        </a>
                    </div>
					<?php
				}
				?>
            </div>
        </div>

        <div>
            <div>
                <h3>Contact Us</h3>
                <hr class="mt-2 border-white-25 border-t-2">
            </div>

            <div class="footer__contact-us mt-4 text-white-65">
	            <?= $options['footer']['contact_us'] ?>
            </div>
            <h3 class="mt-4">Social Media</h3>
            <hr class="mt-2 border-white-25 border-t-2">
            <div class="flex gap-6 my-4">
		        <?php
		        $items = $options['footer']['socials'] ?? [];
		        foreach ( $items as $item ) {
			        ?>
                    <div class="flex justify-center items-center p-2 rounded-full bg-gradient-to-t from-[#3D298B] to-[#1C1320]">
                        <a href="<?= $item['url'] ?? '' ?>">
                            <img src="<?= $item['image']['url'] ?? '' ?>" alt="<?= $item['title'] ?? '' ?>">
                        </a>
                    </div>
			        <?php
		        }
		        ?>
            </div>
            <div class="text-white-65">© <?= date('Y') ?>. <?= $options['footer']['copyright'] ?></div>
        </div>
    </div>

</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<section class="fixed bottom-0 start-0 end-0">
    <div class="w-full mx-auto bg-gray-25 backdrop-blur-lg">
        <div class="flex flex-col md:flex-row justify-between items-center flex-wrap px-2 lg:px-20 py-4">

            <div class="flex justify-between items-center gap-6">
                <img class="" src="<?= get_template_directory_uri() . '/resources/img/icons/cookie.svg' ?>" alt="">
                <div>We use cookies to improve your experience on our website</div>
            </div>

            <div class="flex justify-between items-center">
                <button class="grow py-2 px-6 text-accent-100 font-bold">Manage Cookies</button>

                <button class="py-2 px-6  font-bold bg-accent-100 text-background-100 rounded-xl border-2 border-accent-100 hover:opacity-50 ease-in-out duration-500" onclick="hideParent(this)">Accept</button>
            </div>

        </div>
    </div>
</section>

<script>
    function hideParent(element) {
        // Получаем родительский элемент кнопки и скрываем его
        const section = element.closest('section');
        section.style.display = 'none';
    }
</script>

</body>
</html>
