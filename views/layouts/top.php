<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!--<meta charset="UTF-8">-->
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link rel="icon" href="i/favicon.png">
    <link href="css/_lsfw/reset-ls.css" rel="stylesheet">
    <link href="css/_lsfw/atom.css" rel="stylesheet">
    <link href="css/_lsfw/fonts.css" rel="stylesheet">
    <link href="css/_lsfw/tabs.css" rel="stylesheet">
    <link href="css/vendor/font-awesome-5.0/css/fontawesome-all.css" rel="stylesheet">
    <link href="css/vendor/sumoselect.css" rel="stylesheet">
    <link href="css/vendor/th-sumoselect.css" rel="stylesheet">
    <link href="css/vendor/magnific-popup.css" rel="stylesheet">
    <link href="css/lib-ui-tour-filter/flags.css" rel="stylesheet">
    <link href="css/lib-ui-tour-filter/lsfw-tour-filter.css" rel="stylesheet">
    <link href="css/lib-ui-tour-filter/lsfw-form-direction.css" rel="stylesheet">
    <link href="css/lib-ui-tour-filter/lsfw-date-widget.css" rel="stylesheet">
    <link href="css/lib-ui-tour-filter/lsfw-adults-widget.css" rel="stylesheet">
    <link href="css/lib-ui-tour-filter/lsfw-durability-widget.css" rel="stylesheet">
    <link href="css/lib-ui-tour-filter/lsfw-price-widget.css" rel="stylesheet">
    <link href="css/tophotels_site_html/main-cnt.css" rel="stylesheet">
    <link href="css/tophotels_site_html/main.css" rel="stylesheet">
    <link href="css/tophotels_site_html/layouts/header.css" rel="stylesheet">
    <link href="css/tophotels_site_html/layouts/header-mobile.css" rel="stylesheet">
    <link href="css/tophotels_site_html/layouts/footer.css" rel="stylesheet">
    <link href="css/tophotels_site_html/layouts/left-menu.css" rel="stylesheet">
    <link href="css/tophotels_site_html/layouts/left-menu-mobile.css" rel="stylesheet">
    <link href="css/tophotels_site_html/agree-pp.css" rel="stylesheet">
    <link href="css/tophotels_site_html/tabs-bar-mobile.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <script src="js/jquery.311.min.js"></script>



    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="page">
    <div class="headerMobile">

        <div class="headerMobile__flex js-serach-active-hide">
            <a href="http://html2.tophotels.site/tophotels/" class="headerMobile__logo">
                <img src="i/th-logo.png" width="112" height="40" class="mr10">
            </a>

            <div class="headerMobile__right">
                <div class="headerMobile__right-auth">
                    <i class="far fa-envelope"></i>
                    <a href="help-selection#" class="headerMobile__msg-icon "><span>989</span></a>
                </div>

                <div class="headerMobile__right-noAuth" style="display: none">
                    1 507 753 участников
                </div>
            </div>
        </div>
        <div class="headerMobile__line">
            <div class="js-hide js-serach-active-hide">
                <div class="headerMobile__bth headerMobile__bth--auth mr10" style="display: none">
                    <div class="headerMobile__key"></div>
                </div>
                <a href="help-selection#" class="headerMobile__user js-show-key-block">
                    <img src="i/user-ava-cat.jpg">
                </a>
                <div class="headerMobile__bth mr5">
                    <div class="headerMobile__burger"></div>
                </div>

                <div class="headerMobile__bth js-show-search">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <div class="headerMobile__right js-hide js-serach-active-hide">
                <div class="header-lang">
                    <div class="header-lang__block">
                        <span class="header-lang__cnt">Rus</span>
                        <i class="fa fa-chevron-down header-lang__arr" aria-hidden="true"></i>
                    </div>
                    <div class="header-lang__dropdown">
                        <div class="header-lang__lang js-ru" style="display: none;">Rus</div>
                        <div class="header-lang__lang js-eng">Eng</div>
                    </div>
                </div>
            </div>
            <div class="headerMobile__cross"></div>
        </div>

        <div class="headerMobile__registration">
            <div class="tabs-block">
                <div class="tabs-bar tabs-bar--no-adaptive">
                    <div id="authorization" class="tab tab--reg active">Вход</div>
                    <div id="registration" class="tab tab--reg">Регистрация</div>

                    <div class="line--reg" style="width: 89.125px; left: 50.25px;"></div>
                </div>

                <div class="panel" id="authorizationPanel" style="display: none;">

                    <div class="headerMobile__registration-line">
                        <div class="bth__inp-block error">
                            <input type="text" class="bth__inp  js-input-label"
                                   id="regEmail">
                            <label for="regEmail" class="bth__inp-lbl ">email</label>
                            <div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Текст подсказки</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="headerMobile__registration-line">
                        <div class="bth__inp-block ">
                            <input type="password" class="bth__inp  js-input-label" id="regPass">
                            <label for="regPass" class="bth__inp-lbl">Пароль</label>
                            <i class="headerMobile__registration-eye js-open-eye"></i>
                        </div>
                    </div>
                    <button class="bth__btn bth__btn--fill ">Войти</button>
                    <button class="bth__btn  js-show-remind headerMobile__registration-abs-btn">Напомнить пароль</button>
                    <div class="registration-form__remind" style="display: none">
                        <div class="pass-step1">
                            <div class="headerMobile__registration-line">
                                <div class="bth__inp-block ">
                                    <input type="text" class="bth__inp  js-input-label" id="regRemindEmail">
                                    <label for="regRemindEmail" class="bth__inp-lbl">E-mail</label>
                                </div>
                            </div>
                            <button class="bth__btn bth__btn--fill  jsPassStep2 mt20">Напомнить</button>
                        </div>

                        <div class="pass-step2" style="display:none;">

                            <p class="bth__cnt bth__cnt--big">Остался один шаг!</p>
                            <p class="bth__cnt bth__cnt--big mt20">Проверьте e-mail и подтвердите регистрацию на
                                проекте.</p>

                        </div>
                    </div>
                </div>

                <div class="panel" id="registrationPanel" style="">

                    <div class="headerMobile__registration-line">
                        <div class="bth__inp-block ">
                            <input type="text" class="bth__inp  js-input-label" id="regName">
                            <label for="regName" class="bth__inp-lbl ">Имя</label>
                        </div>
                    </div>


                    <div class="headerMobile__registration-line mt15">
                        <div class="rbt-block d-ib mr20">
                            <input type="radio" name="male" class="rbt" id="male1">
                            <label class="label-rbt" for="male1">
                                <span class="rbt-cnt uppercase">Мужчина</span>
                            </label>
                        </div>
                        <div class="rbt-block  d-ib">
                            <input type="radio" name="male" class="rbt" id="male2">
                            <label class="label-rbt" for="male2">
                                <span class="rbt-cnt uppercase">Женщина</span>
                            </label>
                        </div>
                    </div>


                    <div class="headerMobile__registration-line headerMobile__registration-line--border">
                        <div class="bth__inp-block">
                            <input type="text" class="bth__inp  js-input-label" id="regEmailOsn">
                            <label for="regEmailOsn" class="bth__inp-lbl ">E-mail регистрации </label>
                        </div>
                    </div>


                    <div class="headerMobile__registration-line">
                        <div class="bth__inp-block ">
                            <input type="password" class="bth__inp  js-input-label" id="regPassNew">
                            <label for="regPassNew" class="bth__inp-lbl">Пароль</label>
                            <i class="headerMobile__registration-eye js-open-eye"></i>
                        </div>
                    </div>


                    <div class="headerMobile__registration-line">
                        <div class="bth__inp-block ">
                            <input type="password" class="bth__inp  js-input-label" id="regPassNewRep">
                            <label for="regPassNewRep" class="bth__inp-lbl">Повторный пароль</label>
                            <i class="headerMobile__registration-eye js-open-eye"></i>
                        </div>
                    </div>


                    <div class="relative">
                        <button class="bth__btn bth__btn--fill jsRegStep2 ">Продолжить*</button>
                        <div class="headerMobile__registration-text-abs">
                            <p class="bth__cnt bth__cnt--sm">*Нажимая на кнопку "продолжить", я принимаю <a href="help-selection#">Соглашение
                                    об обработке личных данных</a> и <a href="help-selection#">Правила
                                    сайта</a></p>
                        </div>
                    </div>

                </div>


            </div>

        </div>



    </div>

    <header class="header">

        <div class="header-cnt header-cnt_index ">
            <a href="http://html2.tophotels.site/tophotels/" class="header-logo">
                <img src="i/th-logo.png" alt="">
            </a>
            <div class="header-nav">
                <div class="header-nav-cont">
                    <ul class="header-nav-list hide-1023">

                        <li class="header-nav-item">
                            <a _href="http://html2.tophotels.site/tophotels/profile" class="header-nav-link grey ">Мой профиль</a>
                        </li>
                        <li class="header-nav-item">
                            <a _href="http://html2.tophotels.site/tophotels/hotels-catalog" class="header-nav-link grey">Отели</a>
                        </li>
                        <li class="header-nav-item">
                            <a _href="http://html2.tophotels.site/tophotels/forum" class="header-nav-link grey">Клуб ТопХотелс</a>
                        </li>
                        <li class="header-nav-item active">
                            <a href="top/index" class="header-nav-link ">Помощь в подборе</a>
                        </li>

                        <li class="header-nav-item">
                            <a _href="http://html2.tophotels.site/tophotels/review" class="header-nav-link  grey">Добавить отзыв</a>
                        </li>


                    </ul>
                    <ul class="header-nav-list show-1023">


                        <li class="header-nav-item">
                            <a href="http://html2.tophotels.site/tophotels/profile" class="header-nav-link ">Мой профиль</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="http://html2.tophotels.site/tophotels/hotels-catalog" class="header-nav-link ">Отели</a>
                        </li>
                        <li class="header-nav-item">
                            <a _href="http://html2.tophotels.site/tophotels/forum" class="header-nav-link ">Клуб ТопХотелс</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="top/index" class="header-nav-link ">Помощь в подборе</a>
                        </li>
                        <li class="header-nav-item">
                            <a _href="http://html2.tophotels.site/tophotels/review" class="header-nav-link ">Добавить отзыв</a>
                        </li>
                        <li class="header-nav-item">
                            <a _href="http://html2.tophotels.site/tophotels/hotel-description" class="header-nav-link ">Отель</a>
                        </li>
                        <li class="header-nav-item">
                            <a _href="http://html2.tophotels.site/tophotels/cutaway" class="header-nav-link ">Турист</a>
                        </li>


                    </ul>
                </div>
            </div>
            <div class="exit__block">
                <div class="header__exit js-show-auth-link" id="jsExit">Выйти</div>
            </div>
        </div>

        <div class="header-bot header-bot-suggest-big">
            <div class="header-bot-cnt auth ">
                <div class="header__news">
                    <button class="header-bot__filter-icon">
                        <i class="fas fa-thumbs-up grey" style=""></i>
                    </button>

                    <div class="header__news-center">
                        <input class="header__inp js-open-bs" placeholder="Введите отель, город или страну">
                    </div>
                </div>
            </div>


            <div class="header-profile auth " style="display:none;">
                <a href="help-selection#"><img class="header-profile-img" src="i/user-ava-cat.jpg" alt=""></a>
                <span class="header-profile__msgs">
                <span>989</span>
            </span>

                <div class="header-profile__dropdown" style="display:none;">
                    <div class="header-profile__item">
                        <div  class="header-profile__link">
                            <a href="help-selection#" class="header-profile__user-name">Юрковская Александра</a>
                            <div class="bth__cnt fz13 mt5">Турист</div>
                        </div>
                    </div>

                    <div class="header-profile__item">
                        <a href="help-selection#" class="header-profile__link">Мой профиль</a>
                    </div>
                    <div class="header-profile__item">
                        <a href="help-selection#" class="header-profile__link">Мои интересы</a>
                    </div>
                    <div class="header-profile__item">
                        <a href="help-selection#" class="header-profile__link">Мои действия</a>
                    </div>
                    <div class="header-profile__item">
                        <a href="help-selection#" class="header-profile__link">Мои друзья</a>
                    </div>
                    <div class="header-profile__item">
                        <a href="help-selection#" class="header-profile__link">Избранные отели</a>
                    </div>
                    <div class="header-profile__item">
                        <a href="help-selection#" class="header-profile__link">Уведомления</a>
                    </div>
                    <div class="header-profile__item">
                        <a href="help-selection#" class="header-profile__link red">Выйти</a>
                    </div>
                </div>
            </div>

            <a href="help-selection#auth-pp" class="header-bot__key js-show-auth auth-pp"></a>

            <div class="header-lang">
                <div class="lang-block js-lang-open">
                    <span class="lang-block__cnt">Rus</span>
                    <i class="fa fa-chevron-down lang__arr" aria-hidden="true"></i>
                </div>
                <div class="lang-block__dropdown">
                    <div class="lang-block__lang js-lang-change" style="display: none;">Rus</div>
                    <div class="lang-block__lang js-lang-change">Eng</div>
                </div>
            </div>


        </div>


    </header>




    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>


    <footer class="footer footer2018">

        <div class="footer__line footer__line--bot">
            <div class="footer__copyright">
                <p class="footer__cnt bold  copyright">© TopHotels 2003-<?=date('Y')?></p>
                <a href="help-selection#legal-information-pp" class="legal-information-pp footer__cnt-link legal ">правовая информация</a>
            </div>

            <div class="footer__cnt-wrap">
                <p class="footer__cnt footer__cnt--sm fz12 footer-text">Все права защищены. Перепечатка, включение информации, содержащейся в рекламных и иных материалах сайта, во всевозможные базы данных для дальнейшего их коммерческого использования, размещение таких материалов в любых СМИ и Интернете допускаются только с письменного разрешения редакции сайта. Предоставляемый сервис является информационным. Администрация сайта не несет ответственности за достоверность и качество информации, предоставляемой посетителями сайта, в том числе турфирмами и отельерами. </p>
            </div>
        </div>
    </footer>    <!--    -->


</div>



<script src="js/jquery-ui.min.js"></script>
<script src="js/vendor/magnific-popup.min.js"></script>
<script src="js/vendor/SumoSelectLS/js/jquery.sumoselect-ls.min.js"></script>
<script src="js/vendor/jquery-datepicker-range.js"></script>
<script src="js/tophotels_site_html/tk-form-v2/date-function.js"></script>
<script src="js/tophotels_site_html/tk-form-v2/main.js"></script>
<script src="js/tophotels_site_html/tk-form-v2/form-date.js"></script>
<script src="js/tophotels_site_html/form-pp-universal.js"></script>
<script src="js/tophotels_site_html/form-directions.js"></script>
<script src="js/tophotels_site_html/main.js"></script>
<script src="js/tophotels_site_html/help-selections.js"></script>
<script src="js/tophotels_site_html/agree-pp.js"></script>
<script src="js/tophotels_site_html/header-mobile.js"></script>
<script src="js/tophotels_site_html/left-menu-mobile.js"></script>
<script src="js/tophotels_site_html/legal-info-pp.js"></script>
<!--<script src="assets/8f9331f6/yii.js"></script>-->
<script src="js/libs/array-function.js"></script>
<script src="js/libs/date-function.js"></script>
<script src="js/libs/number-function.js"></script>
<script src="js/libs/string-function.js"></script>
<script src="js/libs/debounce.js"></script>
<script src="js/libs/reverseLocale.js"></script>
<script src="js/libs/LSPager.js"></script>
<script src="js/libs/LSSuggest.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
