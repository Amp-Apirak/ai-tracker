<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About - Active Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="about-page">

  <?php include 'includes/header.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

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
                  <img src="assets/img/pit.png" alt="ภาพการดูแล" class="img-fluid">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">
            <h1 class="mb-4" data-aos="fade-up">
              ข้อมูลบริษัท
            </h1>
            <p data-aos="fade-up">
              บริษัท พอยท์ ไอที คอนซัลทิ่ง จำกัด ก่อตั้งขึ้นเมื่อปี 2545 โดยทีมผู้เชี่ยวชาญระดับมืออาชีพ จากผลงานที่ผ่านมาตลอด 21 ปี โดยได้รับความไว้วางใจจากลูกค้า ทั้งหน่วยงานการเงิน ราชการและเอกชน ในการให้บริการและที่ปรึกษางานด้านไอที งาน SmartCity เรามีบริการหลังการขายจากทีมงานบริการที่ศูนย์กลางกรุงเทพฯ และศูนย์บริการทั่วประเทศไทยกว่า 32 ศูนย์ ด้วยความยึดมั่นในคุณภาพและการตอบสนองความพึงพอใจของลูกค้า ทำให้บริษัท พอยท์ ไอที คอนซัลทิ่ง จำกัด ได้รับความไว้วางใจจากลูกค้ามาจนถึงปัจจุบัน
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: Information -->

  </main>

  <?php include 'includes/footer.php'; ?>

</body>

</html>