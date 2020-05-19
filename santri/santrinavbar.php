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
          <li><a href="./hafal-quran.php">Tahfiz</a></li>
          <li><a href="./quiz.php">Memorization Quiz</a></li>
          <li><a href="../list-artikel.php">Event</a></li>
          <li><a href="../list-artikel.php">Artikel </a></li>

          <li>
            <div class="dropdown">
              <img src="../Asset/img/pp.jpeg" alt="" class="dropbtn">
              <i class="fa fa-caret-down"></i>
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
