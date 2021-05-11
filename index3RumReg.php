<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700|Roboto:400,500&display=swap&subset=cyrillic"
        rel="stylesheet">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/fonts.css">
    <link rel="stylesheet" href="style/jquery.fancybox.min.css">
    <link rel="stylesheet" href="style/slick.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header class="header">
        <div class="header__top">
            <div class="conteiner">
                <div class="header__contacts">
                    <a class="header__rum" href="index.php"><strong><?php echo $_SESSION['username']; ?></strong> /</a> 
                    <a class="header__rum" href="index3Reg.php">Rus  /</a>
                     <a class="header__eng" href="index3EngReg.php">Eng</a>
                    <a class="header__phone" href="tel:37368792543">+373 (68) 79 25 43 </a>
                    <a class="header__email" href="#">polyglot-profi@gmail.com</a>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#">Consultare gratuita</a>
                </div>
            </div>
        </div>
        <div class="header__content">
            <div class="conteiner">
                <div class="header__content-inner">
                    <div class="header__logo">
                        <a href="#">
                            <img src="img/logo.png" width="150" height="60" alt="">
                        </a>
                    </div>
                    <nav class="menu">
                        <ul>
                            <li><a href="indexRumReg.php">Principala</a></li>
                            <li><a href="index2RumReg.php">Despre companie</a></li>
                            <li><a href="index3RumReg.php">Cursuri</a></li>
                            <li><a href="index4RumReg.php">Contacte</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="conteiner">
            <div class="news__top">
                <div class="news__title-box">
                    <div class="news__title">
                        Cursuri de engleza pentru copii.
                     </div>
                     <div class = "news__text">
                        
                         <div class = "about__text1">
                              Durata cursului: 2 luni septembrie - noiembrie; Noiembrie decembrie;
                             Ianuarie martie; Martie - mai; Iunie iulie.
                            <p> Program: marți, joi, sâmbătă </p>
                            <p> Cost:
                                 33,6 - 44 lei pentru 45 de minute (3225 lei - 4224 lei) *</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="conteiner">
            <div class="news__top">
                <div class="news__title-box">
                    <div class="news__title">
                       Engleză pentru examene / teste
                     </div>

                     <div class = "about__text1">
                         English for Exams este conceput pentru cei care doresc cele mai bune rezultate posibile în
                         examene internaționale TOEFL, IELTS.

                         <p> Grupurile se pregătesc pentru examenul TOEFL. </p>

                         <p> Pentru IELTS, se desfășoară doar lecții individuale, deoarece acestea
                             testele sunt mai specializate și este necesar unul mai individualizat pentru un rezultat bun
                             o abordare. De asemenea, lecțiile individuale sunt oferite pentru TOEFL.</p>

                    </div>
                    <div class="about__text1">
                        <h3> Instruire de grup: </h3>

                        Grupurile sunt formate cu un număr minim de studenți de la 5 la maximum 12 persoane.

                        <p> Durata programului de pregătire a examenului: 72 de ore academice în 2 luni
                        </p>

                        <p> Program: luni, miercuri și vineri </p>

                        <p> Cursurile încep la: 9:00, 11:00, 14:00, 16:00, 18:30 </p>

                        <p> Nivelul necesar: B1 (nivel intermediar bun), va fi determinat după trecere
                            testarea inițială la biroul ALC; </p>

                        <p> Materiale necesare: incluse în taxa de curs; </p>

                        <p> Cost: 48 - 60 lei pe oră academică (45 min) </p>

                        <h3> Lecții private: </h3>

                        Programul de instruire este determinat individual, în conformitate cu cerințele și interesele elevului și
                        intensitate agreată cu clientul.

                        <p> Taxă de lecție privată: 15 USD pe oră academică</p>
                    </div>

                    <div class="about__text1">
                        <div class="news__title">
                            Pregătirea examenului IELTS
                        </div>
                       <h3> Lecții private: </h3>

                       <p> Programul de instruire este compilat individual, în conformitate cu cerințele și interesele studentului și
                        intensitatea convenită cu clientul. </p>

                       <p> Taxă de lecție privată: 15 USD pe oră academică. </p>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <secțiune>
        <div class = "conteiner">
            <div class = "news__top">
                <div class = "news__title-box">
                    <div class = "news__title">
                        Curs de engleză generală, curs intensiv,
                        96 ore academice - 2 luni
                    </div>
                    <div class = "news__text">
                        <div class = "about__title1">

                        </div>
                        <div class = "about__text1">
                            Durata cursului: 2 luni septembrie - noiembrie; Noiembrie decembrie;
                            Ianuarie martie; Martie - mai; Iunie iulie.
                            <p> Program:
                                Luni, Miercuri, Vineri, Sâmbătă </p>
                            <p> Cost:
                                33,6 - 44 lei pentru 45 de minute (3225 lei - 4224 lei) *</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer__content">
            <div class="conteiner">
                <div class="footer__inner">
                    <div class="footer_info">
                        <div class="footer__title">
                            Contacte
                        </div>
                        <div class="footer__text">

                        </div>
                        <div>
                            <ul class="footer__list">
                                <li><a class="footer__phone" href="tel:37368792543">+373 (68) 79 25 43</a></li>
                                <li><a href="№">polyglot-profi@gmail.com</a></li>
                                <li><a class="footer__adres" href="№">Bulevardul Ștefan cel Mare și Sfînt 64,
                                        Chișinău</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__map">
                        <iframe width="630px" height="250px"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2720.0957134174746!2d28.839499615019697!3d47.01872623639602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c3afea26fa7%3A0xb9d53d0d59ef00bb!2zQnVsZXZhcmR1bCDImHRlZmFuIGNlbCBNYXJlIMiZaSBTZsOubnQgNjQsIENoaciZaW7Eg3UsINCc0L7Qu9C00LDQstC40Y8!5e0!3m2!1sru!2s!4v1584637114100!5m2!1sru!2s"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copy">
            <div class="conteiner">
                <div class="copy__text">
                    ©POLYGLOT-PROFI
                </div>
            </div>
        </div>
    </footer>

    <div id="modal">
        <form>
            <input type="text" placeholder="Ваше имя">
            <input type="text" placeholder="Ваш e-mail">
            <input type="text" placeholder="Ваш телефон">
            <input type="submit" placeholder="Отправить">
        </form>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>