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
                    <a class="header__rum" href="index3RumReg.php">Rum  /</a>
                     <a class="header__eng" href="index3EngReg.php">Eng</a>
                    <a class="header__phone" href="tel:37368792543">+373 (68) 79 25 43 </a>
                    <a class="header__email" href="#">polyglot-profi@gmail.com</a>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#">Бесплатная консультация</a>
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
            <div class="news__top">
                <div class="news__title-box">
                    <div class="news__title">
                        Курсы английского для детей.
                    </div>
                    <div class="news__text">
                        
                        <div class="about__text1">
                             Продолжительность курса: 2 месяца Сентябрь – ноябрь; ноябрь – декабрь;
                            январь – март; март – май; июнь – июль.
                           <p>Расписание: вторник, четверг, суббота</p>
                           <p> Стоимость:
                                33,6 – 44 леев за 45 мин. (3225 леев – 4224 леев)*</p>
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
                        Англйский для экзаменов/сдачи тестов
                    </div>

                    <div class="about__text1">
                        Английский для экзаменов предназначен для желающих получить наилучшие результаты по
                        международным экзаменам TOEFL, IELTS.

                        <p> К экзамену TOEFL – готовятся группы.</p>

                        <p> Для IELTS проводятся только индивидуальные занятия, потому что эти
                            тесты более специализированы и для хорошего результата требуется более индивидуальный
                            подход. Индивидуальные занятия также проводятся для TOEFL.</p>

                    </div>
                    <div class="about__text1">
                        <h3> Обучение в группе:</h3>

                        Группы формируются с минимальным количеством студентов от 5 до максимум 12 человек.

                        <p> Продолжительность программы подготовки к экзамену: 72 академических часа в течение 2 месяцев
                        </p>

                        <p> Расписание: понедельник, среда и пятница</p>

                        <p> Начало занятий с: 9:00, 11:00, 14:00, 16:00, 18:30</p>

                        <p> Необходимый уровень: B1 (хороший средний уровень), будет определен после сдачи
                            первоначального тестирования в офисе ALC;</p>

                        <p> Необходимые материалы: включены в стоимость курса;</p>

                        <p> Стоимость: 48 – 60 леев за академический час (45 мин)</p>

                        <h3> Индивидуальные занятия:</h3>

                        Программа обучения определяется индивидуально, согласно требованиям и интересам студента и
                        интенсивности, оговоренной с клиентом.

                        <p> Стоимость частного урока: 15 долларов США за академический час</p>
                    </div>

                    <div class="about__text1">
                        <div class="news__title">
                            Подготовка к экзамену IELTS
                        </div>
                       <h3> Индивидуальные занятия:</h3>

                       <p>Программа обучения составляется индивидуально, согласно требованиям и интересам студента и
                        интенсивности, оговоренной с клиентом.</p> 

                       <p>Стоимость частного урока: 15 долларов США за академический час.</p> 
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
                        Общий курс английского языка , интенсивный курс,
                        96 академических часов – 2 месяца
                    </div>
                    <div class="news__text">
                        <div class="about__title1">

                        </div>
                        <div class="about__text1">
                            Продолжительность курса: 2 месяца Сентябрь – ноябрь; ноябрь – декабрь;
                            январь – март; март – май; июнь – июль.
                            <p> Расписание:
                                Понедельник, среда, пятница, суббота</p>
                            <p> Стоимость:
                                33,6 – 44 леев за 45 мин. (3225 леев – 4224 леев)*</p>
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