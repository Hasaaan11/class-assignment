<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$db = mysqli_connect("localhost", "root", "", "project", 3307);

if ($db) {
    $query = "SELECT * FROM data";
    $result = mysqli_query($db, $query);

    // Display product cards
    echo '<div class="cardiiv">';
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['instock'] === '1') {$row['instock'] = 'YES';
            echo '<div class="product-card">
                    <a href="details.php?product_id=' . $row['id'] . '" style="text-decoration: none;">
                        <img src="uploads/' . $row['picture'] . '" alt="' . $row['name'] . '" width="100%">
                    </a>
                    <div class="card-body" style="background: black; order-radius: 10px ; color: white">
                        <p>ID: ' . $row['id'] . '</p>
                        <p>Name: ' . $row['name'] . '</p>
                        <p>Price: $' . $row['price'] . '</p>
                        <p>Code: ' . $row['code'] . '</p>
                        <p>In Stock: ' . $row['instock'] . '</p>
                        <p>Discount: ' . $row['discount'] . '</p>
                        <p>Sizes: ' . $row['sizes'] . '</p>
                        <p>Details: ' . $row['details'] . '</p>
                    </div>
                </div>';
        }
        // else   $row['instock'] = 'NO';

    }
    echo '</div>'; // Close the cardiv

    mysqli_close($db);
}
error_reporting(E_ALL);
ini_set('display_errors', true);
?>
</body>
</html>