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
                    <a class="header__eng" href="index2EngReg.php">Eng</a>
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

        <section>
            <div class="conteiner">
                <div class="about__inner1">
                    <div class="about__title1">
                        История
                    </div>
                    <div class="about__text1">
                        POLYGLOT-PROFI a fost fondată în 1998. În prezent, avem peste 20 de ani de experiență didactică
                        Engleză și peste 5.000 de absolvenți.
                        Avem cursuri de engleză cu toate nivelurile de la începători (A0) la foarte avansați (C2).
                        Pe lângă cursurile de engleză generală, oferim și cursuri pentru teste precum TOEFL,
                        Cambrdige, BAC, IELTS și SAT.
                        De asemenea, oferim cursuri corporative pentru companii din Moldova din diferite domenii.
                        Toate cursurile noastre sunt aprobate de Ministerul Educației, Culturii și Științei.
                        Pe lângă limbile străine, avem și o bibliotecă de cărți în limba engleză
                        încurajează lectura în rândul studenților noștri,
                        precum și pentru a crea o comunitate activă și prietenoasă, organizăm evenimente precum
                        cluburi și discuții cu vorbitori nativi de engleză pe care îi avem.

                    </div>
                    <div class="about__title1">
                        Viziune
                    </div>
                    <div class="about__text1">
                        Lumea de astăzi este mai fluidă, interdependentă și interculturală ca niciodată.
                         Centrul POLYGLOT-PROFI pregătește elevii să devină cetățeni mondiali capabili
                         participă la problemele globale și conduce-ți viața în siguranță și liber prin comunicare
                         într-una dintre cele mai populare limbi.
                    </div>


                    <div class="about__title1">
                        Echipa noastră de profesori
                     </div>
                     <div class = "about__text1">
                         Profesorii noștri sunt absolvenți ai celor mai bune universități. De asemenea, profesorii noștri sunt
                         vorbitori nativi, sunt originari din SUA. Datorită acestui fapt, studenții noștri vor putea avea cunoștințe,
                         pe care numai vorbitorii nativi îl pot poseda.

                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="conteiner">
                <div class="news__top">
                    <div class="news__title-box">
                        <div class="news__title">
                            Noutati
                        </div>
                        <div class="news__text">
                            <div class="about__title1">
                                Junior Summer Camp
                            </div>
                            <div class="about__text1">
                                Cursurile noastre lansez un nou proiect pentru un studiu mai eficient al limbii engleze
                                 limba. Copiii sub 14 ani pot participa la proiecte unice care le vor permite
                                 Îmi voi îmbunătăți nivelul de engleză. Întregul program va rula numai
                                 in engleza. Cursurile se vor ține într-un mod jucăuș și nu vor fi mătuși
                                 simți bariera lingvistică.
                                <p>
                                    <h4> Durata programului:</h4> Programul durează 2 luni. În termen de 2 luni
                                     copiii vor locui într-o tabără în afara orașului.
                                     Copiii vor comunica numai în limba engleză.
                                     În fiecare zi vor exista jocuri interactive pentru a învăța cuvinte noi. La copii, deci
                                     va fi timp liber.
                                </p>
                                <p>
                                    <h4>Costul programului:</h4> Program de asigurări medicale, de 5 ori
                                     mâncarea, transportul și cazarea pe 2 luni vor costa doar 200 USD. Cantitate
                                     locurile sunt limitate.
                                </p>

                            </div>
                        </div>

                        <div class="news__text">
                            <div class="about__title1">
                                Școala la domiciliu
                            </div>
                            <div class = "about__text1">
                                Mulți dintre noi dorim să începem să învățăm engleza din confortul casei noastre, al cursurilor noastre
                                poate oferi un astfel de serviciu. Învățarea la distanță face posibilă învățarea în orice moment.
                                <p>
                                    Învățarea online oferă medii de învățare mai flexibile decât programele tradiționale
                                    pe baza universităților și colegiilor. Nu trebuie să mergeți la celălalt capăt al orașului până la ora 9 dimineața.
                                    Puteți practica oricând și puteți alege locul care motivează cel mai mult:
                                    propriul dormitor, cafenea, birou sau chiar o bandă de alergat. Acces la personal
                                    cabinetul, e-mailul profesorilor și forumurile studențești se desfășoară în modul respectiv
                                    24/7. Acest lucru este valabil mai ales dacă aveți deja treaba principală cu care aveți nevoie
                                    construiți un program de aliniere.
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