<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/normalize.css" />
    <link
      id="favicon"
      rel="icon"
      type="image/png"
      href="/assets/images/favicon.png"
    />
    <link
      rel="stylesheet"
      href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/main.min.css" />
    <link rel="stylesheet" href="/css/story.min.css" />
    <link rel="stylesheet" href="/css/slick.min.css" />
    <title>Destorus | О сервере</title>
  </head>
  <?php include '../components/agation.php';?>
  <?php include '../components/header.php';?>
  <?php include '../components/mobile__menu.php';?>
  <main class="about">
    <section class="mobile__banner">
      <img
        src="/assets/images/about__banner.webp"
        alt="mobile__banner-img"
        class="mobile__banner-img"
      />
      <div class="mobile__banner-box">
        <img
          src="/assets/images/banner-box-img.png"
          alt="banner-box-img"
          class="banner__box-img"
        />
        <h1 class="banner__box-title">
          Привет! Путник.
        </h1>
        <p class="banner__subtitle">
          Я расскажу тебе о мире Destorus
        </p>
        <p class="banner__box-text">
        Ты можешь не тратить время на мои истории о сервере, и сразу приступить к завоеванию нового мира!
        </p>
        <div class="banner__btn-box">
          <a href=".registration" class="banner__btn-start">Начать играть</a>
        </div>
      </div>
      <div class="mobile__lianer"></div>
    </section>
    <section class="banner">
      <div class="banner__bg-box">
      <img src="/assets/images/Hero.svg" alt="" class="banner__bg" />
        <div class="banner__gradient"></div>
        <div class="banner__box">
        <span class="banner__subtrack"
            data-aos="fade-up"
            data-aos-delay="500"
            data-aos-duration="500"
        >Lineage 2 Interlude+</span>
          <h1
            class="banner__box-title"
            data-aos="fade-up"
            data-aos-delay="700"
            data-aos-duration="500"
          >
          Привет! Путник.
          </h1>
          <p class="banner__subtitle"
          class="banner__box-text"
            data-aos="fade-up"
            data-aos-delay="800"
            data-aos-duration="500"
          >
          Я расскажу тебе о мире Destorus
        </p>
          <p
            class="banner__box-text"
            data-aos="fade-up"
            data-aos-delay="900"
            data-aos-duration="500"
          >
          Ты можешь не тратить время на мои истории о сервере, и сразу приступить к завоеванию нового мира!
          </p>
          <div
            class="banner__btn-box"
            data-aos="fade-up"
            data-aos-delay="1100"
            data-aos-duration="500"
          >
            <a href="/registration" class="banner__btn-start">Начать играть</a>
            </a>
          </div>
        </div>
      </div>
    </section>
    <?php include '../components/journey.php';?>
    <?php include '../components/features.php';?>
    <?php include '../components/story.php';?>
    <section class="accordion">
      <h2
        class="world__title"
        data-aos="fade-up"
        data-aos-delay="100"
        data-aos-duration="500"
        data-aos-offset="-1100"
      >
        <span class="world__title-decor title-decor">Особенности</span><br />
        Вопрос-ответ
      </h2>
      <div class="container" id="accordion">
        <h3>Section 1</h3>
        <div>
          <p>
            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam.
            Integer ut neque. Vivamus nisi metus, molestie vel, gravida in,
            condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi.
            Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit
            eu ante scelerisque vulputate.
          </p>
        </div>
        <h3>Section 2</h3>
        <div>
          <p>
            Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit
            amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris
            turpis porttitor velit, faucibus interdum tellus libero ac justo.
            Vivamus non quam. In suscipit faucibus urna.
          </p>
        </div>
        <h3>Section 3</h3>
        <div>
          <p>
            Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque
            lobortis. Phasellus pellentesque purus in massa. Aenean in pede.
            Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed
            commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu
            iaculis leo purus venenatis dui.
          </p>
          <ul>
            <li>List item one</li>
            <li>List item two</li>
            <li>List item three</li>
          </ul>
        </div>
        <h3>Section 4</h3>
        <div>
          <p>
            Cras dictum. Pellentesque habitant morbi tristique senectus et netus
            et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis
            in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean
            lacinia mauris vel est.
          </p>
          <p>
            Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat
            lectus. Class aptent taciti sociosqu ad litora torquent per conubia
            nostra, per inceptos himenaeos.
          </p>
        </div>
      </div>
    </section>
    <?php include '../components/kits.php';?>
    <section class="connect">
      <img src="/assets/images/connect.webp" alt="" class="connect__bg" />
      <div class="connect__lianer"></div>
      <div class="container">
        <div class="connect__box">
          <img
            src="/assets/images/banner-box-img.png"
            alt="connect__box-img"
            class="connect__box-img"
          />
          <h2 class="connect__title">
            ПРИСОЕДИНЯЙТЕСЬ И CТАНЬТЕ ЧАСТЬЮ ЭПИЧЕСКОГО МИРА!
          </h2>
          <a href=".registration" class="banner__btn-start">Начать играть</a>
        </div>
      </div>
    </section>
  </main>
  <?php include '../components/footer.php';?>
  <?php include '../components/lang__modal.php';?>
  <body>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.cookie.js"></script>
    <script src="/js/my.magicline.1.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/js/main.min.js"></script>
  </body>
</html>
