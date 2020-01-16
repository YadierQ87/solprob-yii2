<?php

/* @var $this yii\web\View */
use yii\bootstrap\Html;
use app\assets\AppAsset;
AppAsset::register($this);

$this->title = 'Solprob | Catalogo de Servicios Online';
?>
<div id="contentWrapper">
    <div class="pageContent">

        <div class="page-title title-4 parallax about-title" data-stellar-background-ratio="0.65">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="cat-title">Catalogo de Servicios Online</h1>
                        <h6 class="white alignleft">Buscador de Negocios y Servicios para la familia cubana</h6>

                            <form role="search" method="get" class="search-form" action="">
                                <div class="col-lg-3">
                                    <input type="search" class="form-control" placeholder="servicio,negocio,keyword" autocomplete="on">
                                </div>
                                <div class="col-lg-3">
                                    <select name="cat" id="cat" class="form-control">
                                        <option class="level-0" value="23">Servicios de Eventos</option>
                                        <option class="level-0" value="26">Plomeros</option>
                                        <option class="level-0" value="27">Construccion</option>
                                        <option class="level-0" value="31">Tecnologicos</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <input type="search" class="form-control" placeholder="provincia,municipio,localidad" autocomplete="on">
                                </div>
                                <span class="col-lg-2">
                                    <button class="btn btn-danger" type="submit"> <i class="fa fa-search"></i> Buscar </button>
                                </span>
                            </form>

                    </div>

                    <div class="col-md-12">
                        <div class="th-breadcumb hidden-sm hidden-xs" >
                            <ul class="list">
                                <li><i class="fa fa-check main-color"></i>+150 Servicios</li>
                                <li><i class="fa fa-briefcase main-color"></i>Diferentes tipos de Negocios</li>
                                <li><i class="fa fa-user-secret main-color"></i>Valoraciones de Expertos</li>
                                <li><i class="fa fa-certificate main-color"></i>Lograr Certificados</li>
                                <li><i class="fa fa-link main-color"></i>Cadena Productiva</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- banner doble de anuncios-->
<div class="margin-top-40 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="#"><?= Html::img('@web/images/demos/shop/t-ad-1.jpg', ['alt' => 'Publicidad']) ?> </a>
            </div>
            <div class="col-md-6">
                <a href="#"><?= Html::img('@web/images/demos/shop/t-ad-2.jpg', ['alt' => 'Publicidad']) ?> </a>
            </div>
        </div>
    </div>
</div>

<!-- por que Solprob? y Servicios -->
<div class="section">
    <div class="container">
        <div class="heading main-heading centered">
            <h3>Nuestros <span class="bold"><span class="main-color">Servicios</h3>
            <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
        </div>
        <p class="heading-desc centered">A continuación una serie de servicios que ofrece nuestra pagina para los clientes asociados que quieran contratarnos.</p>

        <div class="row">
            <div class="col-md-3">
                <div class="icons-style-1">
                    <i class="icons fa fa-internet-explorer animat-icon"></i>
                    <h3 class="bold uppercase heading"> Catálogo Web SEO</h3>
                    <p>El Cátalogo permite mostrar información sobre su negocio o servicio en uno de los tres niveles de visibilidad disponibles.
                        -Solo se publica una vez y se mantiene activa por el periodo contratado.
                        -Formato atrayente y descriptivo para atraer potenciales clientes.
                        -Opiniones  Imagenes y valoraciones.
                    </p>
                    <a class="btn btn-grey shape" href="#">Leer Más</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icons-style-1">
                    <i class="icons fa fa-wechat animat-icon"></i>
                    <h3 class="bold uppercase heading"> Publicaciones en terceros</h3>
                    <p>Permítenos hacer por ud. el tedioso trabajo de anunciar sus servicios en otras páginas.
                        -Solprob se puede encargar de promocionar su negocio en otras páginas de anuncios.
                        -Las publicaciones pueden ser mensuales , diarias, o semanales y las páginas las escoge ud según su necesidad y alcance.</p>
                    <a class="btn btn-grey shape" href="#">Leer Más</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icons-style-1">
                    <i class="icons fa fa-bullhorn animat-icon"></i>
                    <h3 class="bold uppercase heading main-color"> Publicidad/Promoción</h3>
                    <p>Publicar publicidades y promociones por períodos de tiempo en nuestra página y en facebook
                        -Mostrar cajas de contenido publicitario dentro de nuestra propia web o en nuestra página oficial de Facebook para llegar a más clientes.
                        -Informe a sus clientes regulares y potenciales de sus nuevas ofertas y/o promociones.</p>
                    <a class="btn main-bg shape" href="#">Leer Más</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icons-style-1">
                    <i class="icons fa fa-users animat-icon"></i>
                    <h3 class="bold uppercase heading"> Campañas Marketing</h3>
                    <p>Campañas de Marketing por medio de envíos masivos a lista de correo y llamadas telefónicas o sms
                        -Para obtener información comercial de sus clientes
                        -Lanzar promociones a través de campañas masivas por correo, móvil o teléfono.</p>
                    <a class="btn btn-grey shape" href="#">Leer Más</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- divider sun -->
<div class="padding-vertical-0">
    <div class="container">
        <div class="divider centered"><i class="fa fa-sun-o"></i></div>
    </div>
</div>

<!-- Opiniones de Clientes -->
<div class="section fixed-bg" style="background-image:url('../images/bgs/sec-bg-03.jpg')">
    <div class="parallax-overlay" style="background-color:rgba(0,0,0,.5)"></div>
    <div class="container">
        <div class="row">
            <div class="heading main-heading centered">
                <h3 class="white">Testimonials</h3>
                <h4 class="sub-title white">What People <span class="main-color">Said</span></h4>
                <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
            </div>
            <div class="testimonials testimonials-4 horizontal-slider" data-slides_count="3" data-scroll_amount="1" data-slider-speed="300" data-slider-infinite="1" data-slider-dots="1" data-slider-arrows="0">
                <div>
                    <div class="testimonials-bg white shape lg">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus pretium rhoncus adipiscing elit. Vestibulum egetvel lacus pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit consequat eget augue vitae aliquet.</span>
                    </div>
                    <div class="testimonials-img main-border">
                        <?= Html::img('@web/images/testimonials/3.jpg', ['alt' => 'Publicidad']) ?>
                    </div>
                    <div class="testimonials-name main-color">
                        <strong>Ellina Williams</strong>: ThemeForest
                        <br>
                        <span class="white block">UX Developer</span>
                    </div>
                </div>
                <div>
                    <div class="testimonials-bg white shape lg">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus pretium rhoncus adipiscing elit. Vestibulum egetvel lacus pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit consequat eget augue vitae aliquet.</span>
                    </div>
                    <div class="testimonials-img main-border">
                        <?= Html::img('@web/images/testimonials/2.jpg', ['alt' => 'Publicidad']) ?>
                    </div>
                    <div class="testimonials-name main-color">
                        <strong>Ellina Williams</strong>: ThemeForest
                        <br>
                        <span class="white block">UX Developer</span>
                    </div>
                </div>
                <div>
                    <div class="testimonials-bg white shape lg">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus pretium rhoncus adipiscing elit. Vestibulum egetvel lacus pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit consequat eget augue vitae aliquet.</span>
                    </div>
                    <div class="testimonials-img main-border">
                        <?= Html::img('@web/images/testimonials/1.jpg', ['alt' => 'Publicidad']) ?>
                    </div>
                    <div class="testimonials-name main-color">
                        <strong>Ellina Williams</strong>: ThemeForest
                        <br>
                        <span class="white block">UX Developer</span>
                    </div>
                </div>
                <div>
                    <div class="testimonials-bg white shape lg">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus pretium rhoncus adipiscing elit. Vestibulum egetvel lacus pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit consequat eget augue vitae aliquet.</span>
                    </div>
                    <div class="testimonials-img main-border">
                        <?= Html::img('@web/images/testimonials/4.jpg', ['alt' => 'Publicidad']) ?>
                    </div>
                    <div class="testimonials-name main-color">
                        <strong>Ellina Williams</strong>: ThemeForest
                        <br>
                        <span class="white block">UX Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Beneficios de Ser cliente -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?= Html::img('@web/images/socialnetwork1.jpg', ['alt' => 'Publicidad' , 'class'=> '', 'data-animate'=> 'fadeInLeft']) ?>
            </div>
            <div class="col-md-6 vertical-icons">
                <div class="heading sub-head">
                    <h3 class="head-4 uppercase font-30"><span class="main-color">Beneficios de </span> Ser Cliente</h3>
                </div>
                <p class="sub-heading">Let’s Create Unlimited Websites With this Fancy Huge HTML Template, With Endless possibilities and very easy Customization, What else do you need to create all your websites, it is completely complete one.</p>
                <ul class="list">
                    <li><i class="fa fa-bell main-color"></i>Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet.</li>
                    <li><i class="fa fa-bell main-color"></i>Lorem ipsum dolor sit amet Fusce pellentesqu</li>
                    <li><i class="fa fa-bell main-color"></i>Suspendisse hendrerit id lacus</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Nuestros numeros -->
<div class="parallax" style="background:transparent url('assets/images/bgs/sec-bg-01.jpg')" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row row-eq-height">

            <div class="col-md-3 padding-vertical-80">
                <div class="section-full-bg left black-bg"></div>
                <div class="heading sub-head">
                    <h3 class="head-4 uppercase white"> Nuestros<span class="main-color"> Números</span></h3>
                </div>
                <p class="white relative">Let’s Create Unlimited Websites With this Fancy Huge HTML Template, With Endless possibilities and very easy Customization, let's have some fun.</p>
            </div>

            <div class="col-md-9 padding-vertical-80">
                <div class="row">
                    <div class="col-md-3">
                        <div class="c-chart bottom-txt" data-dimension="150" data-text="" data-icon="fa-users" data-iconsize="30" data-iconcolor="#0090ff" data-info="" data-width="5" data-fontsize="35" data-percent="90" data-fgcolor="#0090ff" data-bgcolor="transparent" data-fill="transparent"></div>
                        <h3 class="fun-number t-center odometer main-color" data-initial="0" data-value="2500" data-timer="500">520</h3>
                        <div class="fun-info t-center">Customers</div>
                    </div>

                    <div class="col-md-3">
                        <div class="c-chart bottom-txt" data-dimension="150" data-text="" data-icon="fa-umbrella" data-iconsize="30" data-iconcolor="#f358db" data-info="" data-width="5" data-fontsize="35" data-percent="80" data-fgcolor="#f358db" data-bgcolor="transparent" data-fill="transparent"></div>
                        <h3 class="fun-number t-center odometer main-color" data-initial="0" data-value="5986" data-timer="500">248</h3>
                        <div class="fun-info t-center">Traffic</div>
                    </div>

                    <div class="col-md-3">
                        <div class="c-chart bottom-txt" data-dimension="150" data-text="" data-icon="fa-clock-o" data-iconsize="30" data-iconcolor="#49d103" data-info="" data-width="5" data-fontsize="35" data-percent="50" data-fgcolor="#49d103" data-bgcolor="transparent" data-fill="transparent"></div>
                        <h3 class="fun-number t-center odometer main-color" data-initial="0" data-value="1960" data-timer="500">340</h3>
                        <div class="fun-info t-center">Working Hours</div>
                    </div>

                    <div class="col-md-3">
                        <div class="c-chart bottom-txt" data-dimension="150" data-text="" data-icon="fa-coffee" data-iconsize="30" data-iconcolor="#ec8a35" data-info="" data-width="5" data-fontsize="35" data-percent="75" data-fgcolor="#ec8a35" data-bgcolor="transparent" data-fill="transparent"></div>
                        <h3 class="fun-number t-center odometer main-color" data-initial="0" data-value="250" data-timer="500">560</h3>
                        <div class="fun-info t-center">Cofee Cups</div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- section Tabla de Precios -->
<div class="section gry-bg">
    <div class="container">
        <div class="heading main-heading centered">
            <h3>Pricing Tables</h3>
            <h4 class="sub-title">Checkout Our <span class="main-color">Price List</span></h4>
            <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
        </div>
        <p class="heading-desc centered">Let’s Create Unlimited Websites With this Fancy Huge HTML Template, With Endless possibilities and very easy Customization, What else do you need to create all your websites, it is completely complete one.</p>
        <div class="row">
            <div class="col-md-3">
                <div class="pricing-tbl style-2 shape new-angle">
                    <h3>Basic Plan</h3>
                    <ul>
                        <li class="price_txt"><span class="price-lg">$9.50</span> /month</li>
                        <!-- .head end -->
                        <li>Base package</li>
                        <li>No support</li>
                        <li>10 Email Address</li>
                        <li>10 GB Bandwidth</li>
                        <li>5 GB Diskspace</li>
                        <li class="pricing-footer">
                            <a href="#" class="btn btn-medium btn-grey shape new-angle">Order Now</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pricing-tbl style-2 shape new-angle">
                    <h3>Premium Plan</h3>
                    <ul>
                        <li class="price_txt"><span class="price-lg">$12.00</span> /month</li>
                        <!-- .head end -->
                        <li>Premium package</li>
                        <li>No support</li>
                        <li>20 Email Address</li>
                        <li>50 GB Bandwidth</li>
                        <li>20 GB Diskspace</li>
                        <li class="pricing-footer">
                            <a href="#" class="btn btn-medium btn-grey shape new-angle">Order Now</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pricing-tbl style-2 shape selected new-angle">
                    <h3>Corporate Plan</h3>
                    <ul>
                        <li class="price_txt"><span class="price-lg">$29.90</span> /month</li>
                        <!-- .head end -->
                        <li>Corporate package</li>
                        <li>Full support</li>
                        <li>Unlimited Emails</li>
                        <li>Unlimited Bandwidth</li>
                        <li>Unlimited Diskspace</li>
                        <li class="pricing-footer">
                            <a href="#" class="btn btn-medium btn-grey shape new-angle">Order Now</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pricing-tbl style-2 shape new-angle">
                    <h3>Golden Plan</h3>
                    <ul>
                        <li class="price_txt"><span class="price-lg">$20.30</span> /month</li>
                        <!-- .head end -->
                        <li>Golden package</li>
                        <li>Full support</li>
                        <li>50 Email Address</li>
                        <li>100 GB Bandwidth</li>
                        <li>500 GB Diskspace</li>
                        <li class="pricing-footer">
                            <a href="#" class="btn btn-medium btn-grey shape new-angle">Order Now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- section Sobre el Proyecto Mision-Vision-Estrategy -->
<div class="clearfix">
    <div class="col-md-4 padding-horizontal-50 padding-vertical-50 over-hidden" style="background-color:#528fbd">
        <i class="f-left fa fa fa-globe font-70 white margin-top-30"></i>
        <div class="margin-left-100">
            <h3 class="white uppercase bold txt-shadow">NUESTRA MISION</h3>
            <p class="white txt-shadow">Buscar y presentar soluciones  en beneficio de mejorar la calidad de vida de los cubanos en general.
                Colaborar, Aprender, Enseñar , Crecer , Aumentar , Mejorar, Trabajar por mejorar la cultura y calidad de los servicios
                para la población en general.</p>
            <a class="btn btn-outlined btn-white shape new-angle" href="#">Leer Más</a>
        </div>
    </div>
    <div class="col-md-4 padding-horizontal-50 padding-vertical-50 over-hidden" style="background-color:#e66f67">
        <i class="f-left fa fa fa-eye font-70 white margin-top-30"></i>
        <div class="margin-left-100">
            <h3 class="white uppercase bold txt-shadow">NUESTRA VISION</h3>
            <p class="white txt-shadow">Somos un grupo de emprendedores que siempre está buscando posibles soluciones para los problemas cotidianos desde el
                punto de vista de las nuevas tecnologías de la información y aportar nuestro granito de arena en la
                informatización de la sociedad cubana.</p>
            <a class="btn btn-outlined btn-white shape new-angle" href="#">Leer Más</a>
        </div>
    </div>
    <div class="col-md-4 padding-horizontal-50 padding-vertical-50 over-hidden" style="background-color:#3B954D">
        <i class="f-left fa fa fa-gears font-70 white margin-top-30"></i>
        <div class="margin-left-100">
            <h3 class="white uppercase bold txt-shadow">NUESTRA ESTRATEGIA</h3>
            <p class="white txt-shadow">Nuestro grupo de trabajo está motivado por los emprendimientos, la tecnología,el desarrollo sostenible y sutentable
                de sistemas, negocios y servicios bajo el precepto de la colaboración conjunta para el
                crecimiento económico,tecnológico y social.</p>
            <a class="btn btn-outlined btn-white shape new-angle" href="#">Leer Más</a>
        </div>
    </div>
</div>

<!-- section Grupo de Trabajo -->
<div class="section">
    <div class="container">
        <div class="row">

            <div class="heading main-heading centered">
                <h3>Our Team</h3>
                <h4 class="sub-title">More About <span class="main-color">Our Members</span></h4>
                <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
            </div>
            <p class="heading-desc centered">Let’s Create Unlimited Websites With this Fancy Huge HTML Template, With Endless possibilities and very easy Customization, What else do you need to create all your websites, it is completely complete one.</p>


            <div class="col-md-3">
                <div class="team-box box-4 shape">
                    <div class="team-img">
                        <img alt="" src="assets/images/people/1.jpg" />
                    </div>
                    <div class="team-details main-bg">
                        <h3 class="team-name">Mohamed Abdelfattah</h3>
                        <h5 class="team-pos white">Founder</h5>
                        <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. </p>
                        <ul class="social-list">
                            <li><a href="#" class="fa fa-dribbble shape sm"></a></li>
                            <li><a href="#" class="fa fa-facebook shape sm"></a></li>
                            <li><a href="#" class="fa fa-linkedin shape sm"></a></li>
                            <li><a href="#" class="fa fa-twitter shape sm"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-box box-4 shape">
                    <div class="team-img">
                        <img alt="" src="assets/images/people/2.jpg" />
                    </div>
                    <div class="team-details main-bg">
                        <h3 class="team-name">Lina Mohamed</h3>
                        <h5 class="team-pos white">Producer</h5>
                        <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. </p>
                        <ul class="social-list">
                            <li><a href="#" class="fa fa-dribbble shape sm"></a></li>
                            <li><a href="#" class="fa fa-facebook shape sm"></a></li>
                            <li><a href="#" class="fa fa-linkedin shape sm"></a></li>
                            <li><a href="#" class="fa fa-twitter shape sm"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-box box-4 shape">
                    <div class="team-img">
                        <img alt="" src="assets/images/people/3.jpg" />
                    </div>
                    <div class="team-details main-bg">
                        <h3 class="team-name">Eyad Mohamed</h3>
                        <h5 class="team-pos white">Director</h5>
                        <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. </p>
                        <ul class="social-list">
                            <li><a href="#" class="fa fa-dribbble shape sm"></a></li>
                            <li><a href="#" class="fa fa-facebook shape sm"></a></li>
                            <li><a href="#" class="fa fa-linkedin shape sm"></a></li>
                            <li><a href="#" class="fa fa-twitter shape sm"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-box box-4 shape">
                    <div class="team-img">
                        <img alt="" src="assets/images/people/4.jpg" />
                    </div>
                    <div class="team-details main-bg">
                        <h3 class="team-name">Lara Jones</h3>
                        <h5 class="team-pos white">Sales Manager</h5>
                        <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. </p>
                        <ul class="social-list">
                            <li><a href="#" class="fa fa-dribbble shape sm"></a></li>
                            <li><a href="#" class="fa fa-facebook shape sm"></a></li>
                            <li><a href="#" class="fa fa-linkedin shape sm"></a></li>
                            <li><a href="#" class="fa fa-twitter shape sm"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section Sponsors -->
<!-- section clientes patrocinadores -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <?= Html::img('@web/images/clients/4.png', ['alt' => 'Publicidad']) ?>
        </div>

        <div class="item">
            <?= Html::img('@web/images/clients/3.png', ['alt' => 'Publicidad']) ?>
        </div>

        <div class="item">
            <?= Html::img('@web/images/clients/5.png', ['alt' => 'Publicidad']) ?>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="clients horizontal-slider slick-initialized slick-slider sponsor-slides" data-slides_count="6" data-scroll_amount="6" data-slider-speed="300" data-slider-infinite="1" data-slider-dots="0" data-slider-arrows="1">
    <div class="slick-list draggable" tabindex="0">
        <div class="slick-track" style="opacity: 1; width: 3990px; transform: translate3d(-1710px, 0px, 0px);">
            <div class="slick-slide slick-cloned" index="-6" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/5.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-cloned" index="-5" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/5.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-cloned" index="-4" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/4.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-cloned" index="-3" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/3.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-cloned" index="-2" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/2.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-cloned" index="-1" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/1.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide" index="0" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/5.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide" index="1" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/5.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide" index="2" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/5.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-active" index="3" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/5.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-active" index="4" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/5.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-active" index="5" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/4.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-active" index="6" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/3.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-active" index="7" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/2.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-active" index="8" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/1.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-cloned" index="9" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/5.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-cloned" index="10" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/5.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-cloned" index="11" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/5.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-cloned" index="12" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/5.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-cloned" index="13" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/5.png', ['alt' => 'Publicidad']) ?></a>
            </div><div class="slick-slide slick-cloned" index="14" style="width: 190px;">
                <a href="#"><?= Html::img('@web/images/clients/4.png', ['alt' => 'Publicidad']) ?></a>
            </div></div></div>

</div>

<!-- Modal -->
<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registermodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Create New Account</h4>
            </div>
            <div class="modal-body">
                <div class="padding-horizontal-20 padding-vertical-20">
                    <p>Hello our valued visitor, We present you the best web solutions and high quality graphic designs with a lot of features. just login to your account and enjoy ...</p>
                    <div class="login-controls">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="User name" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Confirm Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password" />
                        </div>
                        <div class="form-group floated-controls">
                            <span class="block checkbox-block"><input type="checkbox" class="checkbox" /> <span>I Agree !</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn main-bg">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


