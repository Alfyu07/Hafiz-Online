<?php
$sql = "SELECT * FROM ustadz";
$user = query($sql);
?>
<div class="page-container">
  <h3>Kelola Ustadz</h3>
  <button class="primary-btn">Tambah</button>
  <table>
    <?php $i = 1;
    if (count($user) > 0) {
      echo '<thead>
      <tr>
        <th>id</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Edit</th>
      </tr>
      </thead>';

      foreach ($user as $ustadz) {
        echo "<tr>";
        echo ("<td>" . $ustadz['id_ustadz'] . "</td>");
        echo ("<td>" . $ustadz['name'] . "</td>");
        echo ("<td>" . $ustadz['gender'] . "</td>");

        echo ("<td>" . $ustadz['email'] . "</td>");
        echo ("<td>" . $ustadz['address'] . "</td>");
        echo ("<td>" . $ustadz['phone_number'] . "</td>");
        echo ('<td class="menu-edit">
        <button class="hapus"><span class="iconify" data-inline="false" data-icon="bx:bxs-trash"></span></button>
        
        <button class="edit"><a href="./editsantri.php"><span class="iconify" data-inline="false" data-icon="bx:bx-edit"></span></a></button>
        </td>
        ');
        echo "</tr>";

        $i++;
      }
    } else {
      echo "<h2>Data Kosong</h2>";
    } ?>

  </table>
</div>