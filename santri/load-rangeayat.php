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
  <?php
  $i = 0;
  foreach ($rangeSurah as $range) : ?>
    <label for="no-ayat"><?= $range['surat_indonesia'] ?> : </label>
    <input type="text" id='no-ayat' placeholder="1- <?= $range['jumlah_ayat'] ?>">
    <?php
    if ($i == 0) echo "<p>sampai</p>";
    $i++;
    ?>
  <?php endforeach ?>
</div>