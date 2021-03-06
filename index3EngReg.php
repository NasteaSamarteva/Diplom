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
                    <a class="header__eng" href="index3RumReg.php">Rum</a>
                    <a class="header__phone" href="tel:37368792543">+373 (68) 79 25 43 </a>
                    <a class="header__email" href="#">polyglot-profi@gmail.com</a>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#">Free
                         consultation </a></a>
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
            <div class="news__top">
                <div class="news__title-box">
                    <div class="news__title">
                       English courses for children.
                     </div>
                     <div class = "news__text">
                        
                         <div class = "about__text1">
                              Course duration: 2 months September - November; November-December;
                             January - March; March - May; June - July.
                            <p> Schedule: Tuesday, Thursday, Saturday </p>
                            <p> Cost:
                                 33.6 - 44 lei for 45 minutes (3225 lei - 4224 lei) *</p>
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
                        English for exams / tests
                     </div>

                     <div class = "about__text1">
                         English for Exams is designed for those who want the best possible results in
                         international exams TOEFL, IELTS.

                         <p> Groups are preparing for the TOEFL exam. </p>

                         <p> For IELTS, only individual lessons are conducted, because these
                             the tests are more specialized and a more individual is required for a good result
                             an approach. One-to-one lessons are also offered for TOEFL.</p>

                    </div>
                    <div class="about__text1">
                        <h3> Group training: </h3>

                        Groups are formed with a minimum number of students from 5 to a maximum of 12 people.

                        <p> Duration of the exam preparation program: 72 academic hours in 2 months
                        </p>

                        <p> Schedule: Monday, Wednesday and Friday </p>

                        <p> Classes start at: 9:00, 11:00, 14:00, 16:00, 18:30 </p>

                        <p> Required level: B1 (good intermediate level), will be determined after passing
                            initial testing at the ALC office; </p>

                        <p> Required materials: included in the course price; </p>

                        <p> Cost: 48 - 60 lei per academic hour (45 min) </p>

                        <h3> Private lessons: </h3>

                        The training program is determined individually, according to the requirements and interests of the student and
                        intensity agreed with the client.

                        <p> Private lesson fee: USD 15 per academic hour</p>
                    </div>

                    <div class="about__text1">
                        <div class="news__title">
                            IELTS exam preparation
                         </div>
                        <h3> Private lessons: </h3>

                        <p> The training program is compiled individually, according to the requirements and interests of the student and
                         intensity agreed with the client. </p>

                        <p> Private lesson fee: USD 15 per academic hour.</p> 
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
                        General English course, intensive course,
                         96 academic hours - 2 months
                     </div>
                     <div class = "news__text">
                         <div class = "about__title1">

                         </div>
                         <div class = "about__text1">
                             Course duration: 2 months September - November; November December;
                             January March; March - May; June July.
                             <p> Schedule:
                                 Monday, Wednesday, Friday, Saturday </p>
                             <p> Cost:
                                 33.6 - 44 lei for 45 minutes (3225 lei - 4224 lei) *</p>
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
        <form>
            <input type="text" placeholder="???????? ??????">
            <input type="text" placeholder="?????? e-mail">
            <input type="text" placeholder="?????? ??????????????">
            <input type="submit" placeholder="??????????????????">
        </form>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>