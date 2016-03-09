<ul class="nav nav-pills nav-stacked">
	<?php foreach ($pages as $page) : ?>
		<?php $url = Url::page($page); ?>
		<li
			<?php if (strpos($current_url, $url) !== FALSE) : ?>
				class="active"
			<?php endif; ?>
		>
			<a href="<?= $url ?>" >
				<?= $page->title ?>	
			</a>
		</li>
	<?php endforeach; ?>
</ul>