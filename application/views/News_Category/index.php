<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover table-bordered">
				<tr>
					<th>
						ID Категории
					</th>
					<th>
						Заголовок категории
					</th>
				</tr>

				<?php foreach ($categories as $category) :?>
					<tr>
						<td>
							<?= $category->id?>
							
						</td>
						<td>
							<a href="<?= URL::site(Route::get('default')
								->uri(array(
									'controller' 	=> 'News_Category',
									'action'		=> 'view',
									'id' 			=> $category->id
								)));?>">
								<?= $category->title ?>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>

			</table>
		</div>
	</div>
</div>