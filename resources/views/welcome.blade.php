

<!DOCTYPE html>
<html class="no-js"  lang="{{ app()->getlocale()}} ">
    <head>
        <title>{{config(env('APP_NAME'),'IvoireCode') }} | La simplicité dans le code </title>
    <!--- basic page needs
    ================================================== -->
        <meta charset="utf-8">
        <meta name="description" content="Ivoire Code est une plateforme vidéo en ligne pour les développeurs, les concepteurs et amoureux du Web qui privilégie la formation des Etudiants. " />
        <meta name="author" content="SECK MOR TALL">
        <meta name="keywords" content="Ivoire Code, code source,Langage de programmation,html,css,laravel,php,Js,node js, ivoirien, cote d'ivoire"/>

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body>

    <!-- home
    ================================================== -->
    <main class="s-home s-home--slides">

        <div class="home-slider">
            <div class="home-slider-img" style="background-image: url(images/slides/slide-01.jpg);"></div>
            <div class="home-slider-img" style="background-image: url(images/slides/slide-02.jpg);"></div>
            <div class="home-slider-img" style="background-image: url(images/slides/slide-03.jpg);"></div>
        </div>

        <div class="overlay"></div>

        <div class="home-content">

            <div class="home-logo">
                <a href="index-slides.html">
                    <img src="images/logt.png">
                </a>
            </div>

            <div class="row home-content__main">

                <div class="col-eight home-content__text pull-right">
                    <h3>Bienvenue à Ivoire Code</h3>
                    <h1>
                    Nous travaillons actuellement
                    sur un nouveau site web super génial.
                    </h1>


                    <div class="home-content__subscribe ">
                        <form id="form" method="POST" action="{{route('newsletter')}}" class="group">
                           {{ csrf_field() }}
                            <div class="{{$errors->has('name') ?'has-error':'' }}">
                                <input type="email" value="" name="email" class="email" id="mc-email" placeholder="Adresse Email " required="">
                                <input type="submit" name="subscribe" value="Notifier Moi">
                                {!! $errors->first('email','<label for="mc-email" class="subscribe-message"><i class="fas fa-exclamation-triangle"></i> :message</label>') !!}
                            </div>
                        </form>
                    </div>
                </div>  <!-- end home-content__text -->

                <div class="col-four home-content__counter">
                    <h3>Lancement dans</h3>

                    <div class="home-content__clock">
                        <div class="top">
                            <div class="time days">
                                25
                                <span>Jours</span>
                            </div>
                        </div>    
                        <div class="time hours">
                            09
                            <span>H</span>
                        </div>
                        <div class="time minutes">
                            54
                            <span>M</span>
                        </div>
                        <div class="time seconds">
                            30
                            <span>S</span>
                        </div>
                    </div>  <!-- end home-content__clock -->
                </div>  <!-- end home-content__counter -->

            </div>  <!-- end home-content__main -->

            <ul class="home-social">
                <li>
                <a href="https://web.facebook.com/ivoirecode/" target="_blank" ><i class="fab fa-facebook-f" aria-hidden="true"></i><span>Facebook</span></a>
                </li>
                <li>
                <a href="https://twitter.com/CodeSourceprog" target="_blank" ><i class="fab fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
                </li>
                <li>
                <a href="https://www.youtube.com/channel/UCy-Ec_VI-hXhetu5se5kctw" target="_blank" ><i class="fab fa-youtube" aria-hidden="true"></i><span>Youtube</span></a>
                </li>
                <li>
                <a href="https://github.com/delmovic" target="_blank" ><i class="fab fa-github" aria-hidden="true"></i><span>Github</span></a>
                </li>
                <li>
                <a href="http://ivoirecode.herokuapp.com/" target="_blank" ><i class="fa fa-globe" aria-hidden="true"></i><span>Ivoire School</span></a>
                </li>
            </ul> <!-- end home-social -->

            <div class="row home-copyright">
                <span>Copyright IvoireCode 2018</span> 
                <span>Design by <a href="https://mortallseck.000webhostapp.com/" target="_blank" >Mor tall Seck</a></span>
            </div> <!-- end home-copyright -->


            <div class="home-content__line"></div>

        </div> <!-- end home-content -->

    </main> <!-- end s-home -->


    <!-- info
    ================================================== -->
    <a class="info-toggle" href="#0">
        <span class="info-menu-icon"></span>
    </a>

    <div class="s-info">

        <div class="row info-wrapper">

            <div class="col-seven tab-full info-main">
                <h1>Nous sommes IvoireCode. Nous privilégeons la formation des Etudiants en Côte d'ivoire.</h1>
                <p>Ivoirecode est une plateforme spécialisée dans la conception, le développement, la formation et le déploiement d'application web et site internet. </p>

            </div>

            <div class="col-four tab-full pull-right info-contact">

                <div class="info-block">
                    <h3>Commencer une conversation</h3>
                    <p>
                        <a href="mailto:#0" class="info-email">codesourceprog@gmail.com</a><br>
                        <a href="tel:+22579385302" class="'info-phone">+225 79 385 302</a>
                    </p>
                </div>

                <div class="info-block">
                    <h3>Nous visitez</h3>
                    
                    <p class="info-address">
                        Abidjan,<br>COCODY CITE DES ARTS,
                    </p>
                </div>

                <div class="info-block">
                    <h3>Rejoingnez-nous sur</h3>
                    
                    <ul class="info-social">
                        <li>
                            <a href="https://web.facebook.com/ivoirecode/" target="_blank" ><i class="fab fa-facebook" aria-hidden="true"></i>
                            <span>Facebook</span></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/CodeSourceprog" target="_blank" ><i class="fab fa-twitter" aria-hidden="true"></i>
                            <span>Twiiter</span></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCy-Ec_VI-hXhetu5se5kctw" target="_blank" ><i class="fab fa-youtube" aria-hidden="true"></i>
                            <span>Youtube</span></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/code-source/" target="_blank" ><i class="fab fa-linkedin" aria-hidden="true"></i>
                            <span>Linkedin</span></a>
                        </li>
                        <li>
                            <a href="http://ivoirecode.herokuapp.com/" target="_blank" ><i class="fas fa-globe" aria-hidden="true"></i>
                            <span>Ivoire school</span></a>
                        </li>
                    </ul>
                </div>
                
            </div>  <!-- end info contact -->

        </div>  <!-- end info wrapper -->

    </div> <!-- end s-info -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
@include('flashy::message')
</body>

</html>