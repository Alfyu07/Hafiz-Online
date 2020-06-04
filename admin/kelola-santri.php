<?php
$sql = "SELECT * FROM santri";
$user = query($sql);
?>
<div class="page-container">
  <h3>Kelola Santri</h3>
  <button class="primary-btn">Tambah</button>
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Edit</th>
      </tr>

      <?php $i = 1;
      foreach ($user as $santri) {
        echo "<tr>";
        echo ("<td>" . $i . "</td>");
        echo ("<td>" . $santri['name'] . "</td>");
        echo ("<td>" . $santri['gender'] . "</td>");

        echo ("<td>" . $santri['email'] . "</td>");
        echo ("<td>" . $santri['phone_number'] . "</td>");
        echo ("<td>" . $santri['address'] . "</td>");
        echo ('<td class="menu-edit">
        <button class="hapus"><span class="iconify" data-inline="false" data-icon="bx:bxs-trash"></span></button>
        
        <button class="edit"><a href="./editsantri.php"><span class="iconify" data-inline="false" data-icon="bx:bx-edit"></span></a></button>
        </td>
        ');
        echo "</tr>";

        $i++;
      } ?>
    </thead>
  </table>
</div>