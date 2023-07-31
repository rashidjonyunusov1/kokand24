<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KOKAND 24</title>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
  <div class="layer">
    <div class="modal-box basic-flex">
      <button type="button" class="btn hide-modal-btn">x</button>
      <h4>Подписывайтесь на наш канал в Telegram и будьте всегда в курсе самых последних новостей:</h4>
      <div class="telegram-join  basic-flex">
        <a href="#"><img src="assets/img/tg.png" alt="Telegram">Подписатся</a>
      </div>
    </div>
  </div>
  <div class="menu-mask"></div>
  <main>
    <header class="main-header">
      <div class="container">
        <div class="basic-flex header__top">
          <a href="#" class="logo">
            <img src="assets/img/logo.png" alt="NAMANGANLIKLAR24">
          </a>
          <div class="currencies basic-flex">
            <div class="currency"><span>$</span><span>10137.2 </span></div>
            <div class="currency"><span>P</span><span>138.26</span></div>
            <div class="currency"><span>E</span><span>10988.72</span></div>
          </div>
          <div class="header__actions basic-flex">
            <form method="GET" class="search-form basic-flex">
              <input type="search" class="search-input">
              <button type="submit" class="btn search-btn"></button>
            </form>
            <div class="languages">
              <button type="button" class="btn language__option language__option--active">РУ</button>
              <div class="languages__list">
                <button type="button" class="btn language__option language__option--uz" data-status="disabled">UZ</button>
              </div>
            </div> 
            <div class="telegram-join basic-flex">
              <a href="#"><img src="assets/img/tg.png" alt="Telegram">Подписатся</a>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-menu"><span class="hamburger"></span></button>
        <nav class="navbar">
          <div class="currencies-responsive basic-flex">
            <div class="currency"><span>$</span><span>10137.2 </span></div>
            <div class="currency"><span>P</span><span>138.26</span></div>
            <div class="currency"><span>E</span><span>10988.72</span></div>
          </div>


          @yield('content')

          <footer class="footer">
            <div class="container">
              <div class="footer__top basic-flex">
                <a href="#" class="footer_logo"><img src="assets/img/logo-blue.png" alt="NAMANGANLIKLAR24"></a>
                <div class="join-telegram-wrapper basic-flex">
                  <p>Подписывайтесь на наш канал в Telegram и будьте всегда в курсе самых последних новостей:</p>
                  <a href="#" class="join-telegram">Подписатся</a>
                </div>
              </div>
              <div class="footer__bottom">
                <div class="about-site">
                  <h4>О сайте</h4>
                  <p>Воспроизводство, копирование, тиражирование, распространение и иное использование информации с сайта «NAMANGANLIKLAR24.UZ» возможно только с предварительного письменного разрешения редакции.</p>
                </div>
                <ul class="footer-menu">
                  <li class="footer-menu__item"><a href="#" class="footer-menu__link">Информация о сайте</a></li>
                  <li class="footer-menu__item"><a href="#" class="footer-menu__link">Напишите нам</a></li>
                  <li class="footer-menu__item"><a href="#" class="footer-menu__link">Реклама</a></li>
                  <li class="footer-menu__item"><a href="#" class="footer-menu__link">Прислать новость</a></li>
                </ul>
                <ul class="footer-menu">
                  <li class="footer-menu__item"><a href="#" class="footer-menu__link">Использование материалов </a></li>
                  <li class="footer-menu__item"><a href="#" class="footer-menu__link">Темы дня</a></li>
                  <li class="footer-menu__item"><a href="#" class="footer-menu__link">Наша команда</a></li>
                </ul>
              </div>
            </div>
          </footer>
        
          <script src="assets/js/main.js"></script>
        
        </body>
        </html>