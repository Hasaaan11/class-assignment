<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="body {.css">
</head>
<style>
    h1 {
            text-align: center;
            color: #333;
            font-size: 36px;
            margin-bottom: 20px;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100%;
            height: auto;
        }
        .btn-update,
    .btn-delete {
        display: inline-block;
        padding: 8px 16px;
        margin: 5px;
        text-align: center;
        text-decoration: none;
        background-color: #4CAF50; /* Green */
        color: white;
        border: 1px solid #4CAF50;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-update:hover,
    .btn-delete:hover {
        background-color: white;
        color: black;
    }
        </style>
<body><img src="logo.png" alt="Website Logo" width="100px"></div>
<div class="social-icons">

<a href="http://www.facebook.com"><i class="fab fa-facebook" ></i></a> <!-- Facebook icon -->
<a href="http://www.Instagram.com"><i class="fab fa-instagram"></i></a> <!-- Instagram icon -->
</div>
<nav class="navbar" style="margin-top: -15px;">

<ul>  
    <li><a href="Home.php">Home</a></li></li>  
    <li><a href="Add.php" onclick="">Add Product </a></li>    
    <li><a href="view.php">View Product</a></li>    
    <li><a href="Home.php">logout</a></li>
</ul>
</nav>
<h1 style>VIEW ALL PRODUCTS DETAILS</h1>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'project', 3307);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the database
$sql = "SELECT * FROM data";
$result = mysqli_query($conn, $sql);

// Check if there are any records
if (mysqli_num_rows($result) > 0) {
    // Output the table structure
    echo '<table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Code</th>
                <th>In Stock</th>
                <th>Discount</th>
                <th>Sizes</th>
                <th>Details</th>
                <th>Picture</th>
                <th>Action</th>
            </tr>';

    // Output data from each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['price'] . '</td>
                <td>' . $row['code'] . '</td>
                <td>' . $row['instock'] . '</td>
                <td>' . $row['discount'] . '</td>
                <td>' . $row['sizes'] . '</td>
                <td>' . $row['details'] . '</td>
                <td><img src="' . $row['picture'] . '"  width="70" height="85"></td>
                <td>
                    <a href="update.php?id=' . $row['id'] . '"class="btn-update">Update</a>
                    <a href="delete.php?id=' . $row['id'] . '"class="btn-update">Delete</a>
                </td>
              </tr>';
    }
    echo '</table>';
} else {
    echo "No records found";
}

// Close the database connection
mysqli_close($conn);
?>



<footer >
    <div class="footer-container">
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>contact@gmail.com</p>
            <p>Phone: +123-456-7890</p>
        </div>

        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="Home.php">Home</a></li>


                <div class="dropdown">   <!-- dropdown for product in quick links at footer -->
                    <button class="dropbtn">Products</button>
                    <div class="dropdown-content" style="background-color: black;">
                      <a href="tshirs.html">T-shirts</a>
                     
                    </div>
                  </div>
                     

                <li><a href="About page.php">About</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Follow Us</h3>
            <a href="http://www.facebook.com"><i class="fab fa-facebook" ></i></a> <!-- Facebook icon -->
            <a href="http://www.Instagram.com"><i class="fab fa-instagram"></i></a> <!-- Instagram icon -->
        </div>
    </div>
    <p>&copy; 2023 Your Website. All rights reserved.</p>
</footer>



</body>
</html>