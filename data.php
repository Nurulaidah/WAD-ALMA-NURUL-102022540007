<?php
include "koneksi.php";

$sql = "SELECT * FROM services ORDER BY id DESC";
$stmt = $conn->query($sql);
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Service Data - Don N Done</title>

    <style>
        body {
            background-color: #3368A0;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        header {
            background: #1c2b4a;
            color: white;
            padding: 16px 24px;
            text-align: center;
        }

        .brand {
            font-size: 20px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
            font-size: 14px;
        }

        .box {
            width: 90%;
            max-width: 1000px;
            background: #66A3BF;
            margin: 35px auto;
            padding: 25px;
            border-radius: 10px;
            box-sizing: border-box;
            overflow-x: auto;
        }

        h2 {
            text-align: center;
            color: #C8DFDB;
        }

        .add {
            display: inline-block;
            background: #1c2b4a;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #1c2b4a;
            padding: 12px;
            text-align: center;
        }

        th {
            background: #1c2b4a;
            color: white;
        }

        td {
            color: #1c2b4a;
        }

        .action {
            display: inline-block;
            padding: 6px 10px;
            margin: 2px;
            border-radius: 4px;
            color: white;
            text-decoration: none;
        }

        .edit {
            background: #3368A0;
        }

        .delete {
            background: #a83232;
        }
    </style>
</head>

<body>

<header>
    <p class="brand">Don N Done</p>
    <nav>
        <a href="service.php">Service &amp; Rate Module</a>
        <a href="machine2.php">Machinery &amp; Equipment Module</a>
        <a href="customer.html">Customer Data Module</a>
        <a href="cleaning.html">Cleaning Material Module</a>
    </nav>
</header>

<div class="box">
    <h2>Service &amp; Rate Data</h2>

    <a class="add" href="service.php">+ Add Service</a>

    <table>
        <tr>
            <th>No</th>
            <th>No. Seri Laundry</th>
            <th>Package Type</th>
            <th>Price (Rp)</th>
            <th>Time Estimate</th>
            <th>Action</th>
        </tr>

        <?php if (empty($services)) { ?>
            <tr>
                <td colspan="5">No service data available.</td>
            </tr>
        <?php } else { ?>

            <?php $no = 1; ?>

            <?php foreach ($services as $service) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>

                    <td>
                        <?php echo htmlspecialchars($service["serial_number"] ?? "-"); ?>
                    </td>
                    
                    <td>
                        <?php echo htmlspecialchars($service["package_type"]); ?>
                    </td>

                    <td>
                        <?php echo number_format((int)$service["price"], 0, ",", "."); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($service["time_estimate"]); ?>
                    </td>

                    <td>
                        <a class="action edit"
                           href="edit.php?id=<?php echo (int)$service["id"]; ?>">
                           Edit
                        </a>

                        <a class="action delete"
                           href="delete.php?id=<?php echo (int)$service["id"]; ?>"
                           onclick="return confirm('Delete this service?')">
                           Delete
                        </a>
                    </td>
                </tr>
            <?php } ?>

        <?php } ?>
    </table>
</div>

</body>
</html>
