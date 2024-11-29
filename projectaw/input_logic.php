<?php
include "db_conn.php";

$SHIP = $_POST ['SHIP'];
$CRUISE = $_POST ['CRUISE'];
$SAMPLE_NUM = $_POST ['SAMPLENUM'];
$DEVICE = $_POST ['DEVICE'];
$SUM = $_POST ['SUM'];
$DATE = $_POST ['DATE'];
$DEPTH = $_POST ['DEPTH'];
$LENGTH = $_POST ['LENGTH'];
$LOCATION = $_POST ['LOCATION'];
$SED_TYPE = $_POST ['SEDTYPE'];
$STORAGE = $_POST ['STORAGE'];
$REMARK = $_POST ['REMARK'];
$VOL = $_POST ['VOL'];
$LATITUDE = $_POST ['LATITUDE'];
$LONGITUDE = $_POST ['LONGITUDE'];
$LOKASI_RAK = $_POST ['LOKASIRAK'];
$FOTO_SPESIMEN = $_POST ['FOTOSPESIMEN'];
$NO_KLASIFIKASI_LAPORAN = $_POST ['NOKLASIFIKASILAPORAN'];
$PETA_LINTASAN = $_POST ['PETALINTASAN'];
$STATUS_ANALISA = $_POST ['STATUSANALISA'];

$sql = "INSERT INTO `datapenelitian`(`SHIP`, `CRUISE`, `SAMPLE_NUM`, `DEVICE`, `SUM`, `DATE`, `DEPTH`, `LENGTH`, `LOCATION`, `SED_TYPE`, `STORAGE`, `REMARK`, `VOL`, `LATITUDE`, `LONGITUDE`, `LOKASI_RAK`, `FOTO_SPESIMEN`, `NO_KLASIFIKASI_LAPORAN`, `PETA_LINTASAN`, `STATUS_ANALISA`) VALUES ('$SHIP','$CRUISE','$SAMPLE_NUM','$DEVICE','$SUM','$DATE','$DEPTH','$LENGTH','$LOCATION','$SED_TYPE','$STORAGE','$REMARK','$VOL','$LATITUDE','$LONGITUDE','$LOKASI_RAK','$FOTO_SPESIMEN','$NO_KLASIFIKASI_LAPORAN','$PETA_LINTASAN','$STATUS_ANALISA')";

$result = mysqli_query($conn, $sql);

if ($result) {
   header("Location: datatable.php?msg=Data baru berhasil di tambahkan");
} else {
   echo "Failed: " . mysqli_error($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo var_dump($_POST) ?>
</body>
</html>