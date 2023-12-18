<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

        <style>
            /* #container{
                border: 2px solid black;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url("shirts-on-table.jpg");
            } */
            #container {
            /* border: 2px solid black; */
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: right;
            background-image: url("shirts-on-table.jpg");
            background-size: cover;  /* Cover the entire container */
            background-repeat: no-repeat;
            padding-right: 100px;
            /* filter: blur(8px);  Adjust the blur intensity */

        }
        

            form {
            /* background-color: #fff; */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-input {
            background: none;
            border: none;
            color: red;
        }

        h2 {
            color: #333;
        }







        </style>








</head>
<link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="body {.css">
<body><img src="logo.png" alt="Website Logo" width="100px"></div>
<?php
$error = "";


if (isset($_POST['insert'])) {
    $name = $_POST['myname'];
    $password = $_POST['mypassword'];

    $con = mysqli_connect('localhost', 'root', '', 'project', 3307);
    // if (!$con) {
    //     echo "Database not connected";
    // } else {
    //     echo "Database connected";
    // }

    if ($name != "" and $password != "") {
        $query = "SELECT count(*) as usercount FROM login WHERE name = '$name' AND password = '$password'";
        $row = mysqli_query($con, $query);
        $row2 = mysqli_fetch_assoc($row);
        $result = $row2['usercount'];

            if($result>0){
                header("Location:insert.php");

            }
            else {
                
                $error = "Username or password is invalid!!!";
                // $error = isset($error) ? $error : "Username or password is invalid!!!"; // Set a default value or use an empty string

                // Display error message
                // echo '<div style="color: red; margin-top: 10px;">Username or password is invalid!!!</div>';
            }
            // else{
            //     echo "username or password is invalid!!!";
            // }

    }
}
    ?>
<div class="social-icons">

        <a href="http://www.facebook.com"><i class="fab fa-facebook" ></i></a> <!-- Facebook icon -->
        <a href="http://www.Instagram.com"><i class="fab fa-instagram"></i></a> <!-- Instagram icon -->
    </div>
<nav class="navbar" style="margin-top: -15px;">

        <ul>  
			<li><a href="Home.php">Home</a></li>
                <div class="dropdown">
                    <button class="dropbtn">Products</button>
                    <div class="dropdown-content">
                      <a href="tshirs.html">T-shirts</a>
                      <a href="hoodies.html">Hoodies</a>
                      <a href="fullsleves.html">Full Sleeves Tees</a>
                    </div>
                  </div>
            </li>
            <li><a href="About page.html">About</a></li>
            <li><a href="Contact.html">Contact</a></li>
            <li><a href="login.php">login</a></li>
        </ul>
    </nav>
    <div id="container">
    
    <!-- <h2> login </h2> -->
<form method="post">
        <input type="text" name="myname" placeholder= "Enter your name"> 
         <input type="password" name="mypassword" placeholder= "Enter your password"> 
        <input type="submit" value="login" name="insert">
        <input type="text" value=" <?php echo $error; ?>" class="error-input" readonly >
        
          
      </form>
    </div>

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
                <li><a href="Home.html">Home</a></li>


                <div class="dropdown">   <!-- dropdown for product in quick links at footer -->
                    <button class="dropbtn">Products</button>
                    <div class="dropdown-content" style="background-color: black;">
                      <a href="tshirs.html">T-shirts</a>
                      <a href="hoodies.html">Hoodies</a>
                      <a href="fullsleves.html">Full Sleeves Tees</a>
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




      
