<?php
$lang = $_GET['lang'] ?? 'en'; // ตั้งค่าเริ่มต้นเป็น EN

// โหลดไฟล์ภาษาตามที่เลือก
$translations = include __DIR__ . "/../lang/lang_{$lang}.php";

// ตรวจสอบไฟล์ปัจจุบัน
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index.php?lang=<?php echo $lang; ?>" class="logo d-flex align-items-center">
      <h1 class="sitename">P-Care</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="index.php?lang=<?php echo $lang; ?>" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>"><?php echo $translations['home']; ?></a></li>
        <li><a href="about.php?lang=<?php echo $lang; ?>" class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>"><?php echo $translations['about']; ?></a></li>
        <li><a href="services.php?lang=<?php echo $lang; ?>" class="<?php echo $current_page == 'services.php' ? 'active' : ''; ?>"><?php echo $translations['services']; ?></a></li>
        <li><a href="portfolio.php?lang=<?php echo $lang; ?>" class="<?php echo $current_page == 'portfolio.php' ? 'active' : ''; ?>"><?php echo $translations['portfolio']; ?></a></li>
        <li><a href="team.php?lang=<?php echo $lang; ?>" class="<?php echo $current_page == 'team.php' ? 'active' : ''; ?>"><?php echo $translations['team']; ?></a></li>
        <li><a href="blog.php?lang=<?php echo $lang; ?>" class="<?php echo $current_page == 'blog.php' ? 'active' : ''; ?>"><?php echo $translations['blog']; ?></a></li>
        <li class="dropdown">
          <a href="#"><span><?php echo $translations['language']; ?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="?lang=th">TH</a></li>
            <li><a href="?lang=en">EN</a></li>
          </ul>
        </li>
        <li><a href="contact.php?lang=<?php echo $lang; ?>" class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>"><?php echo $translations['contact']; ?></a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>
</header>