

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>

  <!-- Link ke CDN Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Link ke Font Awesome untuk ikon -->
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

    .btn-secondary {
      background-color: #ccc;
      border: none;
      padding: 8px 16px;
      font-size: 14px;
      border-radius: 50px;
      width: 100%;
      margin-top: 10px;
      color: #000;
    }

    .btn-secondary:hover {
      background-color: #999;
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

    .form-row {
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Update Data</h2>
  <form action="input_logic.php" method="POST">
    
    <!-- Form untuk 21 kolom -->
    <div class="row form-row">
      <div class="col-md-4">
        <div class="mb-3">
          <label for="SHIP" class="form-label">SHIP</label>
          <input type="text" class="form-control" id="SHIP" name="SHIP" placeholder="Masukkan Ship">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="CRUISE" class="form-label">CRUISE</label>
          <input type="text" class="form-control" id="CRUISE" name="CRUISE" placeholder="Masukkan Cruise">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="SAMPLENUM" class="form-label">SAMPLE NUM</label>
          <input type="text" class="form-control" id="SAMPLENUM" name="SAMPLENUM" placeholder="Masukkan Sample Num">
        </div>
      </div>
    </div>

    <div class="row form-row">
      <div class="col-md-4">
        <div class="mb-3">
          <label for="DEVICE" class="form-label">DEVICE</label>
          <input type="text" class="form-control" id="DEVICE" name="DEVICE" placeholder="Masukkan Device">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="SUM" class="form-label">SUM</label>
          <input type="text" class="form-control" id="SUM" name="SUM" placeholder="Masukkan Sum">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="DATE" class="form-label">DATE</label>
          <input type="date" class="form-control" id="DATE" name="DATE">
        </div>
      </div>
    </div>

    <div class="row form-row">
      
      <div class="col-md-4">
        <div class="mb-3">
          <label for="DEPTH" class="form-label">DEPTH</label>
          <input type="text" class="form-control" id="DEPTH" name="DEPTH" placeholder="Masukkan Depth">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="LENGTH" class="form-label">LENGTH</label>
          <input type="text" class="form-control" id="LENGTH" name="LENGTH" placeholder="Masukkan Length">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="LOCATION" class="form-label">LOCATION</label>
          <input type="text" class="form-control" id="LOCATION" name="LOCATION" placeholder="Masukkan Location">
        </div>
      </div>
    </div>

    <div class="row form-row">
      <div class="col-md-4">
        <div class="mb-3">
          <label for="SEDTYPE" class="form-label">SED TYPE</label>
          <input type="text" class="form-control" id="SEDTYPE" name="SEDTYPE" placeholder="Masukkan Sed Type">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="STORAGE" class="form-label">STORAGE</label>
          <input type="text" class="form-control" id="STORAGE" name="STORAGE" placeholder="Masukkan Storage">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="REMARK" class="form-label">REMARK</label>
          <input type="text" class="form-control" id="REMARK" name="REMARK" placeholder="Masukkan Remark">
        </div>
      </div>
    </div>

    <div class="row form-row">
      <div class="col-md-4">
        <div class="mb-3">
          <label for="VOL" class="form-label">VOL</label>
          <input type="text" class="form-control" id="VOL" name="VOL" placeholder="Masukkan Vol">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="LATITUDE" class="form-label">LATITUDE</label>
          <input type="text" class="form-control" id="LATITUDE" name="LATITUDE" placeholder="Masukkan Latitude">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="LONGITUDE" class="form-label">LONGITUDE</label>
          <input type="text" class="form-control" id="LONGITUDE" name="LONGITUDE" placeholder="Masukkan Longitude">
        </div>
      </div>
    </div>

    <div class="row form-row">
      
      <div class="col-md-4">
        <div class="mb-3">
          <label for="LOKASIRAK" class="form-label">LOKASI RAK</label>
          <input type="text" class="form-control" id="LOKASIRAK" name="LOKASIRAK" placeholder="Masukkan Lokasi Rak">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="FOTOSPESIMEN" class="form-label">FOTO SPESIMEN</label>
          <input type="text" class="form-control" id="FOTOSPESIMEN" name="FOTOSPESIMEN" placeholder="Masukkan Foto Spesimen">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="NOKLASIFIKASILAPORAN" class="form-label">NO KLASIFIKASI LAPORAN</label>
          <input type="text" class="form-control" id="NOKLASIFIKASILAPORAN" name="NOKLASIFIKASILAPORAN" placeholder="Masukkan No Klasifikasi">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="PETALINTASAN" class="form-label">PETA LINTASAN</label>
          <input type="text" class="form-control" id="PETALINTASAN" name="PETALINTASAN" placeholder="Masukkan Peta Lintasan">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="STATUSANALISA" class="form-label">STATUS ANALISA</label>
          <select class="form-control" id="STATUSANALISA" name="STATUSANALISA">
            <option value="">Pilih Status</option>
            <option value="pending">Pending</option>
            <option value="in_progress">In Progress</option>
            <option value="completed">Completed</option>
            <option value="rejected">Rejected</option>
          </select>
        </div>
      </div>
    </div>
        

    <!-- Tombol Submit, Reset dan Cancel -->
    <div class="form-row">
      <button type="submit" class="btn btn-primary"><i class="fas fa-save" name="simpan"></i> Save</button>
      <button type="reset" class="btn btn-secondary"><i class="fas fa-undo"></i> Reset</button>
      <a href="datatable.php" class="btn btn-cancel"><i class="fas fa-times"></i> Cancel</a>
    </div>
  </form>
</div>

<!-- Link ke CDN Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
