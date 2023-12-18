<?php include "nav.php" ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            text-align: center;
        }

        #video {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        #videointernal {
            width: 100%;
        }

        .content {
            padding: 20px;
            margin-bottom: -500px;
            background-color: darkgrey;
        }

        .cardiiv {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .product-card {
            margin: 10px;
            width: 300px; /* Set a fixed width or adjust as needed */
        }

        /* Additional styling for smaller screens */
        @media screen and (max-width: 767px) {
            .cardiiv {
                flex-direction: column;
            }

            .product-card {
                width: 100%;
            }
        }
    </style>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Include your custom body.css if needed -->
</head>
<body>

<header id="home">
    <h1 style="margin-top: -15px;">TEEfusion - </h1>
    <div id="video">
        <video id="videointernal" autoplay muted loop>
            <source src="videohome.mp4" type="video/mp4">
        </video>
        <div style="width: 100%;height: 60px; background-color: #bfbfbf">
            <h1 style=" padding: 10px; text-align: center;">Check Feature Articles</h1>
        </div>
    </header>

    <div class="content">
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

    </div>

    <?php include "footer.php" ?>

</body>
</html>
