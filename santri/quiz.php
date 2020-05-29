<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HafizQuran</title>
  <link rel="stylesheet" href="../css/quiz.css" />
</head>

<body>
  <?php require "santrinavbar.php" ?>
  <div class="confirm">
    <h1>Memorization Quiz</h1>
    <p>Quiz | 5 pertanyaan</p>

    <div class="centered">
      <a href="../index.html"><button class="primary-btn false">Tidak</button></a>
      <button class="mainkan primary-btn">Main</button>
    </div>
  </div>
  <main id="quiz">
    <!-- kalo jawabannya benar tampilkan yang ini -->
    <div class="benar" style="display: none;">
      <span class="iconify" data-inline="false" data-icon="bi:check-box"></span>
      <strong>Jawaban Anda Benar</strong>
      <p class="text">Jawaban :</p>
      <p class="ayat">
        اَلَآ اِنَّهُمْ هُمُ الْمُفْسِدُوْنَ وَلٰكِنْ لَّا يَشْعُرُوْنَ
      </p>
    </div>

    <!-- Kalo jawabannya salah tampilin yang ini -->
    <div class="salah" style="display: none;">
      <span class="iconify" data-inline="false" data-icon="fa-solid:times-circle"></span>
      <strong>Jawaban Anda Belum Benar</strong>
      <p class="text">Jawaban :</p>
      <p class="ayat">
        اَلَآ اِنَّهُمْ هُمُ الْمُفْسِدُوْنَ وَلٰكِنْ لَّا يَشْعُرُوْنَ
      </p>
    </div>

    <div class="soal">
      <p class class="no-soal">Pertanyaan 1</p>
      <h3 class="bunyi-soal">Lanjutkan Ayat dibawah ini :</h3>

      <p class="ayat soal">
        وَاِذَا قِيْلَ لَهُمْ لَا تُفْسِدُوْا فِى الْاَرْضِۙ قَالُوْٓا
        اِنَّمَا نَحْنُ مُصْلِحُوْنَ
      </p>

      <!-- saya gak tau apakah perlu pake form jadi saya taruh aja formnya -->
      <form action="">
        <label class="container ayat">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ
          <input type="radio" checked="checked" name="radio" />
          <span class="checkmark"></span>
        </label>
        <label class="container ayat">وَالَّذِيْنَ يُؤْمِنُوْنَ بِمَآ اُنْزِلَ اِلَيْكَ وَمَآ
          اُنْزِلَ
          مِنْ قَبْلِكَ ۚ وَبِالْاٰخِرَةِ هُمْ يُوْقِنُوْنَۗ
          <input type="radio" name="radio" value="1" />
          <span class="checkmark"></span>
        </label>
        <label class="container ayat" value="2">يُخٰدِعُوْنَ اللّٰهَ وَالَّذِيْنَ اٰمَنُوْا ۚ
          وَمَا يَخْدَعُوْنَ
          اِلَّآ اَنْفُسَهُمْ وَمَا يَشْعُرُوْنَۗ
          <input type="radio" name="radio" value="3" />
          <span class="checkmark"></span>
        </label>
        <label class="container ayat">اَلَآ اِنَّهُمْ هُمُ الْمُفْسِدُوْنَ وَلٰكِنْ لَّا
          يَشْعُرُوْنَ
          <input type="radio" name="radio" value="4" />
          <span class="checkmark"></span>
        </label>
        <button class="primary-btn cek" value="4">
          Cek Jawaban
        </button>
      </form>
    </div>
  </main>

  <footer>
    <p>Pertanyaan 1 dari 10</p>
    <a href=""><button class="primary-btn" style="width: 120px;">Lanjut</button></a>
  </footer>

  <script src="./js/script.js" defer></script>
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>
    //ini cuma script javascript buat coba2 nanti pas demo
    const main = document.querySelector(".mainkan");
    const btn = document.querySelector(".cek");
    const quiz = document.querySelector("#quiz");
    const input = document.querySelectorAll("input");

    main.addEventListener("click", () => {
      document.querySelector(".confirm").style.display = "none";
      quiz.style.display = "block";
      document.querySelector("footer").style.display = "flex";
    });

    btn.addEventListener("click", (e) => {
      if (btn.value == "4") {
        document.querySelector(".benar").style.setProperty("display", "flex");
        document.querySelector(".salah").style.setProperty("display", "none");
      } else {
        document.querySelector(".salah").style.setProperty("display", "flex");
        document.querySelector(".benar").style.setProperty("display", "none");
      }
      btn.value = "2";
      for (let i = 0; i < input.length; i++) {
        input.disabled = true;
      }
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0;
      e.preventDefault();
    });
  </script>
</body>

</html>