<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700|Roboto:400,500&display=swap&subset=cyrillic"rel="stylesheet">
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
                     <a class="header__rum" href="register.php">Вход  /</a>  
                     <a class="header__rum" href="indexRum.html">Rum  /</a>
                     <a class="header__eng" href="indexEng.html">Eng</a>
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
                            <li><a href="index.html">Главная</a></li>
                            <li><a href="index2.html">О компании</a></li>
                            <li><a href="index3.html">Курсы</a></li>
                            <li><a href="index4.html">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
  <div class="log">
  	<h2>Register</h2>
  </div>
	<div class="reg">
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</div>
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
</body>
</html>