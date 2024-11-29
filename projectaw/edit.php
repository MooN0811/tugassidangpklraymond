<?php
include "db_conn.php";  // Menyertakan file koneksi database

// Pastikan ID diterima dari URL
$id = $_GET["id"];

// Jika form disubmit
if (isset($_POST["submit"])) {
    // Mengambil nilai dari form
    $SHIP = $_POST['SHIP'];
    $CRUISE = $_POST['CRUISE'];
    $SAMPLE_NUM = $_POST['SAMPLE_NUM'];
    $DEVICE = $_POST['DEVICE'];
    $SUM = $_POST['SUM'];
    $DATE = $_POST['DATE'];
    $DEPTH = $_POST['DEPTH'];
    $LENGTH = $_POST['LENGTH'];
    $LOCATION = $_POST['LOCATION'];
    $SED_TYPE = $_POST['SED_TYPE'];
    $STORAGE = $_POST['STORAGE'];
    $REMARK = $_POST['REMARK'];
    $VOL = $_POST['VOL'];
    $LATITUDE = $_POST['LATITUDE'];
    $LONGITUDE = $_POST['LONGITUDE'];
    $LOKASI_RAK = $_POST['LOKASI_RAK'];
    $FOTO_SPESIMEN = $_POST['FOTO_SPESIMEN'];
    $NO_KLASIFIKASI_LAPORAN = $_POST['NO_KLASIFIKASI_LAPORAN'];
    $PETA_LINTASAN = $_POST['PETA_LINTASAN'];
    $STATUS_ANALISA = $_POST['STATUS_ANALISA'];

    // Query untuk update data berdasarkan ID
    $sql = "UPDATE `datapenelitian` SET 
        `SHIP` = '$SHIP',
        `CRUISE` = '$CRUISE',
        `SAMPLE_NUM` = '$SAMPLE_NUM',
        `DEVICE` = '$DEVICE',
        `SUM` = '$SUM',
        `DATE` = '$DATE',
        `DEPTH` = '$DEPTH',
        `LENGTH` = '$LENGTH',
        `LOCATION` = '$LOCATION',
        `SED_TYPE` = '$SED_TYPE',
        `STORAGE` = '$STORAGE',
        `REMARK` = '$REMARK',
        `VOL` = '$VOL',
        `LATITUDE` = '$LATITUDE',
        `LONGITUDE` = '$LONGITUDE',
        `LOKASI_RAK` = '$LOKASI_RAK',
        `FOTO_SPESIMEN` = '$FOTO_SPESIMEN',
        `NO_KLASIFIKASI_LAPORAN` = '$NO_KLASIFIKASI_LAPORAN',
        `PETA_LINTASAN` = '$PETA_LINTASAN',
        `STATUS_ANALISA` = '$STATUS_ANALISA'
    WHERE `id` = $id";

    // Eksekusi query
    $result = mysqli_query($conn, $sql);

    // Mengecek apakah query berhasil dijalankan
    if ($result) {
        header("Location: datatable.php?msg=Data berhasil diupdate");
        exit();
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <style>
    body {
      background-color: #f8f9fa;
      margin-top: 30px;
    }

    .container {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 1000px;
      margin: auto;
    }

    h2 {
      color: #343a40;
      margin-bottom: 20px;
      text-align: center;
    }

    .form-control {
      background-color: #fff;
      border: 1px solid #ccc;
      color: #343a40;
      border-radius: 8px;
      padding: 8px;
    }

    .form-control:focus {
      border-color: #000;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
      background-color: #000;
      border: none;
      padding: 8px 16px;
      font-size: 14px;
      border-radius: 50px;
      width: 100%;
      color: white;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #333;
    }

    .btn-cancel {
      background-color: #f44336;
      border: none;
      padding: 8px 16px;
      font-size: 14px;
      border-radius: 50px;
      width: 100%;
      color: white;
      margin-top: 10px;
      text-align: center;
    }

    .btn-cancel:hover {
      background-color: #d32f2f;
    }

    .mb-3 {
      margin-bottom: 1rem;
    }

    .form-label {
      font-size: 14px;
      color: #343a40;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Update Data</h2>
  <form method="POST">
  <div class="row form-row">
  <div class="col-md-4">
    <?php
    // Ambil data berdasarkan ID
    $sql = "SELECT * FROM `datapenelitian` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    
    <div class="mb-3">
          <label for="SHIP" class="form-label">SHIP</label>
          <input type="text" class="form-control" id="SHIP" name="SHIP" placeholder="Masukkan Ship" value="<?php echo $row['SHIP'] ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="CRUISE" class="form-label">CRUISE</label>
          <input type="text" class="form-control" id="CRUISE" name="CRUISE" placeholder="Masukkan Cruise" value="<?php echo $row['CRUISE'] ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="SAMPLENUM" class="form-label">SAMPLE NUM</label>
          <input type="text" class="form-control" id="SAMPLENUM" name="SAMPLENUM" placeholder="Masukkan Sample Num"value="<?php echo $row['SAMPLE_NUM'] ?>">
        </div>
      </div>
    </div>

    <div class="row form-row">
      <div class="col-md-4">
        <div class="mb-3">
          <label for="DEVICE" class="form-label">DEVICE</label>
          <input type="text" class="form-control" id="DEVICE" name="DEVICE" placeholder="Masukkan Device" value="<?php echo $row['DEVICE'] ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="SUM" class="form-label">SUM</label>
          <input type="text" class="form-control" id="SUM" name="SUM" placeholder="Masukkan Sum" value="<?php echo $row['SUM'] ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="DATE" class="form-label">DATE</label>
          <input type="date" class="form-control" id="DATE" name="DATE" value="<?php echo $row['DATE'] ?>">
        </div>
      </div>
    </div>

    <div class="row form-row">
      
      <div class="col-md-4">
        <div class="mb-3">
          <label for="DEPTH" class="form-label">DEPTH</label>
          <input type="text" class="form-control" id="DEPTH" name="DEPTH" placeholder="Masukkan Depth" value="<?php echo $row['DEPTH'] ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="LENGTH" class="form-label">LENGTH</label>
          <input type="text" class="form-control" id="LENGTH" name="LENGTH" placeholder="Masukkan Length" value="<?php echo $row['LENGTH'] ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="LOCATION" class="form-label">LOCATION</label>
          <input type="text" class="form-control" id="LOCATION" name="LOCATION" placeholder="Masukkan Location" value="<?php echo $row['LOCATION'] ?>">
        </div>
      </div>
    </div>

    <div class="row form-row">
      <div class="col-md-4">
        <div class="mb-3">
          <label for="SEDTYPE" class="form-label">SED TYPE</label>
          <input type="text" class="form-control" id="SEDTYPE" name="SEDTYPE" placeholder="Masukkan Sed Type" value="<?php echo $row['SED_TYPE'] ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="STORAGE" class="form-label">STORAGE</label>
          <input type="text" class="form-control" id="STORAGE" name="STORAGE" placeholder="Masukkan Storage" value="<?php echo $row['STORAGE'] ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="REMARK" class="form-label">REMARK</label>
          <input type="text" class="form-control" id="REMARK" name="REMARK" placeholder="Masukkan Remark" value="<?php echo $row['REMARK'] ?>">
        </div>
      </div>
    </div>

    <div class="row form-row">
      <div class="col-md-4">
        <div class="mb-3">
          <label for="VOL" class="form-label">VOL</label>
          <input type="text" class="form-control" id="VOL" name="VOL" placeholder="Masukkan Vol" value="<?php echo $row['VOL'] ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="LATITUDE" class="form-label">LATITUDE</label>
          <input type="text" class="form-control" id="LATITUDE" name="LATITUDE" placeholder="Masukkan Latitude" value="<?php echo $row['LATITUDE'] ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="LONGITUDE" class="form-label">LONGITUDE</label>
          <input type="text" class="form-control" id="LONGITUDE" name="LONGITUDE" placeholder="Masukkan Longitude" value="<?php echo $row['LONGITUDE'] ?>">
        </div>
      </div>
    </div>

    <div class="row form-row">
      
      <div class="col-md-4">
        <div class="mb-3">
          <label for="LOKASIRAK" class="form-label">LOKASI RAK</label>
          <input type="text" class="form-control" id="LOKASIRAK" name="LOKASIRAK" placeholder="Masukkan Lokasi Rak" value="<?php echo $row['LOKASI_RAK'] ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="FOTOSPESIMEN" class="form-label">FOTO SPESIMEN</label>
          <input type="text" class="form-control" id="FOTOSPESIMEN" name="FOTOSPESIMEN" placeholder="Masukkan Foto Spesimen" value="<?php echo $row['FOTO_SPESIMEN'] ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="NOKLASIFIKASILAPORAN" class="form-label">NO KLASIFIKASI LAPORAN</label>
          <input type="text" class="form-control" id="NOKLASIFIKASILAPORAN" name="NOKLASIFIKASILAPORAN" placeholder="Masukkan No Klasifikasi" value="<?php echo $row['NO_KLASIFIKASI_LAPORAN'] ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="PETALINTASAN" class="form-label">PETA LINTASAN</label>
          <input type="text" class="form-control" id="PETALINTASAN" name="PETALINTASAN" placeholder="Masukkan Peta Lintasan" value="<?php echo $row['PETA_LINTASAN'] ?>">
        </div>
      </div>
    <div class="col-md-4">
    <div class="mb-3">
      <label for="STATUS_ANALISA" class="form-label">STATUS ANALISA</label>
      <select class="form-control" id="STATUS_ANALISA" name="STATUS_ANALISA">
        <option value="pending" <?php echo ($row['STATUS_ANALISA'] == 'pending') ? 'selected' : ''; ?>>Pending</option>
        <option value="in_progress" <?php echo ($row['STATUS_ANALISA'] == 'in_progress') ? 'selected' : ''; ?>>In Progress</option>
        <option value="completed" <?php echo ($row['STATUS_ANALISA'] == 'completed') ? 'selected' : ''; ?>>Completed</option>
        <option value="rejected" <?php echo ($row['STATUS_ANALISA'] == 'rejected') ? 'selected' : ''; ?>>Rejected</option>
      </select>
  </div>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Update</button>
    <a href="datatable.php" class="btn btn-cancel">Cancel</a>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

