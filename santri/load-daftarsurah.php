<?php
require "../functions.php";
?>
<?php
$newjuz = $_POST['newjuz'];
$sql = "SELECT * from daftarsurat inner join juz_surah on daftarsurat.suraId = juz_surah.id_surah where juz_surah.id_juz = $newjuz";
$surahQuran = query($sql);
foreach ($surahQuran as $surah) : ?>
  <label class='container'><?= $surah['surat_indonesia'] ?>
    <input type='checkbox' name='surah[]' value='<?= $surah["suraId"] ?>'> <span class="checkmark"></span></label>
<?php endforeach ?>