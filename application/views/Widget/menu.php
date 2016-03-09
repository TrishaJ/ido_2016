<nav class="navbar navbar-default navbar-static-top navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php foreach($menu as $title => $element): ?>

            <?php $url = is_array($element)
              ? FALSE
              : URL::default_url($element); ?>

            <li class="dropdown"
              <?php if (strpos($current_url, $url) !== FALSE) : ?>
                class="active"
              <?php endif; ?>
              >

                <?php if (is_array($element)) : ?>
                <a href="#" 
                    class="dropdown-toggle" 
                    data-toggle="dropdown" 
                    role="button" 
                    aria-haspopup="true" 
                    aria-expanded="false">
                    <?= $title ?> 
                <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                  <?php foreach($element as $element_title => $controller) : ?>
                    <?php if (is_int($element_title)) : ?>
                      <li role="separator" class="divider"></li>
                    <?php else: ?>
                      <?php $url = URL::default_url($controller); ?>
                      <li
                        <?php if (strpos($current_url, $url) !== FALSE) : ?>
                          class="active"
                        <?php endif; ?>
                        >
                        <a href="<?= URL::default_url($controller)?>">
                          <?= $element_title ?>
                        </a>
                      </li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </ul>

                <?php else : ?>
                  <a href="<?= URL::default_url($element)?>">
                    <?= $title ?>
                  </a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <?= Widget::factory('User_Status') ?>
        </li>
      </ul>
    </div>
  </div>
</nav>