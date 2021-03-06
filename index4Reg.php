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
                    <a class="header__rum" href="index4Reg.php">Rum  /</a>
                     <a class="header__eng" href="index4EngReg.php">Eng</a>
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
                    <div class="about__title2">
                        Контакты
                    </div>
                    <div class="about__text2">

                        При возникновении любого вопроса, свяжитесь с нами по телефону или напишите нам по электронному
                        адресу, указанному ниже.
                    </div>


                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
            <div class="footer__content2">
                    <div class="conteiner">
                        <div class="footer__inner">
                            <div class="footer_info">
                                <div class="footer__title2">
                                   
                                </div>
                                <div class="footer__text">
        
                                </div>
                                <div>
                                    <ul class="footer__list2">
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