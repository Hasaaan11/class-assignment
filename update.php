<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>

    <style>
        /*  */

        #blocke{
            style
        }
        h1 {
            text-align: center;
            color: #333;
            font-size: 36px;
            margin-bottom: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-width: 100%;
            box-sizing: border-box;
            margin: 0 auto; /* Center the form */
        }
        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="body {.css">
</head>

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
<body>

<h1 style>UPDATE PRODUCT</h1>
<?php
    
    $up = $_GET['id'];

    $db = mysqli_connect("localhost", "root", "", "project", 3307);

    $row = mysqli_query($db, "SELECT * from data where id='$up'");

    $singlerow = mysqli_fetch_assoc($row);

    
    $id = $singlerow['id'];
    
    
$name = isset($_POST['name']) ? $_POST['name'] : ''; 
$price = isset($_POST['price']) ? $_POST['price'] : '';
$code = isset($_POST['code']) ? $_POST['code'] : '';
$stock = isset($_POST['instock']) ? $_POST['instock'] : '';
$disc = isset($_POST['discount']) ? $_POST['discount'] : '';
$size = isset($_POST['sizes']) ? $_POST['sizes'] : '';
$det = isset($_POST['details']) ? $_POST['details'] : '';
$img = isset($_FILES['picture']['name']) ? $_FILES['picture']['name'] : '';


    if (!empty($img)) {
        $target_dir = "uploads/";
        $path = $target_dir . basename($_FILES["picture"]["name"]);
        move_uploaded_file($_FILES["picture"]["tmp_name"], $path);
        
    } else {
        
        $img = $singlerow['picture'];
    }

    if (isset($_POST['SEND'])) {

if($stock=='Y'){
    $stock="1";

}

        
        $query4 = "UPDATE data SET name='$name', price='$price', code='$code', instock='$stock', discount='$disc', sizes='$size', details='$det', picture='$img' WHERE id='$up'";
        $update = mysqli_query($db, $query4);
        if ($update) {            
            header("Location: view.php" );
            echo "Record updated";
        } else {
            echo "Record not updated";
        }
    }
    ?>

<form action="" method="POST" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $singlerow['name']; ?>" required><br>

    <label for="price">Price:</label>
    <input type="text" name="price" value="<?php echo $singlerow['price']; ?>" required><br>

    <label for="code">Code:</label>
    <input type="text" name="code" value="<?php echo $singlerow['code']; ?>" required><br>

    <label for="instock">In Stock (Yes/No):</label>
    <input type="text" name="instock" value="<?php echo $singlerow['instock']; ?>" required><br>
    <label for="discount">Discount:</label>
    <input type="text" name="discount" value="<?php echo $singlerow['discount']; ?>" required><br>

    <label for="sizes">Sizes:</label>
    <input type="text" name="sizes" value="<?php echo $singlerow['sizes']; ?>" required><br>

    <label for="details">Details:</label>
    <textarea name="details" required><?php echo $singlerow['details']; ?></textarea><br>

    <label for="picture">Picture:</label>
    <div id="blocke">
    <input type="file" name="picture"><img src="11.jpg" height="30px" width="30px"> <br>
    </div>
    <input type="submit" name="SEND" value="Update">
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