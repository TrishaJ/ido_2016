<form class="form-inline" method="GET">
	<div class="form-group">
		<label for="news">Категории новостей</label>
		<select class="form-control" name="category_id">
			<option></option>
			<?php foreach($categories as $category) : ?>
				<option value="<?= $category->id ?>"
					<?php if ($category->id == $category_id) :?>
						selected="selected"
					<?php endif; ?>
					>
					<?= $category->title ?>
				</option>
			<?php endforeach; ?>
		</select>
	</div>
	<button type="submit" class="btn btn-default">Найти</button>
</form>