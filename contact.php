<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - DIGS IT Solutions</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
}

header nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

header nav ul li {
    display: inline;
    margin: 0 15px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
}

.hero {
    background-color: #f4f4f4;
    text-align: center;
    padding: 50px 0;
}

.hero h1 {
    margin: 0;
    font-size: 2.5em;
}

.contact-form, .team-contacts, .map {
    padding: 20px;
    max-width: 800px;
    margin: 0 auto;
}

.contact-form h2, .team-contacts h2, .map h2 {
    text-align: center;
    margin-bottom: 20px;
}

.contact-form form {
    display: flex;
    flex-direction: column;
}

.contact-form label {
    margin-bottom: 5px;
}

.contact-form input, .contact-form textarea {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.contact-form input[type="submit"] {
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 15px;
    border-radius: 5px;
}

.contact-form input[type="submit"]:hover {
    background-color: #555;
}

.team-member {
    background-color: #e4e4e4;
    margin-bottom: 20px;
    padding: 15px;
    border-radius: 5px;
}

.team-member h3 {
    margin-top: 0;
}

#map {
    width: 100%;
    height: 400px;
    background-color: #e4e4e4;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: absolute;
    bottom: 0;
    width: 100%;
}
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="project.php">Portfolio</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you! Reach out to us via the contact form below, or use the provided contact details to get in touch directly.</p>
        </section>

        <section class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="mailto:example@example.com" method="post" enctype="text/plain">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <input type="submit" value="Send Message">
            </form>
        </section>

        <section class="team-contacts">
            <h2>Contact Our Team</h2>
            <div class="team-member">
                <h3>Steven Mukhebi</h3>
                <p><strong>Email:</strong> steve@gmail.com</p>
                <p><strong>Phone:</strong> 0123456789</p>
                <p><strong>Address:</strong> DIGS IT Solutions, Bungoma, Kenya</p>
            </div>
            <div class="team-member">
                <h3>Ian</h3>
                <p><strong>Email:</strong> ian@gmail.com</p>
                <p><strong>Phone:</strong> 0123456789</p>
                <p><strong>Address:</strong> DIGS IT Solutions, Bungoma, Kenya</p>
            </div>
        </section>

        <section class="map">
            <h2>Our Location</h2>
            <div id="map"></div>
        </section>
    </main>

    
    <script>
        function initMap() {
            var location = {lat: -25.344, lng: 131.036};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
</body>
</html>
