<?php
if (isset($_POST['SEND'])) {
        $id = $_POST['pid'];
        $name = $_POST['pname'];
        $price = $_POST['pprice'];
        $code = $_POST['pcode'];
        // $stock = $_POST['Pstock'];
        $stock = ($_POST['pinstock'] == 'Y') ? true : false;
        $disc = $_POST['pdiscount'];
        $size = $_POST['psizes'];
        $det = $_POST['pdetails'];
        $img = $_FILES['Pimage']['name'];
        
    
        
        $path="uploads/" .basename($img);
        if (move_uploaded_file($_FILES['Pimage']['tmp_name'], $path)) {
            echo "File uploaded";
        } else {
            echo "File not uploaded. Error: " . $_FILES['Pimage']['error'];
        }
    

    $db = mysqli_connect("localhost", "root", "", "project",3307);

    if ($db) {
        // echo "Database Connected";
    } else {
        // echo "Database not Connected";
    }

    $query = "INSERT INTO data (id, name, price, code, instock, discount, sizes, details, picture) VALUES ('$id', '$name', '$price', '$code', '$stock', '$disc', '$size', '$det', '$img')";

    $ins = mysqli_query($db, $query);

    if ($ins) {
        // echo "Row inserted";
    } else {
        // echo "Row not inserted";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

        form {
            width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="file"] {
            margin-top: 5px;
        }

         #we {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #we:hover {
            background-color: #45a049;
        }
    </style>
</head>
<link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="body {.css">
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
<h1 style>ADD PRODUCT</h1>

<form method="POST" enctype="multipart/form-data">
    <label for="id">ID:</label>
    <input type="text" name="pid" id="id" required>

    <label for="name">Name:</label>
    <input type="text" name="pname" id="pname" required>

    <label for="price">Price:</label>
    <input type="text" name="pprice" id="price" required>

    <label for="code">Code:</label>
    <input type="text" name="pcode" id="code" required>

    <label for="instock">In Stock :</label>
    <select name="pinstock" id="instock" required>
        <option value="Y" selected>YES</option>
        <option value="N">NO</option>
    </select>

    <label for="discount">Discount:</label>
    <input type="text" name="pdiscount" id="discount">

    <label for="sizes">Sizes:</label>
    <input type="text" name="psizes" id="sizes">

    <label for="details">Details:</label>
    <textarea name="pdetails" id="pdetails" rows="4"></textarea> <br>

    Product Image: <input type="file" name="Pimage" id="Pimage"><br>

    <input type="submit" name="SEND" value="Insert" id = we></input>
</form>

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
                     

                <li><a href="About page.html">About</a></li>
                <li><a href="Contact.html">Contact</a></li>
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