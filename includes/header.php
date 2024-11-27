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
        <li class="dropdown">
          <a href="services.php?lang=<?php echo $lang; ?>" class="<?php echo $current_page == 'services.php' ? 'active' : ''; ?>">
            <span><?php echo $translations['services']; ?></span>
            <i class="bi bi-chevron-down toggle-dropdown"></i>
          </a>
          <ul>
            <li>
              <a href="emergency.php?lang=<?php echo $lang; ?>">
                <i class="bi bi-shield-exclamation me-2"></i>Emergency
              </a>
            </li>
            <li>
              <a href="healthcare.php?lang=<?php echo $lang; ?>">
                <i class="bi bi-heart-pulse me-2"></i>Healthcare
              </a>
            </li>
            <li>
              <a href="digital-survey.php?lang=<?php echo $lang; ?>">
                <i class="bi bi-graph-up me-2"></i>Digital Survey
              </a>
            </li>
            <li>
              <a href="care-center.php?lang=<?php echo $lang; ?>">
                <i class="bi bi-building me-2"></i>Care Center
              </a>
            </li>
          </ul>
        </li>
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


<!-- เพิ่ม CSS เมนู Services  -->
<style>
  /* เพิ่ม CSS สำหรับเมนู Services */
  .navmenu .dropdown ul li a {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
  }

  .navmenu .dropdown ul li a:hover {
    background-color: rgba(52, 191, 73, 0.1);
    /* สีเขียวโปร่งใส เมื่อ hover */
    transform: translateX(5px);
  }

  .navmenu .dropdown ul li a i {
    font-size: 20px;
    color: #34bf49;
    min-width: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .navmenu .dropdown ul li a span {
    flex: 1;
  }

  .navmenu .dropdown ul li a:hover i {
    transform: scale(1.1);
    /* ขยาย icon เมื่อ hover */
  }

  /* ปรับขนาดกล่อง dropdown */
  .navmenu .dropdown ul {
    min-width: 220px;
    padding: 10px 0;
    background: #fff;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
  }
</style>
<!-- เพิ่ม CSS เมนู Services  -->