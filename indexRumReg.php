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
                     <a class="header__eng" href="indexEngReg.php">Eng</a>
                     <a class="header__phone" href="tel:37368792543">+373 (68) 79 25 43 </a>
                     <a class="header__email" href="#">polyglot-profi@gmail.com</a>
                     <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#">Consultare gratuită</a>

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
    <section class="slider">
        <div class="conteiner">
            <div class="slider__inner">
                <div class="slider__item">
                    <div class="slider__item-content">
                        <div class="slider__title">
                            Junior Summer Camp
                        </div>
                        <div class="slider__text">
                            Tabara de vara perfecta
                        </div>
                        <a data-fancybox data-src="#modal" href="javascript:;" class="slider_dtn default__dtn">
                            Lasa o cerere
                        </a>
                    </div>
                </div>
                <div class="slider__item">
                    <div class="slider__item-content">
                        <div class="slider__title">
                            Cursuri pentru copii
                        </div>
                        <div class="slider__text">
                            Cursuri de limba engleza pentru copii de orice virsta
                        </div>
                        <a data-fancybox data-src="#modal" href="javascript:;" class="slider_dtn default__dtn">
                            Lasa o cerere
                        </a>
                    </div>
                </div>
                <div class="slider__item">
                    <div class="slider__item-content">
                        <div class="slider__title">
                            Doresti sa cunosti limba engleza?
                        </div>
                        <div class="slider__text">
                            Înscrieți la cursurile noastre și o sa vedeți rezultatul în 4 săptămâni
                        </div>
                        <a data-fancybox data-src="#modal" href="javascript:;" class="slider_dtn default__dtn">
                            Lasa o cerere
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
                       Avantajele noastre unice
                    </div>
                    <div class="survices__text">

                    </div>
                </div>
            </div>
            <div class="survices__items">
                <div class="survices__item">
                    <img class="survices__img" src="img/about1.png" width="50" height="30" alt="">
                    <div class="survices__item-title">
                        CALITATEA PRETULUI
                    </div>
                    <div class = "survices__item-text">
                        Avem o foarte bună valoare pentru bani.
                    </div>
                    <!-- <div class = "about__item-btn">
                        <a class="about_item-link" href="#"> Aflați mai multe </a>
                        <a data-fancybox data-src = "# modal" href = "javascript:;" class = "default__dtn">
                            Ordin
                        </a>
                    </div> -->
                </div>
                <div class = "survices__item">
                    <img class = "survices__img" src = "img/about1.png" width = "50" height = "30" alt = "">
                    <div class = "survices__item-title">
                        DOAR ENGLEZĂ
                    </div>
                    <div class = "survices__item-text">
                        Instruirea la POLYGLOT-PROFI se desfășoară numai în limba engleză. Lucrăm doar cu cei mai mulți
                        cei mai buni profesori.
                    </div>
                    <!-- <div class = "about__item-btn">
                        <a class="about_item-link" href="#"> Aflați mai multe </a>
                        <a data-fancybox data-src = "# modal" href = "javascript:;" class = "default__dtn">
                            Ordin
                        </a>
                    </div> -->
                </div>
                <div class = "survices__item">
                    <img class = "survices__img" src = "img/about1.png" width = "50" height = "30" alt = "">
                    <div class = "survices__item-title">
                        CREATIVITATE
                    </div>
                    <div class = "survices__item-text">
                        Folosim materiale didactice, activități creative pentru a vă folosi potențialul
                        la maxim.
                    </div>
                    <!--   <div class="about__item-btn">
                        <a class="about_item-link" href="#">Подробнее</a>
                        <a data-fancybox data-src="#modal" href="javascript:;" class="default__dtn">
                            Заказкать
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
                   Despre companie
                </div>
                <div class = "about__text">
                    Scopul nostru este de a oferi cursuri de calitate predate de profesori calificați cu
                    experiență acumulată de-a lungul anilor. Vrem să extindem rețeaua de oameni care doresc să aprofundeze în învățare
                    a acestui limbaj, conectându-ne astfel la rețeaua globală.
                    Cunoașterea limbii engleze este necesară pentru a accesa fondul global de informații
                    este în continuă creștere. Astfel, știind limba engleză, devenim parte a comunității internaționale.
                </div>
                <a href="index2Reg.php" class="about__btn">
                    Pentru a afla mai multe
                </a>
            </div>
        </div>
    </section>
    <section class = "form">
        <div class = "conteiner">
            <div class = "form__inner">
                <div class = "form__content">
                    <div class = "form__title-box">
                        <div class = "form__title">
                            Pentru a obține consultația
                        </div>
                        <div class = "form__text">

                        </div>
                    </div>
                    <div class = "form__box">
                        <form>
                            <div class = "form__box-inner">
                                <div class = "form__box-left">
                                    <etichetă>
                                        E-mail
                                        <input type = "text">
                                    </label>
                                    <etichetă>
                                        numar de contact
                                        <input type = "text">
                                    </label>
                                    <etichetă>
                                        Numele complet
                                        <input type = "text">
                                    </label>
                                    <etichetă>
                                        Subiectul întrebării
                                        <select>
                                            <option> </option>
                                            <option> Cursuri pentru copii </option>
                                            <option> Cursuri pentru adulți </option>
                                            <option> Consultare </option>
                                            
                                        </select>
                                    </label>
                                </div>
                                <div class = "form__box-right">
                                    <etichetă>
                                        Mesaj
                                        <textarea maxlength = "400">
                                                </textarea>
                                    </label>
                                    <button class = "default__dtn" type = "submit">
                                        Obțineți o consultație
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
                       Noutățile companiei
                    </div>
                    <div class = "news__text">
                        În ultimele luni, au avut loc multe schimbări în compania noastră, cum ar fi:
                    </div>
                </div>
                <div class = "news__btn">
                    <a href="index2RumReg.php">
                        Deschideți toate știrile
                    </a>
                </div>

            </div>
            <div class = "news__inner">
                <div class = "news__slider">
                    <div class = "news__slider-inner">
                        <div class = "news__slider-item">
                            <div class = "news__slider-title">
                                Eficiență POLIGLOT-PROFI
                            </div>
                            <div class = "news__slider-text">
                                This is an organization that specializes in training in communication skills required
                                for daily life interactions and proficiency exams. With having trained over 5000 people
                                the classes promise to be one of the best options available both online and offline.
                                Some of the top choices include spoken English, IELTS preparation, and lectures for
                                working professionals.
                            </div>
                            <div class = "news__slider-author">
                                John Smith, fondatorul cursurilor de engleză
                            </div>
                        </div>

                    </div>
                </div>
                <div href = "#" class = "news__blog">
                    <div class = "news__images">
                        <img src = "img / news-1.png" alt = "">

                    </div>
                    <div class = "news__blog-title">
                        Tabăra de vară Junior
                    </div>
                    <div class = "news__blog-text">
                        Cursurile noastre lansează un nou proiect pentru o învățare mai eficientă a limbii engleze. Copii sub 14 ani
                        ani pot participa la proiecte unice care le vor permite ...
                    </div>
                </div>
                <div href = "#" class = "news__blog">
                    <div class = "news__images">
                        <img src = "img / news-2.jpg" alt = "">

                    </div>
                    <div class = "news__blog-title">
                        Școala la domiciliu
                    </div>
                    <div class = "news__blog-text">
                        Mulți dintre noi dorim să începem să învățăm engleza din confortul casei noastre, cursurile noastre pot
                        să ofere un astfel de serviciu. Învățarea la distanță face posibilă ...
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class = "footer">
        <div class = "footer__content">
            <div class = "conteiner">
                <div class = "footer__inner">
                    <div class = "footer_info">
                        <div class = "footer__title">
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
        <form action="forma.php" method="POST">
            <input type="text" name="name" placeholder="Numele">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="phone" placeholder="Numar de telefon">
            <input type="submit" placeholder="Trimite">
        </form>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>