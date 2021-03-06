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
                     <a class="header__rum" href="indexRumReg.php">Rum  /</a>
                     <a class="header__eng" href="indexEngReg.php">Eng</a>
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
                        <a href="index.html">
                            <img src="img/logo.png" width="150" height="60" alt="">
                        </a>
                    </div>
                    <nav class="menu">
                        <ul>
                            <li><a href="indexReg.php">Главная</a></li>
                            <li><a href="index2Reg.php">О компании</a></li>
                            <li><a href="index3Reg.php">Курсы</a></li>
                            <li><a href="index4Reg.php">Контакты</a></li>
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
                            Идеальный летний лагерь
                        </div>
                        <a data-fancybox data-src="#modal" href="javascript:;" class="slider_dtn default__dtn">
                            Остасить заявку
                        </a>
                    </div>
                </div>
                <div class="slider__item">
                    <div class="slider__item-content">
                        <div class="slider__title">
                            Курсы для детей
                        </div>
                        <div class="slider__text">
                            Курсы английского для детей всех возрастов
                        </div>
                        <a data-fancybox data-src="#modal" href="javascript:;" class="slider_dtn default__dtn">
                            Остасить заявку
                        </a>
                    </div>
                </div>
                <div class="slider__item">
                    <div class="slider__item-content">
                        <div class="slider__title">
                            Хочешь выучить английский язык?
                        </div>
                        <div class="slider__text">
                            Записывайся на наши курсы и увидишь результат через 4 недели
                        </div>
                        <a data-fancybox data-src="#modal" href="javascript:;" class="slider_dtn default__dtn">
                            Остасить заявку
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
                        Наши уникальные преимущества
                    </div>
                    <div class="survices__text">

                    </div>
                </div>
            </div>
            <div class="survices__items">
                <div class="survices__item">
                    <img class="survices__img" src="img/about1.png" width="50" height="30" alt="">
                    <div class="survices__item-title">
                        ЦЕНА / КАЧЕСТВО
                    </div>
                    <div class="survices__item-text">
                        У нас очень хорошее соотношение цены и качества.
                    </div>
                    <!--  <div class="about__item-btn">
                        <a class="about_item-link" href="#">Подробнее</a>
                        <a data-fancybox data-src="#modal" href="javascript:;" class="default__dtn">
                            Заказкать
                        </a>
                    </div> -->
                </div>
                <div class="survices__item">
                    <img class="survices__img" src="img/about1.png" width="50" height="30" alt="">
                    <div class="survices__item-title">
                        ТОЛЬКО АНГЛИЙСКИЙ
                    </div>
                    <div class="survices__item-text">
                        Обучение в POLYGLOT-PROFI проводится только на английском языке. Мы работаем только с самыми
                        лучшими преподавателями.
                    </div>
                    <!--  <div class="about__item-btn">
                        <a class="about_item-link" href="#">Подробнее</a>
                        <a data-fancybox data-src="#modal" href="javascript:;" class="default__dtn">
                            Заказкать
                        </a>
                    </div>-->
                </div>
                <div class="survices__item">
                    <img class="survices__img" src="img/about1.png" width="50" height="30" alt="">
                    <div class="survices__item-title">
                        КРЕАТИВНОСТЬ
                    </div>
                    <div class="survices__item-text">
                        Мы используем дидактический материал, креативные активности для использования вашего потенциала
                        по максимуму.
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
                    О компании
                </div>
                <div class="about__text">
                    Наша цель – предложить качественные курсы, которые проводят квалифицированные преподаватели с
                    опытом, накопленным за эти годы. Мы хотим расширить сеть людей, которые хотят углубиться в изучении
                    этого языка, тем самым соединяя нас с глобальной сетью.
                    Знание английского языка необходимо для доступа к глобальному информационному фонду, так как он
                    постоянно растет. Таким образом, зная английский, мы становимся частью международного сообщества.
                </div>
                <a href="index2Reg.php" class="about__btn">
                    Узнать больше
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
                            Получить консультацию
                        </div>
                        <div class="form__text">

                        </div>
                    </div>
                    <div class="form__box">
                        <form>
                            <div class="form__box-inner">
                                <div class="form__box-left">
                                    <label>
                                        E-mail
                                        <input type="text">
                                    </label>
                                    <label>
                                        Контактный телефон
                                        <input type="text">
                                    </label>
                                    <label>
                                        ФИО
                                        <input type="text">
                                    </label>
                                    <label>
                                        Тема вопроса
                                        <select>
                                            <option></option>
                                            <option>Курсы для детей</option>
                                            <option>Курсы для взрослых</option>
                                            <option>Консультация</option>
                                            
                                        </select>
                                    </label>
                                </div>
                                <div class="form__box-right">
                                    <label>
                                        Соощение
                                        <textarea maxlength="400">
                                                </textarea>
                                    </label>
                                    
                                        
                                        <button class="default__dtn" type="submit">
                                            <a href="forma.php" method="POST">Получить консультация</a>
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
                        Новости компании
                    </div>
                    <div class="news__text">
                        За прошедшие месяцы в нашей компании произошло много изменений такие как:
                    </div>
                </div>
                <div class="news__btn">
                    <a href="index2Reg.php">
                        Открыть все новости
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
                        Наши курсы запускаю новый проект для более эффективного изучения ангийского языка. Дети до 14
                        лет могу принять участи в уникальном проекты, который позволит им...
                    </div>
                </div>
                <div href="#" class="news__blog">
                    <div class="news__images">
                        <img src="img/news-2.jpg" alt="">

                    </div>
                    <div class="news__blog-title">
                        Домашнее обучение
                    </div>
                    <div class="news__blog-text">
                        Многие из нас хотят начать изучение английского языка не выходя из дома, наши курсы могут
                        предоставить такую услугу. Дистанционное обучение дает возможность...
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
                            Контакты
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
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="email" placeholder="Ваш e-mail">
            <input type="text" name="phone" placeholder="Ваш телефон">
            <input type="submit" placeholder="Отправить">
        </form>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>