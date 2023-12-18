<?php include "nav.php" ?>

<html>
		<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us </title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="body {.css">
		</head>
	<body>
	
    <div class="container" style="margin-bottom: -500px;">
        <h1 class="header">Contact Us</h1>

        <div id="map" class="map">
            <!-- Embed your Google Map iframe here -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12345.678901234567!2d-123.45678901234567!3d12.345678901234567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f24.444444444444!3m3!1m2!1s0x0%3A0x0!2zMTLCsDQ0JzQzLjkiTiAxMjPCsDExJzQzLjAiVw!5e0!3m2!1sen!2sus!4v1586932505833!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <div class="contact-form">
            <h2 class="subheader">Contact Form</h2>
            <form action="process_form.php" method="post">
                <input type="text" name="name" class="input-field" placeholder="Your Name" required>
                <input type="email" name="email" class="input-field" placeholder="Your Email" required>
                <textarea name="message" class="message-field" placeholder="Your Message" required></textarea>
                <button type="submit" class="submit-button">Submit</button>
            </form>
        </div>
    </div>
    
    <?php include "footer.php" ?>

	</body>
</html>