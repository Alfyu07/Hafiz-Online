<?php
$sql = "SELECT * FROM santri";
$user = query($sql);
?>
<div class="page-container">
  <h3>Kelola Santri</h3>
  <!-- <button class="primary-btn">Tambah</button> -->

  <?php $i = 1;
  if (count($user) > 0) {
    echo '
      <table>
      <thead>
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

    foreach ($user as $santri) {
      echo "<tr>";
      echo ("<td>" . $santri['id_santri'] . "</td>");
      echo ("<td>" . $santri['name'] . "</td>");
      echo ("<td>" . $santri['gender'] . "</td>");

      echo ("<td>" . $santri['email'] . "</td>");
      echo ("<td>" . $santri['address'] . "</td>");
      echo ("<td>" . $santri['phone_number'] . "</td>");
      echo ('<td>
        <div class="menu-edit">
        	
        	<button class="hapus"><span class="iconify" data-inline="false" data-icon="bx:bxs-trash"></span></button>
        	
        	<button class="edit"><a href="admin.php?halaman=edit"><span class="iconify" data-inline="false" data-icon="bx:bx-edit"></span></a></button>
        </div>
        </td>
        ');
      echo "</tr>";

      $i++;
    }
    echo "</table>";
  } else {
    echo "<h2 class='kosong'> Data Kosong</h2>";
  }
  ?>
</div>

<script>
  document.querySelector('button.hapus').addEventListener('click', function() {
    confirm("Apakah anda yakin?")
  })
</script>