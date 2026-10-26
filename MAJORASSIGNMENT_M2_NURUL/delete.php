<?php
include "koneksi.php";




if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $stmt = $conn->prepare("DELETE FROM services WHERE id = :id");
    $stmt->execute([":id" => $id]);
}

header("Location: index.php");
exit;
?>
