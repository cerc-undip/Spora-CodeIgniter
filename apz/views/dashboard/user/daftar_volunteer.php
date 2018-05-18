<!DOCTYPE html>
<html>
<head>
  <title>Daftar Menjadi Volunteer SPORA</title>
  <meta charset="utf-8">
</head>
<body>

<?php
if($message){
  // jika sudah berhasil mendaftar
  echo $message;
} else {
?>

<h1>Daftar Menjadi Volunteer Spora</h1>

<form action="<?= site_url('dashboard/daftar-volunteer'); ?>" method="post">
  <label>No. KTP</label>
  <input type="text" name="no_ktp"><br>

  <label>No. Telp</label>
  <input type="text" name="telp"><br>

  <label>Provinsi</label>
  <input type="text" name="prov"><br>

  <label>Kabupaten</label>
  <input type="text" name="kab"><br>

  <label>Kecamatan</label>
  <input type="text" name="kec"><br>

  <label>Jalan</label>
  <input type="text" name="jalan"><br>

  <label>Saya mendaftar</label>
  <select name="status">
    <option value="S">Publisher</option>
    <option value="T">Trainer</option>
    <option value="D">Keduanya</option>
  </select><br>

  <input type="submit" name="daftar" value="Daftar">
</form>

<?php } ?>

</body>
</html>