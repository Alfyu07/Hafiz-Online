<?php
require "../functions.php";
?>

<?php
$range = $_POST['rangesurat'];

// var_dump($range);
$min = min($range);
$max = max($range);


// echo "$min";
$sql = "SELECT surat_indonesia, jumlah_ayat from daftarsurat where suraId = $min union all SELECT surat_indonesia, jumlah_ayat from daftarsurat where suraId = $max";


$rangeSurah = query($sql);
?>
<div class="atur">
  <label for="min-ayat"><?= $rangeSurah[0]['surat_indonesia'] ?> : </label>
  <input type="text" id='min-ayat' name='min-ayat' placeholder="1- <?= $rangeSurah[0]['jumlah_ayat'] ?>">
  <p>sampai</p>
  <label for="max-ayat"><?= $rangeSurah[1]['surat_indonesia'] ?> : </label>
  <input type="text" id='max-ayat' name='max-ayat' placeholder="1- <?= $rangeSurah[1]['jumlah_ayat'] ?>">
</div>