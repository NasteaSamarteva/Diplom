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
    <link rel="stylesheet" href="style/media.css">
</head>

<body>
    <header class="header">
        <div class="header__top">
            <div class="conteiner">
                <div class="header__contacts">       
                     <a class="header__rum" href="index.php"><strong><?php echo $_SESSION['username']; ?></strong> /</a> 
                     <a class="header__rum" href="indexReg.php">Rus  /</a>
                     <a class="header__eng" href="indexRumReg.php">Rum</a>
                     <a class="header__phone" href="tel:37368792543">+373 (68) 79 25 43 </a>
                     <a class="header__email" href="#">polyglot-profi@gmail.com</a>
                     <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#">Free
                         consultation </a>
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
    <section class="slider">
        <div class="conteiner">
            <div class="slider__inner">
                <div class="slider__item">
                    <div class="slider__item-content">
                        <div class="slider__title">
                            Junior Summer Camp
                        </div>
                        <div class="slider__text">
                            Perfect summer camp
                        </div>
                        <a data-fancybox data-src = "# modal" href = "javascript :;" class = "slider_dtn default__dtn">
                            Leave a request
                        </a>
                    </div>
                </div>
                <div class = "slider__item">
                    <div class = "slider__item-content">
                        <div class = "slider__title">
                            Courses for children
                        </div>
                        <div class = "slider__text">
                            English courses for children of all ages
                        </div>
                        <a data-fancybox data-src = "# modal" href = "javascript :;" class = "slider_dtn default__dtn">
                            Leave a request
                        </a>
                    </div>
                </div>
                <div class = "slider__item">
                    <div class = "slider__item-content">
                        <div class = "slider__title">
                            Do you want to learn English?
                        </div>
                        <div class = "slider__text">
                            Sign up for our courses and see the result in 4 weeks
                        </div>
                        <a data-fancybox data-src = "# modal" href = "javascript :;" class = "slider_dtn default__dtn">
                            Leave a request
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="survices">
        <div class="conteiner">
            <div class="survices__top">
                <div class="survices__title-box">
                    <div class="survices__title">
                        Our unique advantages
                     </div>
                     <div class = "survices__text">

                     </div>
                 </div>
             </div>
             <div class = "survices__items">
                 <div class = "survices__item">
                     <img class = "survices__img" src = "img/about1.png" width = "50" height = "30" alt = "">
                     <div class = "survices__item-title">
                         PRICE/QUALITY
                     </div>
                     <div class = "survices__item-text">
                         We have a very good value for money.
                     </div>
                    <!--  <div class="about__item-btn">
                        <a class="about_item-link" href="#">??????????????????</a>
                        <a data-fancybox data-src="#modal" href="javascript:;" class="default__dtn">
                            ??????????????????
                        </a>
                    </div> -->
                </div>
                <div class="survices__item">
                    <img class="survices__img" src="img/about1.png" width="50" height="30" alt="">
                    <div class="survices__item-title">
                        ENGLISH ONLY
                     </div>
                     <div class = "survices__item-text">
                         Training at POLYGLOT-PROFI is conducted only in English. We work only with the most
                         the best teachers.
                    </div>
                    <!--  <div class="about__item-btn">
                        <a class="about_item-link" href="#">??????????????????</a>
                        <a data-fancybox data-src="#modal" href="javascript:;" class="default__dtn">
                            ??????????????????
                        </a>
                    </div>-->
                </div>
                <div class="survices__item">
                    <img class="survices__img" src="img/about1.png" width="50" height="30" alt="">
                    <div class="survices__item-title">
                        CREATIVITY
                     </div>
                     <div class = "survices__item-text">
                         We use didactic material, creative activities to use your potential
                         to the maximum.
                    </div>
                    <!--   <div class="about__item-btn">
                        <a class="about_item-link" href="#">??????????????????</a>
                        <a data-fancybox data-src="#modal" href="javascript:;" class="default__dtn">
                            ??????????????????
                        </a>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="conteiner">
            <div class="about__inner">
                <div class="about__title">
                    About company
                </div>
                <div class = "about__text">
                    Our goal is to offer quality courses taught by qualified teachers with
                    experience gained over the years. We want to expand the network of people who want to delve deeper into learning
                    of this language, thereby connecting us to the global network.
                    Knowledge of the English language is necessary to access the global information fund, as it
                    is constantly growing. Thus, knowing English, we become part of the international community.
                </div>
                <a href="index2Reg.php" class="about__btn">
                    To learn more
                </a>
            </div>
        </div>
    </section>
    <section class="form">
        <div class="conteiner">
            <div class="form__inner">
                <div class="form__content">
                    <div class="form__title-box">
                        <div class="form__title">
                            Get the consultation
                        </div>
                        <div class = "form__text">

                        </div>
                    </div>
                    <div class = "form__box">
                        <form>
                            <div class = "form__box-inner">
                                <div class = "form__box-left">
                                    <label>
                                        Email
                                        <input type = "text">
                                    </label>
                                    <label>
                                        contact number
                                        <input type = "text">
                                    </label>
                                    <label>
                                        Full name
                                        <input type = "text">
                                    </label>
                                    <label>
                                        Topic of the question
                                        <select>
                                            <option> </option>
                                            <option> Courses for children </option>
                                            <option> Courses for adults </option>
                                            <option> Consultation </option>
                                            
                                        </select>
                                    </label>
                                </div>
                                <div class = "form__box-right">
                                    <label>
                                        Message
                                        <textarea maxlength = "400">
                                                </textarea>
                                    </label>
                                    <button class = "default__dtn" type = "submit">
                                        Get a consultation
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="fon">

        </div>
    </section>
    <section class="news">
        <div class="conteiner">
            <div class="news__top">
                <div class="news__title-box">
                    <div class="news__title">
                        Company's news
                     </div>
                     <div class = "news__text">
                         Over the past months, many changes have occurred in our company, such as:
                     </div>
                 </div>
                 <div class = "news__btn">
                     <a href="index2EngReg.php">
                         Open all news
                    </a>
                </div>

            </div>
            <div class="news__inner">
                <div class="news__slider">
                    <div class="news__slider-inner">
                        <div class="news__slider-item">
                            <div class="news__slider-title">
                                Efficiency POLYGLOT-PROFI
                            </div>
                            <div class="news__slider-text">
                                This is an organization that specializes in training in communication skills required
                                for daily life interactions and proficiency exams. With having trained over 5000 people
                                the classes promise to be one of the best options available both online and offline.
                                Some of the top choices include spoken English, IELTS preparation, and lectures for
                                working professionals.
                            </div>
                            <div class="news__slider-author">
                                John Smith, founder of English courses
                            </div>
                        </div>

                    </div>
                </div>
                <div href="#" class="news__blog">
                    <div class="news__images">
                        <img src="img/news-1.png" alt="">

                    </div>
                    <div class="news__blog-title">
                        Junior Summer Camp
                    </div>
                    <div class="news__blog-text">
                        Our courses are launching a new project for more effective learning of the English language. Children under 14
                        years I can take part in unique projects that will allow them ...
                    </div>
                </div>
                <div href = "#" class = "news__blog">
                    <div class = "news__images">
                        <img src = "img / news-2.jpg" alt = "">

                    </div>
                    <div class = "news__blog-title">
                        Home schooling
                    </div>
                    <div class = "news__blog-text">
                        Many of us want to start learning English from the comfort of our home, our courses can
                        provide such a service. Distance learning enables ...
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
                                <li><a href="???">polyglot-profi@gmail.com</a></li>
                                <li><a class="footer__adres" href="???">Bulevardul ??tefan cel Mare ??i Sf??nt 64,
                                        Chi??in??u</a></li>
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
                    ??POLYGLOT-PROFI
                </div>
            </div>
        </div>
    </footer>

    <div id="modal">
        <form action="forma.php" method="POST">
            <input type="text" name="name" placeholder="???????? ??????">
            <input type="text" name="email" placeholder="?????? e-mail">
            <input type="text" name="phone" placeholder="?????? ??????????????">
            <input type="submit" placeholder="??????????????????">
        </form>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>