<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 10px;
}
button[type=button] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 10px;
}

input[type=submit]:hover {
  background-color: #45a049;
}
button[type=button]:hover {
  background-color: #45a049;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 10%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 50%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Pelajar - Ubah</h2>

<div class="container">
  <?php echo form_open('biodata/edit/'.$bio_item['student_no']); ?>
  <div class="row">
    <div class="col-25">
      <label>Nomor Pelajar</label>
    </div>
    <div class="col-75">
      <input type="text" name="nomor" value='<?php echo $bio_item['student_no']; ?>'>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Nama Pelajar</label>
    </div>
    <div class="col-75">
      <input type="text" name="nama" value='<?php echo $bio_item['student_name']; ?>'>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Jenis Kelamin</label>
    </div>
    <div class="col-75">
      <select name="jk" >
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Tanggal Lahir</label>
    </div>
    <div class="col-75">
      <input type="text" name="tanggal" value='<?php echo $bio_item['birth_date']; ?>'>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Tempat Lahir</label>
    </div>
    <div class="col-75">
      <input type="text" name="tempat" value='<?php echo $bio_item['birth_place']; ?>'>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Alamat</label>
    </div>
    <div class="col-75">
      <textarea name="alamat" style="height:200px"><?php echo $bio_item['address']; ?></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Update">
    <button type="button" onclick="window.location.href='<?php echo site_url('biodata/tampil'); ?>'">Kembali</button>
  </div>
  <?php echo form_close(); ?>
</div>

</body>
</html>