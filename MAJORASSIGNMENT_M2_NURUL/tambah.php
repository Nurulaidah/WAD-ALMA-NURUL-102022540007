<!DOCTYPE html>
<html>
<head>
    <title>Add Package - Don N Done</title>
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
    <h1>Add Package</h1>
    <form action="proses-tambah.php" method="POST">
        <label for="package_type">Package Type</label>
        <select id="package_type" name="package_type" required>
            <option value="">Choose Package</option>
            <option value="Kg">Kg</option>
            <option value="Piece">Piece</option>
            <option value="Express">Express</option>
        </select>
        <label for="price">Price List (Rp)</label>
        <input type="number" id="price" name="price" min="1" placeholder="Example: 7000" required>
        <label for="time_estimate">Time Estimate</label>
        <input type="text" id="time_estimate" name="time_estimate" placeholder="Example: 2 days" required>
        <button type="submit">Save</button>
        <a class="cancel" href="index.php">Cancel</a>
    </form>
</main>
</body>
</html>
