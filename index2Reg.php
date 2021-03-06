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
                    <a class="header__rum" href="index2RumReg.php">Rum  /</a>
                     <a class="header__eng" href="index2EngReg.php">Eng</a>
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

        <section>
            <div class="conteiner">
                <div class="about__inner1">
                    <div class="about__title1">
                        История
                    </div>
                    <div class="about__text1">
                        POLYGLOT-PROFI был основан в 1998 году. В настоящее время у нас более 20 лет опыта преподавания
                        английского языка и более 5 000 выпускников.
                        У нас есть курсы английского со всеми уровнями от начинающих (A0) до высоко продвинутых (C2).
                        Помимо общих курсов английского языка, мы также предлагаем курсы для таких тестов, как TOEFL,
                        Cambrdige, BAC, IELTS и SAT.
                        Мы также предлагаем корпоративные курсы для молдавских компаний из разных областей.
                        Все наши курсы утверждены в соответствии с Министерством образования, культуры и науки.
                        В дополнение к иностранным языкам у нас также есть библиотека книг на английском языке, чтобы
                        поощрять чтение среди наших студентов,
                        а также для создания активного и дружеского сообщества, мы организуем такие мероприятия, как
                        клубы и дискуссии с носителями английского, которые мы проводим.

                    </div>
                    <div class="about__title1">
                        Видение
                    </div>
                    <div class="about__text1">
                        Мир сегодня более изменчив, взаимозависим и межкультурен, чем когда-либо.
                        POLYGLOT-PROFI центр готовит студентов к тому, чтобы стать гражданами мира, способными
                        участвовать в глобальных проблемах и вести свою жизнь безопасно и свободно посредством общения
                        на одном из самых популярных языков.

                    </div>


                    <div class="about__title1">
                        Наша команда учителей
                    </div>
                    <div class="about__text1">
                        Наши учителя являются выпускниками лучших университетов. Так же наши учителя являются
                        носителями языка, они родом из США. Благодаря этому наши ученики смогут обладать знаниями,
                        которыми могут обладать только носители языка.

                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="conteiner">
                <div class="news__top">
                    <div class="news__title-box">
                        <div class="news__title">
                            Новости
                        </div>
                        <div class="news__text">
                            <div class="about__title1">
                                Junior Summer Camp
                            </div>
                            <div class="about__text1">
                                Наши курсы запускаю новый проект для более эффективного изучения ангийского
                                языка. Дети до 14 лет могу принять участи в уникальном проекты, который позволит
                                им повысить свой уровень английского языка. Вся программа будет проходить только
                                на английском языке. Занятия будут проходить в игровой форме и тети не будут
                                ощущать языкового барьерьера.
                                <p>
                                    <h4> Длительность программы:</h4> Программа длится 2 месяца. В течении 2 месяцем
                                    дети будут жить в лагере, который находится за город.
                                    Дети будут общаться только на английском языке.
                                    Каждый день будут проходить интерактивные игры для изучения новых слов. У детей так
                                    же будет свободное время.
                                </p>
                                <p>
                                    <h4>Стоимость программы:</h4> Программа с медецинской страховкой, 5-разовым
                                    питанием, транспортом и 2-х месячным проживанием будет стоить всего 200$. Количество
                                    мест ограниченно.
                                </p>

                            </div>
                        </div>

                        <div class="news__text">
                            <div class="about__title1">
                                Домашнее обучение
                            </div>
                            <div class="about__text1">
                                Многие из нас хотят начать изучение английского языка не выходя из дома, наши курсы
                                могут предоставить такую услугу. Дистанционное обучение дает возможность обучаться в любое время.
                                <p>
                                    Онлайн-обучение предлагает более гибкие условия занятий, чем традиционные программы
                                    на базе университетов и колледжей. Не нужно ехать к 9 утра на другой конец города.
                                    Можно заниматься в любое время и выбрать то место, которое мотивирует больше всего:
                                    собственная спальня, кафе, рабочий стол или даже беговая дорожка. Доступ к личному
                                    кабинету, электронной почте учителей и студенческим форумам осуществляется в режиме
                                    24/7. Это особенно актуально, если уже есть основная занятость, с которой нужно
                                    выстроить график совмещения.
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