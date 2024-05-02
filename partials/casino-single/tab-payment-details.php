<?php
$attributes = $args['attributes'] ?? [];
?>


	<div class="flex pb-2 border-b-2 border-gray-25">
		<div class="w-1/2 text-white-65">Deposit Methods</div>
		<div class="w-1/2"><?= $attributes['general_information']['deposit_methods'] ?? '' ?></div>
	</div>

	<div class="flex pb-2 border-b-2 border-gray-25">
		<div class="w-1/2 text-white-65">Currencies</div>
		<div class="w-1/2"><?= $attributes['general_information']['currencies'] ?? '' ?></div>
	</div>

	<div class="flex pb-2 border-b-2 border-gray-25">
		<div class="w-1/2 text-white-65">Withdrawal Methods</div>
		<div class="w-1/2"><?= $attributes['general_information']['withdrawal_methods'] ?? '' ?></div>
	</div>

	<div class="flex pb-2 border-b-2 border-gray-25">
		<div class="w-1/2 text-white-65">Withdrawal Times</div>
		<div class="w-1/2">
			<?= $attributes['general_information']['withdrawal_times'] ?? '' ?>
		</div>
	</div>

	<div class="flex pb-2 border-b-2 border-gray-25">
		<div class="w-1/2 text-white-65">Withdrawal Limit</div>
		<div class="w-1/2">
			<?= $attributes['general_information']['withdrawal_limit'] ?? '' ?>
		</div>
	</div>




