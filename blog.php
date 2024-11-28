<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blog - P-Care</title>
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
  <link href="assets/css/blog.css" rel="stylesheet">
</head>

<body class="blog-page">

  <?php include 'includes/header.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>Blog</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts 2 Section -->
    <section id="blog-posts-2" class="blog-posts-2 section">
      <div class="container">
        <div class="row gy-5">
          <div class="col-lg-4 col-md-6">
            <article>
              <div class="post-img">
                <img src="assets/img/001.jpg" alt="" class="img-fluid">
              </div>
              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><a href="blog-details.php">Sorts</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-dot"></i> <a href="blog-details.php"><time datetime="2022-01-01">Jan 1, 2022</time></a></li>
                </ul>
              </div>

              <h2 class="title">
                <a href="blog-details.php">ประเทศไทยสู่สังคมผู้สูงอายุ: ปัญหาและแนวทางรับมือ</a>
              </h2>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4 col-md-6">

            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><a href="blog-details.php">Fashion</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-dot"></i> <a href="blog-details.php"><time datetime="2022-01-01">Jan 1, 2022</time></a></li>
                </ul>
              </div>

              <h2 class="title">
                <a href="blog-details.php">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

            </article>

          </div><!-- End post list item -->

          <div class="col-lg-4 col-md-6">

            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><a href="blog-details.php">Laws</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-dot"></i> <a href="blog-details.php"><time datetime="2022-01-01">Jul 5, 2022</time></a></li>
                </ul>
              </div>

              <h2 class="title">
                <a href="blog-details.php">Possimus soluta ut id suscipit soluta</a>
              </h2>

            </article>

          </div><!-- End post list item -->

        </div><!-- End blog posts list -->

      </div>

    </section><!-- /Blog Posts 2 Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#" class="active">1</a></li>
            <!-- <li><a href="#" >2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">10</a></li> -->
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>

    </section><!-- /Blog Pagination Section -->

  </main>

  <?php include 'includes/footer.php'; ?>

</body>

</html>