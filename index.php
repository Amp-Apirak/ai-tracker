<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>P-Care - Caring for the Elderly</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="index-page">

  <?php include 'includes/header.php'; ?>

  <main class="main">
    <!--  Section: Information -->
    <section id="information" class="information section">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/care/care1.jpg" alt="ภาพการดูแล" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/care/care3.jpg" alt="ภาพการดูแล" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/care/care4.jpg" alt="ภาพการดูแล" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/care/care5.jpg" alt="ภาพการดูแล" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/care/care2.jpg" alt="ภาพการดูแล" class="img-fluid">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">
            <h1 class="mb-4" data-aos="fade-up">
              ความเสี่ยงในการพลัดตกหกล้มของผู้สูงอายุ ณ ปัจจุบัน
            </h1>
            <p data-aos="fade-up">
              ให้เราดูแลคุณ ด้วยระบบดูแลเฝ้าระวังการพลัดตกหกล้มในผู้สูงอายุอัฉริยะ สามารถตรวจจับการล้มได้อัตโนมัติ และส่งสัญญาณขอความช่วยเหลือไปยังลูกหลาน หรือหน่วยงานที่เกี่ยวข้อง ให้สามารถเข้าช่วยเหลือหรือบรรเทาเหตุได้ทันท่วงที
            </p>
            <p class="mt-5" data-aos="fade-up">
              <a href="#" class="btn btn-get-started">อ่านต่อ...</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: Information -->


    <!--  Section Video -->
    <section id="emergency-system" class="emergency-system section">
      <div class="container">
        <div class="content">
          <div class="row">
            <div class="col-12 text-center">
              <div class="px-3 mt-4">
                <h2 class="content-title">
                  ระบบเฝ้าระวังเหตุฉุกเฉิน
                </h2>
                <p>
                  ตัวอย่างเหตุการณ์จำลอง การใช้งานอุปกรณ์ AI Tracker สำหรับกดขอความช่วยเหลือไปยังศูนย์รับแจ้งเหตุของหน่วยงานในพื้นที่ <br>
                  เมื่อเกิดเหตุการณ์ฉุกเฉินในผู้สูงอายุเป็นผู้ป่วยติดเตียง โดยมีญาติหรือคนในครอบครัวให้การดูแล
                </p>
              </div>
              <div class="video-wrap">
                <iframe
                  class="full-width-video"
                  src="https://drive.google.com/file/d/1Ud5bmwLtgVSI3MbZTqeIt6Th8vNAgnbN/preview"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen>
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section Video -->


    <!-- Section Our-service-->
    <section id="our-service" class="our-service section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">

        <h2>ด้านการบริการ</h2>
      </div><!-- End Section Title -->
      <div class="container">

        <div class="row gy-4 mb-3">
          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="#" class="thumb d-block"><img src="assets/img/services/carecenter.png" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">ผู้ดูแลระบบ</a> •
                  <span class="date">พฤศจิกายน 23, 2023</span>
                </div>
                <h3><a href="#">ศูนย์เฝ้าระวังเหตุฉุกเฉินให้บริการ 24 ชั่วโมง</a></h3>
                <p>
                  เรามีศูนย์เฝ้าระวังเหตุฉุกเฉินให้บริการ 24 ชั่วโมง พร้อมเจ้าหน้าที่มีความชำนาญการค่อยทำหน้าที่เป็นหน่วยงานเฝ้าระวังสำรอง...
                </p>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
              <a href="#" class="thumb d-block"><img src="assets/img/services/emergency.png" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">ผู้ดูแลระบบ</a> •
                  <span class="date">พฤศจิกายน 23, 2023</span>
                </div>
                <h3><a href="#">ระบบเฝ้าระวังเหตุฉุกเฉิน</a></h3>
                <p>
                  ระบบเฝ้าระวังเหตุฉุกเฉิน สามารถแจ้งเตือนเมื่อเกิดเหตุฉุกเฉินผ่านทางหน้าจอการแสดงผล พร้อมรายละเอียดข้อมูลที่อยู่ และเบอร์ติดต่อบุคคลสำคัญ...
                </p>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
              <a href="#" class="thumb d-block"><img src="assets/img/services/eview.png" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">ผู้ดูแลระบบ</a> •
                  <span class="date">พฤศจิกายน 23, 2023</span>
                </div>
                <h3><a href="#">ai Tracker</a></h3>
                <p>
                  อุปกรณ์พกพา สามารถตรวจจับการล้มแบบอัติโนมัติ และมีปุ่มสำหรับกดขอความช่วยเหลือ โดยระบบจะทำการส่งสัญญาณไปยังระบบ...
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row gy-4">
          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="#" class="thumb d-block"><img src="assets/img/services/Healtcare.png" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">ผู้ดูแลระบบ</a> •
                  <span class="date">พฤศจิกายน 23, 2023</span>
                </div>
                <h3><a href="#">ระบบดูแล และเก็บค่าสุขภาพทางไกล</a></h3>
                <p>
                  Far far away, behind the word mountains, far from the countries
                  Vokalia and Consonantia, there live the blind texts.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
              <a href="#" class="thumb d-block"><img src="assets/img/services/devicecare.png" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">ผู้ดูแลระบบ</a> •
                  <span class="date">พฤศจิกายน 23, 2023</span>
                </div>
                <h3><a href="#">ชุดกระเป๋าตรวจคัดกรองค่าสุขภาพทางไกล</a></h3>
                <p>
                  Far far away, behind the word mountains, far from the countries
                  Vokalia and Consonantia, there live the blind texts.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
              <a href="#" class="thumb d-block"><img src="assets/img/services/eview1.png" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">ผู้ดูแลระบบ</a> •
                  <span class="date">พฤศจิกายน 23, 2023</span>
                </div>
                <h3><a href="#">ระบบวิเคราะห์ข้อมูลแปลผล จากการเก็บค่าข้อมูลผ่านระบบแพลตฟอร์ม</a></h3>
                <p>
                  Far far away, behind the word mountains, far from the countries
                  Vokalia and Consonantia, there live the blind texts.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section Our-service -->


    <!-- Section 3 Command  -->
    <section id="command" class="command section light-background">

      <div class="container">
        <div class="content">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
              <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
                <div class="img">
                  <img src="assets/img/img_h.jpg" alt="circle image" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
              <div class="px-3">
                <h2 class="content-title text-start">
                  ศูนย์เฝ้าระวังเหตุฉุกเฉินให้บริการ 24 ชั่วโมง
                </h2>
                <p class="lead">
                  บริการระบบเฝ้าระวังและแจ้งเตือนเหตุการณ์ตลอด 24 ชั่วโมง ติดตามสถานการณ์และบันทึกการตรวจสอบเหตุการณ์ผ่านระบบ
                </p>
                <p class="mb-5">
                  เมื่อได้รับการแจ้งเตือนขอความช่วยเหลือ ระบบ 24/7 Care Center จะระบุตำแหน่งที่ชัดเจนไม่ว่าจะผังภายในที่พักอาศัยหรือพิกัด GPS และแสดงข้อมูลรายละเอียดของผู้ที่ขอความช่วยเหลือมายัง หน้า Dashboard ในห้อง 24/7 Care Center
                </p>
                <p>
                  <a href="#" class="btn-get-started">Get Started</a>
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /Section 3 Command  -->


    <!--  Section Process -->
    <section id="process" class="process section">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-4 order-lg-2">
            <h1 class="mb-4" data-aos="fade-up">
              หลักการทำงานของระบบ
            </h1>
            <p data-aos="fade-up">
              1. ส่งสัญญาณขอความช่วยเหลือ (กดปุ่ม/พลัดตกหกล้ม) <br>
              2. ระบบแสดงข้อมูลผู้ขอความช่วยเหลือ<br>
              3. เจ้าหน้าที่ให้การช่วยเหลือ<br>
            </p>
            <p class="mt-5" data-aos="fade-up">
              <a href="#" class="btn btn-get-started">Get Started</a>
            </p>
          </div>
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-1" data-aos="fade-up" data-aos-delay="400">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/carecare.png" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /Section Process -->

    <!-- Section goods-device -->
    <section id="goods-device" class="goods-device section">

      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/goods.png" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">
            <h1 class="mb-4" data-aos="fade-up">
              จุดเด่นของอุปกรณ์
            </h1>
            <p data-aos="fade-up">
              1. ปุ่ม SOS ตรงกลางง่ายต่อการกด ใช้งานการขอความช่วยเหลือ(SOS) <br>
              2. ขนาดกระทัดรัด ง่ายต่อการพกพา<br>
              3. มีหลากหลายสีให้เลือกใช้ แล้วแต่ความชอบของผู้ใช้งาน เช่น สีดำ น้ำเงิน ชมพู เขียว<br>
              4. เป็นอุปกรณ์ที่สามารถสื่อสารได้แบบ 2 ช่องทาง โต้ตอบกับปลายทางได้<br>
              5. วิธีการสวมใส่หลายแบบ เช่น แบบห้อยคอ พวงกุญแจ คลิปหนีบเข็มขัด สายรัดข้อมือ
            </p>
            <p class="mt-5" data-aos="fade-up">
              <a href="#" class="btn btn-get-started">Get Started</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /About Section -->


    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center">

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up">
              <div class="services-icon">
                <i class="bi bi-bullseye"></i>
              </div>
              <div>
                <h3>ศูนย์เฝ้าระวังเหตุฉุกเฉิน ดูแลตลอด 24 ชั่วโมง </h3>
                <p>ทีมให้บริการดูแลเฝ้าระเหตุฉุกเฉิน และให้การดูแลตลอด 24 ชั่วโมง...</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="100">
              <div class="services-icon">
                <i class="bi bi-command"></i>
              </div>
              <div>
                <h3>ระบบเฝ้าระวังเหตุฉุกเฉิน และอุปกรณ์ตรวจสอบการล้มและกดขอความช่วยเหลือ</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="200">
              <div class="services-icon">
                <i class="bi bi-bar-chart"></i>
              </div>
              <div>
                <h3>ระบบเก็บค่าสุขภาพ และชุดกระเป๋าเก็บค่าสุขภาพอัติโนมัติผ่านอุปกรณ์ตรวค่าสุขภาพ</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up">
              <div class="services-icon">
                <i class="bi bi-bullseye"></i>
              </div>
              <div>
                <h3>ศูนย์เฝ้าระวังเหตุฉุกเฉิน ดูแลตลอด 24 ชั่วโมง </h3>
                <p>ทีมให้บริการดูแลเฝ้าระเหตุฉุกเฉิน และให้การดูแลตลอด 24 ชั่วโมง...</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="100">
              <div class="services-icon">
                <i class="bi bi-command"></i>
              </div>
              <div>
                <h3>ระบบเฝ้าระวังเหตุฉุกเฉิน และอุปกรณ์ตรวจสอบการล้มและกดขอความช่วยเหลือ</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="200">
              <div class="services-icon">
                <i class="bi bi-bar-chart"></i>
              </div>
              <div>
                <h3>ระบบเก็บค่าสุขภาพ และชุดกระเป๋าเก็บค่าสุขภาพอัติโนมัติผ่านอุปกรณ์ตรวค่าสุขภาพ</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="100">
              <div class="services-icon">
                <i class="bi bi-command"></i>
              </div>
              <div>
                <h3>ระบบเฝ้าระวังเหตุฉุกเฉิน และอุปกรณ์ตรวจสอบการล้มและกดขอความช่วยเหลือ</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="200">
              <div class="services-icon">
                <i class="bi bi-bar-chart"></i>
              </div>
              <div>
                <h3>ระบบเก็บค่าสุขภาพ และชุดกระเป๋าเก็บค่าสุขภาพอัติโนมัติผ่านอุปกรณ์ตรวค่าสุขภาพ</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /Services Section -->


    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container">

        <div class="row gy-4 justify-content-center">

          <div class="col-lg-5">
            <div class="images-overlap">
              <img src="assets/img/img_v_1.jpg" alt="student" class="img-fluid img-1" data-aos="fade-up">
            </div>
          </div>

          <div class="col-lg-4 ps-lg-5">
            <span class="content-subtitle">Why Us</span>
            <h2 class="content-title">Far far away Behind the Word Mountains</h2>
            <p class="lead">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia.
            </p>
            <p class="mb-5">
              There live the blind texts. Separated they live in Bookmarksgrove
              right at the coast of the Semantics, a large language ocean.
            </p>
            <div class="row mb-5 count-numbers">

              <!-- Start Stats Item -->
              <div class="col-4 counter" data-aos="fade-up" data-aos-delay="100">
                <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="3919" data-purecounter-duration="1" class="purecounter number"></span>
                <span class="d-block">Coffee</span>
              </div>
              <!-- End Stats Item -->

              <!-- Start Stats Item -->
              <div class="col-4 counter" data-aos="fade-up" data-aos-delay="200">
                <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="2831" data-purecounter-duration="1" class="purecounter number"></span>
                <span class="d-block">Codes</span>
              </div>
              <!-- End Stats Item -->

              <!-- Start Stats Item -->
              <div class="col-4 counter" data-aos="fade-up" data-aos-delay="300">
                <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="1914" data-purecounter-duration="1" class="purecounter number"></span>
                <span class="d-block">Projects</span>
              </div>
              <!-- End Stats Item -->

            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- /Stats Section -->

    <!-- Tabs Section -->
    <section id="tabs" class="tabs section light-background">

      <div class="container">
        <div class="row gap-x-lg-4 justify-content-between">
          <div class="col-lg-4 js-custom-dots">
            <a href="#" class="service-item link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
              <div class="service-icon color-1 mb-4">
                <i class="bi bi-alarm"></i>
              </div>
              <!-- /.icon -->
              <div class="service-contents">
                <h3>Modern and clean design</h3>
                <p>
                  Far far away, behind the word mountains, far from the countries .
                </p>
              </div>
              <!-- /.service-contents-->
            </a>
            <!-- /.service -->

            <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="100">
              <div class="service-icon color-2 mb-4">
                <i class="bi bi-bag-check"></i>
              </div>
              <!-- /.icon -->
              <div class="service-contents">
                <h3>Sell Products</h3>
                <p>
                  Far far away, behind the word mountains, far from the countries .
                </p>
              </div>
              <!-- /.service-contents-->
            </a>
            <!-- /.service -->

            <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="200">
              <div class="service-icon color-3 mb-4">
                <i class="bi bi-briefcase"></i>
              </div>
              <!-- /.icon -->
              <div class="service-contents">
                <h3>Success Every Day</h3>
                <p>
                  Far far away, behind the word mountains, far from the countries .
                </p>
              </div>
              <!-- /.service-contents-->
            </a>
            <!-- /.service -->

            <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="300">
              <div class="service-icon color-4 mb-4">
                <i class="bi bi-easel"></i>
              </div>
              <!-- /.icon -->
              <div class="service-contents">
                <h3>Bring Ideas to Life</h3>
                <p>
                  Far far away, behind the word mountains, far from the countries .
                </p>
              </div>
              <!-- /.service-contents-->
            </a>
            <!-- /.service -->
          </div>

          <div class="col-lg-8">
            <div class="swiper init-swiper-tabs">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoHeight": true,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/img_h_1.jpg" alt="Image" class="img-fluid">
                  <div class="p-4">
                    <h3 class="text-black h5 mb-3">Modern and clean design</h3>
                    <div class="row">
                      <div class="col-lg-8">
                        <p>
                          Far far away, behind the word mountains, far from the
                          countries Vokalia and Consonantia, there live the blind
                          texts. Separated they live in Bookmarksgrove right at the
                          coast of the Semantics, a large language ocean.
                        </p>
                        <p>
                          A small river named Duden flows by their place and
                          supplies it with the necessary regelialia. It is a
                          paradisematic country, in which roasted parts of sentences
                          fly into your mouth.
                        </p>
                      </div>
                      <div class="col-lg-4">
                        <ul class="list-unstyled list-check">
                          <li>Far far away, behind the word</li>
                          <li>Far from the countries Vokalia</li>
                          <li>Separated they live in Bookmarksgrove</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_2.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_3.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_4.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Tabs Section -->

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section">

      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-md-6 col-lg-4">
            <span class="content-subtitle">Our Services</span>
            <h2 class="content-title">
              Far far away, behind the word mountains, far from the countries
              Vokalia
            </h2>
            <p class="lead">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the blind texts.
            </p>
            <p class="mb-5">
              Separated they live in Bookmarksgrove right at the coast of the
              Semantics, a large language ocean.
            </p>
            <p>
              <a href="#" class="btn btn-get-started">Get Started</a>
            </p>
          </div>
          <div class="col-md-6 col-lg-6 ps-lg-5">
            <div class="row">
              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="services-item" data-aos="fade-up" data-aos-delay="">
                  <div class="services-icon">
                    <i class="bi bi-search"></i>
                  </div>
                  <div>
                    <h3>Square</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="services-item" data-aos="fade-up" data-aos-delay="100">
                  <div class="services-icon">
                    <i class="bi bi-command"></i>
                  </div>
                  <div>
                    <h3>Technology</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="services-item" data-aos="fade-up" data-aos-delay="200">
                  <div class="services-icon">
                    <i class="bi bi-grid"></i>
                  </div>
                  <div>
                    <h3>Brilliant Ideas</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                  </div>
                </div>
              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="services-item" data-aos="fade-up" data-aos-delay="300">
                  <div class="services-icon">
                    <i class="bi bi-globe"></i>
                  </div>
                  <div>
                    <h3>Blueprint</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Services 2 Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Plans</p>
        <h2>Pricing Table</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item recommended">
              <span class="recommended-badge">Recommended</span>
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section>
    <!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Plans</p>
        <h2>Frequently Asked Questions</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12">
            <div class="custom-accordion" id="accordion-faq">
              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-1">
                    How to download and register?
                  </button>
                </h2>

                <div id="collapse-faq-1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faq">
                  <div class="accordion-body">
                    Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts. Separated
                    they live in Bookmarksgrove right at the coast of the Semantics,
                    a large language ocean.
                  </div>
                </div>
              </div>
              <!-- .accordion-item -->

              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-2" "="">
                How to create your paypal account?
              </button>
            </h2>
            <div id=" collapse-faq-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faq">
                    <div class="accordion-body">
                      A small river named Duden flows by their place and supplies it
                      with the necessary regelialia. It is a paradisematic country, in
                      which roasted parts of sentences fly into your mouth.
                    </div>
              </div>
            </div>
            <!-- .accordion-item -->

            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-3">
                  How to link your paypal and bank account?
                </button>
              </h2>

              <div id="collapse-faq-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faq">
                <div class="accordion-body">
                  When she reached the first hills of the Italic Mountains, she
                  had a last view back on the skyline of her hometown
                  Bookmarksgrove, the headline of Alphabet Village and the subline
                  of her own road, the Line Lane. Pityful a rethoric question ran
                  over her cheek, then she continued her way.
                </div>
              </div>
            </div>
            <!-- .accordion-item -->

          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- /Faq Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Happy Customers</p>
        <h2>Testimonials</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-1.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Adam Aderson</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-2.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Lukas Devlin</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-3.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Kayla Bryant</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Testimonials Section -->

  </main>

  <?php include 'includes/footer.php'; ?>

</body>

</html>