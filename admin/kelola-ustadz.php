<?php
$sql = "SELECT * FROM ustadz";
$user = query($sql);
?>
<div class="page-container">
  <h3>Kelola Ustadz</h3>
  <a href="admin.php?halaman=tambah" class=" primary-btn">Tambah</a>

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
		#echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";  
		#$kata = "";
        echo "<tr>";
        echo ("<td>" . $ustadz['id_ustadz'] . "</td>");
        echo ("<td>" . $ustadz['name'] . "</td>");
        echo ("<td>" . $ustadz['gender'] . "</td>");

        echo ("<td>" . $ustadz['email'] . "</td>");
        echo ("<td>" . $ustadz['address'] . "</td>");
        echo ("<td>" . $ustadz['phone_number'] . "</td>");
        echo ('<td>');
        echo ('<div class="menu-edit">');
        	
        echo ('<button class="hapus">');
		echo ("<a href='hapusUstadz.php?id_ustadz=".$ustadz["id_ustadz"]."'>");
		echo ('<span class="iconify" data-inline="false" data-icon="bx:bxs-trash"></span>
			</a>
			</button>');
        	
        echo ('	<button class="edit">');
		echo ("	<a href='admin.php?halaman=edit.php&id_ustadz=".$ustadz["id_ustadz"]."'>");
		echo ('	<span class="iconify" data-inline="false" data-icon="bx:bx-edit"></span>
			</a>
			</button>
        </div>
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