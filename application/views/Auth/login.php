<form class="form-horizontal" method="POST">
<fieldset>

  <legend>
      Авторизация
  </legend>

  <div class="form-group">

    <?= Form::label('username', 'Логин', array(
        'class' => 'col-md-4 control-label'
    )) ?>

    <div class="col-md-8">

        <?= Form::input('username', $username, array(
            'class'       => 'form-control',
          )) ?>
        
        <?= Form::show_error('username', $errors) ?>
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
    <div class="col-md-offset-4 col-md-8">                     
        <button type="submit" class="btn btn-primary">
            Войти
        </button>
    </div>
  </div>
  
</fieldset>
</form>
