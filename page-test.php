<?php
/**
 *
 * Template name: Test Page
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Responsive Test Tool</title>
    <style>
        iframe {
            height: 90vh;
            border: 1px solid #cccccc;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>

<div class="containers">

    <div style="display: flex; gap: 50px">

		<?php
		$items = [
			'375'  => 'iPhone mini',
			'428'  => 'iPhone 12/13 Pro Max',
			'640'  => 'sm',
			'768'  => 'md',
			'1024' => 'lg',
			'1280' => 'xl',
			'1536' => '2xl',
		];
		?>

		<?php
		foreach ( $items as $width => $title ) {
			?>
            <div class="container">
                <h2><?= $title ?>(<?= $width ?>)</h2>
                <iframe style="width: <?= $width ?>px;"></iframe>
            </div>
			<?php
		}
		?>
    </div>
</div>


<script>
    function loadSite() {
        const url = '<?= $_GET['url'] ?? get_site_url() ?>';
        document.querySelectorAll('iframe').forEach(function (iframe) {
            iframe.src = url;
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        loadSite();
    });
</script>
</body>
</html>

