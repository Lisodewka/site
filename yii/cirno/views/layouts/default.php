<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\DefaultAsset;
use yii\helpers\Url;

DefaultAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
      <div class="container">
        <div class="row header_top">
          <div class="logo col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <a href="/"><img src="images/logo.png"></a>
          </div>
          <div class="btn_top_wrap col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="btn_and_search">
              <div class="btn_top">
                <a href="#"><i class="glyphicon glyphicon-map-marker"></i>Обратная связь</a>
                <a href="#"><i class="glyphicon glyphicon-user"></i>Личный кабинет</a>
                <a href="#"><i class="glyphicon glyphicon-lock"></i>Войти</a>
              </div>
              <div class="search_top">
              	<form>
	                <input placeholder="Поиск" type="text">
	                <button type="submit" name="submit_search">
	                  <i class="glyphicon glyphicon-search"></i>
	                </button>
                </form>
              </div>
            </div>
            <div class="cart_top">
              <a href="#">
                <i class="glyphicon glyphicon-shopping-cart"></i>
                <span>0</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid menu_top">
        <div class="container">
          <div class="row">

<?php
NavBar::begin([
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => ' ',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Каталог', 'url' => ['/page/catalog']],
            ['label' => 'Новости', 'url' => ['/page/news']],
            ['label' => 'Контакты', 'url' => ['/page/contacts']],
        ],
    ]);
    NavBar::end();
    ?>


                  <!-- 
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                  </div>

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Одежда</a></li>
                      <li><a href="#">Обувь</a></li>
                      <li><a href="#">Снаряжение</a></li>
                      <li><a href="#">Амуниция</a></li>
                      <li><a href="#">Сувениры</a></li>
                    </ul>
                  </div> -->
          </div>
        </div>
      </div>
    </header>

              <nav>
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Одежда</a></li>
                      <li><a href="#">Обувь</a></li>
                      <li><a href="#">Снаряжение</a></li>
                      <li><a href="#">Амуниция</a></li>
                      <li><a href="#">Сувениры</a></li>
                    </ul>
                  </div>/.navbar-collapse -->
              </nav>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
        <div class="row">
		    <div class="col-lg-12 contant_wrap">
		    	<div class="navigation">

		    	</div>
		    </div>
    	</div>
    	<div class="row">
    		
    		

<?=$content;?>

    	</div>
    </div>

    <div class="container-fluid write_email_and_sseti">
      <div class="container">
        <div class="row write_email_and_sseti_wrap">
          <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 write_email">
            <p>Рассылка</p>
            <form>
              <button type="submit">
                      <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
              <input type="text" placeholder="Введите E-mail">
            </form>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-5 hidden-xs sseti_wrap">
            <div>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-vk"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid footer">
      <div class="container">
        <div class="row menu_footer_and_contact">
          <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <div class="footer_menu">
              <h3>Категории</h3>
             <ul>
		<li><a href="#">Телевизоры</a></li>
		<li><a href="#">Комплектующие</a></li>
		<li><a href="#">Лаптопы</a></li>
		<li><a href="#">Компьютеры</a></li>
		<li><a href="#">Электроника</a></li>
		</ul>
            </div>
            <div class="footer_menu">
              <h3>Информация</h3>
              <ul>
                <li><a href="#">Доставка</a></li>
                <li><a href="#">Оплата</a></li>
                <li><a href="#">О компании</a></li>
                <li><a href="#">Скидки</a></li>
                <li><a href="#">Карта сайта</a></li>
              </ul>
            </div>
            <div class="footer_menu">
              <h3>Учетная запись</h3>
              <ul>
                <li><a href="#">Войти</a></li>
                <li><a href="#">Зарегистрироваться</a></li>
                <li><a href="#">Мои заказы</a></li>
                <li><a href="#">Список желаний</a></li>
              </ul>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-12 copy">
            <p>© 2019 не является действующим интернет-магазином</p>
          </div>
        </div>
      </div>
    </div>



    <?php
/*
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'О нас', 'url' => ['/site/about']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Войти', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
*/
    ?>


        <?//= $content ?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
