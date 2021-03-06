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
                    <a class="header__rum" href="index2Reg.php">Rus  /</a>
                     <a class="header__eng" href="index2RumReg.php">Rum</a>
                    <a class="header__phone" href="tel:37368792543">+373 (68) 79 25 43 </a>
                    <a class="header__email" href="#">polyglot-profi@gmail.com</a>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#">Бесплатная
                        консультация</a>
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
                            <li><a href="indexEngReg.php">Home </a> </li>
                             <li> <a href="index2EngReg.php"> About us </a> </li>
                             <li> <a href="index3EngReg.php"> Courses </a> </li>
                             <li> <a href="index4EngReg.php"> Contact </a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

        <section>
            <div class="conteiner">
                <div class="about__inner1">
                    <div class="about__title1">
                        History
                    </div>
                    <div class = "about__text1">
                        POLYGLOT-PROFI was founded in 1998. We currently have over 20 years of teaching experience
                        English and more than 5,000 graduates.
                        We have English courses at all levels from beginner (A0) to highly advanced (C2).
                        In addition to general English courses, we also offer courses for tests such as TOEFL,
                        Cambrdige, BAC, IELTS and SAT.
                        We also offer corporate courses for Moldovan companies from various fields.
                        All our courses are approved by the Ministry of Education, Culture and Science.
                        In addition to foreign languages, we also have a library of books in English to
                        encourage reading among our students,
                        as well as to create an active and friendly community, we organize events such as
                        clubs and discussions with native English speakers that we have.

                    </div>
                    <div class="about__title1">
                        Vision
                    </div>
                    <div class = "about__text1">
                        The world today is more fluid, interdependent and intercultural than ever.
                        POLYGLOT-PROFI center prepares students to become world citizens capable of
                        participate in global issues and lead your life safely and freely through communication
                        in one of the most popular languages.

                    </div>


                    <div class = "about__title1">
                        Our team of teachers
                    </div>
                    <div class = "about__text1">
                        Our teachers are graduates of the best universities. Also, our teachers are
                        native speakers, they are originally from the USA. Thanks to this, our students will be able to have knowledge,
                        which only native speakers can possess.

                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="conteiner">
                <div class="news__top">
                    <div class="news__title-box">
                        <div class="news__title">
                            News
                        </div>
                        <div class = "news__text">
                            <div class = "about__title1">
                                Junior Summer Camp
                            </div>
                            <div class = "about__text1">
                                Our courses are launching a new project for a more effective study of English
                                language. Children under 14 years old can take part in unique projects that will allow
                                im to improve their level of English. The entire program will only run
                                in English. Classes will be held in a playful way and there will be no aunts
                                feel the language barrier.
                                <p>
                                    <h4> Program duration: </h4> The program lasts 2 months. Within 2 months
                                    children will live in a camp outside the city.
                                    Children will only communicate in English.
                                    Every day there will be interactive games to learn new words. In children, so
                                    there will be free time.
                                </p>
                                <p>
                                    <h4> Cost of the program: </h4> Program with medical insurance, 5 times
                                    food, transport and 2-month accommodation will cost only $ 200. amount
                                    places are limited.
                                </p>

                            </div>
                        </div>

                        <div class="news__text">
                            <div class="about__title1">
                                Home schooling
                            </div>
                            <div class = "about__text1">
                                Many of us want to start learning English from the comfort of our home, our courses
                                can provide such a service. Distance learning makes it possible to learn at any time.
                                <p>
                                    Online learning offers more flexible learning environments than traditional programs
                                    on the basis of universities and colleges. You don't need to go to the other end of the city by 9 am.
                                    You can practice at any time and choose the place that motivates the most:
                                    your own bedroom, cafe, work desk or even a treadmill. Access to personal
                                    cabinet, e-mail of teachers and student forums is carried out in the mode
                                    24/7. This is especially true if you already have the main job with which you need to
                                    build a alignment schedule.
                                </p>
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
                                Contacts
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