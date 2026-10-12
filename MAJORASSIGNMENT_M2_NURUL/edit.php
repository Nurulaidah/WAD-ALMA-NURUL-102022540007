<?php
include "koneksi.php";

if (!isset($_GET["id"])) {
    header("Location: index.php");
    exit;
}

$id = $_GET["id"];
$stmt = $conn->prepare("SELECT * FROM services WHERE id = :id");
$stmt->execute([":id" => $id]);
$service = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$service) {
    die("Package data not found.");
}

function clean($data) {
    return htmlspecialchars((string)$data, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Package - Don N Done</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <p class="brand">Don N Done</p>
    <nav>
        <a href="index.php">Service &amp; Rate Module</a>
        <a href="machine2.php">Machinery &amp; Equipment Module</a>
        <a href="customer.html">Customer Data Module</a>
        <a href="cleaning.html">Cleaning Material Module</a>
    </nav>
</header>
<main class="form-container">
    <h1>Edit Package</h1>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo clean($service["id"]); ?>">
        <label for="package_type">Package Type</label>
        <select id="package_type" name="package_type" required>
            <option value="Kg" <?php if ($service["package_type"] == "Kg") echo "selected"; ?>>Kg</option>
            <option value="Piece" <?php if ($service["package_type"] == "Piece") echo "selected"; ?>>Piece</option>
            <option value="Express" <?php if ($service["package_type"] == "Express") echo "selected"; ?>>Express</option>
        </select>
        <label for="price">Price List (Rp)</label>
        <input type="number" id="price" name="price" min="1"
               value="<?php echo clean($service["price"]); ?>" required>
        <label for="time_estimate">Time Estimate</label>
        <input type="text" id="time_estimate" name="time_estimate"
               value="<?php echo clean($service["time_estimate"]); ?>" required>
        <button type="submit">Update</button>
        <a class="cancel" href="index.php">Cancel</a>
    </form>
</main>
</body>
</html>
