<!DOCTYPE html>
<html>
<head>
    <title>Service & Rate - Don N Done</title>

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
            width: 400px;
            max-width: 85%;
            background-color: #66A3BF;
            margin: 50px auto;
            padding: 25px;
            border-radius: 10px;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: #C8DFDB;
        }

        label {
            display: block;
            margin-top: 15px;
            color: white;
        }

        select, input, button {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            background: #1c2b4a;
            color: white;
            border: none;
            cursor: pointer;
        }

        .view {
            display: block;
            text-align: center;
            color: white;
            margin-top: 18px;
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
    <h2>Input Your Laundry Details</h2>

    <form action="proses-tambah.php" method="POST">

        <label for="package_type">Package Type</label>
        <select name="package_type" id="package_type"
                onchange="changeDetails()" required>
            <option value="Kg">Kg</option>
            <option value="Piece">Piece</option>
            <option value="Express">Express</option>
        </select>

        <label for="price">Price List (Rp)</label>
        <input type="number" name="price" id="price"
               value="7000" min="1" readonly required>

        <label for="time_estimate">Time Estimate</label>
        <input type="text" name="time_estimate" id="time_estimate"
               value="2 days" readonly required>

        <button type="submit">Save</button>
    </form>

    <a class="view" href="data.php">View Service Table</a>
</div>

<script>
function changeDetails() {
    var packageType = document.getElementById("package_type").value;
    var price = document.getElementById("price");
    var time = document.getElementById("time_estimate");

    if (packageType === "Kg") {
        price.value = 7000;
        time.value = "2 days";
    } else if (packageType === "Piece") {
        price.value = 10000;
        time.value = "1 day";
    } else if (packageType === "Express") {
        price.value = 15000;
        time.value = "7 hours";
    }
}
</script>

</body>
</html>

