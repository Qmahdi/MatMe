<?php
// Include car data
include 'data/car_data.php';

// Get matriculation from user input
$matriculation = $_GET['matriculation'] ?? '';

// Check if matriculation exists in car data
if (isset($car_data[$matriculation])) {
    $car = $car_data[$matriculation];
} else {
    echo "<script>alert('Car not found!'); window.location.href = 'index.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $car['name']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1><?= $car['name']; ?></h1>
        <img src="images/<?= $car['image']; ?>" alt="<?= $car['name']; ?>">
        <p><?= $car['description']; ?></p>
        <button onclick="window.history.back()">Back</button>
    </div>
</body>
</html>
