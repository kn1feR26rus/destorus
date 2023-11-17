<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/normalize.css" />
    <link rel="stylesheet" href="/css/main.min.css" />
    <link rel="stylesheet" href="/css/slick.min.css" />
    <link
      id="favicon"
      rel="icon"
      type="image/png"
      href="/assets/images/favicon.png"
    />
    <title>Destorus | Файлы</title>
  </head>
  <?php include '../components/header.php';?>
  <?php include '../components/mobile__menu.php';?>
  <main class="files">
    <div class="files__window">
      <h2 class="world__title" id="world__title">
        <span class="world__title-decor title-decor">Загрузите</span><br />
        КЛИЕНТ ИГРЫ
      </h2>
      <div class="files__container">
        <div class="files__content">
          <div class="menu">
            <a href="javascript:void(0);" class="files__choose"></a>
            <ul>
              <li class="files__btn active" id="client">Клиент игры</li>
              <li class="files__btn" id="updater">Лаунчер (Updater)</li>
            </ul>
          </div>
          <div id="border" class="border"></div>
          <div class="files__item">
            <div class="files__item-name">Torrent</div>
            <a href="" class="files__item-url">Скачать</a>
          </div>
          <div class="files__item">
            <div class="files__item-name">Google Drive</div>
            <a href="" class="files__item-url">Скачать</a>
          </div>
          <div class="files__info">
            Распакуйте все файлы из архива в выбранную директорию. Запустите
            Destorus_ru.exe или Destorus_eng.exe, и дождитесь завершения
            проверки всех файлов. Теперь можно запускать игру!
          </div>
          <a href="javascript:void(0);" class="files__question-btn">
            <img src="/assets/images/files-img.png" alt="files__question-img" class="files__question-img">
            <span class="files__question-text">Помощь</span>
          </a>
        </div>
      </div>
      <a href="javascript:void(0);" class="files__question">
      <span class="register__bonus-tooltip">ASDASDASDASDAS</span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
        >
          <path
            d="M11.95 18C12.3 18 12.596 17.879 12.838 17.637C13.08 17.395 13.2007 17.0993 13.2 16.75C13.2 16.4 13.0793 16.104 12.838 15.862C12.5967 15.62 12.3007 15.4993 11.95 15.5C11.6 15.5 11.3043 15.621 11.063 15.863C10.8217 16.105 10.7007 16.4007 10.7 16.75C10.7 17.1 10.821 17.396 11.063 17.638C11.305 17.88 11.6007 18.0007 11.95 18ZM11.05 14.15H12.9C12.9 13.6 12.9627 13.1667 13.088 12.85C13.2133 12.5333 13.5673 12.1 14.15 11.55C14.5833 11.1167 14.925 10.704 15.175 10.312C15.425 9.92 15.55 9.44933 15.55 8.9C15.55 7.96667 15.2083 7.25 14.525 6.75C13.8417 6.25 13.0333 6 12.1 6C11.15 6 10.379 6.25 9.787 6.75C9.195 7.25 8.78267 7.85 8.55 8.55L10.2 9.2C10.2833 8.9 10.471 8.575 10.763 8.225C11.055 7.875 11.5007 7.7 12.1 7.7C12.6333 7.7 13.0333 7.846 13.3 8.138C13.5667 8.43 13.7 8.75067 13.7 9.1C13.7 9.43333 13.6 9.746 13.4 10.038C13.2 10.33 12.95 10.6007 12.65 10.85C11.9167 11.5 11.4667 11.9917 11.3 12.325C11.1333 12.6583 11.05 13.2667 11.05 14.15ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88333 20.6867 5.825 19.9743 4.925 19.075C4.025 18.175 3.31267 17.1167 2.788 15.9C2.26333 14.6833 2.00067 13.3833 2 12C2 10.6167 2.26267 9.31667 2.788 8.1C3.31333 6.88333 4.02567 5.825 4.925 4.925C5.825 4.025 6.88333 3.31267 8.1 2.788C9.31667 2.26333 10.6167 2.00067 12 2C13.3833 2 14.6833 2.26267 15.9 2.788C17.1167 3.31333 18.175 4.02567 19.075 4.925C19.975 5.825 20.6877 6.88333 21.213 8.1C21.7383 9.31667 22.0007 10.6167 22 12C22 13.3833 21.7373 14.6833 21.212 15.9C20.6867 17.1167 19.9743 18.175 19.075 19.075C18.175 19.975 17.1167 20.6877 15.9 21.213C14.6833 21.7383 13.3833 22.0007 12 22Z"
            fill="white"
          />
        </svg>
      </a>
    </div>
  </main>
  <?php include '../components/footer.php';?>
  <?php include '../components/lang__modal.php';?>
  <body>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.cookie.js"></script>
    <script src="/js/my.magicline.1.0.min.js"></script>
    <script src="/js/main.min.js"></script>
    <script src="/js/files.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  </body>
</html>
