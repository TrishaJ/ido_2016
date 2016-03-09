<form class="form-horizontal" method="POST">
<fieldset>

  <legend>
      <?= $model->loaded() 
          ? 'Редактирование' 
          : 'Создание' ?> 
      пользователя
  </legend>

  <div class="form-group">

    <?= Form::label('username', 'Пользователь', array(
        'class' => 'col-md-4 control-label'
    )) ?>

    <div class="col-md-8">

        <?= Form::input('username', $model->username, array(
            'class'       => 'form-control',
          )) ?>
        
        <?= Form::show_error('username', $errors) ?>
    </div>
  </div>

  <div class="form-group">

    <?= Form::label('email', 'Email', array(
        'class' => 'col-md-4 control-label'
    )) ?>

    <div class="col-md-8">
        <?= Form::input('email', $model->email, array(
            'class'       => 'form-control',
          )) ?>
        
        <?= Form::show_error('email', $errors) ?>
    </div>

  </div>

  <div class="form-group">

    <?= Form::label('password', 'Пароль', array(
        'class' => 'col-md-4 control-label'
    )) ?>

    <div class="col-md-8">
        <?= Form::password('password', NULL, array(
            'class'       => 'form-control',
          )) ?>
        
        <?= Form::show_error('password', $errors) ?>
    </div>

  </div>

  <div class="form-group">

    <?= Form::label('password_confirm', 'Повторите пароль', array(
        'class' => 'col-md-4 control-label'
    )) ?>

    <div class="col-md-8">
        <?= Form::password('password_confirm', NULL, array(
            'class'       => 'form-control',
          )) ?>
        
        <?= Form::show_error('password_confirm', $errors) ?>
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
