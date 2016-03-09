<table class="table table-hover table-bordered">
	<tr>
		<th>
			Заголовок
		</th>
		<th>
			Статус
		</th>
		<th>
			Опции
		</th>
	</tr>

	<?php if (count($categories)) : ?>
		<?php foreach ($categories as $category) : ?>
			<tr>
				<td>
					<?= $category->title ?>
				</td>
				<td>
					<?= Model_Transaction_Category::get_statuses($category->status) ?>
				</td>
				<td>
					
				</td>
			</tr>
		<?php endforeach; ?>
	<?php else : ?>
		<tr>
			<td colspan="3" class="text-center">
				У вас еще нет категорий
			</td>
		</tr>
	<?php endif; ?>
</table>