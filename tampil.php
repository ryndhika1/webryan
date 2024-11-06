<?php
  include "koneksi2.php";

  $query = mysqli_query($koneksi2, "select * from tampilkece");
  while($data = mysqli_fetch_array($query)){
    echo $data["nama"];
    echo $data["id"];
    echo "<hr />";
  }
  ?>