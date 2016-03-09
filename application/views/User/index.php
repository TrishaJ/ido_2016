<a href="/user/form" class="btn btn-default">
	Создать
</a>

<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>
				ID
			</th>
			<th>
				Пользователь
			</th>
			<th>
				Email
			</th>
			<th>
				Последний вход
			</th>
			<td>
				
			</td>
		</tr>
	</thead>

	<tbody>
		<?php if ($users->count()): ?>
		<?php foreach($users as $user): ?>
			<tr>
				<td>
					<?= $user->id ?>
				</td>
				<td>
					<?= $user->username?>
				</td>
				<td>
					<?= $user->email ?>
				</td>
				<td>
					<?= $user->last_login ?>
				</td>
				<td>
					<a href="<?= URL::default_url('user', 'form', $user->id) ?>">
						Редактировать
					</a>
					<a href="">
						Удалить
					</a>
				</td>
			</tr>
		<?php endforeach; ?>
		<?php else :?>
			<tr>
				<td colspan="5" class="text-center">
					Нет пользователей
				</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>