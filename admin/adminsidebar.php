<aside class="main-sidebar">
  <a href="" class="brand-title">HafizQuran</a>
  <div class="user">
    <div class="image">
      <img src="../Asset/img/pp.png" alt="">
    </div>
    <div class="info">
      <a href=""><?= $_SESSION['username'] ?></a>
    </div>
  </div>
  <div class="sidebar">
    <a href="admin.php" class="link">
      <span class="iconify" data-inline="false" data-icon="dashicons:dashboard"></span>
      Dashboard
    </a>
    <a href="admin.php?halaman=santri" class="link">
      <span class="iconify" data-inline="false" data-icon="bx:bx-customize"></span>
      Kelola Santri
    </a>
    <a href="admin.php?halaman=ustadz" class="link">
      <span class="iconify" data-inline="false" data-icon="bx:bx-customize"></span>
      Kelola Ustadz
    </a>

    <!-- bagian logout -->
    <a href="../logout.php" class="link">
      <span class="iconify" data-inline="false" data-icon="mdi:logout"></span>
      Logout
    </a>

  </div>
</aside>