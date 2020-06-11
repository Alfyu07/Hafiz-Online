<?php

echo '
<header>
    <!-- Navigasi -->
    <nav class="navbar">
      <a href="index.php" class="brand-title">HafizQuran</a>
      <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
      <div class="navbar-links">
        <ul>
          <li><a href="../daftarSurah.php">Baca Quran</a></li>
          <li>
            <div class="dropdown">
              <p class="dropbtn" style="padding : 6px 30px; margin:0; font-size:18px">Event
              <i class="fa fa-caret-down"></i>
              </p>
              <div class="dropdown-content">
                <a href="./list-artikel.php">Daftar Event</a>
                <a href="./ustadz/form_artikel.php">Tulis Event</a>
              </div>
            </div>
          </li>
          <li>
            <div class="dropdown">
              <p class="dropbtn" style="padding : 6px 30px; margin:0; font-size:18px">Artikel
              <i class="fa fa-caret-down"></i>
              </p>
              <div class="dropdown-content">
                <a href="./list-artikel.php">Daftar Artikel</a>
                <a href="./ustadz/form_artikel.php">Tulis Artikel</a>
              </div>
            </div>
          </li>

          <li>
            <div class="dropdown">
              <img src="./Asset/img/pp.jpeg" alt="" class="dropbtn">
              <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content img">
                <a href="./ustadz/listhafalan.php">Riwayat Hafalan</a>
                <a href="./profile.php">Profile</a>
                <a href="logout.php">Log Out</a>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </nav>
    <!-- Akhir dari navigasi -->
  </header>';
