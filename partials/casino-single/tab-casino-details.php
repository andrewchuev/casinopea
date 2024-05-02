<?php
$attributes = $args['attributes'] ?? [];
?>


	<div class="flex pb-2 border-b-2 border-gray-25">
		<div class="w-1/2 text-white-65">Website</div>
		<div class="w-1/2"><?= $attributes['general_information']['website'] ?? '' ?></div>
	</div>

	<div class="flex pb-2 border-b-2 border-gray-25">
		<div class="w-1/2 text-white-65">Founded</div>
		<div class="w-1/2"><?= $attributes['general_information']['founded'] ?? '' ?></div>
	</div>

	<div class="flex pb-2 border-b-2 border-gray-25">
		<div class="w-1/2 text-white-65">Licence</div>
		<div class="w-1/2"><?= $attributes['general_information']['licence'] ?? '' ?></div>
	</div>

	<div class="flex pb-2 border-b-2 border-gray-25">
		<div class="w-1/2 text-white-65">Languages</div>
		<div class="w-1/2">
			<?= $attributes['general_information']['languages'] ?? '' ?>
		</div>
	</div>

	<div class="flex pb-2 border-b-2 border-gray-25">
		<div class="w-1/2 text-white-65">Owner</div>
		<div class="w-1/2">
			<?= $attributes['general_information']['owner'] ?? '' ?>
		</div>
	</div>

	<div class="flex pb-2 border-b-2 border-gray-25">
		<div class="w-1/2 text-white-65">Loyalty/VIP Program</div>
		<div class="w-1/2">
			<?= $attributes['general_information']['loyaltyvip_program'] ?? '' ?>
		</div>
	</div>

	<div class="flex pb-2 border-b-2 border-gray-25">
		<div class="w-1/2 text-white-65">Games</div>
		<div class="w-1/2">
			<?= $attributes['general_information']['games'] ?? '' ?>
		</div>
	</div>


