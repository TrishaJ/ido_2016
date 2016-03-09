<form class="form-horizontal" method="POST">
<fieldset>

  <!-- Form Name -->
  <legend><?= $model->loaded() ? 'Редактирование' : 'Создание' ?> новости</legend>

  <!-- Text input-->
  <div class="form-group">

<!--     <label  class="col-md-4 control-label" for="title">
        Заголовок
    </label> -->

    <?= Form::label('title', 'Заголовок', array(
        'class' => 'col-md-4 control-label'
    )) ?>

    <div class="col-md-8">
<!--         <input id="title"
              name="title"
              placeholder="Введите заголовок"
              class="form-control input-md"
              value="<?= $model->title ?>"
              type="text"> -->

        <?= Form::input('title', $model->title, array(
            'class'       => 'form-control input-md',
            'placeholder' => 'Введите заголовок'
          )) ?>
        
        <?= Form::show_error('title', $errors) ?>
    </div>
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label  class="col-md-4 control-label"
            for="selectbasic">
        Категории
    </label>
    <div class="col-md-8">
<!--       <select id="category_id"
              name="category_id"
              class="form-control">

      <?//php foreach ($categories as $key => $category) : ?>

          <option value="<?//=$category->id?>">
              <?//= $category->title ?>
          </option>

      <?//php endforeach; ?>

      </select> -->

      <?= Form::select(
          'category_id',
          $categories,
          $model->category_id,
          array(
            'class' => 'form-control'
          )
      ) ?>

      <?= Form::show_error('category_id', $errors) ?>
    </div>
  </div>

  <!-- Multiple Checkboxes (inline) -->
  <div class="form-group">
    <label  class="col-md-4 control-label"
            for="status">
        Статус (опубликовано)
    </label>
    <div class="col-md-8">
        <input name="status" 
            id="status" 
            value="1" 
            type="checkbox">

      <?php if (Arr::get($errors, 'status')) : ?>
          <span class="text-danger">
              <?= $errors['status'] ?> 
          </span>  
      <?php endif; ?>
    </div>
  </div>

  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textarea">
        Контент
    </label>
    <div class="col-md-8">                     
      <textarea class="form-control"
          id="content"
          name="content"></textarea>

      <?php if (Arr::get($errors, 'content')) : ?>
          <span class="text-danger">
              <?= $errors['content'] ?> 
          </span>  
      <?php endif; ?>
    </div>
  </div>

    <div class="form-group">
    <div class="col-md-offset-4 col-md-8">                     
        <button type="submit" class="btn btn-primary">
            <?= $model->loaded() ? 'Сохранить' : 'Создать' ?>
        </button>
    </div>
  </div>
  
</fieldset>
</form>
