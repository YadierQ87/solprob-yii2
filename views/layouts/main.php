<?php

// @var $this \yii\web\View */
// @var $content string */

use app\widgets\Alert;
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
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="pageWrapper animsition" style="animation-duration: 2000ms; opacity: 1;">


    <nav id="w0" class="navbar-inverse navbar-fixed-top navbar hidden-lg hidden-md">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#w0-collapse" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= Html::a("SOLPROB CATALOGO", ['index'],['class' => 'navbar-brand','title'=>'SOLPROB CATALOGO']) ?>
            </div>
            <div id="w0-collapse" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                <ul id="w1" class="navbar-nav navbar-right nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Contactenos</a></li>
                    <li><a href="#">BUB Sub Projects</a></li>
                    <li><a href="#">Incoming BUB</a></li>
                    <li><a href="#" data-method="post">Logout (admin)</a></li></ul>
            </div>
        </div>
    </nav>

    <header  class="top-head transparent dark fixed-top hidden-sm hidden-xs" data-sticky="true" style="height: 70px; margin-top: -10px;">
        <div class="container">
            <!-- Logo start -->
            <div class="logo light">
                <?= Html::a("SOLPROB CATALOGO", ['index'],['class' => 'white navbar-brand','title'=>'SOLPROB CATALOGO']) ?>
            </div>
            <!-- Logo end -->

            <div class="f-right responsive-nav">
                <!-- top navigation menu start -->
                <nav id="w0" class="top-nav nav-animate to-bottom">
                    <ul>
                        <li class="">    <a href="#"><span data-hover="Home">Inicio</span></a> </li>
                        <li class="selected hasChildren"><a href="#"><span data-hover="About Us">Acerca de</span></a>
                            <ul>
                                <li><a href="#">Sobre Solprob</a></li>
                                <li><a href="#">Preguntas Frecuentes</a></li>
                                <li><a href="pricing.html">Tarifas</a></li>
                                <li><a href="services.html">Servicios</a></li>
                                <li><a href="team.html">Terminos y Condiciones</a></li>
                            </ul>
                        </li>
                        <li class="">    <a href="#"><span data-hover="Contact Us">Contactenos</span></a> </li>
                        <li class="">    <a href="#"><span data-hover="Promo">Promo</span></a> </li>
                        <li class="">    <a href="#"><span data-hover="Blog">Blog</span></a> </li>
                        <li class="dropdown"><a href="#" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="login-bx"><i class="fa fa-lock"></i>Login</a>
                            <div class="dropdown-menu login-popup black-bg">
                                <p class="small">Hello our valued visitor, We present you the best web solutions, just login ...</p>
                                <div class="login-controls">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User name Or Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group floated-controls">
                                        <span class="block checkbox-block"><span class="custom-checkbox"><input type="checkbox" class="checkbox"/><div class="switcher"></div></span> <span>Remember Me!</span></span>
                                        <a href="#">Forgot your password ?</a>
                                    </div>
                                    <div>
                                        <button type="button" class="btn main-bg">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#" class="" data-toggle="modal" data-target="#registermodal">
                                <i class="fa fa-user"></i> Register</a>
                        </li>
                    </ul>
                </nav>
                <!-- top navigation menu end -->
            </div>
        </div>
    </header>

    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <h1>Shop Right Bar</h1>
                <h3>This is sub heading text to describe the page functionality</h3>





            </div>
        </div>
    </div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?/*= Html::a('Profile', ['user/view', 'id' => $id], ['class' => 'profile-link'])*/ ?>

        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

</div>

<!-- Back to top Link -->
<a href="#" id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>

<!-- Footer start -->
<footer id="footWrapper">
    <div class="footer-top main-bg">
        <div class="container">
            <div id="twitter-feed" class="slick-s shape"></div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <!-- main menu footer cell start -->
                <div class="col-md-3 first">
                    <h3>Main Menu</h3>
                    <ul class="menu-widget">
                        <li><a href="home.html">Home Page</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="blog.html">Our Blog</a></li>
                        <li><a href="portfolio-grid-4-cols.html">Our Portfolio</a></li>
                        <li><a href="FAQ.html">FAQ</a></li>
                    </ul>
                </div>
                <!-- main menu footer cell start -->

                <!-- Our Friends footer cell start -->
                <div class="col-md-3">
                    <h3>Flickr Photos</h3>
                    <p>You can checkout some of our amazing photos on flickr. </p>
                    <ul id="flickrFeed" class="flickr-widget"></ul>
                </div>
                <!-- Our Friends footer cell start -->

                <!-- Useful Links footer cell start -->
                <div class="col-md-3">
                    <h3>Tags Cloud</h3>
                    <ul class="tags hover-effect">
                        <li class="shape sm"><a href="#" data-hover="Clean">Clean</a></li>
                        <li class="shape sm"><a href="#" data-hover="Design">Design</a></li>
                        <li class="shape sm"><a href="#" data-hover="User interface">User interface</a></li>
                        <li class="shape sm"><a href="#" data-hover="Performance">Performance</a></li>
                        <li class="shape sm"><a href="#" data-hover="Development">Development</a></li>
                        <li class="shape sm"><a href="#" data-hover="WordPress">WordPress</a></li>
                        <li class="shape sm"><a href="#" data-hover="ThemeForest">ThemeForest</a></li>
                        <li class="shape sm"><a href="#" data-hover="SEO">SEO</a></li>
                        <li class="shape sm"><a href="#" data-hover="Joomla">Joomla</a></li>
                        <li class="shape sm"><a href="#" data-hover="Popular">Popular</a></li>
                        <li class="shape sm"><a href="#" data-hover="ASP.Net">ASP.Net</a></li>
                        <li class="shape sm"><a href="#" data-hover="SharePoint">SharePoint</a></li>
                        <li class="shape sm"><a href="#" data-hover="Bootstrap">Bootstrap</a></li>
                        <li class="shape sm"><a href="#" data-hover="Joomla">HTML5</a></li>
                        <li class="shape sm"><a href="#" data-hover="Popular">Responsive</a></li>
                        <li class="shape sm"><a href="#" data-hover="Joomla">Visual</a></li>
                        <li class="shape sm"><a href="#" data-hover="Popular">Studio</a></li>
                    </ul>
                </div>
                <!-- Useful Links footer cell start -->

                <!-- Tags Cloud footer cell start -->
                <div class="col-md-3 last contact-widget">
                    <h3>Contact Us</h3>
                    <ul class="details">
                        <li><i class="fa fa-map-marker shape"></i><span><span class="heavy-font">Headquarters: </span>123 Street Name, City, Country.</span></li>
                        <li><i class="fa fa-envelope shape"></i><span><span class="heavy-font">Email: </span>e-mail@company.com</span></li>
                        <li><i class="fa fa-phone shape"></i><span><span class="heavy-font">Tel: </span>+1(888)000-0000</span></li>
                        <li><i class="fa fa-skype shape"></i><span><span class="heavy-font">Skype: </span>our_skype_account</span></li>
                    </ul>
                </div>
                <!-- Tags Cloud footer cell start -->

                <div class="clearfix margin-bottom-30"></div>

            </div>

            <div class="bottom-md-footer">

                <div class="col-md-7">
                    <label>Follow Us On:</label>
                    <ul class="social-list">
                        <li><a data-toggle="tooltip" data-placement="top" title="Dribbble" href="#" class="fa fa-dribbble shape sm">dribbble</a></li>
                        <li><a data-toggle="tooltip" data-placement="top" title="Facebook" href="#" class="fa fa-facebook shape sm">facebook</a></li>
                        <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" href="#" class="fa fa-linkedin shape sm">linkedin</a></li>
                        <li><a data-toggle="tooltip" data-placement="top" title="Skype" href="#" class="fa fa-skype shape sm">skype</a></li>
                        <li><a data-toggle="tooltip" data-placement="top" title="Twitter" href="#" class="fa fa-twitter shape sm">twitter</a></li>
                        <li><a data-toggle="tooltip" data-placement="top" title="Behance" href="#" class="fa fa-behance shape sm">twitter</a></li>
                    </ul>
                </div>


                <div class="f-right col-md-5 nl">
                    <form action="link-to-your-site" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate class="NL">

                        <label>Subscribe to our NewsLetters:</label>

                        <input class="form-control shape" type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email here" required />

                        <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn main-bg shape" value="Subscribe" />

                        <div class="hidden"><input type="text" name="name-of-the-hidden-field" value=""></div>

                        <div class="nl-note"><span></span></div>

                    </form>
                </div>

            </div>

        </div>
    </div>

    <!-- footer bottom bar start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <!-- footer copyrights left cell -->
                <div class="copyrights col-md-5 first">© Copyrights <b class="main-color">Solprob Solutions Systems</b> <?= date('Y') ?>. All rights reserved.</div>

                <!-- footer social links right cell start -->
                <div class="col-md-7 last">
                    <ul class="footer-menu f-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <!-- footer social links right cell end -->

            </div>
        </div>
    </div>
    <!-- footer bottom bar end -->
</footer>
<!-- Footer end -->

<?php

$this->registerJs("
    //barra con color
    $(window).load(function () {
       $('.fixed-top').css('background', '#528fbd');
    });

    //setting function odometer
    $('.odometer').each(function(){
		$(this).waypoint(function() {
			var the = $(this),
			timerss = the.attr('data-timer');
			var timeout = setTimeout(function(){
				var initVal = the.attr('data-initial'),
				currVal = the.attr('data-value');
				the.html(currVal);
			},timerss);
		},{offset: '90%',triggerOnce: true});
	});

    //back to top scroll
    $('#to-top').click(function(){
         $('html, body').animate({ scrollTop: 0 }, 600);
         return false;
    });

    // navbar background color change on scroll
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll < 100){
            $('.fixed-top').css('background', '#528fbd');
            $('#to-top').fadeOut();
        } else{
            $('.fixed-top').css('background', '#528fbd');
            $('#to-top').fadeIn();
        }
    });
    
    //  Grid - List view  For view Resultados Quitar aqui
	$('.list-btn').on('click',function() {
		$('.grid-list').addClass('list');
		$('.grid-btn').removeClass('selected');
		$(this).addClass('selected');
		return false;
	});
	$('.grid-btn').on('click',function() {
		$('.grid-list').removeClass('list');
		$('.list-btn').removeClass('selected');
		$(this).addClass('selected');
		return false;
	});


   "); ?>


<?php $this->endBody() ?>
</body>
</html>

<?php $this->endPage() ?>
