<?php
/**
 * Template name: Home Page
 */

get_header();
//$sections = get_field( 'sections' );
?>

    <main id="primary" class="mt-24">

        <div class="container mx-auto">
            <div class="w-1/2 mx-auto p-4 rounded-2xl bg-gradient-to-b from-[#1C1320] to-[#51436E]">
                <h1 class="text-2xl font-bold pt-8 pb-4">Online Casino Australia 2024</h1>
                <p>Welcome to the detailed guide where we provide insight into the top-notch online casinos in Australia. Online casinos are flourishing globally because of the entertainment they
                    offer. Casino10 is an expert in providing insight into secured and top Australian online casinos that render the best real money games from reputed software providers globally.</p>

                <p>We provide a well-synchronized list of the best Australian casinos for Aussie players where you can get amazing bonuses and promotions. Our experts curate a list of those AU casinos
                    that are a great fit for Australian gamblers [1]. You can play at your favorite casinos, as we will provide you an insight into the banking options, top online australian casino
                    games provided, licenses, safety, and much more.</p>
            </div>
        </div>


        <div class="container mx-auto">
            <h1 class="text-2xl font-bold pt-8 pb-4">Our Top List Of Live Casinos In Australia 2024</h1>

            <p>Last but not least, we've got some few recommendations here for live casinos where not only the selection of live casino games is excellent. Everything else that the casino lobby has to
                offer can also be seen in every single live casino. So, let's dig in and see which live casino suits you best!</p>

            <div class="grid grid-cols-5 gap-5 mt-16">
				<?php
				$casinos = get_posts( 'post_type=casino' );
				foreach ( $casinos as $post ) {
					$attributes = get_field('attributes')
                    ?>
                    <div class="max-w-[200px] mx-auto p-2 rounded-2xl bg-gradient-to-b from-[#1C1320] to-[#51436E]">
                        <img src="<?= get_the_post_thumbnail_url($post) ?>" alt="">
                        <div class="flex justify-between items-center mt-4">
                            <div class="flex">
                                <img src="<?= get_template_directory_uri() . '/resources/img/icons/star.png' ?>" alt="star">
                                <span class="ms-1 text-yellow"><?= $attributes['rating'] ?? '' ?></span>/<span>10</span>
                            </div>
                            <div class="flex">
                                <img src="<?= get_template_directory_uri() . '/resources/img/icons/checked.png' ?>" alt="checked">
                                <span class="ms-1"><?= (!empty( $attributes['certified'] ) && $attributes['certified']) ? 'Certified' : '' ?></span>
                            </div>
                        </div>
                        <hr class="mt-2">
                        <div class="mt-2 text-center">Bonus</div>
                        <div class="text-lg text-center font-bold"><?= $attributes['bonus'] ?? '' ?></div>
                        <hr class="mt-2">
                        <div class="mt-6  text-center text-lg font-bold text-yellow">Deposit Methods</div>
                        <div class="flex justify-between items-center mt-6 gap-2">
                            <button class="py-2 px-4  font-bold bg-dark rounded-xl border-2 border-yellow">Review</button>
                            <button class="py-2 px-6  font-bold bg-yellow rounded-xl border-2 border-yellow">Play</button>
                        </div>
                        <div class="text-center text-yellow my-4">T&C Apply</div>
                    </div>
					<?php
				}
				?>
            </div>
        </div>


        <div class="container mx-auto">
            <h1 class="text-2xl font-bold pt-8 pb-4">Playing Online Slots</h1>
            <p>Welcome to the detailed guide where we provide insight into the top-notch online casinos in Australia. Online casinos are flourishing globally because of the entertainment they offer.
                Casino10 is an expert in providing insight into secured and top Australian online casinos that render the best real money games from reputed software providers globally.</p>

            <p>We provide a well-synchronized list of the best Australian casinos for Aussie players where you can get amazing bonuses and promotions. Our experts curate a list of those AU casinos
                that are a
                great fit for Australian gamblers [1]. You can play at your favorite casinos, as we will provide you an insight into the banking options, top online australian casino games provided,
                licenses,
                safety, and much more.</p>

            <h1 class="text-2xl font-bold pt-8 pb-4">Licence Types</h1>
            <p>The gambling industry has seen tremendous change in the recent past. With many online casinos coming up on the scene, players are now leaving land-based casinos. The foremost reason is
                comfort, and the second is security. At land-based casinos, you may have to wait a long to play your favorite games, but best casinos Australia online offers everything without any
                waiting
                time.</p>

            <p>Just log in with your id and password at any casino site and start playing on your Smartphone, iPhone, or desktop device. Players can easily deposit the bet money while doing online
                gambling. You can use modes like e-wallet, cryptocurrency, debit/credit cards, and much more. At Casino10, we study gambling sites to create a list of top Australian casinos.</p>

            <h1 class="text-2xl font-bold pt-8 pb-4">Responsible Gambling</h1>
            <p>For most people, gambling is a fun pastime. Yet others could develop a serious gambling problem. To ensure your gambling experience stays safe and fun, you should always gamble
                responsibly. We advise you to set yourself limits and stick to them.</p>


        </div>


    </main><!-- #main -->

<?php

get_footer();
