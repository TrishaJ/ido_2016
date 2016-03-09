<table class="table table-hover table-bordered">
	<tr>
		<th>
			Заголовок новости
		</th>
		<th>
			Категория
		</th>
	</tr>

	<?php foreach ($news as $one_news) :?>
		<tr>
			<td>
				<a href="<?= URL::site(Route::get('default')
					->uri(array(
						'controller' 	=> 'news',
						'action'		=> 'view',
						'id' 			=> $one_news->id
					)));?>">
					<?= $one_news->title ?>
				</a>
			</td>
			<td>
				<?= $one_news->category->title ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>	