<?php $token = csrf_token(); ?>
@extends('common_layout')


@section('head')

    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ $token }}">
    <!--<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,300,700" rel="stylesheet" type="text/css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <title>Geroslubos</title>

@stop

@section('content')

    <div id="nav-holder" class="container-fluid">
        <div class="row">
            <nav class="clearfix col-xs-12">
                <div class="logo-holder pull-left">
                    <a id="logo-link" href="/">
                        <img src="img/logo.svg"  alt="geros lubos logo" >
                    </a>
                </div>


                <ul class="lng-list pull-right">
                    <!--<li class="active"><a href="#">Lt</a></li> -->
                    <!-- <li><a href="#">Ru</a></li> -->
                </ul>

                <ul class="menu-list pull-right hidden-xs">
                    <li><a href="#services">Įtempiamųjų lubų rūšys</a></li>
                    <li><a href="#our_jobs" title="">Atlikti darbai</a></li>
                    <li><a href="#contacts" title="Kontaktai">Kontaktai</a></li>
                </ul>


            </nav>
        </div><!--/ nav-holder -->
    </div>

    <header>

        <div class="container-fluid">
            <div class="row">

                <h1 class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2" >
                    Если вы здесь значит вам нужен потолок!
                </h1>

                <h2 class="col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1">Не следует, однако забывать, что постоянный количественный рост и сфера нашей активности играет важную роль в формировании существенных финансовых и административных условий. С другой стороны укрепление и развитие структуры позволяет выполнять важные задания по разработке систем массового участия</h2>

            </div><!--row-->
        </div>
    </header>
    <section id="services">
        <div class="container-fluid">
            <div class="row">
                <div class="header-holder col-xs-8 col-xs-offset-2 clearfix ">
                    <h2 class="text-center"><span>Įtempiamųjų lubų rūšys</span></h2>
                </div><!--/holder -->

                <div class="col-xs-12 col-md-6 service srv1" style="background-image:url(img/srv1_bg.png)">
                    <h3>Veidrodinės įtempiamos lubos</h3>
                    <p>Не следует, однако забывать, что постоянный количественный рост и сфера нашей активности играет важную роль в формировании существенных финансовых и административных условий. С другой стороны укрепление и развитие структуры позволяет выполнять важные задания по разработке систем массового участия. Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки форм развития.</p>
                </div><!-- /srv1 -->

                <div class="col-xs-12 col-md-6 service srv2" style="background-image:url(img/srv2_bg.png)">
                    <h3>Matines įtempiamos lubos</h3>
                    <p>Не следует, однако забывать, что постоянный количественный рост и сфера нашей активности играет важную роль в формировании существенных финансовых и административных условий. С другой стороны укрепление и развитие структуры позволяет выполнять важные задания по разработке систем массового участия. Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки форм развития.</p>
                </div><!-- /srv2 -->
            </div>
        </div>
    </section>

    <section id="our_jobs">
        <div class="container-fluid">
            <div class="row">
                <div class="header-holder col-xs-8 col-xs-offset-2 clearfix ">
                    <h2 class="text-center"><span>Atlikti darbai</span></h2>
                </div><!--/holder -->
            </div>

            <div class="row filter-holder">
                <ul class="col-xs-12">
                    <!--<li><a href="#">Лак 1</a></li> -->
                    <!--<li><a href="#">Лак 2</a></li> -->
                    <!--<li><a href="#">Лак 3</a></li> -->
                    <!-- <li><a href="#">Лак 4</a></li> -->
                </ul>
            </div>
            <div class="row gallery-holder clearfix">
                <div class="col-xs-4 col-sm-3 photo-holder">
                    <a href="#">
                        <img src="img/example1.jpg" alt="" >
                    </a>
                </div><!--/photo-holder -->

                <div class="col-xs-4 col-sm-3 photo-holder">
                    <a href="#">
                        <img src="img/example2.jpg" alt="" >
                    </a>
                </div><!--/photo-holder -->

                <div class="col-xs-4 col-sm-3 photo-holder">
                    <a href="#">
                        <img src="img/example3.jpg" alt="" >
                    </a>
                </div><!--/photo-holder -->

                <div class="col-xs-4 col-sm-3 photo-holder">
                    <a href="#">
                        <img src="img/example1.jpg" alt="" >
                    </a>
                </div><!--/photo-holder -->

                <div class="col-xs-4 col-sm-3 photo-holder">
                    <a href="#">
                        <img src="img/example2.jpg" alt="" >
                    </a>
                </div><!--/photo-holder -->

                <div class="col-xs-4 col-sm-3 photo-holder">
                    <a href="#">
                        <img src="img/example3.jpg" alt="" >
                    </a>
                </div><!--/photo-holder -->

                <div class="col-xs-4 col-sm-3 photo-holder">
                    <a href="#">
                        <img src="img/example2.jpg" alt="" >
                    </a>
                </div><!--/photo-holder -->

                <div class="col-xs-4 col-sm-3 photo-holder">
                    <a href="#">
                        <img src="img/example3.jpg" alt="" >
                    </a>
                </div><!--/photo-holder -->

            </div>
        </div>
    </section>

    <section id="contacts">
        <div class="container-fluid">
            <div class="row">
                <div class="header-holder col-xs-8 col-xs-offset-2 clearfix ">
                    <h2 class="text-center"><span>Kontaktai</span></h2>
                </div><!--/holder -->
            </div><!--/row -->


            <div class="row contact-holder">
                <div class="col-xs-12 col-sm-5 col-md-6 col-lg-5 col-lg-offset-1 l-side">
                    <div class="descr-text">
                        <p>Не следует, однако забывать, что постоянный количественный рост и сфера нашей активности играет важную роль в формировании существенных финансовых и административных условий. С другой стороны укрепление и развитие структуры позволяет выполнять важные задания по разработке систем массового участия</p>
                    </div>
                    <div class="addres-holder clearfix">
                        <p class="mail"><span><img src="img/leterbox.svg" alt="letter" > </span><a href="mailto:info@geroslubos.lt">info@geroslubos.lt</a></p>

                        <p class="phone"><span><img src="img/phone.svg" alt="phone"></span> <span>+37061468336</span></p>
                    </div>
                </div><!--/l-side -->

                <div class="col-xs-12 col-sm-7 col-md-6 col-lg-5  r-side" id="formHolder">
                    <form class="form" method="post" action="<?=action('MainController@postSendEmail');?>">
                        <input type="hidden" name="_token" value="<?=$token; ?>">
                        <div class="your-name">
                            <label>Jūsų vardas</label>
                            <div>
                                <input type="text" name="name" >
                            </div>
                        </div>

                        <div class="phone-mail clearfix">
                            <div class="phone">
                                <label>Jūsų tel. numeris</label>
                                <div>
                                    <input type="text" name="phone" >
                                </div>
                            </div><!--/mail -->

                            <div class="mail">
                                <label> Jūsų el. pašto adresas</label>
                                <div>
                                    <input type="email" name="email" >
                                </div>
                            </div><!--/mail -->

                        </div><!--/phone-mail -->

                        <div>
                            <label>Jūsų žinutė</label>
                            <div>
                                <textarea name="message"></textarea>
                            </div>
                        </div>

                        <div class="btn-holder">
                            <button class="btn btn-default"  id="sendMsg" >Siųsti</button>
                        </div>
                    </form>
                </div><!--/r-side -->
            </div><!--/contact-holder -->

        </div>
    </section><!--/contacts -->

    <footer>
        <div>
            <p>GerosLubos@<?=date('Y')?></p>
        </div>
    </footer>


@stop