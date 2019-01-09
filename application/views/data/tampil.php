

  <html>
  <head>
  <style>
  table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>

  </head>
  <body>
    <h2>Pelajar</h2>
    
  <table>
    <tr>
      <th><input type="Checkbox"></th>
      <th>No Pelajar</th>
      <th>Nama Pelajar</th>
      <th>Jenis Kelamin</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Alamat</th>
    </tr>
    <?php foreach ($bio as $bio_item) { ?>
    <tr>
      <td><input type="Checkbox"></td>
      <td><?php echo $bio_item['student_no']; ?></td>
      <td><?php echo $bio_item['student_name']; ?></td>
      <td><?php echo $bio_item['gender']; ?></td>
      <td><?php echo $bio_item['birth_place']; ?></td>
      <td><?php echo $bio_item['birth_date']; ?></td>
      <td><?php echo $bio_item['address']; ?></td>
    </tr>
    <?php } ?>
  </table><br>
  <button type="button" onclick="window.location.href='<?php echo site_url('biodata/masuk'); ?>'">Tambah</button>
  <button type="button" onclick="window.location.href='<?php echo site_url('biodata/edit/'.$bio_item['student_no']); ?>'">Ubah</button>
  <button type="button" onclick="window.location.href='<?php echo site_url('biodata/masuk'); ?>'">Hapus</button>
  </body>
  </html>
