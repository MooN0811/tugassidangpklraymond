<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DataTable Bootstrap 5</title>
  <!-- Link ke CSS Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Link ke CSS DataTables -->
  <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
  <!-- Link ke FontAwesome untuk ikon -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <style>
    /* Menambahkan beberapa style untuk tabel dan konten */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f6f9;
    }

    /* Container utama */
    .container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    h2 {
      font-size: 28px;
      color: #333;
      font-weight: bold;
      margin-bottom: 20px;
    }

    /* Styling untuk tombol-tombol */
    .btn-custom {
      background-color: #007bff;
      color: #fff;
    }

    .btn-custom:hover {
      background-color: #0056b3;
      color: #fff;
    }

    .logout-btn {
      background-color: #dc3545;
      color: white;
    }

    /* Styling untuk tabel */
    .table {
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
    }

    .table th, .table td {
      padding: 12px 15px;
      text-align: center;
    }

    .table thead {
      background-color: #007bff;
      color: white;
    }

    .table tbody tr:nth-child(odd) {
      background-color: #f9f9f9;
    }

    .table tbody tr:hover {
      background-color: #f1f1f1;
    }

    /* Mengatur ukuran gambar foto spesimen */
    .table img {
      max-width: 60px;
      max-height: 60px;
      border-radius: 5px;
    }

    .dataTables_filter {
      margin-bottom: 20px; /* Sesuaikan jaraknya sesuai kebutuhan */
    }

    /* Alert box */
    .alert {
      border-radius: 8px;
    }

    /* Tombol untuk aksi seperti Edit dan Delete */
    .btn-sm {
      padding: 5px 10px;
      font-size: 12px;
    }

    /* Flexbox untuk elemen judul dan tombol logout */
    .d-flex {
      display: flex;
      justify-content: space-between; /* Spasi antara judul dan tombol logout */
      align-items: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <div class="container my-5">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    <!-- Container Flex untuk judul dan tombol logout -->
    <div class="d-flex">
      <h2>APLIKASI ARSIP</h2>
      <a href="logout.php" class="btn logout-btn"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
    </div>

    <!-- Tombol untuk menambah data -->
    <a href="add-new.php" class="btn btn-custom mb-3"><i class="fas fa-plus me-2"></i> Tambah Data</a>

    <!-- Tabel dengan scroll vertikal dan horizontal -->
    <div class="table-responsive">
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>NO</th>
            <th>SHIP</th>
            <th>CRUISE</th>
            <th>SAMPLE NUM</th>
            <th>DEVICE</th>
            <th>SUM</th>
            <th>DATE</th>
            <th>DEPTH</th>
            <th>LENGTH</th>
            <th>LOCATION</th>
            <th>SED TYPE</th>
            <th>STORAGE</th>
            <th>REMARK</th>
            <th>VOL</th>
            <th>LATITUDE</th>
            <th>LONGITUDE</th>
            <th>LOKASI RAK</th>
            <th>FOTO SPESIMEN</th>
            <th>NO KLASIFIKASI LAPORAN</th>
            <th>PETA LINTASAN</th>
            <th>STATUS ANALISA</th>
            <th>ACTIONS</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM `datapenelitian`";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td><?php echo $row["id"]; ?></td>
              <td><?php echo $row["SHIP"]; ?></td>
              <td><?php echo $row["CRUISE"]; ?></td>
              <td><?php echo $row["SAMPLE_NUM"]; ?></td>
              <td><?php echo $row["DEVICE"]; ?></td>
              <td><?php echo $row["SUM"]; ?></td>
              <td><?php echo $row["DATE"]; ?></td>
              <td><?php echo $row["DEPTH"]; ?></td>
              <td><?php echo $row["LENGTH"]; ?></td>
              <td><?php echo $row["LOCATION"]; ?></td>
              <td><?php echo $row["SED_TYPE"]; ?></td>
              <td><?php echo $row["STORAGE"]; ?></td>
              <td><?php echo $row["REMARK"]; ?></td>
              <td><?php echo $row["VOL"]; ?></td>
              <td><?php echo $row["LATITUDE"]; ?></td>
              <td><?php echo $row["LONGITUDE"]; ?></td>
              <td><?php echo $row["LOKASI_RAK"]; ?></td>
              <td><img src="<?php echo $row["FOTO_SPESIMEN"]; ?>" alt="foto spesimen"></td>
              <td><?php echo $row["NO_KLASIFIKASI_LAPORAN"]; ?></td>
              <td><?php echo $row["PETA_LINTASAN"]; ?></td>
              <td><?php echo $row["STATUS_ANALISA"]; ?></td>
              <td>
                <a href="edit.php?id=<?php echo $row["id"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                <a href="delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- JS Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- JS jQuery (DataTables membutuhkan jQuery) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- JS DataTables -->
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  
  <!-- Inisialisasi DataTables -->
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        "scrollX": true, // Enable horizontal scroll
        "scrollY": "400px", // Enable vertical scroll
        "paging": true, // Enable pagination
        "searching": true, // Enable search
        "info": true, // Enable table info
      });
    });
  </script>

</body>
</html>
