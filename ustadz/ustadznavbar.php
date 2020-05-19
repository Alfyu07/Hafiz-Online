<?php

echo '
<header>
    <!-- Navigasi -->
    <nav class="navbar">
      <div class="brand-title">HafizQuran</div>
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
                <a href="../list-artikel.php">Daftar Event</a>
                <a href="./form_artikel.php">Tulis Event</a>
              </div>
            </div>
          </li>
          <li>
            <div class="dropdown">
              <p class="dropbtn" style="padding : 6px 30px; margin:0; font-size:18px">Artikel
              <i class="fa fa-caret-down"></i>
              </p>
              <div class="dropdown-content">
                <a href="../list-artikel.php">Daftar Artikel</a>
                <a href="./form_artikel.php">Tulis Artikel</a>
              </div>
            </div>
          </li>

          <li>
            <div class="dropdown">
              <img src="../Asset/img/pp.jpeg" alt="" class="dropbtn">
              <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content img">
                <a href="./listhafalan.php">Riwayat Hafalan</a>
                <a href="../profile.html">Profile</a>
                <a href="#">Log Out</a>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </nav>
    <!-- Akhir dari navigasi -->
  </header>';
