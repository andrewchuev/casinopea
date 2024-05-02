<?php
$items = get_menu_items( 'Top menu' );
global $options;
$options = get_field( 'options', 'options' );
?>
<nav class="fixed text-white z-20 top-0 start-0 end-0 bg-dark opacity-90 bg-gradient-to-l from-[#1C1320] to-[#3D298B]">
    <div class="container flex flex-wrap items-center justify-between mx-auto px-2 py-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="<?= $options['header']['logo']['url'] ?? '' ?>" class="h-8" alt="Casinopea Logo">
        </a>

        <div class="flex xl:order-2 space-x-3 xl:space-x-0 rtl:space-x-reverse">
            <div class="flex bg-gradient-to-r from-[#3D298B] to-[#1C1320] gap-2 p-2 rounded-lg border-2 border-[#1C1320] hover:border-accent-100 cursor-pointer ease-in-out duration-500">
                <img src="<?= get_template_directory_uri() . '/resources/img/icons/image-country.svg' ?>" alt="">
                <div class="font-bold">EN</div>
            </div>
            <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-sticky" aria-expanded="false"
            >
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>

        <div class="items-center justify-between hidden w-full xl:flex xl:w-auto xl:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 xl:p-0 mt-4 text-white font-medium border border-gray-100 rounded-lg xl:space-x-8 rtl:space-x-reverse xl:flex-row xl:mt-0 xl:border-0">
				<?php
				$current_url = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				$i           = 0;
				foreach ( $items as $item ) {
					if ( ! empty( $item['children'] ) ) {
						?>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                    class="flex items-center justify-between w-full py-2 px-3 text-white rounded xl:border-0 xl:hover:text-gray-200 xl:p-0 xl:w-auto"
                            >
								<?= $item['item']->title ?>
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">

									<?php

									foreach ( $item['children'] as $child ) {
										?>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100"><?= $child->title ?></a>
                                        </li>
										<?php
									}

									?>
                                </ul>
                            </div>
                        </li>
						<?php
					} else {
						$is_current = rtrim( $item['item']->url, '/' ) == rtrim( $current_url, '/' );
						$item_class = $is_current ? 'text-accent-65' : 'text-white';
						$i ++;
                        ?>
                        <li class="flex items-center justify-between gap-6 font-bold <?= $item_class; ?> ">
                            <a href="<?= $item['item']->url ?>" class="inline-block py-2 hover:text-accent-65 hover:ease-in-out hover:duration-300">
								<?= $item['item']->title ?>
                            </a>
							<?php if ( $i < count( $items ) ) { ?>
                                <div class="hidden xl:inline-block -mt-2 font-bold text-6xl text-accent-65">·</div>
							<?php } ?>
                        </li>
						<?php

					}
				}

				?>
            </ul>
        </div>


    </div>

</nav>
