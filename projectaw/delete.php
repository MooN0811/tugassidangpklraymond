<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `datapenelitian` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: datatable.php?msg=Data berhasil di hapus");
} else {
  echo "Failed: " . mysqli_error($conn);
}
