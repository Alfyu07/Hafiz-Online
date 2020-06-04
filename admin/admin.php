<?php
require "../functions.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/admin.css">
</head>


<body>
  <?php
  require "adminsidebar.php";
  ?>
  <div class="wrapper">
    <?php
    require "./adminnavbar.php";

    ?>
    <div class="main">

      <?php
      if ($_GET['halaman'] == 'santri') {
        require "kelola-santri.php";
      } else if ($_GET['halaman'] == 'ustadz') {
        require 'kelola-ustadz.php';
      }

      ?>

    </div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
</script>
<script src=" https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
<script>
  // let link = $(".link");

  // for (let i = 0; i < link.length; i++) {

  //   link[i].addEventListener('click', () => {
  //     let cur = document.getElementsByClassName('active');
  //     if (cur.length > 0) {
  //       cur[0].classList.remove("active");
  //     }
  //     link[i].classList.add("active");
  //   });
  // }
  $(document).ready(function() {
    $(".sidebar a").click(function() {
      var id = $(this);

      $(".active").removeClass("active");
      $(id).addClass("active");
      localStorage.setItem("selectedolditem", $(id).text());

    });

    var selectedolditem = localStorage.getItem('selectedolditem');

    if (selectedolditem !== null) {

      $("a:contains('" + selectedolditem + "')").addClass("active");
    }
  });
</script>

</html>