<section>
    <div class="faq container mx-auto mt-6 px-4 xl:px-0">
        <div class="mx-auto xl:w-1/2">
            <h1><?= $args['title'] ?? '' ?></h1>
            <p><?= $args['subtitle'] ?? '' ?></p>
        </div>

        <div class="mx-auto mt-6 xl:w-1/2">

			<?php
			$items = $args['items'] ?? [];
			foreach ( $items as $item ) {
				?>

                <div class="faq-item my-4">
                    <button class="toggle-faq flex justify-between items-center w-full py-4 px-4 border-2 border-gray-65 hover:border-accent-100 focus:border-accent-100 rounded-xl">
                        <span class="font-bold text-left"><?= $item['question'] ?? '' ?></span>
                        <span class="icon">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 10 4 4 4-4"/>
                            </svg>
                        </span>
                    </button>
                    <div class="answer hidden">
                        <p class="p-4"><?= nl2br( $item['answer'] ) ?? '' ?></p>
                    </div>
                </div>

				<?php
			}
			?>

        </div>

    </div>

    <script>
        document.querySelectorAll('.toggle-faq').forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;
                const icon = button.querySelector('.icon');

                if (answer.classList.contains('hidden')) {
                    answer.classList.remove('hidden');
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    answer.classList.add('hidden');
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });
    </script>
</section>