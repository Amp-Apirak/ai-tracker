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
  <link href="assets/css/emergency.css" rel="stylesheet">

</head>

<body class="index-page">

  <?php include 'includes/header.php'; ?>

  <main class="main">

    <!--  Section: section1 -->
    <section id="section1" class="section1 section">
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
                  <img src="assets/img/ems_er/emer1.png" alt="ภาพอุบัติเหตุจากการพลักตกหกล้ม" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/ems_er/emer3.png" alt="ภาพอุบัติเหตุจากการพลักตกหกล้ม" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/ems_er/emer2.png" alt="ภาพอุบัติเหตุจากการพลักตกหกล้ม" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/ems_er/emer5.png" alt="ภาพอุบัติเหตุจากการพลักตกหกล้ม" class="img-fluid">
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
    <!-- /Section: section1 -->

    <!-- Stats Section2 -->
    <section id="section2" class="section2 section light-background">
      <div class="container">
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-5">
            <div class="images-overlap">
              <img src="assets/img/aitrack.png" alt="AI Tracker" class="img-fluid img-main" data-aos="fade-up">
              <img src="assets/img/002.png" alt="Additional Image" class="img-fluid img-floating" data-aos="fade-up" data-aos-delay="200">
            </div>
          </div>

          <div class="col-lg-4 ps-lg-5">
            <h2 class="content-title">Ai Tracker</h2>
            <p class="mb-5">
              อุปกรณ์กดขอความช่วยเหลือ และตรวจจับการพลักตกหกล้ม สำหรับผู้รับบริการสวมใส่ เมื่อมีการกดขอความช่วยเหลือหรือตรวจจับการพลัดตกหกล้ม ระบบจะส่งสัญญาณขอความช่วยเหลือไปยังระบบส่วนกลาง และแอปพลิเคชันลูกหลาน
            </p>
            <p class="mb-5">
              คุณสมบัติหลัก:<br>
              1. สามารถตรวจจับการล้มได้อัตโนมัติ<br>
              2. มีปุ่ม SOS สำหรับกดขอความช่วยเหลือ<br>
              3. สามารถสื่อสารได้แบบ 2 ทาง (โต้ตอบกับปลายทางได้)
            </p>
            <p class="mb-5">
              ประโยชน์:<br>
              1. ช่วยเฝ้าระวังการพลัดตกหกล้มในผู้สูงอายุ<br>
              2. สามารถขอความช่วยเหลือได้ทันทีเมื่อเกิดเหตุฉุกเฉิน<br>
              3. ระบุตำแหน่งที่อยู่ได้ชัดเจน ทำให้เจ้าหน้าที่สามารถเข้าช่วยเหลือได้อย่างรวดเร็ว<br>
              4. มีความสะดวกในการพกพา
            </p>
            <div class="row mb-5 count-numbers">

              <!-- Start Stats Item -->
              <div class="col-4 counter" data-aos="fade-up" data-aos-delay="200">
                <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter number"></span>
                <span class="d-block">Use</span>
              </div>
              <!-- End Stats Item -->

              <!-- Start Stats Item -->
              <div class="col-4 counter" data-aos="fade-up" data-aos-delay="300">
                <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter number"></span>
                <span class="d-block">Projects</span>
              </div>
              <!-- End Stats Item -->

            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- /Stats Section2 -->

    <!--  Section: section5 -->
    <section id="section5" class="section5 section">
      <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
          <h2>ฟีเจอร์การใช้งาน</h2>
          <div class="title-underline"></div>
          <p>ระบบรองรับฟังก์ชันการทำงานที่ครอบคลุมและหลากหลาย เพื่อการดูแลผู้สูงอายุอย่างมีประสิทธิภาพ</p>
        </div>

        <div class="features-grid">
          <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up">
              <div class="feature-item">
                <div class="feature-icon">
                  <i class="bi bi-reception-4"></i>
                </div>
                <h3>4G Network</h3>
                <p>รองรับการใช้งานเครือข่าย 4G ครอบคลุมทุกพื้นที่</p>
              </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-item">
                <div class="feature-icon">
                  <i class="bi bi-feather"></i>
                </div>
                <h3>Light weight</h3>
                <p>ขนาดเล็ก น้ำหนักเพียง 40 กรัม พกพาสะดวก</p>
              </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-item">
                <div class="feature-icon">
                  <i class="bi bi-shield-check"></i>
                </div>
                <h3>SOS Alarm</h3>
                <p>ปุ่มกดขอความช่วยเหลือฉุกเฉิน ใช้งานง่าย ไม่ซับซ้อน</p>
              </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
              <div class="feature-item">
                <div class="feature-icon">
                  <i class="bi bi-volume-up"></i>
                </div>
                <h3>Thai Language Audio</h3>
                <p>แจ้งเตือนด้วยเสียงภาษาไทย เข้าใจง่าย ชัดเจน</p>
              </div>
            </div>

            <!-- Feature 5 -->
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="400">
              <div class="feature-item">
                <div class="feature-icon">
                  <i class="bi bi-person-walking"></i>
                </div>
                <h3>Fall Alarm</h3>
                <p>ระบบตรวจจับการล้มอัตโนมัติ พร้อมส่งสัญญาณแจ้งเตือน</p>
              </div>
            </div>

            <!-- Feature 5 - Fall Alarm -->
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="400">
              <div class="feature-item">
                <div class="feature-icon">
                  <i class="bi bi-exclamation-triangle"></i>
                </div>
                <h3>Fall Alarm</h3>
                <p>ระบบตรวจจับการล้มอัตโนมัติ แจ้งเตือนทันทีเมื่อตรวจพบการล้ม</p>
              </div>
            </div>

            <!-- Feature 6 - Motion Alert -->
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="500">
              <div class="feature-item special">
                <div class="feature-icon">
                  <i class="bi bi-activity"></i>
                </div>
                <h3>Motion Alert</h3>
                <p>ตั้งค่าแจ้งเตือนเมื่อไม่พบการเคลื่อนไหวตามระยะเวลาที่กำหนด</p>
              </div>
            </div>

            <!-- Feature 7 - Live Tracking -->
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="600">
              <div class="feature-item">
                <div class="feature-icon">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <h3>Live Tracking</h3>
                <p>ติดตามตำแหน่งแบบ Real-time ผ่านระบบ GPS tracking</p>
              </div>
            </div>

            <!-- Feature 8 - Two-way Calling -->
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="700">
              <div class="feature-item premium">
                <div class="feature-icon">
                  <i class="bi bi-telephone"></i>
                </div>
                <h3>Two-way Calling</h3>
                <p>โทรและรับสายอัตโนมัติ สื่อสารสองทางได้ทันที</p>
              </div>
            </div>

            <!-- Feature 9 - Battery Alert -->
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="800">
              <div class="feature-item">
                <div class="feature-icon">
                  <i class="bi bi-battery-charging"></i>
                </div>
                <h3>Battery Alert</h3>
                <p>แจ้งเตือนแบตเตอรี่ต่ำ และสถานะการชาร์จ</p>
              </div>
            </div>

            <!-- Feature 10 - Geo Fence -->
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="900">
              <div class="feature-item special">
                <div class="feature-icon">
                  <i class="bi bi-map"></i>
                </div>
                <h3>Geo Fence Alert</h3>
                <p>กำหนดขอบเขตพื้นที่ปลอดภัย แจ้งเตือนเมื่อออกนอกพื้นที่</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!--  Section: section5 -->

    <!--  Section section4 -->
    <section id="section4" class="section4 section">
      <div class="container">
        <div class="content">
          <!-- Section Title -->
          <div class="section-title text-center" data-aos="fade-up">
            <h2 class="content-title">ระบบเฝ้าระวังเหตุฉุกเฉิน</h2>
            <div class="title-underline"></div>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
              <div class="description-box" data-aos="fade-up" data-aos-delay="100">
                <p class="description-text">
                  <i class="bi bi-info-circle-fill me-2"></i>
                  ตัวอย่างเหตุการณ์จำลอง ผู้ใช้งานอุปกรณ์ AI Tracker สำหรับกดขอความช่วยเหลือไปยังศูนย์รับแจ้งเหตุของหน่วยงานในพื้นที่
                </p>
                <p class="description-text">
                  <i class="bi bi-people-fill me-2"></i>
                  เมื่อเกิดเหตุการณ์ฉุกเฉินในผู้สูงอายุเป็นผู้ป่วยติดเตียง โดยมีญาติหรือคนในครอบครัวให้การดูแล
                </p>
              </div>
            </div>
          </div>

          <div class="video-container" data-aos="fade-up" data-aos-delay="200">
            <div class="video-wrapper">
              <iframe
                src="https://drive.google.com/file/d/1Ud5bmwLtgVSI3MbZTqeIt6Th8vNAgnbN/preview"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section section4 -->

    <!--  Section: section6 -->
    <section id="section6" class="section6 section">
      <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
          <h2>การทำงานของอุปกรณ์</h2>
          <div class="title-underline"></div>
          <p>กระบวนการทำงานตั้งแต่เริ่มต้นจนจบการช่วยเหลือ</p>
        </div>

        <div class="process-timeline">
          <!-- Process Step 1 -->
          <div class="process-step" data-aos="fade-up">
            <div class="process-icon">
              <i class="bi bi-smartwatch"></i>
            </div>
            <div class="process-content">
              <h3>ผู้รับบริการ</h3>
              <p>ผู้รับบริการสวมอุปกรณ์ กดปุ่มหรือพลักตกหกล้ม อุปกรณ์จะส่งสัญญาณขอความช่วยเหลือทันที</p>
            </div>
            <div class="step-number">1</div>
          </div>

          <!-- Process Step 2 -->
          <div class="process-step" data-aos="fade-up" data-aos-delay="100">
            <div class="process-icon">
              <i class="bi bi-broadcast-pin"></i>
            </div>
            <div class="process-content">
              <h3>ส่งสัญญาณแจ้งเตือน</h3>
              <p>อุปกรณ์ส่งสัญญาณไปยังหน่วยงานที่เป็นคน Monitor เฝ้าระวังเหตุการณ์ฉุกเฉิน</p>
            </div>
            <div class="step-number">2</div>
          </div>

          <!-- Process Step 3 -->
          <div class="process-step" data-aos="fade-up" data-aos-delay="200">
            <div class="process-icon">
              <i class="bi bi-clipboard2-check"></i>
            </div>
            <div class="process-content">
              <h3>ตรวจสอบสถานการณ์</h3>
              <p>เจ้าหน้าที่รับเรื่องและกรอกข้อมูลว่าเป็นเหตุการณ์จริงหรือไม่</p>
            </div>
            <div class="step-number">3</div>
          </div>

          <!-- Process Step 4 -->
          <div class="process-step" data-aos="fade-up" data-aos-delay="300">
            <div class="process-icon">
              <i class="bi bi-send"></i>
            </div>
            <div class="process-content">
              <h3>ส่งต่อหน่วย EMS</h3>
              <p>เจ้าหน้าที่ทำการส่งเคสไปยังหน่วย EMS เพื่อเข้าพื้นที่ให้การช่วยเหลือ</p>
            </div>
            <div class="step-number">4</div>
          </div>

          <!-- Process Step 5 -->
          <div class="process-step" data-aos="fade-up" data-aos-delay="400">
            <div class="process-icon">
              <i class="bi bi-truck"></i>
            </div>
            <div class="process-content">
              <h3>เข้าช่วยเหลือ</h3>
              <p>เจ้าหน้าที่ EMS เข้าพื้นที่ เพื่อระงับเหตุการณ์ นำผู้ประสบภัยส่ง โรงพยาบาล</p>
            </div>
            <div class="step-number">5</div>
          </div>

          <!-- Process Step 6 -->
          <div class="process-step" data-aos="fade-up" data-aos-delay="500">
            <div class="process-icon">
              <i class="bi bi-heart-pulse"></i>
            </div>
            <div class="process-content">
              <h3>การรักษา</h3>
              <p>ได้รับการรักษาอย่างปลอดภัย ทันท่วงที</p>
            </div>
            <div class="step-number">6</div>
          </div>
        </div>
      </div>
    </section>
    <!--  Section: section6 -->

    <!--  Section: section3 -->
    <section id="section3" class="section3 section">
      <div class="container">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>การแบ่งกลุ่มการใช้งานอุปกรณ์</h2>
          <p>แบ่งตามลักษณะการดำรงชีวิตและความต้องการการดูแล เพื่อจัดสรรค์อุปกรณ์ และตั้งค่าระดับการตรวจจจับการพลัดตกหกล้มให้ผู้สูงอายุอย่างเหมาะสม</p>
        </div>

        <div class="row gy-4">
          <!-- ผู้รับบริการติดบ้าน -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <img src="assets/img/ep1.png" class="card-img-top" alt="ผู้รับบริการติดบ้าน">
              <div class="card-body">
                <h5 class="card-title text-center mb-3">ผู้รับบริการติดบ้าน</h5>
                <p class="card-text">
                  ผู้สูงอายุที่ดูแลตนเองได้บ้าง เดินได้รอบๆ บ้าน มีโรคประจำตัวที่ควบคุมได้ ต้องการความช่วยเหลือในบางกิจกรรม
                </p>
              </div>
            </div>
          </div>

          <!-- ผู้รับบริการติดสังคม -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <img src="assets/img/ep2.png" class="card-img-top" alt="ผู้รับบริการติดสังคม">
              <div class="card-body">
                <h5 class="card-title text-center mb-3">ผู้รับบริการติดสังคม</h5>
                <p class="card-text">
                  ผู้สูงอายุที่ช่วยเหลือตนเองได้ดี สามารถทำกิจกรรมนอกบ้านได้ มีส่วนร่วมในสังคม ต้องการระบบดูแลความปลอดภัย
                </p>
              </div>
            </div>
          </div>

          <!-- ผู้รับบริการติดเตียง -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <img src="assets/img/img_h_8.jpg" class="card-img-top" alt="ผู้รับบริการติดเตียง">
              <div class="card-body">
                <h5 class="card-title text-center mb-3">ผู้รับบริการติดเตียง</h5>
                <p class="card-text">
                  ผู้สูงอายุที่มีภาวะพึ่งพิงสูง ไม่สามารถช่วยเหลือตนเองได้ ต้องการการดูแลอย่างใกล้ชิดตลอด 24 ชั่วโมง
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /Section: section3 -->




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


  </main>

  <?php include 'includes/footer.php'; ?>

</body>

</html>